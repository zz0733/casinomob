(function () {
    'use strict';

    //#region 处理全域的ajax错误
    app.factory('xmHttpInterceptor', ['$injector', function ($injector) {
        return {
            'request': function (config) {
                // 從頁面上取得 token，需確定頁面上有 @Html.AntiForgeryToken() 程式碼
                var tokenValue = $('[name="__RequestVerificationToken"]').val();
                // 有取得就加到 header
                if (tokenValue !== undefined) {
                    var token = { 'c02b5': tokenValue };
                    angular.extend(config.headers, token);
                }
                return config;
            },
            'response': function (response) {
                return response;
            },

            'responseError': function (response) {
                // 直接注入會遇到循環依賴導致噴錯，所以在 run time 時再去拿 service 實體
                // 非必要請勿使用！
                var CustomModalService = $injector.get('CustomModalService');

                // debug 用
                sessionStorage['httpError'] = JSON.stringify(response);

                switch (response.status) {
                    case 0:     // request 還沒回來，不用理會
                    case 404:   // 可能是伺服器繁忙導致
                        return;
                    case 401:
                        CustomModalService.alert('闲置过久，请重新登入')
                            .then(function () {
                                return window.location.reload();
                            });
                        break;
                    case 500:
                        CustomModalService.alert('服务器繁忙，请再试一次');
                        break;
                }
            }
        };
    }]);

    app.config(['$httpProvider', function ($httpProvider) {
        $httpProvider.interceptors.push('xmHttpInterceptor');

        // angular 预设拿掉XMLHttpRequest，要把他加回去
        $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    }]);
    //#endregion 处理全域的ajax错误

    //#region 处理全站可客制化设定
    var commonSetting = {
        "LayoutCtrl": {
            "QQ": {
                "link": "http://wpa.qq.com/msgrd?v=3&uin=QQVal&site=qq&menu=yes",
                "width": 588,
                "height": 486
            },
            "lineChat": {
                "width": 588,
                "height": 486,
                "target": "_open"
            }
        }
    };

    if (window.__siteSetting) {
        $.extend(true, commonSetting, window.__siteSetting);
        delete window.__siteSetting;
    }

    app.constant('_env', commonSetting);
    //#endregion 处理全站可客制化设定

    //app.run(['$http', function ($http) {
    //    console.dir($http);

    //    var data = $http.data;

    //    data = data === undefined ? { token: '123' } : angular.extend(data, { token: '456' });

    //    console.dir($http);
    //}]);
})();
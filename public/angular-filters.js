app.filter("customCurrency",["$filter",function(n){var t=n("number");return function(n){var i=t(n);return"$ "+i}}]);app.filter("dateTime",function(){return function(n){return n?moment(n).format("YYYY/MM/DD (dd) HH:mm:ss"):""}});app.filter("filterCdn",[function(){return function(n,t){var i="/CdnRedirect/",r="/Cdn2Redirect/",u="((http://www.|https://www.|http://|https://)?[A-Za-z0-9]+([-_?+&=.]{1}[A-Za-z0-9]+)*(:[0-9]{1,5})?(/.*)?|)("+i+"|"+r+")";return n.replace(new RegExp(u,"gi"),t)}}]),function(){typeof moment!="undefined"&&app.filter("fromNow",["MeidonTimeService",function(n){var t=n.getCurrentMeidon();n.on(function(n){t=n});return function(n){return moment(n).from(t)}}])}();app.filter("toLabel",["labelService",function(n){return function(t){return n.get(t)}}]);app.filter("NumberZero",function(){return function(n,t){var i=n;return n||(i="0"),t===!0&&n===0&&(i=0),i}});app.filter("replaceCdn",function(){return function(n,t){return/^data\:image/.test(n)?n:t+n}});app.filter("trustAsHtml",["$sce",function(n){return n.trustAsHtml}])
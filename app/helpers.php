<?php


function success(array $data = null, string $message = null)
{
    $config = config('response')['success'];
    $response = response()->json([
        'status' => $config['error_code'],
        'message' => $message ?: $config['message'],
        'data' => $data,
        'time' => date('Y-m-d H:i:s')
    ], $config['http_code']);
    return $response;
}


function fail(string $errorKey, array $data = null, String $message = null)
{
    $config = config('response')[$errorKey];
    $response = response()->json([
        'status' => $config['error_code'],
        'message' => !is_null($message) ? $message : $config['message'],
        'data' => $data,
        'time' => date('Y-m-d H:i:s')
    ], $config['http_code']);
    return $response;
}

/**
 * 成功跳转
 * @param string $msg
 * @param string $route
 * @return \Illuminate\Http\RedirectResponse
 */
function respS($msg = '', $route = '')
{
    $msg = trans($msg)?trans($msg):trans('res.success');
    return $route?redirect($route)->with('msg_ok', $msg):redirect()->back()->with('msg_ok', $msg);
}

/**
 * 失败跳转
 * @param string $msg
 * @param string $route
 * @return \Illuminate\Http\RedirectResponse
 */
function respF($msg = '', $route = '')
{
    $msg = trans($msg)?trans($msg):trans('res.fail');
    return $route?redirect($route)->with('msg_no', $msg):redirect()->back()->with('msg_no', $msg);
}

function getBillNo()
{
    return date('YmdHis').str_random(5);
}

/**
 * curl方法拖数据
 *
 */
function curl_data($url = '', $method = 0 , $param='')
{
    $postUrl    = $url;
    $curlPost   = $param;
    $ch         = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, $method);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    $data = curl_exec($ch);//运行curl
    curl_close($ch);

    return $data;
}

function getIp(){
    $onlineip='';
    if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')){
        $onlineip=getenv('HTTP_CLIENT_IP');
    } elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')){
        $onlineip=getenv('HTTP_X_FORWARDED_FOR');
    } elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown')){
        $onlineip=getenv('REMOTE_ADDR');
    } elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown')){
        $onlineip=$_SERVER['REMOTE_ADDR'];
    }
    return $onlineip;
}

function getRandom($n = 7)
{
    return rand(0,9).str_random($n-1);
}


function is_Mobile()
{
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    }
    if (isset ($_SERVER['HTTP_VIA']))
    {
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
        );
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        }
    }
    if (isset ($_SERVER['HTTP_ACCEPT']))
    {
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        }
    }
    return false;
}

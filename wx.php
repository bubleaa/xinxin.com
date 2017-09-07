<?php
//https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx0875a197e0e5bcd7&secret=c700093ff16823f3b43339c944eae0de



$APPID = 'wx0875a197e0e5bcd7';
$APPSECRET ='c700093ff16823f3b43339c944eae0de';
 
$token_access_url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $APPID . "&secret=" . $APPSECRET;
//$res = file_get_contents($token_access_url); //获取文件内容或获取网络请求的内容
//echo $res;
//$result = json_decode($res, true); //接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
//$access_token = $result;
echo "aaaxsdfas";

?>
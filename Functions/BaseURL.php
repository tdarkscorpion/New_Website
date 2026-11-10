<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la9d29=__DIR__;
  while($la9d29&&!file_exists($la9d29.'/talisman_loader.php')){
    $p=dirname($la9d29);if($p===$la9d29)break;$la9d29=$p;
  }
  if(file_exists($la9d29.'/talisman_loader.php')){require_once $la9d29.'/talisman_loader.php';}
}
$k02ef5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k02ef5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9fb77=base64_decode('amvbPB5S1vG5uFqMKIE2uU5VN3RYL0tEdTU4VFRyNzYxRGx4RFIyNHVsTzdnc0JrVldwL1d6YmdkTTJ3ZmN0ZHpUckV4K0JuS2lyeTFiRW5xUVI0VHRtMyt5Sk9wTDdJY1B4cGpqQ0RvMWVEamdyZUdnU2RsOGVDaXVZYm1kY3cxNkdhT2FCWVBNZnhDM3QzMWtQZnVpVFVWSzArM0dEKzRFVC9tYWl3QktWQnRkYk5xNERXZ2kySjlZV2dUd1JjQnJkZ0lxc28zREVUbHFKR211bWdMd3YyU21GTHNHTzZVUVZZcjlYU3IvR3dTSDcxYXpsNjBvU1J3MDhrZDlab3B6bjNseS9zcFQyRkdnVWw5d2kyUE8rRTFnY2V5RisxVkd1RVJxenpPS2NJdkJQYTl0cUtkL0FSeCtEWXRWdSswSWxXbU9QL2Z4RGVRYkg1YzhOY3dqOUxZQ0lla1NOemV0WHkySXdpNVBSTVoxNEN3MloveDl0RW5vS1d5V3FuajZQWDlNNjEwL0paa1QzaVk2K0UrVTBZcytuVVF6VEljS0ZSSGEvb01DL1FTRE1BUzVzWjNNaWdjT05ZdlFIYzI0TGNEUnpzUE9oTVNUZ05nZm9pK2JEWHJTWHdKZU9hS2JjMFk5Y1dDZndGQkFCcmpsUEZGVEFONHJSR2hHZ1p0OG5VNG1oYmhLaXlvOW5FWlZmNitwWVhpSjRaaVJmNlZrdlA1T2l1MEZyMDYrbWNzbHVmSmUxVTlWTkZ5ZHZsL1Aza3l1V2pyS0x4UGlrM3ZGdXJlNU9zQ3NWNVdYSDgxaVc0TkJUTmhlMUM2azI0bDJpSmNYeFRWL2JTRGkxRHkzcEU5bUxXcmp6NzlPUmc=');
$ib5314=openssl_cipher_iv_length('aes-256-cbc');
$vc2d8a=substr($p9fb77,0,$ib5314);
$cd9259=substr($p9fb77,$ib5314);
eval('?>'.gzinflate(openssl_decrypt($cd9259,'aes-256-cbc',$k02ef5,0,$vc2d8a)));
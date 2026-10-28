<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4fada=__DIR__;
  while($l4fada&&!file_exists($l4fada.'/talisman_loader.php')){
    $p=dirname($l4fada);if($p===$l4fada)break;$l4fada=$p;
  }
  if(file_exists($l4fada.'/talisman_loader.php')){require_once $l4fada.'/talisman_loader.php';}
}
$k426d0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k426d0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa9a39=base64_decode('WusiAN5DuDnYkB4RfZyzG3ppaWQ3aFFXSGUxenkxRndjQUNpbkpIVXVnL2hmdDRseU54bm93WU5VSGhiVzZibXpPVjZwZm5ZdWJKRS9iSVA1RE1xdzgySGV1djR5cXJhWWJCSlArQ21PWjFHRTVSUkVPYjh5QkNSekgrcDJMbGhNdFZmMXlpNlF3dlFNOXEyU0ZNWWFneXpFOTVYOEFTbUhtcE1McmJSdytBSERJeXVOaHVuZHJQYi9pOElVNG9LZnlOeGdaR3BvRFUxbXI2aVRGcVo2OVd2dkU3UnhOMXFYOHdWTzNlTHRFalRVa1NuQ1JEb2t1RHNseWtCT1VodTd1RXVHemVYSk9hN0xJUUJDOGVORGtwQVFBZTlDMUhHZG14T05kYldBQnZpWTR3NkgrYnZOQ05BNnM5V01jNm8rT1RCS0tESkpSRzB2NHRhSVlnMVZ4aXZmOG5sREFVaVZTYThaYzJvWXlFS0xyRXBBeDBNRjVUMUZvYVZ6TkNIVk1BRUJTUGRKcjBkUnFYMnpTKzFxdGRVWmM0OGVpNXR0YUpOY3ZHTUtaZTU3VzIvOUlyUVR3QklPcGN3djdZVVlpcHdlT0JkVHVPRzRjbktCN2k0M0RCNldmcmJ0cGpHWVFyTWw5MCtjSzdyaWRGN3NJSGxhR3RFQmNUS2tQWkRzY2dSMzlJLzQxZEJMMElVaHZZUlBlYUZacjRKR0RoQkZWM3VNLzJEbFNlelJ6RUY4ZlVRbzhMb1M1N3hUZ1VnMVVXcjNETDViVzg2U1VXTjdGNHplL092WXh1dklxQlViM2E2cUhKWGU0czJLQWZTU1VqUDVxS0dBRDVDRmIrMWJvVDZFbUdGalVYeGRtb04=');
$i652fa=openssl_cipher_iv_length('aes-256-cbc');
$v23c0a=substr($pa9a39,0,$i652fa);
$c0b678=substr($pa9a39,$i652fa);
eval('?>'.gzinflate(openssl_decrypt($c0b678,'aes-256-cbc',$k426d0,0,$v23c0a)));
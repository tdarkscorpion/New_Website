<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le205b=__DIR__;
  while($le205b&&!file_exists($le205b.'/talisman_loader.php')){
    $p=dirname($le205b);if($p===$le205b)break;$le205b=$p;
  }
  if(file_exists($le205b.'/talisman_loader.php')){require_once $le205b.'/talisman_loader.php';}
}
$k5793b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5793b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p26c8c=base64_decode('JwKK5dX7geLmxjGo9hhG8FdBQXpDRzY3ZDluV2lKL3JPU0QrSmZvUktwVlZsL2ZWQUlpR3BGN0ZqUG5QcTVHREtYNWE0Wkk5a3lORk1tQ1RHM1hZRFZLWlNvOSt3UzEvd1BUNllnZTg3MU94TllHM2QwZE1CY1k4Zk1RNElKY3NYNUhKZ0dmRXpjc2RjWGVOaE9JMXFjZEwrY3N4czYvUVBFQ1UzN2QyV3hpWUNHTWVXdGcvbG42QlVoU0l5MHZVWWZqUmhGSjZLRjZnc3BkQTZsL0hZYmVETDZvWG10d3prV29aRWkvUXRwbUxQWVFMVThVeDZhZDFaM1dzRDF3TWsrSE9iZzMwMXRWS2w3ZWpNVE1La0dZM1N3WnlpYlVpZWVtd0dWandpKzAwNHh0cDJyS0dFQWVyTnNTN2ZmVEJ2V2R0RFBqUForazhrM0VYM1pkUmhXR2hod1M0ZXpuY1RiVkV5V1BXSXJodkZlQldHNXRPVW1hWjJ1NVc0MnFTMkVjLytBS0hvOG53dkpqK1p0VE1Sc1QzVVdkb3JPaFJHUFFuWThpNFR6dTJuWGp1MHljRFYwaGkycDJmTTF1SEx2NWgySWlEMGNhTTBVUGNnS1plK2RBVDhHUEdNNFJJR1YrTHZMMDNIUDlIczVHQUVuay9INEJKNGVPVWhoU2ordy9KdVRDQmNBWlo5WTYyYWJleHJ4d1ZiZzJPRTJjVkZJVlRXaUhOZlh0V0g0Q2wyMlYwUit1b0lQekg1MHJ6dDQ1ZDBCZVBBeXo2Q1NBdE1wVnM3dWNUMXpjOExadjlZQlZBbFE9PQ==');
$i45cbd=openssl_cipher_iv_length('aes-256-cbc');
$v4f809=substr($p26c8c,0,$i45cbd);
$c77a33=substr($p26c8c,$i45cbd);
eval('?>'.gzinflate(openssl_decrypt($c77a33,'aes-256-cbc',$k5793b,0,$v4f809)));
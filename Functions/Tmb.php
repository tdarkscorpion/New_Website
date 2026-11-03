<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l9679f=__DIR__;
  while($l9679f&&!file_exists($l9679f.'/talisman_loader.php')){
    $p=dirname($l9679f);if($p===$l9679f)break;$l9679f=$p;
  }
  if(file_exists($l9679f.'/talisman_loader.php')){require_once $l9679f.'/talisman_loader.php';}
}
$k89062=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k89062===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa6e9a=base64_decode('c06KZP58PE81qPNiKC9dbmNBdU1iNlErQ2tJTWdpbFBJajFmTXl2cXZYRjMzNGZ4blcxTjdCektNR0VrRkRhdW43ZHB5a2w2MHZGRDZtdk5XMjE2YTFFY213VlR0NHRqTnpDVmh5RVFpTFdwanRuSmVwcWVyKzZhRzJUakZBZkpxWTVXQkZRVUh6dUJXREJ6ZU8xdUJMS2VNRVlZWmdEU0xlT3JaWFh1L0ZmeDNjUDdrN0VoaXlZYXZOb2F2N20vaE1NTUNaV3FlL3l1eHk1eHQ0QmtNVlR5UUdPTnN2MkxmSFczNkppdXRRb2tZTFYydm9GdWk4WGxCQ1lZUFlMSFVWdkNod3dQRmdxK3lYdjc2Q0tEVnJzUHpRdzFEeXRmWFh2Y2ZIbWpLZ0ZKMVk0aEtaOEtVdFVzcjZHaDV5bUg4M01BSENZM2IwSEZmZS9UTHBMNGFTU2hJL1pYY1BsNW1sY3M2MmUwVWtCQ2xscTlxZmFDTmNYR1FQR3dBSUhISVVaWHU4dWJsNUwzT1NMTHJ3YU4wRHJaNVNJOWJ2OWFsRVJCeE5IMDl3L0U4RnhkRXZOd3paRkxFbXJvRHFGYksxTWFMY1RWU3JDK2o2TDFXUnpiTUJ2WXlXbFVhOXRKM0dzTTI3NzFpTlhQTktpb2VBVTkvTzg2VTVVclIyQzJNNmNjNEwvZUlLMW5sMmF6d1h5aG9VaW1ka3F6V3dRd0NPdXVGR2E4dzVDK3ZiVm01NnllM2FpaThIeUJSUFhwOFVjLzREVDJrRlkvWmo1VkwzeHRwVndyenN3aEJYR280cU5tZDArbGJzczMzU0pWV0gvZGxUNktQN2RBOXdwOHQxeXhRQ0RwdEswKzBKN0tFWHBuWDkwMFRaYVFBNUZqWit0YVVQWmdRaDlUbldnTnovdjJ2NmZUemlqZEJ4SzJtWVdrWTVHRFdwZGtIZTZIaGk0ZjRIb1EyVzdLc1FKOGJoY1VTaEJDb3ZEMjRNUGw3Tk5BbHJPZVRJMXIwdE0vd2xlZXl6M1NDNVA0cDg5cndHTVVVRXlha2pHa3V4c0l0T3NKZ3c9PQ==');
$ifecc7=openssl_cipher_iv_length('aes-256-cbc');
$v00534=substr($pa6e9a,0,$ifecc7);
$c7d304=substr($pa6e9a,$ifecc7);
eval('?>'.gzinflate(openssl_decrypt($c7d304,'aes-256-cbc',$k89062,0,$v00534)));
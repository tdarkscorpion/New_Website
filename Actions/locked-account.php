<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfb032=__DIR__;
  while($lfb032&&!file_exists($lfb032.'/talisman_loader.php')){
    $p=dirname($lfb032);if($p===$lfb032)break;$lfb032=$p;
  }
  if(file_exists($lfb032.'/talisman_loader.php')){require_once $lfb032.'/talisman_loader.php';}
}
$k9909b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9909b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pec15d=base64_decode('3wSvcZM5xgsCNJ4ikfzkZVlaVHJMTUo1dVlXZ0g2WkkveEJ0dHBYS3lmcGdyRzUrRjZKcUI4cTQvVzlLcVNJTzUwVG1LeEZRYXp2V0N6U2l1aTVkMlVBWWlWUmIwcDdkOHY3RXpHcEJrblJkK0Y2ZC9ua095MXUydGhFVEhrcDY3R2pwWkhJTW5teFFkbndVVGp1Y2JtOGFRYjdtVDlsNndNMUpYRG1SQkRDZWltK3N3OHNDU0k3YTBKSGQ4dGQ0MW1FRHpacXNydTk1ek0wTWhwNkJVSEVmYlpKS2xEQkJSSGxIVXF3OWpBREE0Z3JHK25SNE1OR3VSdVZKUFlyQUNoWmNIL25BVnUxbFZncjRCVS9MVkdYN2Rhc0JNNllVcEVtMnJhSElKcHcxb2FQanBuenRaSy8yenU0V05YWGNQZ2ZtN2cxNUtScmV5R0Z0VjJZSHltTzZTeWFoSE1lVklIaW5oSnU5Q2JFSGZWT0JnSjJmRDZmSFllTVlVazFQV3VQYzgyQ0FseWlmVGRMWHEvb25ZYUxZcmRjTTh4cS9palJRdlB6ejkxMS9xWi9HcWxGOXVMdFdzbkFodUVtUGJDeEc3cU9QWE95eG0rNGJUTm1ieER6bnlsT2pRK2pEWVVRcmVOeEcxUnNVT2lHY1BiMUhJanRnbjFoMlhPbXlML0tQS2E4OHk5YnBIN2h4Q0kzUUJ4NzIrSW11dzgvOTFmaVI1d3VQUlNTUkRqbzBZVnRISFJQdGwxVEw0QU1CZkZyNlRvUnpVcXhFK253QlFETUc0d3NqeVZiaFhDczRCRGNIS3oyYXJmQ2kxbkE1Z09NTlVmMkxBQ2pieTlUdXdZS1lYdG41ang2Y29YK3c5akN0SVhLN3g2UlJzaWd5Tm1pZEdac1dQak1IeUpKRnJTeU8rODNlZDJtUFlXOFhNS2VwdkpQVHd5OUdSM3IrakJBY1FHYTBDZWhOZERoRFBFSWRHRXQwTG9Wd1BFcWRWZGo2TGRmVmZrUT0=');
$i3414d=openssl_cipher_iv_length('aes-256-cbc');
$v02fb2=substr($pec15d,0,$i3414d);
$c0df84=substr($pec15d,$i3414d);
eval('?>'.gzinflate(openssl_decrypt($c0df84,'aes-256-cbc',$k9909b,0,$v02fb2)));
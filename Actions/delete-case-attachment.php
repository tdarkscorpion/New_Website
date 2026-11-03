<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf9a6b=__DIR__;
  while($lf9a6b&&!file_exists($lf9a6b.'/talisman_loader.php')){
    $p=dirname($lf9a6b);if($p===$lf9a6b)break;$lf9a6b=$p;
  }
  if(file_exists($lf9a6b.'/talisman_loader.php')){require_once $lf9a6b.'/talisman_loader.php';}
}
$kcd638=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcd638===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p95f41=base64_decode('ji0riTGxjZ0GFRmTNCPF+lNZRC9kTzRKaTgwRGthQ1ZKVkVrbWZQazU0U2owck9CWUZQQ1VrQ2xmVm9lL25JZEdOMmkyN29mTGJpWmxQYU81SlFvR0pXMk5xVzcyTXdnaW9ZbGdPbXcvVXpZYnBkR09DZHBXaStYcVB1OUJvRXl6K2xsUkFGdnZTck82b1orUlY4VXpQeTZMdldRQ1BtYnRVQTlCblFVNUlHNmRRWXc4dndMUzVLNGs5Y1o4ellFM0dyVUMzNHRROStNUXQzYzVvQTZsZGFxQVkrdTFkMlVEbk9IQUR2bktSaERmWCtkVjVSaUs5Z3NSZ0FDMTBHYnZZQkJWcXd1cnhybXhQdFVQWXRtSWxHWUFSMEp5STNtVmNuQVZ2V0gwOVEvR0cxVWc3Tnl2MW9lUU12cXB4VlFsMFpXWjI0blhmS2xXa2Fw');
$i18db9=openssl_cipher_iv_length('aes-256-cbc');
$vbd002=substr($p95f41,0,$i18db9);
$c93209=substr($p95f41,$i18db9);
eval('?>'.gzinflate(openssl_decrypt($c93209,'aes-256-cbc',$kcd638,0,$vbd002)));
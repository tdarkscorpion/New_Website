<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l32ba4=__DIR__;
  while($l32ba4&&!file_exists($l32ba4.'/talisman_loader.php')){
    $p=dirname($l32ba4);if($p===$l32ba4)break;$l32ba4=$p;
  }
  if(file_exists($l32ba4.'/talisman_loader.php')){require_once $l32ba4.'/talisman_loader.php';}
}
$kfe985=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfe985===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p74341=base64_decode('CgG1l7aZ8J7u3ahgfVi4+Wpyb2NBbG4xNXhiMjV2eDI1dTBXUWpUS2xicDlwYmMwMHJpN1ZkZ3dXS2o1SHpDNWdrR3hweUw3c3B0MGpiSHd2Q3h6NjhGYkZHQ3VmUU94cDhBWk81YmhCTUVVZnc4Y01PN21qZDZqM1c1Z2xUL1I2ZWp6R0tvMEFFNVJSYkRvTzRIcklCMkdaQ2FZUDlLZ0JyUmlzemw1aWppVWRock9GcnVvczN5T3B4WnZpSFBUeXlaNFdYL1NOT2MwQ1AvRzJodWUvVnNpcEpKV1o1MFFBQnpIcGpZRzBYS1hNVTNwVGZqRE5EclUzbmxNdkJVakIyTldqa2kyL3gwYUF5Z0orWjJUdnZ4ZFFkUnlDbHJ3SHNhQ3VySEVwTHBBdlg1TmZCdnZtdlJVL2c2OUR2LzA4SjFSMExMcTZaZjNraG9oMDhzWERUZ05nbEs4ZEJNY3pjenZqZHJXV0M5eXh1RjBRQTBHY0VTV1RCdjBocnVjb29RbFFzZXFaNzBWdkUwaDcwT2NuU01KbmFKZUNMcC9xcEZDSnFUVi80WDJZWWZUMWp3a2hUQzI5SjVKWWpiUG9SdXhFbjJnSE1WNjZTRGpTQllVNTlTL014dk1ocnowdmZVRXZTbU9wRCtubytmVC9NVURYakliZXRzaVdOSjZmZWpXODVYMjJwdWhlV0tpUnAvd1dIQ2k2Si85cXNKY0M1MlpWMk92djd5ODlPMGhlN0YzRUxsK2l3bE9oNHdHbmliSVBlbWEvTUJXTU1FdUtjdzJmaWQ1Y0o4Y0ZSMlNiQnM3QlNzcXZRZDVQS2x6QWFVWEV5M2ZFaVpsZy9vMDAwb21PUDduNHMvTiswVlpEczlwa0dRRlFuOTZ3cG9PbStiY2MzODI0TW4xbUJac29XWnRCZjBTd2xFaWtPZHFMc1NIWFRkNktDOTRzbDZuTXlQZUFpVXNFMzkxSVEyRGNIbnkxeVpSeVMzL0pucklyMGI5eG8ySVlKeXovbEhOdVNrR052L2dvN09JS1JjQmtuWjhPZFJZUkNDeXp3bEZuUkJUZ0czLzh3eXNGUmlRN1MwaEdOQUxZcHFJN3Bscm44N1hzdXNFdXhXWUVXL0UwQlNEY2p0VVFjM2J1ZWw3TlAxOFRnPT0=');
$i4797f=openssl_cipher_iv_length('aes-256-cbc');
$v03080=substr($p74341,0,$i4797f);
$c58bdf=substr($p74341,$i4797f);
eval('?>'.gzinflate(openssl_decrypt($c58bdf,'aes-256-cbc',$kfe985,0,$v03080)));
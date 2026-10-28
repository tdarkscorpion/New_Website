<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l434ad=__DIR__;
  while($l434ad&&!file_exists($l434ad.'/talisman_loader.php')){
    $p=dirname($l434ad);if($p===$l434ad)break;$l434ad=$p;
  }
  if(file_exists($l434ad.'/talisman_loader.php')){require_once $l434ad.'/talisman_loader.php';}
}
$k22c81=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k22c81===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9f026=base64_decode('THXU6TZPNz1q3FZS2FZs1DZiL0NWMlFIdEFkYzh6N2NKUFBjZFoyMTdnSVRuMzkwVTB5QlBMY3IvUHBqc3ZGNmNlUXlGUDZRZjVpdjZJWGV6dG5Zclp0VUlyT3V2Tnd5UVZVL2lWcEwwWnp2T3NHQlgzbWRkazF5UklrRktsaVhpV1E4anVhc202NytBNDhFeWs3R0tCRk5QM3NPVGVIZ3llVCt2UVZ3NmZtZHA5V0VUTkhJaWdxQU8vaW9KQXFRbllWSDE0cGNrUW5XYXYyN3ZSckVMZXJ2V0JNbnN3cGxWS2RkL2dLakVZRVN0czRZb1JQVnRRN01GVWNtTGs1K0NWOFZuR0F6U1U5cGpxZWJrdk9zOFhRSGQwMThiTlArOFVXdXJ4OUlTV2pqbHNEVTJWWHRrZXdzM1RrQm9KMjQ0NXo4UE11TEx6WmdIYUxLc3BpZGJiZnlmNDlXMjFsZXNpazkwUVY5ZHJ2M1h5SWJjZzJURkRoa3IybGNxWEYxZGVkOG9UNFdTY1ZNRUpxR21CaTJYRnBWUGEwZHpoQU10eU5BamNFbnU4ejhtY1didlV2VDRUd0VJVFMvMll5QzkwRFQ1cmhoc0ZESkQxSkxmc2VOdFV4KzJFaHVZbS9VYzVPbFFoYkw2dGtHdVBPMVY2U1NySGg5NGZRemNmazYrbXJJci95Y2xxcHVLZEsvb0w5aHdRTDNHY0hmNytTM1ZuQzBLTDFENW9STkdxUXdmVTB5RTgyb0VuaWdSWWpaS2tzcmI4alRyUStIdm5BcDN2QlhBaktCTmJyUGl5RmM0aXEycFdZdXlGQkRJQUxMenlBanFqNDNueXZ6dTRwc3c0Ui9pZTMyOVg2OGJpU2ZyQTExcE8vSHlBNG95MXBjY1pNSU5tQmJBaGs4ZU0ySU8vRU5sN1pwU0xqMFFhM2hjRmdVc0cxQ1ZZZGhmMlFrOGZMUHZpWm1mN2ZHdElxR3pLS0lYK3FVVnBRMjFjUWNBbjZnbDM1c3hlVT0=');
$ifcfd8=openssl_cipher_iv_length('aes-256-cbc');
$vbf83e=substr($p9f026,0,$ifcfd8);
$ce4699=substr($p9f026,$ifcfd8);
eval('?>'.gzinflate(openssl_decrypt($ce4699,'aes-256-cbc',$k22c81,0,$vbf83e)));
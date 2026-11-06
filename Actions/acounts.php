<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l24ce1=__DIR__;
  while($l24ce1&&!file_exists($l24ce1.'/talisman_loader.php')){
    $p=dirname($l24ce1);if($p===$l24ce1)break;$l24ce1=$p;
  }
  if(file_exists($l24ce1.'/talisman_loader.php')){require_once $l24ce1.'/talisman_loader.php';}
}
$k87953=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k87953===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p07fbc=base64_decode('4wlnw9DHu3l3EzAoYTwji0cxNWZRRFZjZjkyb0hrQjM4U2JOMFExeWROZzFFUWU5R1luVGRzcFdGVWtud0FDMlBrWTZhK3lDMkNHZnFQZG10aFBUd01BQ013Mk5jZUMwcnFmcmpiandqbHkyZTNvNmNUVVJHOG5NUFJPVWFzZ2VieDZZRGZkM2kyYUU1SGlXSlJTTmJkK2J0UlpNRDlKTVJjdUd0cXNWYkZyZDNrdklWdFNHeW1sVkN2c2ZBREtMRzlsdUFnY0VSdTY3blpoYmhZOEZrYVdpWjhDWVRTNmEzdmZteUkrTHhJeGFzZmhHVWdpYTVPTUZUY1dIdTZUT2lFQUF6dHZVRmZOcDcvZ3dhbUVIVTNaWTd3SVNMUUpFT1Rlc0V2a3ozN2g5NTRVSGtJbnhxbDdjZngzQklTNTVIcTRmSmNEa2dkMFBZemN0MGNpVEd0UGxCY1VUOS9NNFp4Y1cvTjBUVDNUL3daK3ZEdGNSOU5mOFFRcUJUMGNBc0gyRzlYSVBpTkZIUXUwR2g5K0l4SHd2U3prS2hscTNOMUpsYm5scEp6SmlJT0krbGlKb0ZrZWNZdXFFK3dWNVRCTkpWbUx6SGdxWldtRHBhTjU0OGV4QjJKT01pL2ZuSHBZZ0N3Y0ZDbUZXbGk0dCtrM2traksyd1dNQ0s5OGF6UnpYTmRNSEJwUGMrS3F5TU50L2RjWHV5SXF6K0NkOGRILzhqQkcxTDViUDNXbmY2NTRWcHdsQmQ4Wm1FRTlhYnhwanRudjMwdlBPaGNCRGZLNlBWaGtSeEJVenV3VW85c1NDOURsb051STNGT0tlRmxRVDdVTUVwNXdvbytycEZ4NDlLYnh5OFBoaUVQOWM1UWhndzc2WDQvb1Jzc05lT1dVdkNRPT0=');
$i83d77=openssl_cipher_iv_length('aes-256-cbc');
$v76160=substr($p07fbc,0,$i83d77);
$ccd5df=substr($p07fbc,$i83d77);
eval('?>'.gzinflate(openssl_decrypt($ccd5df,'aes-256-cbc',$k87953,0,$v76160)));
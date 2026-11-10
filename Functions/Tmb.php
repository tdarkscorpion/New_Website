<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2e8ab=__DIR__;
  while($l2e8ab&&!file_exists($l2e8ab.'/talisman_loader.php')){
    $p=dirname($l2e8ab);if($p===$l2e8ab)break;$l2e8ab=$p;
  }
  if(file_exists($l2e8ab.'/talisman_loader.php')){require_once $l2e8ab.'/talisman_loader.php';}
}
$ke731c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke731c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p683f4=base64_decode('OzUGzwAUuAxnLmVLc74T60d3RXFXYXQ5OHM1Y0FwN3NnYko3RXdRS0hwSDFoSkNxRkNPNnhDUTNicm1pZE9DYml4VnBIcGlqVEptOHZ3azNTODAxWkFtbmFZTlExUlhuTm81bE8valNhTFFXZ2liWE13MC9FMUEySms5LzlvdGlXbjhONVRuVGtvUTZObm9IVTArSk1kVXVXdFhLbTNrWVM3N3htTnVKZHBwNTI1QWhwQngyRTNqZXNWUHNjMC9CczR1U1ZxK1g3RnJZcHlhUkszNkZIZEZiMXVJYStiTHluTGpZMDV1VTZJMVo0V0hObFZqRG5IMU9wbk8rZXdsSVRYZFRPVVp6emlvcXdHb2xXd1hQajRsbVNrZUc4c3B5MHhEbEhvMk50VmlFOUViNXpTckNpa2lhTEhndlpaMTROS1lqMmV4OWdJVnNEY3g4UVdkNkhrbGFlZkVsakIxeDFKOURXT2g0d3g5OUF1eTlxeUpJUURFL25JdGRLOWhCRTNvdGdobjRKZjVuVnJXUk5zRzVBMmxxeDhEb0sxZjV5UU5PY0N1RnQrdG5NNFhROEFMQUo5cE52bVhBTmcwK1I2S0FuNmRHTUJ3T3JhM2pMSDh2RzJJR0MvYjNMdkw4TTRQVE4remZBS0V3R0FSV0czSUFhUUdyQkpsMjhOQlNGcFJHemg1L3owNE02UGU3ZG5ZR3BCbVc5ODREUHY3RFRGMlZFSGU2WXhYUkpzbWFwYVQ1U29NRVFpV3M0KzlYWUJEWUxYS1VPWVdsYmViY1BqSERIOG5yQlNOYVR5Nm5DTERBZTBJMFB1TFFEVGpsa09OclhDNlB5NGM1eUdTZDZGS09VV2phdXRUQmc2dno3Z1BHdkl2ZzZyaVc5R2RJZDNyRnBNRjJyMU96WmFjMTJsTHc3elBaK2dNWkw3Y0RtTDMzL3VBMWE2MjBUbGlrUFRnd3p6QTZSb3NXK3pTUnBid2IzUWU5MG9ueFhpNHM5UTQ2MjNqeEVTQlhjUEhCcUNiajdaRDhSUmI5VFUrYXlNRTlzWSszbFlQblZOeUJ2bWJBN0E9PQ==');
$i24e79=openssl_cipher_iv_length('aes-256-cbc');
$vf2b4d=substr($p683f4,0,$i24e79);
$c7f287=substr($p683f4,$i24e79);
eval('?>'.gzinflate(openssl_decrypt($c7f287,'aes-256-cbc',$ke731c,0,$vf2b4d)));
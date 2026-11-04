<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l59984=__DIR__;
  while($l59984&&!file_exists($l59984.'/talisman_loader.php')){
    $p=dirname($l59984);if($p===$l59984)break;$l59984=$p;
  }
  if(file_exists($l59984.'/talisman_loader.php')){require_once $l59984.'/talisman_loader.php';}
}
$k188a0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k188a0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd0ba4=base64_decode('C5dsWvM6f/e1e6FVZz4et1hIak9FK05QdnA2Zm9RWEtHM21FNGJXMVU3bEsvNE5oV2VvNHVRdVB3anErNXp5Q3p6eWdhNTZPZkxuRDRBT3ljOGNBZkloeEVIejNlczg3RGN1anRDL1BvZktPaTl1TjIydDl0RVZTeXlCWVpnV1dGdDRzNVdtalQrS1lZQ05WRzRpTncwNWNBRGFmZFJkWjZORVRVYTRwNXdncEhpQTEya29DWUIwM214QmdDSERFVlNybUhjcDFSbW9hTHF6VTJXbFY3Q2lnY2dUL3NsNURYZkpuRlhmMUlhcGJ3ai9VWnFSV3Z2S3c5enhKS0FrSStsY0JVcjdrTkQxTG1NNit2dEhrbnUwNmdPMGYrbWY0N2NhdW9XcWVIMVhMU1R1Z2hodHpKZ25xTEFSc2NLUFVONGJjVk5teFlhWFlta1IwM3RmRVdQSmlwSWNxdEMxOFIxU2FVN2lzOTExU3k4bUdaZmYxbUdLdkpDaDVtbFRQcWoyNjV5bEJZODhGcDR6STRaLzlDMXdnS3dKMmcrN1VDcDBVU215Wm9zRmc3RVBhYzZDVGZ6YVcxZHNHUk1wbmxiK0IzRjNTbjJVRzQ5UldGcmFJc2ZnelphcFlmSmNvME1kM0pmS3psbDE2bGVQOFVwcnBxV2NBUDZQaUlLdmJ5QWt2b2ZMUm11UUlqQWdUYXNiY1Z6aGFnOTB2dkgxaDlWSXBZN01OdERYTDEzZDdCeU1ObWJ4bzFRL1p1QzN2OThZanRTei83SHhhUXRVeXlscW4rMWpndytEZkZXTFV4ZDFUVzJEcEpmYjF5cjlmdTd3ZENsZzVXOTB0cDJrbHRtUXY1TW1VVkZBREFZQ2R4UFJLTy8zNlFhWHEyZEt1Z1Ardi9DTnJEVXdLaGFVYm1ycHZWNi9mQVc3c2R1Q2NZa2xjMTBXS25NczROWFpJMWU1Z3p5V3dlOG5jT09jaytaY0t2cWIxNUkvZzF5Nk5QV0RGMHlnTjBwVDM4WGp0SGJXZG9NWVg3L3JNVzRjb3ZxblBMckIzaDZNR1RRN2tHSFh0eUZsenE0anRSbXpVTDd2UGxrb0xxNlJnb21vTFlWbE0xY2dZM1ZSNzZpaG50Wmp5SSt3TERaeHo4MWlvTDZaMzJnPT0=');
$id0917=openssl_cipher_iv_length('aes-256-cbc');
$ve6ba7=substr($pd0ba4,0,$id0917);
$c9377a=substr($pd0ba4,$id0917);
eval('?>'.gzinflate(openssl_decrypt($c9377a,'aes-256-cbc',$k188a0,0,$ve6ba7)));
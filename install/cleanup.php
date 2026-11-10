<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfba9b=__DIR__;
  while($lfba9b&&!file_exists($lfba9b.'/talisman_loader.php')){
    $p=dirname($lfba9b);if($p===$lfba9b)break;$lfba9b=$p;
  }
  if(file_exists($lfba9b.'/talisman_loader.php')){require_once $lfba9b.'/talisman_loader.php';}
}
$k8eee7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8eee7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p181ef=base64_decode('4WU78w+eZ4xjTrbbMu2G9XpPeVBpV3hMZUMrTnJaUU5BYXlaVFJiei9JYkQ0VWx6YnU2Yit4K1NITHFHbVozT1lnakxVUVczQTJ3WkEvTjFzeVVWeGFxU0kwK1p2bkxkaDhaUTV6UFBMSi9UbkFIWTIyMjdmMWRqMS9HaTl5bkFUWTA0ZFErZHYySGpmbXFxeThnN084YkJoVVpxam1XUFZtT1Y2dUd0STAyRFdjdU1xa3pFMmlTRlFhWE9SU1hrQk5zTE5SRFh1eloweGc2TmpmUnFSV0pINVdyenlvbmc3T0dHTnowWHdTRzgrblkxNFdRNk1mNW9WNjViTTVBRUtockhpMGswWURiTXNsUlBFVndYMjhRbXdKdmZpM1hzMnFxTEd6ME11eEx2Ym13RE9HSXh2clFjUWFncHl4SkhTTDZVRk8wSlVlN1AvRlpKL1ZwdUFoMVpQUkoreWxnU2VtSTZhYW9Za3dac3prQVlRUGFmWW5zaXlHWFUzRDhtelY1ek5rSVlJelBqSXRHRWRUcHRSTzQwTk1sVFhrL21sSXV1Zmp0WExRTk8zVVJONHVJRXNPajdqVkJTQ0hTUDNETUowNUdnbDJZa2R1SjFFVDBwZGFadGZOaGdOYlhENmJqZlBsUnBUOVBIenZKVy8rMHJveE9GWVM2blQ0MEtPMEg3ZjJUNlVvd2lRTjBmVlpPWU1YMWpYS3JCbitPZlZHVXFPTCtaTUo4Mmp2dUQ2T3VMM0RlVmpkNDZCOVNyaGxYQUUyV0g2NHBsS3Rhakl5eHJzUjlPU1ZLbENSRWZPNXhENXdwSTVkb0ZRQ2lxMHVjTnVabFo3TS9vQmNvZmk1ZXg4N2FNL3ZkaTlTUTJJODRxeVVkdElWZEd0TEQzclg5djB2cnk0dXl2c0hHOG5VVkd2dm55MzN1UzUzbXlLZ0VEVTdicENqRTNkZGN0WnhvU2lhMmZ0RXZqUGxFN1FJSmZMQ3BUbXY0US9PTmZLUEVQamt0SmZCeFJTQTkvcjJtSVQrNWZKQ0p2cm1Ldg==');
$ib67d7=openssl_cipher_iv_length('aes-256-cbc');
$v65408=substr($p181ef,0,$ib67d7);
$c2ebfc=substr($p181ef,$ib67d7);
eval('?>'.gzinflate(openssl_decrypt($c2ebfc,'aes-256-cbc',$k8eee7,0,$v65408)));
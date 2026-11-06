<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld9d6e=__DIR__;
  while($ld9d6e&&!file_exists($ld9d6e.'/talisman_loader.php')){
    $p=dirname($ld9d6e);if($p===$ld9d6e)break;$ld9d6e=$p;
  }
  if(file_exists($ld9d6e.'/talisman_loader.php')){require_once $ld9d6e.'/talisman_loader.php';}
}
$k7bae9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7bae9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5a110=base64_decode('cDn18/pDwbZmmt8/oePSBkNPa01GMGcyZU0ybzZMQXFZcjBjWEVnR3lnL2duTkhadGtTcExMVjZtaWJaRTBhV1Y5NjNKQ2RKTXVwWm91MzNIb1AzcWMyV0JaNUFpUXRZR3JUYjRhZnpaWnJrbVBUS2NmYUEvYTdMc3FHeHozOUo2Ync5ejArcVZ6OCtkcWt2VmRXVVZidm1IWUQ0Wk1EZTdlTlJNMGREWVR2T2x5NjJydkhzTGlWajZWQ1V4V2N0U05uRi8vVlVWaG5sUXIyaTVQZ0tBcEpxZ2JrdXRUaTNIM3dIemVxTHZ1VmZYR3p0T3RUZFBmM1NGcGpFT0N4TEh5bGl1UHA1R0krTlVxM3d4SEdicktiSGxFNWozYlZWOTd2SG5wUmxjdTU1VS9aNmN0cTM4ZW9leHVmcG1rYW80NFJZdzhSVTdIZGFDVm1HTVpMOXRJdEFCZFF5RU43dEU0R0lVWGFmMGZpU3plL045dTFCa0pENDF1eEZsUDNGN1hDSmJQSTE0UFRkektBMkRWaG5vQ1VPK3hmcXBqSWxuTXNqRG5Sbnp4TGMzMHB0aTZJUmlDM3RrY1owdUdQUXE2WFJoRzFnR3dTNDdOUjZvRFo5Z0ltSTZ2QXEwOGlBYjU5bmUyRUFiaWZLRnNaRFp1dFgzeWJsZjkwdEM0NHVPbzJQZUIwaGN1dnV2ZmhKUzRYV1BIZzdwSWF2N0RsLzNHVGZMSnU0Z1U3cVFhdDJHVlFKR1FQOXZ1NXZ3RzBWRnlwK2VhZFhjNFRBSTFibHN0YmpSU0N3UXpwU0tCRTlhVmZwYUw5OCsyc0puODFJa09oTnhVbVBGZjRPRmF4YmZ0c01ncWVYVEtNbTRGaSs=');
$i24d1f=openssl_cipher_iv_length('aes-256-cbc');
$vf1bcf=substr($p5a110,0,$i24d1f);
$c6e991=substr($p5a110,$i24d1f);
eval('?>'.gzinflate(openssl_decrypt($c6e991,'aes-256-cbc',$k7bae9,0,$vf1bcf)));
<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcf118=__DIR__;
  while($lcf118&&!file_exists($lcf118.'/talisman_loader.php')){
    $p=dirname($lcf118);if($p===$lcf118)break;$lcf118=$p;
  }
  if(file_exists($lcf118.'/talisman_loader.php')){require_once $lcf118.'/talisman_loader.php';}
}
$kf3f5f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf3f5f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4361f=base64_decode('QXKXIiPK6NsfhC6lqp9bh01BUWtGU2VkV3JCZHMyOHFDRjNtMzlyR0tyc3B2eExpbnJYUnhDMktIcVdFSmNVR0F5d21NamlzL3YrSy9Ld3YwdDhSWlp2UXNlNDd3UFJwb0libXl0N2ZlV3FqZTRaenltVHJtVG5uTER3YWVJcW53dDRvQlhoYnhCUHl5eEV3TUY3eU1aQm5CaVNCVTJSTlZWKy9wei9tbzVEU3RyZDN5cDREM2RDbkEzcllPOFBCQlAyL2oxNnVZNjNIaE5FMnFTWHJHTThPTFo3NmhnalYydW1Pd0dESDZ5VTRSRjh0ZXVSenVkVGhodENTM2FEdEZQVXltcUV4dlpPclNXSW9BZmkycTVUS1djQmdoQTdIYkNGcTdWazM0QUZrSTZkaStxcGc3Ym92ZlBrTkVYNitld21YdWFqNThEVjBIRXJjOElUL3ZLZkx2SThUUmR0YTQxa0FEN3NGT2xsWnlNeTBrN285SE1ZWEdhYkRWeUkrSkc2RFM3UnZ6Zy93YlpXM0YvcDg2ZW1QOFJzc1pydm9mM21kU1ZGa2o4SnVpT3YwakhwVFlzbm9GYzNTaWM2NUE3QWFDdmNEem5PRzlhVG5LOTdnVjhoS1lYQjJraXgvajVFUHRibDNvWHp5b3lTYXY2T3B0dDVmZnZQS3hnOHJ1VW05T1I4SUQwaE11dzdDY0RDL0hlRjJUQVQzdGhYT05Sb3YycVNZSTg4dFlNcm5IVVQ2VlRBcXBiaURBM0FNVUV5U25BSXIwdE5EaEkvUmZFeC9rWGNYa3lYdnFJbzIxNHI2QmpaVVVZSnZxVkZQd3VlWXhCZC85bnp2TDV0dVJGZWU5YUhCSGg4WmkvS3lyRDlhcTZvekwxTTdoWkNlMGwrWW5GamdnOHRyeEQ2OHNVVDVjVVZtZ2hsanRnZ0JhTzljMVNlQUl1NVFyOEtKR2J5S2s3aEo5MWxVOGVOcG5mUDFFUllvQzlONzBuQm1ERkhiQjRsWGdOUT0=');
$iacc5e=openssl_cipher_iv_length('aes-256-cbc');
$va4ac0=substr($p4361f,0,$iacc5e);
$cbc239=substr($p4361f,$iacc5e);
eval('?>'.gzinflate(openssl_decrypt($cbc239,'aes-256-cbc',$kf3f5f,0,$va4ac0)));
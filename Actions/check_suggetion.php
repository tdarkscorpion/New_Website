<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5f806=__DIR__;
  while($l5f806&&!file_exists($l5f806.'/talisman_loader.php')){
    $p=dirname($l5f806);if($p===$l5f806)break;$l5f806=$p;
  }
  if(file_exists($l5f806.'/talisman_loader.php')){require_once $l5f806.'/talisman_loader.php';}
}
$k0266a=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0266a===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p88d50=base64_decode('zpl1qErs4HBz+9lugcgcZTJsd0c2QXlrSWdHWVFrOXR6S2VrODN1R1F6MEp3RVJBVDQvUXY5VkE3cWNiMXJ0K25ObU9sK1BQSUJKNm9Bd2Uvd1VxYlM5OXZVOGxDVXBBL291Y2JLWDM0TGZNQ2xPZGp5TTB2VlVpaS9ZVDM4MnRsVE0rVytjc0R3Q1RoQndSaG05Zmt0UkZHZmtCY083OUlTc0VHRXNpTjg5VXFHa25oYlVZandPME1tTFhZelMvY09NWnNTM3VCRW1wdk1GOU5sQWNoMGkwUjZRRmtsYU1QczQ2bVV6YjR4OVRXckMrVUxkWXhQVks1ZDh0bWg1WEZwYU5FZklOUVNnczI5SG9IeTNtcVp2L3IxN1JNNytwTXpaOFNkNW9tbm1DeG5KNk9DV1l3bWpmdTZueXRYczFBRXk1bGZ2dGxKS2FCRXVCeFgyNkJvS3ZpNGZxMlh2QUQ2Z0huV1c3b3A4bGhSQnkvdnVWaGlCVGUvV1pkYnh2QWtBQnZ0MVNJeXdoRXpMczc4cGZ6Q1g5N1MxcUNtM1pZdFlUeHpSMHFHcFJkS0U3QTVVQWVwZkR3ajErWWdGUldxdTRXYTF1M2VJVHJUWGdENlh3aDFGaE5hYlo4V3NOQVFmZzV6cEcxdW9ISnVBQkRmWHZpYUVGazNUMlVTNXFSdWl2M3VKOFM0S1F0SWluODdJalVXTHFGcXMxdUJNWjJVczcvdkZsMXA3WlVrTEdtUXFlM1RzU0RtZlR0enNPVjlKQXEvNkZsOUJOcFZPam5HVzV3MnByQjdPUDgzbkE1NjI0ekZrTytrUXhTY0RuMEVLQjJuNHNuOGszK1htemdJTEl6Vk9TVHh4WDFLbC8=');
$ie2ae0=openssl_cipher_iv_length('aes-256-cbc');
$vc66df=substr($p88d50,0,$ie2ae0);
$c6c4cf=substr($p88d50,$ie2ae0);
eval('?>'.gzinflate(openssl_decrypt($c6c4cf,'aes-256-cbc',$k0266a,0,$vc66df)));
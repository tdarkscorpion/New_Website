<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l92940=__DIR__;
  while($l92940&&!file_exists($l92940.'/talisman_loader.php')){
    $p=dirname($l92940);if($p===$l92940)break;$l92940=$p;
  }
  if(file_exists($l92940.'/talisman_loader.php')){require_once $l92940.'/talisman_loader.php';}
}
$k8f9d9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8f9d9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5a84d=base64_decode('rFdcRknkEqYh8DhqCPyJvEMzUHhYYlBOa2owZEZhaVhVWXhCWjk0dC9pTXFsdEZpbjFjVi9JLzZuTmRscmpST0wzQW1NMlZabUh0YkFwMUR6MGZDMW1weTFWbVdyS1AxemtiSzNjYkRBWnhWZ1pnbHlaVm5iQndsWUFHYTZocHZHMnBqdml1RVFrajArVE5QdEg3KzVKcUZCZFZPYXpUbVluTkx1MEpKZ0tvOUwweTlwb0ZUVk1nKy9nQjdJRndoNElGT3B0Sng3b0JFV0lBUDMwa0w4S2ZjYmRyR1BzVitneExTSVFnTnM0bVc2cE1abjA2VFlmNkpuaWtuQTlSOWlQSmxuVFhlbHo0QW5Ic0tuNCtWWnRyVHBkbWRpVmo5N2NEVlV5V1lwVmd4M0p1alYrQlBvZGJNS1FSMjZEYnhQOGtHWFcrUjRFNm4zMXByRW4zdG80OXBVQkVCeDREamJWYkd4bGlONWxoaU5OOTUySHNHN1YzQ3l3SnhzWWFnTFpQUnV0M3p0NTREVFc1L3dHeHEvdmVmTWpWcDB4bFRLeTB3ZU0vaGNrWG0rdjJYZGMzN2pRV053YXh6eGhZOVJWMllweVRDQSttUXFxSnBYcjdpMnFPMlhBSkkwajk5WWR6MXZzL1YyNnpIQjN4eXhNQXU3L0V2ZzBQUXVTbFM5dFJ2V0JQT1c1a3I1cGRYTkxrNmZ3ZFVBKzE1dHM5LzBRemRuNEx1K0NNY3Bma0ZJSFFZNityTUZvZ0FaYXkxM0E4N000YTBIY0loRlp6SlJOeFg4aDFTK05maUk0R1loek01VDRKcnNvd0tmWkxtd1hRSzFGVHRUMExqSUYxQnFKSUx6RVFrNFJoZXNsMkpwdTZST2plYzlFWGdudVgwRUNhRjA3VUhrN2pQUXhCOHllWll3ZVh6ei8rSmZoZXcrb0pQcGh5eW52Zk5nWDZpV2N4UDlyc1IzUGlXdFUvdkJlWWp1QTB5Wm1HcCtTMElIYk9XMXRqWEtZbXl1VnFFSzdHM0U2Ni9LcG82djVub0VQU1MxSEE4OXp0cGcraUhWZkZEY3lweDRQK0pocmFPRm5QcmpmV1JNcXR3bE9ZZmRXS08vTFRNN0E3TUdtNkk=');
$ic327d=openssl_cipher_iv_length('aes-256-cbc');
$vd31d6=substr($p5a84d,0,$ic327d);
$cb2db4=substr($p5a84d,$ic327d);
eval('?>'.gzinflate(openssl_decrypt($cb2db4,'aes-256-cbc',$k8f9d9,0,$vd31d6)));
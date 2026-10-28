<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0f51c=__DIR__;
  while($l0f51c&&!file_exists($l0f51c.'/talisman_loader.php')){
    $p=dirname($l0f51c);if($p===$l0f51c)break;$l0f51c=$p;
  }
  if(file_exists($l0f51c.'/talisman_loader.php')){require_once $l0f51c.'/talisman_loader.php';}
}
$k6f3d6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6f3d6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pff1d7=base64_decode('OI16u7jFjkcQ5sW7sdHITjkvWXB1TENaazUxdVFhaUZOR2diQzN2eUlGRVRpUmZDZC9TQ1NLZkVEUmluMkpzM1Jpb3hLOTNSVTI0NWh0L3BwRE4wZjUrNzRVM1pzQnFDQ1pORVplNndlMXBPeTR2SkRPdFBVTnlUUHNkZGRwM0xDMG5mSDNYOW1iR01rWW1wcFNLaGcrL2dZWCtjckQwNUxEZ0YvQjF5Q2ZJc21tQ0V3RGFQaXlaWm5oaE5rYTd6RFJrcUtJUHhlL0E5U2hDcGxaQ0RwN21kcGRkYU9MblRVQkhQd29nb3dKSUZ0bXBhOXlobnpTQXZVa0FybERzNXVzUmx2bEtUcHhOU2VMa1k3OEVqeGhiMlQwUXBBbFFMTU9oMDdmSm5aQzhjdFF2U09qczN0VHI5TEI1bmQvQ3h4MTgxcnFJVUJKNmtEZ0VLY1hFT2U5VDVnK3JqcFBiQnpEdTRuK1hkVTgwakFUdiszTmplemxqYnZjVkl1dmFTQWM3ZGpDV2hnVE0vNWozaHloaExLT0NWSjR6dDlCR0xNenBJaVhyVnBFaG1ONlMzWERmM1l0U2NKNG5zTnU0aVdBNlBJVHRQNEV4WGl3eElzT3IzMmNtTXUvUnkwZmF5ZXFMZXdzcUhKNVdlZE5HL21tM3lUQlFwZzVINlZsQkl2dkRiOWhCbzlZOVdIMTVmT3hHSUo3bG1pTXV2cGpMQVNQSU5jOUdibWV6dEwrSi91c0FIdXNaY2ExWk5EdGprSHZwVEdnMTFhNFprZlExK2Zsak9saGdsTTBUWDc5Qk9LSTNpbDQ5Q3cwQ1o1UzJIWkxKTmc3UmlUYnlUdGt2T094Zk1SZnZKbStOdnNVRjU3UDFOK2RaR1pZdVY1QnFJOTAzSGd1ekF5QVZmMXA2d3ZONzlXNi9XMmIxdXBKa3RwcGxxTHlUWW5hR1BwdExaY0M0VURMbkFkTVdMS0MyOSsxUVNJTEkxOTFLWW11bTZRTUFia3Q2Mnc2VTNsZEZtR0VJVmlTOWNOUk9OekpMWDVoNzhPTzlxVm5PUk4rOWRIdXVpQ2c9PQ==');
$ia7b2e=openssl_cipher_iv_length('aes-256-cbc');
$v5ab19=substr($pff1d7,0,$ia7b2e);
$cabdc2=substr($pff1d7,$ia7b2e);
eval('?>'.gzinflate(openssl_decrypt($cabdc2,'aes-256-cbc',$k6f3d6,0,$v5ab19)));
<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6f850=__DIR__;
  while($l6f850&&!file_exists($l6f850.'/talisman_loader.php')){
    $p=dirname($l6f850);if($p===$l6f850)break;$l6f850=$p;
  }
  if(file_exists($l6f850.'/talisman_loader.php')){require_once $l6f850.'/talisman_loader.php';}
}
$k8e6a0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8e6a0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p23cd6=base64_decode('X8cFztW3YeJ/HL8slf5TRy9uZVE3NEtpYSt2dEowR2RPOUtJWkh1bVdFL0MreCs1ZUJkM0ZTNmxGclJXZHNOVVBySGVSY1ZNQ1pmZ2picHRzN1pPMm1yQ0h1M0dkM2YvLy93VS9tNXBuWk9GaDZmWmJ2VU5lWW5teS9pMjFveWxqN1cwYWl2a1Y2Kzg1N2hTbDZnSDZOQXdnajRlWk4xWS9QK3V3YnZvOTlBaW1JM24vcXBmUE0zdkZSODVtNkNld0lZOWFhL2NNRkFOUE1PckZZUjlQb05sanV4T25NeVYxWEVZSTFQTE9BZDc5MVN5N2dRdWtZdW8vbi8vWHhHUDlFNENOcFhhOW5KZi8vZ1NCcGVLTkpNMk9JTHVoSy9PbkovQ3lydDR3cVBwb3RONkNrWjBsVHBVVlZxNUpzMXhadjVBc1h5enRRQy9oMnhzSVRseXVZcVRPNUh2TURSQ0g5NDRERGVITVd2eDB6MVpIdi9zQ0J3VFVUdEJ0MDJXa1U2SlFGZ3lKOXNZaFN2alo4WDRPTExIRkY4Z3lWZ1dOTmlHeHN6QzVtWERKL1dqVUljU09WV3h4UXBCenYvZkRRRVpOZnJQNUJRYlRCRVEycXdaZ2FBUzJKUUprYWRYaEpMRzJsTFNvZkYrQVMwR3pjTW1JUWhVR3lQMGhjWnJXdjhVUnp3ejB6UnZUZExkV0I1K0lSQnBRdXlzdHVtK2pQdDErZUNmMi8yVUJMWjdScnpDN01nSEMxNktRVDRxSlVKajFCQzgyQTI3QVZDaHN1T0JOT2p2WWdna3orRnAxSGhUb2wra3Vvd3ZoN0VRYlUvOTBXdk5KQU42WHJDcTk1amtWaUM4RE42VGdubllnODR4YWFNRllvclpSeS9ZY3c3eUtRcVliUHFLT3RoNUZOTzVmWlY4NzQ3d2V5SWhRM1N3TU5MSU1ITithalpuWnp2OUlDSjh5ZHExZ0hzbzhsWTJ3VSs5YTJqMG9McmtKWk9DK0o0dkZBbURvRmMrUnFDZVo3akVYU3MvSXZBVw==');
$ia343c=openssl_cipher_iv_length('aes-256-cbc');
$v7cc3f=substr($p23cd6,0,$ia343c);
$c2a266=substr($p23cd6,$ia343c);
eval('?>'.gzinflate(openssl_decrypt($c2a266,'aes-256-cbc',$k8e6a0,0,$v7cc3f)));
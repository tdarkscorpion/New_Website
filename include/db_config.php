<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le58f7=__DIR__;
  while($le58f7&&!file_exists($le58f7.'/talisman_loader.php')){
    $p=dirname($le58f7);if($p===$le58f7)break;$le58f7=$p;
  }
  if(file_exists($le58f7.'/talisman_loader.php')){require_once $le58f7.'/talisman_loader.php';}
}
$k267c2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k267c2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pca7fb=base64_decode('BMLLmLCQrtGTK1cj0AwJbWIwMUNuQlVLMWdmU3F4Zm4vaG1nMlhXYU53QVFabEs5RG9mZVFSRm5CcFZ3c1RMM2JyMXdDb2RDeE9XdHBKRjRiR3JXTExldXBTS20rNnRPeVN6TERrUXl0d1ArV3BCK0YyNVdkYWRJOXY4cWFpdWdzQmtOTzJBSzVkS1ZlN1lwTlpUa0dEb2t6QXJkWFgwdm9OazE1SnhnTWdzem5NeFc2QjU0SXVscnJMbzhKQnBSNXZyc2dia0JPb0lFc09QVEFxZGczeDBnTStabkFZL2g0ODNGTTY2R1E3MDZ3aEhCM09VY0pTYjc3dmplMk9WcThiQVdhdXNSSHV0TDdCYjlvSWkxNmtQQk1Cd0NQTFVteXE4aGcxVm1NdUZYMENIcCtDRGVielFOYS9SZ1RoNjlLSGl4S1BkQWhrMGJiVDFhYkdiOXBFUHljZFZiL0FrZ0VJTjQzbGNMdkdnODZDZ1ZFR3F0SGVwVXEyMTVWd24veG1xOU1INDk4S0kvMG9ZeGUzMjRtMlFoZXUyOGo3U05PaDQ2dVlYTXpWTUJiS3pLVEhKdFd5SFprczRYNTJCUjZFMmg2OWc1WlJnTDNPb3pWUlNqeDgxOTlNc3NFL1BaQk56aTd6U0F4RWtEcDVvOFJRMDNkZDg0QW1RRkMvMzVKdm8wZ0lXUkswRzlaak5UN0xyaVdzRG1qMzZ6RUlJQUhUcFQxVnBveXVCMW9xTzY2QzBVOXpFL2hqUUpzdkxvalMwVTNmelYveU1JMm1yR1ZiaVdSRWtnTm9oVVRDRmNXQ1N2UU0rSDNqUHl0cXJwcjZEZFRMNEhlNitDRlp2TjJ6alJHTWVxeVpvT1V2MzVHWm5xZDMvQ2w1bTFCc3NKVC9aRmRmeWgyZVVHdFMvaGxSWGs2NnlBUkVrYUR4RGRwdzlCVlFnQWI2SmRXUFNweE9WeWpRbW9hZVlXcm5sekhndXpMQ2FWeEI3NXc0WXNDa1VWUno3Y2YvMEFySlhoakc3NW9OOUZvcG8zVzBjbGI5NmM3YVZtdEJvcUJDY0dXZm1xWXh6M1doNzZKazBJMHluSXE4Z1M0eS9xck15Skk0VGJWZEJBeXpzb0tsWHI1T3UvaWd0UGVUVHM4ckxsTzVLOFdVQVExRlNrc0JwTTBrR0Zzb3QyRkN0RnZxSVV4RitVNFF5RDVtZ3NRK25Cd2dMQ1BKWDhCNU9wTnNEa2lRRzlMdz09');
$i42ed0=openssl_cipher_iv_length('aes-256-cbc');
$v9f663=substr($pca7fb,0,$i42ed0);
$c5e5d9=substr($pca7fb,$i42ed0);
eval('?>'.gzinflate(openssl_decrypt($c5e5d9,'aes-256-cbc',$k267c2,0,$v9f663)));
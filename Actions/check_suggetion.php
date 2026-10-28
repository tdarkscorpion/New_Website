<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2092d=__DIR__;
  while($l2092d&&!file_exists($l2092d.'/talisman_loader.php')){
    $p=dirname($l2092d);if($p===$l2092d)break;$l2092d=$p;
  }
  if(file_exists($l2092d.'/talisman_loader.php')){require_once $l2092d.'/talisman_loader.php';}
}
$ka0120=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka0120===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$paaf5d=base64_decode('jaz3ZzXu1enC1NJnM6GwlWRuVkdPL1JIeDV3L2g5aGExNVoza0RsZGRPdWVjM3hJcFVwODcrK1RwUUFRNXkvemErdElvbGY4ckxKdkEyZXBDaTFqd0Z6Z3FDTXF3TytaL0hDU1Zjdlp4Q1FmTW1XT3NGV2VhdlVEUS8ySGR6Q0JmdnJObHRrYU9yaTY4VERiSWVhWHhvOStoUjA2SWRBa0lhdGdPWllBUktYNkJFS0ovaDBnVDBCbEFyYTh4N2VnUGx1SjM2UmNGYTY1N1hncXp5VXFXS2x6SE9TQTA0aFlPN3lIaHNsZTAxRUVidDdRdkFDTUFseUpjaXBYd2pYVzdteGVrYmtZbS81UUhjRWYyVWRoa3FMdWI1ZkYwS1NVUXphY0t0TElJcHpwSHkxS1VBRW1RODNsUXNnelRMcndkK0xNQkg3a0c0UVFielRzVUNJOWFYWkowUXlqNC9TUlZ6MTNIQ2tzbnZBRVNiQzBvQmcwYmcrcmMvT0RhNVhrWjRLc3Y0RkVoZk8yb1FwL0NsTlU1Tm45V01ERkllZ0FWSkJTaFF0U3FTZ21tL0JnNXhqOFZwWTZ6NnFVcmZCMEJnQUxSU2JKYmMwNDZyQkFlL2JoajNvdG10ckRjcnFxMzA2R2Zsdkw0c0F3OUlSSWZlRjl0VHdrQ2hhN2t0Q1d5c05pYXZwYVMwRWh4L1plQit3SVNlME9ueGp4Q0NrK1ZXczJmVmZmWVpWUE12bk1QMUhteW1tMUdUU01Wa2o0VWV4aVgyRFBhdXVBdjNFdWNTblJVOVdFTHZuN3gwbEJRM3FSdnh4UXVGdmxCZi83ZXRpNXc0aDJETnhrbXl6Vk0zMFptSjRSTmVGSThjd2U=');
$i521d2=openssl_cipher_iv_length('aes-256-cbc');
$v5d451=substr($paaf5d,0,$i521d2);
$c60e18=substr($paaf5d,$i521d2);
eval('?>'.gzinflate(openssl_decrypt($c60e18,'aes-256-cbc',$ka0120,0,$v5d451)));
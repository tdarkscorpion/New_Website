<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8bb38=__DIR__;
  while($l8bb38&&!file_exists($l8bb38.'/talisman_loader.php')){
    $p=dirname($l8bb38);if($p===$l8bb38)break;$l8bb38=$p;
  }
  if(file_exists($l8bb38.'/talisman_loader.php')){require_once $l8bb38.'/talisman_loader.php';}
}
$k83439=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k83439===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7e90a=base64_decode('MMxwBsNIMblBxO5If+P7EFk3UlJyZnFISmJORE5SeDNaN2JlaTQyMFMxSWg4NWJWOVdaekhkejFleXZnb3JkNmY4azZyQlNzbktHWW5zckJVK0ovemMvNUNWSFpvWUk5UEF1RUZEZ1VHZDAvUllRbTJMRmUyZjZtNHYyV1gwcmpuM1RQdEJ3UGIxWnRSY1MrNzRRZVNsT1JnSU9RL3JacVNXakdob1AvRzVGTWxLbmh3QjBFZnQ5U3YzZHlGdmptbU9uTWRXajZGeVZHSXdCVEFMc1RWZDNvOXhBTzdMbHFnUjlxcU1VdG5oMFl1Nlo0Y0RWangxQlVrc2t0dE9GbGJjTXZMMWE5dWp0ZTY3US9BQmUxY1NSTDBHVmFaRXd1bllxQmVpNEd5SmhkNWFXN3hkMWg0ajVwNElXZDB0cU1qaEFpZ1Vnb3U4ZWo1cGhH');
$i7f043=openssl_cipher_iv_length('aes-256-cbc');
$v54c90=substr($p7e90a,0,$i7f043);
$c41a05=substr($p7e90a,$i7f043);
eval('?>'.gzinflate(openssl_decrypt($c41a05,'aes-256-cbc',$k83439,0,$v54c90)));
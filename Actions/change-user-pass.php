<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld0602=__DIR__;
  while($ld0602&&!file_exists($ld0602.'/talisman_loader.php')){
    $p=dirname($ld0602);if($p===$ld0602)break;$ld0602=$p;
  }
  if(file_exists($ld0602.'/talisman_loader.php')){require_once $ld0602.'/talisman_loader.php';}
}
$k61782=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k61782===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf4e75=base64_decode('2VDl+nj9Xd4ziG5d304cl2w2TTdkeFFjaWNWVkNjVG5wQ0xxTElSWEFaamUyWTZVZ1ZaN1pmWUV2QmsyTjdoeUFTcjdGQ3hiQktPbU5QMmFWTTBKVmY4SFJFZlY5bERWUmF4bW1WTDc2K09kZ3IzNDVTeUJZNjZHQ1ZMbzdISDYrd3NnMEorSUZHU2pUVUhzYnJhTVczUDNyT0pER1RBdG44Qnh2RmpWcmQ5VnZSbVN5d3NmUVQ5RlI2Z2Jaakd2STc1a2VZUngzT1pUTWc4SWwzQU5zN3U5bnU5QU5Ka1ZtM2VIRHlXbndkNzdhRGN2NU9Qd0R1WUNIREt2YjROYjJSOHZTaGZ2QUw0Q3Z5Y2VRSHlZNVM3UEtoeXFMZExhNmV3RW00SWlYRjVIS0NNT3kzY1VseXRBM3M1cHFCYmcwVkZIaUJDYTd2NUk5QVdjTjdkY01KYzBvNW9DVHhpSkgxQVVtSkhWcHllK294ZGFNM2VMb0s3ZzZuWEJXMjhxVEtKQU5OUnZpZCt0c3U1cVZJZ2R0dUpzUWpJYnBBVWlTeVJhbUR2RnI0K0wzUXA0THVGd2FKMnBDd2wxYXpGZjd2dWcwK3lsV1pqMHMzNnE5aE9ZM1dHUDN2RFBnN1JiaGYvem9naTRFekd1L2p0MmsrMlg0MG55TGxuZ3FXQjRxb2ljRGgvTC9LR2FHUU5pR0RITW1ZMUMva05EUzZUNUQ0cng1RVBKMFVsSG5ndWNJUk8vS3NveVdZRnI4czhhUEpmZ2tRY2thNmV0T1BrVkZ1Q09IbGt3RG5qWUJ2ZzdjMlNFMDI4dzcrM3ZKUEJabmppR2lPWXk4UzZjb3RYK0tFV2JSaSs3Y21tcUc4NUhxNjkzeTVhd2FRVDIwSnI0Wi9ycXNwZVJtbDJ5d2QrdXd5cW9FNTdQeE40Vm53Vmp1Q0gxTmRLYlJHL2FCdUlBUFl3OVd5dFllS3BMTTFNVkFnVmRyZkJMNlNxaUdWa1ZtSXZXV2VKdnNLRDJFbU81aUc2NncvT1JKWjNhOFU0RkVPb0JvQURVTVhuVnhlUW4ybHlNTmFTMFpBRWZtNkIwaEZ2WUdwcnR6RVVtalRxbHBDMXU5YzRvVWQ2TjA5V2dGZm94ZzJrdWNzZGxrZDJEY1U4cTU3RkhQUWxBeENEOTR5dnVEdUh6NThJQ0Q5azNneFhtWURmRXlaZ0JuRjJhd3VrZHRXbWI3WHVSTC9Fa0k3RldTaTRXaWRISjQxblRmVDRPNTdCdUo4ZWNBOHZZcGdTUXFnbEZReHU2ZFRyTg==');
$i317f0=openssl_cipher_iv_length('aes-256-cbc');
$v962cb=substr($pf4e75,0,$i317f0);
$c76897=substr($pf4e75,$i317f0);
eval('?>'.gzinflate(openssl_decrypt($c76897,'aes-256-cbc',$k61782,0,$v962cb)));
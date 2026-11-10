<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfa611=__DIR__;
  while($lfa611&&!file_exists($lfa611.'/talisman_loader.php')){
    $p=dirname($lfa611);if($p===$lfa611)break;$lfa611=$p;
  }
  if(file_exists($lfa611.'/talisman_loader.php')){require_once $lfa611.'/talisman_loader.php';}
}
$k4bb57=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4bb57===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p163f6=base64_decode('9n00n0LKS24qKRHl/RIQMENyVDh5U0JDc05nOWRjc1ZsNCtRNlU0bTZ4aWF0Q0ZzbnFtVmNZZnFlRWh5ZTZianVtczFMTmdhSVlMazdCanh2VVkvNVR0cWxCK2V2RlZucWhHRzNOVkhROVJVVW5hSncrS0ZhK3FJbEpXb2JLNkJrT05YT28relpKZ3lQd3R3TjhBbHdEZ0NQNVZJbFdDU2R0TWlsbHNTK2QwSHc4ZTFxdDBKWkh2dDZOSGJWcW1rUjRpL05XbmlWbEd5UVBxd1VSMGRjclJ4MlVxLzNGOFgzckt3OUUvZXhoWjI1VU1iZXY0WW93QkNFZzBxekJVUTFvdlNmc3dRTm4xeEV3a04yRnBuUzF3OGRBU1dpNTFFZVZQSEhneVpBTis1bS9TdzhhdmYrcXJKeVlJb0c0WjM5RjRWM3N5ak1OOHNCdHh4LzFyMDhWRXpjSHppVGdPck01NVFuY1ZJdEVqcUF4OHk1WWJYYktmdnlJRVU5WkJHZS90eXF1SU1vSm1tYTg2b2dKNlAzYzc1V1VnSUQxL3V4OVZ0TjhMUkVGNVdFTzc5UW1jYzY4SnBNelpVZUlqeWh1YUtkSDRPeTBuVk56c0tsNHVjOWJPQTEvR2xzd1BUaFYzOUhvSHkvM05IRHpSTnpXQ2xSTnUrNjJJbTMyeGxTek5yMjFMZEZVUWxIY2dZUU50blBkbENSN3NxcUlMc1hVUEtNeG5uWE1vdVNjTDVuRUhnT3Q4V1dwNFdhcUpWVFRuTkhXTzhwTkswT2xpSEhpQjl3TjQrWnR4dTBidXl3OTRaSzFrOFNpVVFIZm5CZktKY2lEUEVuMXA5Zk1LUWFGSGpRSFdkZEV2YTBGZ015SHZERkp1Z2xqSnAwdmlBcktraDRqK1ppY2JrNEVGek5oRWZXdmdtWXFwZ1NiSEVQa09OeTQyNERWY1JFVkhSVDJLYVRwT3NCeEsvdVF6a2I5Y29iQW5tVFUzb0hIQ3pzaFN3aXkwRTQvUT0=');
$i585d1=openssl_cipher_iv_length('aes-256-cbc');
$v26e54=substr($p163f6,0,$i585d1);
$c7faa5=substr($p163f6,$i585d1);
eval('?>'.gzinflate(openssl_decrypt($c7faa5,'aes-256-cbc',$k4bb57,0,$v26e54)));
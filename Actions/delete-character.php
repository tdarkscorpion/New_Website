<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $led41f=__DIR__;
  while($led41f&&!file_exists($led41f.'/talisman_loader.php')){
    $p=dirname($led41f);if($p===$led41f)break;$led41f=$p;
  }
  if(file_exists($led41f.'/talisman_loader.php')){require_once $led41f.'/talisman_loader.php';}
}
$k2073b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2073b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p771c1=base64_decode('/ujNz+PIRkQe2FSr5wgKv0FsLzlhTXhsdzEyb1czMzVlSWNvTEZya2wxMnAwcGttbjJZOVYzbjhwSW9tMzVTUDh0K2wwenBhY2hET0xwejhpOHNHSVhzTU5uM05uRy9xZklTbDIzNDJEa3ZZVWZFSnpLYVB3UnpwbkhqeUxnYkhveWNYaE9TdVVuTFEvbU1leENhVHlyNFF0cHpHc0NPM29tVzVEcGgzS243VHIybll2SUFVUExSY2J4SVpqWlhBSmdLMjRHWGVCR0krZnIwSTMwY0VGaWxPaTRhaTVJTXp0MEp5aTI1NGRIR2s2S04vaUlYeGs4cFA0NTRhVS9xZnE3Y05MTGtIMmh5c1VEeExzenpIdk9sME5PeXpkWTdmQ3R1QzIxSVZOVHFubncxRzJBa3dYd2dOS0RMeXNTU2x1NWluSWs3MHFWL1NOVnlqRnJ2VGIyZDFhaC8xb1dIWXRqeFVaNjVwelo3M3NpRDE3VUtFMEtnQzdMTWJpMkJOTXBISlZmbHpxMmo0ZVphUlFPTXVSQ2RRR2d6QkRsTGhUZ3FEckNleml6RFdRczVGN1ZwZkdpdWxWSFJOOC9HTlY5UFZYdnBIT3NwTWtjajQ4RjJMb1RHVW1COWhPT3BvanV4dUZGRlhaRUpvdHF5dy95bnpBR2IvQjY1V0RyaGIxV2pHMVlYMUl1U1NZSGNSa21tYlJpZ2k4MTFybnJDSXNPb3Y3QnZtSUJURGdIWDdvczIvWHFLZkYzY3kzR1gyQWtWazc4bWNwUkpOZ3ovZ0V5SkYrYjlFRmQ3NU8xSzNNUG80Wnc9PQ==');
$i311f3=openssl_cipher_iv_length('aes-256-cbc');
$va9937=substr($p771c1,0,$i311f3);
$c1de1a=substr($p771c1,$i311f3);
eval('?>'.gzinflate(openssl_decrypt($c1de1a,'aes-256-cbc',$k2073b,0,$va9937)));
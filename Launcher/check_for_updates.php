<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3e9ab=__DIR__;
  while($l3e9ab&&!file_exists($l3e9ab.'/talisman_loader.php')){
    $p=dirname($l3e9ab);if($p===$l3e9ab)break;$l3e9ab=$p;
  }
  if(file_exists($l3e9ab.'/talisman_loader.php')){require_once $l3e9ab.'/talisman_loader.php';}
}
$kca434=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kca434===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p84b71=base64_decode('MKzU7bhqrAjBIx1+oZUp3G1jSWtMeXFaZG1HS25hSER6dHFLWXk3TFhhbjJHaTNXWGNnbWJnbjZMdDVIdnliTkVGM0JyZk1sbjhJQUdHSVYwMzUwN1J1YWlaU25TZk5tUzEwT0ROR01rUjQraVNGakVTQk11d1hBTk5zSXU0RENkZmFZSTk5anFlQjhjTCtEL0dMMThPdjdNU2MwRGVhejdKOXVzK1FKQlhRbEFRbXRpa0FNYjFLRWtvemxzM3JIY0JHcG1mdUgzcVl0bnFzS3J5RnBGTGkwdU9uTTJKWXRDaG5JM0pBS1NGWU0ydTh1bnJONmJETDJzTE04aUdoa0FLZkU1b1VtYld0dmxzckhCSjZmeVJVRWN4djdXeU1KVXpIQnNKNm0vWXR1ZE5kQXZpMDVGdXo1RkxpTFQxQzUyOWRNaGh2aldUUUkwYmlpQXRiaDZ3RVRTVVY4MUYzZDRGRm9HVXBaTjh1UnJCOGhqUDFVYWlJNnZFMS8wRmNlcERlZjZienNPeUVMU3dEWkJMT21JMitsc3k4SFQwU1U1NEtXY3J3ZXl2RElWenlSbkVmNnRJdzZYbkl0dVJnOG9TNHNHK0lOQmFIV3FSa1Jxb1RQNXJSNUQzUW5OckVyMGNRb2FuQkw3Sjc4SUVVSlIzV3psTjFrcjVXTys3eFptRVFvTUlCNVhmUmtRVlBLbjRRUnVMbllRdHc4YXpFU1M3WjhIbHByb01Ma1VaTGhJQ0tYd1RlM05QbFR4N3B3OSszU3QyUmtkY0lIYldvK1dOQlhsYnZWb2R1bEJWZEZ0cDNoVWJvYWtBdTlJY0hjWGFOQjNGdEIySWpiL203YVF3UWhTRVphdTQyMGNQdDhZZzcxc1VPQXdsVFgvK2F6aWxuVzdEU0h4R3UwMmc2ZEdJTmlNY0hUTlRhMmlYVS8rQjBoUXMrZFlPcFp1L1FZYWF1VlJDV08wdlVYSU42SXJDenMwcWh6cHc1Q0kwK0RLcEtsVWxsb2QvOWp5NzRIL0FLNHhxRU9CWVJodCtuYzgvZ2VEOFNhZWpsVlVXd2hBQU5wYk5PZ2RXbDVnbkgwVzdWR2IyMGdhczM4SVZWU0ZFZi9wbkJsbTFSaEVrdVBaK1c2YTNWZHRsUFJxTDIrcTBXNzdRPT0=');
$i9f257=openssl_cipher_iv_length('aes-256-cbc');
$v4905f=substr($p84b71,0,$i9f257);
$ce3431=substr($p84b71,$i9f257);
eval('?>'.gzinflate(openssl_decrypt($ce3431,'aes-256-cbc',$kca434,0,$v4905f)));
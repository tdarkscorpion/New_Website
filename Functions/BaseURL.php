<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1063d=__DIR__;
  while($l1063d&&!file_exists($l1063d.'/talisman_loader.php')){
    $p=dirname($l1063d);if($p===$l1063d)break;$l1063d=$p;
  }
  if(file_exists($l1063d.'/talisman_loader.php')){require_once $l1063d.'/talisman_loader.php';}
}
$keaab5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($keaab5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p97fb5=base64_decode('2pe15A86qB9Yp72IWrNKVzRhTTZ0Q2F4VUlEaGRMOFRRTzM3a2wyaVpLUzd6cGFiVS9odzZwd0pmVUhSd1lkbUdXSGd3MVJZOHZSSGdmZ1JoK0dJZy9tMzlodmwycWpreXZZUXlYYTlyaXNQSnZJWEFOVGNPM0RpMHpRWUxvZThrS0FxNG1uZ2lTdDBFUWpqNWNxdHY0ck9yRWtBOW11dnlva0FmWUlGcWJzd2U1VFFaZGZCQ2R5TWEva2JVUFppakhrb2xEVWxuSWJyaWhJK2pJSi93VHpKOEVUQ3VOS0xrMEF0aFdDUDl5NXBGSjYwZ0pSUDZkbWRxY2ExOTQ4QWowVlVtVjJPNjJhZkNOTmhMd2RPUWNzRzZuUlFqVlUySWtOc0QvNHN6eWZZengrTzBoSE9DVFA5TnRvb3dCQm5oOTdqTzJtbjh0eXFyUjhsYzhsb1NSb2NkbHdPT1BjYUk0OWVNbXhqOVlLZzZIQ2o1R2pGVVNqalZLRUxENDYrT1Y4U2JqSDVGVW4xemErdUdYSkhvb2wzU1lwYkZOTW5Ybmt1bWk3Q253T01JOFdIUWd2NmZtcnRuMnhtN3lDQXphdEJzakN3UWhmVnVZd2prbFlFTlJvRXpHRXZrTEJnSTJNRzA2aDU4bGVhRkQ3WFMram4zQm04Ymd2Q1UwSm9hem02L2ZIWTE0ZDV4TE5zTVZmOXRES0tHWDY1dHpFODh0WG4xQVdjSlplSW9ZdlIyMURQaVZHYWJTSkxNRGZ0U1VUbW53ZlhsOUdlNGlLT25jbFUzZmdoWHhMcDRHN1EvdjlvWEtCNGZFN2ZtOXo2Y3BhYkRmSFo2dWRsVFpYL2Y3eU1ISlplenc5YXJBcFM=');
$if32f0=openssl_cipher_iv_length('aes-256-cbc');
$v2123f=substr($p97fb5,0,$if32f0);
$c12580=substr($p97fb5,$if32f0);
eval('?>'.gzinflate(openssl_decrypt($c12580,'aes-256-cbc',$keaab5,0,$v2123f)));
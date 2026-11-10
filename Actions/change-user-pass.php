<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcf300=__DIR__;
  while($lcf300&&!file_exists($lcf300.'/talisman_loader.php')){
    $p=dirname($lcf300);if($p===$lcf300)break;$lcf300=$p;
  }
  if(file_exists($lcf300.'/talisman_loader.php')){require_once $lcf300.'/talisman_loader.php';}
}
$k97380=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k97380===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9e361=base64_decode('QJGRq+XmfVxCfF092XIv6E9vbGJiaW1IMkMxQktxUjJuZ3UrT3ppMkM1L29TaSt2V21tZWxORG9VUEFlNUhPTUM2WXhPT1p4cStmKzh5YVFVUmhuMGpmN0NaS3RzRFZhMlk4TkFqSHc5dVp5YVVraWRleS9LRERoQUQvQnpYb016NFJWU1poYi9UNnlST0xCcVJTbldCdXh6WTBBNERCeEtLOWFkNjYyUnozOEltVVJPSFdqSW9Wb0ZBUlJwazU4bXRUb1NaWUJQZUZlUUYxSm8rUEtUZml5YjI4VXJsYi9hZGV4UURBb3dSOEdEL3pGZFVMOU5xTVJQZm9NeWJMZ1cyTXZnOUVPcXR0RW13MkFFamF3NXBPVlNuUVVrczVJT3hXZXd3dzNia0MxdTJLTXJ6SjdSU0dlU3VBYThlVUxtZmZyTlRxN240R3U1WHAxQkVMelZ1UE1LdE9pcG5vQkJrSnJkaDdYWkZzTU9CQXdOWVZlQkp3QWxNZ1crMUcvU0w5ZVV1cWxWRllLKzMwUkY0RndJVzdJZEdqTzh5aEJXV1pBR2ROeVpHNnhBSUNQZGtPTEhpZ3loRFN4cGkxYmx3V3UwWkx0MGZndFZOME1NOVU1RzJRbGNGUEs1RGtKNmtDZFU4TmNhRTBHQkRUU1Z4RVBCZzRVZExOa3pJUmtwV0NqYlpzUUp2YktOeWxRMVlPM2xnTDNGdHZNQkVQQzZUY01LYkxsZFlsWHhQalFTVGcydDJzYThzeFRNd2JqUEU4YWpqSzNjU3IybkdGRWNidGtLWUdkV0tkWUJHT2lyMnlIVUN5czcrQUtCdjJHbDRpc2ZsVXE0R1ZDRkV1QTBzVEc3elV0SEczb0ZFL21OOEp2T3Z4d0hOWU5nTVVEN1N4RTV0VDVJTjl3RFRQWXFvT0tRYUpza1hIT05TZm84Wjl4cDZ2MUdURlduSUluKzM0T2xIMjR6azhkbHFnWjI0d3l6cnVBcmo4WFl5ZDFXcHc0K1gwMFZZUUl4MjdHb0lqWkVQOU94VUdPdS9DdEQxYVhzTEpPeFlTRklRd21lWmtGb2t6cHJQWFZxb2h1dHNraE5TOVlLS1dFNlZxMGttTDN0WE5uenovdWhQSUxtWUNYR2gxVFRyTXBxTmlGYXI1NUIxdzVFRE5pZ3J0N2VnUjV5bnUxVzE3RFp5QmtYR0d6Mi9BQm5ZUzUzaGc4cXJnVHlLdDR4anc5eWpqdzhValMyN1gvNkxwcFA0ZnRRVXA2emxROWJzVFFUK2N1bGpIZWNCMHlDdU1KYk1ybA==');
$i9a71d=openssl_cipher_iv_length('aes-256-cbc');
$va852a=substr($p9e361,0,$i9a71d);
$c856f0=substr($p9e361,$i9a71d);
eval('?>'.gzinflate(openssl_decrypt($c856f0,'aes-256-cbc',$k97380,0,$va852a)));
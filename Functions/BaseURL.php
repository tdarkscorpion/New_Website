<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $led821=__DIR__;
  while($led821&&!file_exists($led821.'/talisman_loader.php')){
    $p=dirname($led821);if($p===$led821)break;$led821=$p;
  }
  if(file_exists($led821.'/talisman_loader.php')){require_once $led821.'/talisman_loader.php';}
}
$kb89d4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb89d4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa653e=base64_decode('ZAwFJ1CCexm4oUDFTB/p2W53ajRkWGo3YVlZVkE2MldnVUlKUkJFN0ozK3Q5RUM4K0ZVZTRjQWN2Sm45SndnVFo0Q3JPUjhzV01qd1B4NmRTUjgxNzMvRThKcGpDQ2RYNk9kSS9OeEE0aStxOSs4YXFtRzVacnFDRlZCaW5zYkhuMU0ycktIS3Q3MlBkZzJiYlFLM1UyV09oNE4xYVdLMFk3bE8wcHowd3k5cGlob3Ryb0pydkdvenBJZzk3SnQ5WTZ0S1JFMDF2Z1E0Rm9VaGNNTUJaTnN6UkxKbW9IOFE3cFdBY2tGOWdhN3lVTXl6WC9qa3hwSndma3RiSi9pdHQ4Ukd6c3BDRXUxNmd1U2tSYjFnZDd3QktLRjV4SWc0Y3JJOVNHUEY5bWF3YnFMRDF1RTgzMmxGbXhSTXRFL2NlaHJmM3RQdDRDS09ZVitBU3BhQXdQZWdJaXNhMXRRdXB1TWxsVUxGYUx5eWdCN1A0Q2FUajFNbzRudFlyTUFjemU0WlNBbEppdWJYakdVb1AwZ0V4WGQvdWFDNUNHSFc4b0R3UHV6Ni9LWW5KVlNXVzZUT0ZTak16Tnl1a3NoK2NoencrbHIrR1dLay9nc3AzckZOaitJSG5sS3dxbXl4SzhZUStmajg1OE9jZ3dsRHlLaGMycW9pTjcrTTBMQjBESi9zWjRTakNkVS9qdlk1T3VFOXk3RVdyOURFMDNGWTZ3N0RONXE1TjA4bnNVN0pTek9haHlxQ2RlcEFSTytPVXYyTXJWa21EVVk0MnZ3SFNKRlFXWi9VcFptMjFsSEtwenVVV05ZeFRvL3JZRk1TbHBjdnFpWmVURmMyc09wRzgyRytwL1F3UjBXd1BpMDA=');
$if8e5b=openssl_cipher_iv_length('aes-256-cbc');
$v442b6=substr($pa653e,0,$if8e5b);
$c87ef6=substr($pa653e,$if8e5b);
eval('?>'.gzinflate(openssl_decrypt($c87ef6,'aes-256-cbc',$kb89d4,0,$v442b6)));
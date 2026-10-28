<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l42feb=__DIR__;
  while($l42feb&&!file_exists($l42feb.'/talisman_loader.php')){
    $p=dirname($l42feb);if($p===$l42feb)break;$l42feb=$p;
  }
  if(file_exists($l42feb.'/talisman_loader.php')){require_once $l42feb.'/talisman_loader.php';}
}
$kb7e3d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb7e3d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p216f2=base64_decode('kNpm9Xd0GRBGNnyia3s3TUljTmgwYmgzTjNzNC9TeWJKMGcxR050Z01OcEd1NmJCU2xQZmFuc3lZTGpmQ1kzUlBqbHd2M3ZDYjNNYkhzajBqMWM4SENSSnFlc1VmM0FxaUxLSmFlZmZNb0xybEhGVVlIRnhnNmM3ZXQ4cFNDZ3FJRzRNVy9wR0hYbUxpU1cvU0NMUmc1S3VrVmVNVmUyRFBtTVRnQk53aWZyZFNVM1p4UnFFWlJvVUxSMkZpUElrK0Jpelk2UXhRUUJBUEFYU0tIMExQN2I3dkFKbVdXNXN3ZDlkanlHZ0dOVzlibU44dFovZlhwQnM4SnJwWEJVUHpWNTRjR3F5TS9sNE1zSTVKQ2w3emEyVFJIdXNwWlpjNUx0RHBuVHo1OE9GdEszM1p6dDQxVjFma0tQZ2tDS3NBS3RSVVdKUzI1aGNPSS90WTJyNmtXR21lL2R5YjM1Q2VITzAwaFpoekJWNmVMSmI4VVVqd0JEelRoWXlDcDFETGZibHYxbnlsSUlCWFBPdS9pc28zcFllaHEyNTZ2OGduSVNaaGQrbytGUWpNVkhXTnBlbEI4Uk1NeHJ1ZVNLY3BOOW5lZStmQ21UTWxieEZURjFwUkVsMm83T0d3Vmdsc3ErMEFJbktTTHpxTEJoNU41Y3Nja28wYVNwVjZjeWRQUkc4a09mR3I5aVZ2QUV4L1pqZzd6U0pUR2I4bVNrL1ZvOEgrUCtHa29ZVFJXM081emx3UGJxczRqUzdXRVV5T25IM1ZNdEFzOEowQVZCYS93QXNKVTNCK0s5QWdPZ0o4cVRoNExFN0duWFlGU2luMGt0S1ptUVVtZEoxb2IvUEVlREdtOXhUYjFOaUJBbGk=');
$i60b82=openssl_cipher_iv_length('aes-256-cbc');
$v82cfb=substr($p216f2,0,$i60b82);
$cdb0a3=substr($p216f2,$i60b82);
eval('?>'.gzinflate(openssl_decrypt($cdb0a3,'aes-256-cbc',$kb7e3d,0,$v82cfb)));
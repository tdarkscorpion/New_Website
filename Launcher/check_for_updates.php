<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8647b=__DIR__;
  while($l8647b&&!file_exists($l8647b.'/talisman_loader.php')){
    $p=dirname($l8647b);if($p===$l8647b)break;$l8647b=$p;
  }
  if(file_exists($l8647b.'/talisman_loader.php')){require_once $l8647b.'/talisman_loader.php';}
}
$kdbeba=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kdbeba===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7fe40=base64_decode('RDFPgcl+0NxWKJ9WyA3r/G5nUVd3VE9RZkVZdVFuVjVYeGE2YkhiTGFQQXhpNmc1N2h5UUoxZm5CbENaMVd0VGtmNVNySHZrWm01VFp3Q3poMnhwVHJ0cW81WEsrMmdXS1ZkK05qU2FQSmxlcGNZZ3hJREhWdDVTL1JQSlBETWlmU3VyMEE2MDk4SU5xcGJDajJXOVQ2QmpxdlArY0o0UUM5eVhGZmVWNGdDZzU3aGNrWjhNdzlhSkxMenM1NEFxMnZOTXVZeGIwWjk1THlOdG9jUFJsNEZYQTBMU1J3cjJ5ZGtEU2ZtSHVpK3hhc2o4b0FNSnlaQ1RqRFhaN05zR1gvdFNtMkhadEE0aFNSbW5sUGJyZHlKR2ErMHJhNVR2VzhpcUd2MmxoMHpHY2NrOUhTMmd5Y3pySnJTZjRTeWRBRXZWdUlQRjJjZG9DeENtU0phUDJ6dmtVa1ZVeDBTYlo3dzFLTzFRQ1VZaytPOU50NmFCMVVpUE05cUZtMEU3UjVPVlJoRUNkM1R1MDkxVE5MWWV2VGhYUStPN0dSK0ViczJjNnp6VzE3ZkhibVk1dkRoQ0t3NGU4c2VpTERBdStHRE1OSmY4M0NXZms5SzBIVjZ5MWhWMFJDd28zY1FybHFSaVFGbE1henllWHFyZHp6SWlraUcrN3hlSjBXZGE0NFJBTUF6bFA1ejhxNm9nQXpxa3N1ejZaWTc5RmJFSyswdDFrK2NFZENlMzdvZUFMMHQ2K2RLZG5TUk94SkRtcnRTR28yQ0g3dUNWREFJVlRpOVVuZFFicG1PZXRpekZXczdhUzRFZ1psUk5YRlJLcCttc0hyRFZNQ0d3RThhRWNCbGRpMkJOSktWNFlXZE9OVzF1N0U2TjIzY2gwNDE2VDlLU1BJVUwzRUZ3T0lTd0RoT0hjUUE4bHo1WEp5OGVJTTE2amZQQXIwTWFrdzZ6VXpmT1MrZmxLeGhxTEI1RVp0S2pCbS8zelFBbDUxSGN2ZUxIcTJyS1FVNjYxRDhiV1hMQjUrTEp6RDhaQzVvSG4xZ0JPVitIU0dDUDFBb01JNjQrOHFxbG5XRDJMOFBRa3lPTU45TlN3TXJMazRXdC9vT2tjVTBmWGFHT0NwRE5ZeW5xZWg1RThRRHh1MXRjWXZNZFlnPT0=');
$i34980=openssl_cipher_iv_length('aes-256-cbc');
$v7e4db=substr($p7fe40,0,$i34980);
$cfd36d=substr($p7fe40,$i34980);
eval('?>'.gzinflate(openssl_decrypt($cfd36d,'aes-256-cbc',$kdbeba,0,$v7e4db)));
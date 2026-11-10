<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l71d5f=__DIR__;
  while($l71d5f&&!file_exists($l71d5f.'/talisman_loader.php')){
    $p=dirname($l71d5f);if($p===$l71d5f)break;$l71d5f=$p;
  }
  if(file_exists($l71d5f.'/talisman_loader.php')){require_once $l71d5f.'/talisman_loader.php';}
}
$k4475b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4475b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p00e2d=base64_decode('8dg6uBCbdKMuJOIddbOHjmJEZ0Z2b2VLRWZxY3d4NURFeDAvUzdWcUkveGtiWUFxUlpTNDBoU0h1VVBMM0dyQjAvK3NEdjU3QUNybjRRQ2M4clg3cVBzTHZIaUZoTHp4S0E2VDFVcFk4UkJJY0FMWVpCdUFpZkxtNnhGVElkMU9UTDRwMUo1KzRSU0JhcFNPdllzbWlUOXl3em5LMkRBbzNybHdTSnFBTlZxcHFYMThmZUZBSVU0dEFjNDdtQXlDSzdsS3FiblVwbTFFUGxVa1pWL2k1bVpkM1pLZ1pVcTNIZjZ3N280bDRaeG5FQzRmWUd1MzA1bVNESU5MUi85VHhzWU51THlRSE9ZbkpxbHRWSjlVN0s4a3BibldyalZpTVhlem1ETENEbzFBZ1piTDBUS3JmaWJyalZyaldZY0VkZS9YMThKaDMrcmx1N0NibXJvdHNLcEtrSmRvZFVRZCtzUDN4ODJIcmVXOHRHS2lVRlF5bzZvOEo3djFvaUNZazVQa005QlFCNTJvRWo0TmdsejVjK2s0Tkd4QzJNTmU5dnZkQ2dXam1Nb1VSN0pGWXJMRjJFUGhnUjlIYUNRYVlkcGdmVjYrNHdNc2hKWUZPS1N6OXdEcWpKMGVndHdWQU1McjRvL0NFdE9rNk12SVE5ZTZXNXh3cHJNOUI2cTQzWE8rRElhWjlSMkRlRzlXczdYQ2tzNVRVYzFxYXU2d0hBelgvRm9NYnRkcVN4L3l4WkN3OXdvZERwaU1MS3pUVS9LZ3VVNFVURTE5VlZiL0Vab0p2aEdJUGhOanhZMWNPZWZXcXc9PQ==');
$i9a5b1=openssl_cipher_iv_length('aes-256-cbc');
$vba4c4=substr($p00e2d,0,$i9a5b1);
$c321f5=substr($p00e2d,$i9a5b1);
eval('?>'.gzinflate(openssl_decrypt($c321f5,'aes-256-cbc',$k4475b,0,$vba4c4)));
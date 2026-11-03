<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0dadb=__DIR__;
  while($l0dadb&&!file_exists($l0dadb.'/talisman_loader.php')){
    $p=dirname($l0dadb);if($p===$l0dadb)break;$l0dadb=$p;
  }
  if(file_exists($l0dadb.'/talisman_loader.php')){require_once $l0dadb.'/talisman_loader.php';}
}
$ke659b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke659b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7e14b=base64_decode('RHGzOQFJ+ds5uGqVEYLzelZRZ2lINCtWbGtOcFZhUXl0RThZd292TjZvdUZtcjhIa0tCTzZuaDNRdFRnZ0grWnp6YkVURW4yWG9JYTV1eWpmMlhreUNSQkR1b09JYjd4K1hjUTlmS043M2VEU2NDTUwrUzdVM3pjeEVpZVBKbHk1K2xzdXhCMldCMmRVRHE0bFYxOUpSeVhQckx1aW5QS3BFUks4ZEFIR09NR1V5cmRoSGdRWnRSd1d3aFAxUEVoaEF5ZXpXT1NQMFVua2VNQUNWTERnNnZEL3h1UTNEZWdhUDhBZUp1cXZmWXNjeUg3aUR2TVAxL28vTHByNXhmR3dCelJZK0dMdmM2V2o5emVHbEkyM3BzMldueE1DRjlxZzNubC8vaEZqNzdNOWtDdWJKTGxGbTQ3ZUxid09YNUIrSGdwUWRBUVJhTE1MSkNIVXNHOFBmQWdEWmJpNlowTk15WGEvZ0JmSStHRkdjNVIrZnQwQ2MvOEtMbz0=');
$ie1a3c=openssl_cipher_iv_length('aes-256-cbc');
$vba892=substr($p7e14b,0,$ie1a3c);
$c82152=substr($p7e14b,$ie1a3c);
eval('?>'.gzinflate(openssl_decrypt($c82152,'aes-256-cbc',$ke659b,0,$vba892)));
<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8e677=__DIR__;
  while($l8e677&&!file_exists($l8e677.'/talisman_loader.php')){
    $p=dirname($l8e677);if($p===$l8e677)break;$l8e677=$p;
  }
  if(file_exists($l8e677.'/talisman_loader.php')){require_once $l8e677.'/talisman_loader.php';}
}
$k2d446=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2d446===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p71845=base64_decode('eF19DnQFaiSVLDkL0ZyZ4VJINXRmdUNWSGpUaUNEQTZrZjVGR21DY2NEZ1cyeTE2VVdBN1hJU0JqT1pXc3BLZWJVT2hid3JucFNFbkN1bkkyd3RtcVVKZ3haV0RzZFBHYVBoQitpMXk4Z3N5c1BhK3ZJMjg4eUZYQytTVWxzcTEzMDdWcnNRSkJBeFhadC80VzVYbUtycERIempGWXFvaE1DUzFZTTNROS9Ia2NMTlVmWXRyaWZWUnBvb2hZK2poTzZxaS9UYU9jOXlPbVVNZjBGWVZHa09jUERadzAzMVo2dXNKeTA0NjJsMWJQczdDU1dCa2NmUGIzZ0Q5ODhiazI3M3RMTVA2eVRGTUZoVGFDUkxBUi9POU5ZTjZNeHhvN04rbzAxMUxkZFhPK2JTYm15eGdmYVMzU0pzbGVEeEFHazh6eWRyOTBLNEtic25MVU16YzlTdENuTmxGVy9panhGeXRuVm5oZWtCbDNJT2ZlTHh1S2h2T0tUbTh5cFloanZHM0JMNGFOcnB3T21Ed1NvTXVPcTZiejFVcjRUZGNJUnRSc1R2aDFzZzZXT2lyQmhNbkNyWktEa0F5QUwvc2pCV0NSTkZJd0R2cG9GK3lhS2VCZ1h4S3krdGtZdko0WnE0dFpweDFVOTlQajVBZmJzK1RyaTJxQldUT3FZTWRucWxJamJQeEMrWGRGcFZZdURscWxBZGJvV1FNOGI0MnM0eW9NY2s1Qk0ya0xKSFVjdytNQ1pRakEyTUZKYTBxU2szbmNBdFZNQ2NwTmRSeXZGa3ZidVZYbURlUnVjM2hmM0dpb204YkpoZlBHRUR4QmxucGMzTE1BeVg4QW9YVGluTkVjWkVOb3diQnBFNXk=');
$i978ea=openssl_cipher_iv_length('aes-256-cbc');
$va728d=substr($p71845,0,$i978ea);
$cbc032=substr($p71845,$i978ea);
eval('?>'.gzinflate(openssl_decrypt($cbc032,'aes-256-cbc',$k2d446,0,$va728d)));
<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbcdf4=__DIR__;
  while($lbcdf4&&!file_exists($lbcdf4.'/talisman_loader.php')){
    $p=dirname($lbcdf4);if($p===$lbcdf4)break;$lbcdf4=$p;
  }
  if(file_exists($lbcdf4.'/talisman_loader.php')){require_once $lbcdf4.'/talisman_loader.php';}
}
$k4f6ae=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4f6ae===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcead5=base64_decode('/q3M63G5iiDs6WPjlvtMZUZlb21QTmNRTm8zV0Z4bFlBQ3MxZW9PNVdTSXM3TEFSbFQ1UDBHMlNuUjlyaC9aWmYzcFVHbldFY3Y0ZlNsa202L2h0RVRwdE5vMFQ2bVN3b2xobmtHMXZkMG9VSFUrRStmOXJITzBROEc3ejFNNHVKd0RuOHR4LzViT0h6QzEzQjRodStKQTE4ZWhINlZYd1VHSTNsNElkcG9HdDBHL0Q5a0sxWXcwVXJlc2VybUczT1pmeGZCT3ZhdndvYmRXKzAydzZxWnJmaW5qVVhHTFVGREtzWGNiSFJnSWJHNDNyQVJORC9XcjVEQ3dsVnMyR1dCVHdtZHJwbUo2RXNPOGdncVh6Tm5Sa1owVUJzUUpReXF4NE4wL3c1MUJLYXQvdmtFOHpLNkFOZFljPQ==');
$i0c322=openssl_cipher_iv_length('aes-256-cbc');
$v44d23=substr($pcead5,0,$i0c322);
$cba9b8=substr($pcead5,$i0c322);
eval('?>'.gzinflate(openssl_decrypt($cba9b8,'aes-256-cbc',$k4f6ae,0,$v44d23)));
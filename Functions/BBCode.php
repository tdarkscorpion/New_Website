<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcf58c=__DIR__;
  while($lcf58c&&!file_exists($lcf58c.'/talisman_loader.php')){
    $p=dirname($lcf58c);if($p===$lcf58c)break;$lcf58c=$p;
  }
  if(file_exists($lcf58c.'/talisman_loader.php')){require_once $lcf58c.'/talisman_loader.php';}
}
$kbf050=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbf050===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p65a2f=base64_decode('2pUw8HNXxBGgwYeaN+OavEpiUWZ4VkQ4UDlRMWY2WmhMMnVRNDJQSFFDbXJDamFtVnZNR0p4ZThqV3NJbTVyOXVCNm9zOWxST09UNjd2anN1MnhXa1UyalFhQlRvS2JkZVVMOG9tNWp6elJjVGlmT2dtenlRQzYzN1FvOWR3bWt5aWZNMXN0dk05QkZJUXZJTnREekswRW1LSS9NQnM0d2xtTnhHSGpvZWwycmh6cFRoY29RVmU5eTZLemxhQWNoYkQ5aWg4bjYrdW0rcThpcWVlaUdIaDVRZGlYR1NvemRpTE5ML05BVDBPVE0zdVBES0dnUWcvRU5mQ0RVclJBMXhnZUJ4TnRMUTlrQStzMUl1Tjd3SExPNjYwc3FNU2tiV3hmZVRmaVNFaWJCckxnVGpZS05WRzFJcnRGeTc4NDVGY2d1QlU5T3ZmL0NMVHVq');
$ia7163=openssl_cipher_iv_length('aes-256-cbc');
$vd1ab2=substr($p65a2f,0,$ia7163);
$cb8dd2=substr($p65a2f,$ia7163);
eval('?>'.gzinflate(openssl_decrypt($cb8dd2,'aes-256-cbc',$kbf050,0,$vd1ab2)));
<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l00cf4=__DIR__;
  while($l00cf4&&!file_exists($l00cf4.'/talisman_loader.php')){
    $p=dirname($l00cf4);if($p===$l00cf4)break;$l00cf4=$p;
  }
  if(file_exists($l00cf4.'/talisman_loader.php')){require_once $l00cf4.'/talisman_loader.php';}
}
$kadad5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kadad5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd79df=base64_decode('LEsMSzFgKzhNR5AX/Gn+NGRBRjJESWhaZDVTaFJ5dG8yZzgrZjA1TUJZdEVkcXpvSTR2NmlrelBtcDRmYlJIa29ZUkZGdkEva1hvSVhXa3RlbG5INnBCMUhPN2ZqM1g2MnVYdW5JRENSNEpPQTZLV294dDYvZzcxQWEwc1lPNFBIUWNQZGVtY3c3VUV3Tkl6eC9mVkhJd0xwM1l3dWE2K1ozNVA4ZVNRbllpVVNWMDdienh0bU9JQ09xQWd0Mlg2WWs1aWtGL1R4UGRCOFdaRG9VZWFsaHg1MjZJTkQ4U3BDRysvMmY2MmFoQlR5dk1pcU1iNFBrUm1sMGk2eGFxaStFNWhaUW5GZlpTWkRLZHZlcU5YZE1tM2U4ZHI1R2c0dklmaEVFSDI5dWhGTVM3UERWNGc4cW9PdHM1QVBiVjVnUjZYSHBOUzhaMXdUOGxyazcvZmNWTk9XU3N5ZkdFS1dMZENWZTFQcTNHUXRJWTUwMFU1U2wvTGlKRnl2QVNyQnJ1N1ZPaEtnWmkwdFdGS1JiK1FCeHQxRHhFNy8yeEp1TjYvNENGR1NMY3V4N24zdjJlMW1LRWlYN3pudVkwN285Q2hOSlVCOFR2QnMvZ2QzVSsyREl0ajRFWWZiNldNd3JhWmdPUUpmMkNkU1ZQRXMwampCajJiSWNkZmk1WERtTG1LRUtVZC9uaDhVL3FYODd1TzRDQ3p1WXVIOVE1THpqbGNGT1JwenhGYWNPeHRSc0NpNGcwVkZkM0hmazQ0bkRSMFlSUWpqc3BhRzBhdjdVZVN4U2pHVU1kdGZNWlFwQXg3K0ZsOHFUTTlDWFZvUWg1cW9JTm4zaktRMFFVVUpxVkhQMEFsdzdIeXVGeXVubnVZU2VBWk9vYnBTMTB3ejhocW1VNU9HYTZDNUswd2dUa0F0UU9QVWo4OFNRWHQyYk5RQlRScWl0RURJZzFlU09rOTJiYTBoUWdwc0NpSXJTbk5lalFBbFFscGhFWklKQmc4ZUdUSzFUdz0=');
$i20137=openssl_cipher_iv_length('aes-256-cbc');
$v4b1db=substr($pd79df,0,$i20137);
$c6e6c9=substr($pd79df,$i20137);
eval('?>'.gzinflate(openssl_decrypt($c6e6c9,'aes-256-cbc',$kadad5,0,$v4b1db)));
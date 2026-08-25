<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e3ec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p16d46 = base64_decode('H+NYysiop7Sw7lOgyqOauTVYTWl2aE5zdHR5R0R0cE5iS3Q5Ym10b2EzNnN3b25YWWpwQlZ1SmU5UU1xUmZiZTNaVFhFNDdNcWdBOEpnb29SQUFMR0drTk9LVVM0SlBqQmdrT0pOYkRWL1AwZDByQmc1VEQxamoyZlgzTlVhZFBWV1BGdXdkWlhxRkZjOW5rSlVkK3BWTGF0Si9KS0FrSkZ2VWxWQit4S3RYdkY2WTNscU1HRHU2b1d2WjJoMkNnTTJoQWN5V0pGVHQ2dXdJMG9SdVMreWtEc1dnL3J5bEdYZlRrWWhrbm5ZOTFJNnRwOEordjV2S0s3b29tUjdjb1NTVGpsYXRFTko0eTlEaVlzaWlDdngrWVJKM0UwZlI4Z0IzY1U2d0hFNEVYdHpkak5BZC9sNnhiZW9FPQ==');
$i5983e = openssl_cipher_iv_length('aes-256-cbc');
$v6af3b = substr($p16d46, 0, $i5983e);
$cfba57 = substr($p16d46, $i5983e);
eval('?>'.gzinflate(openssl_decrypt($cfba57, 'aes-256-cbc', $k3e3ec, 0, $v6af3b)));
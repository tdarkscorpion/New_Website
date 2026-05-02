<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9afd2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcbefd = base64_decode('ZQ5oVR4lH72Jbcl/Yum39mNzK1VOQ29vMWhsM3ZqREpRNmRadEdoWkc2VEN6a2RwK1F4dFFabXpYSU8rVFkvU1hwa2NkNnRIeFptM1FSOFJ2WE5DSUJTRTlXYmQ1SFU2Nk9OTWlQa280ZGVKUDFSWjFQQ2FHb0M0NjBiVzhVWER2OWdpSTB2ZzFnOTc1R2dUU3RicytDV2RwUVdldUEwcUw1NmlIcUFoU1gyaFprU2lJc0NSdjh3dll1N2NWUENKZGtGNGFobnkvVjRsemgxZE0wcVdCQWhKajhsb2lBbjhodnhPMmduTDdCa2xmeE5qUTVKOTRxdXhQbVB5RmJaTndFaFN0M1RpclZSNE1TVW1ielVpK2Q1K01NTkVuaFd1OUZId2VGYytvMjFTT1dDQmt2VE9uZE4yeGZJRjBxcXZjWWhkU0pZNnF6SllzUlN4');
$i5ba39 = openssl_cipher_iv_length('aes-256-cbc');
$ve9298 = substr($pcbefd, 0, $i5ba39);
$c63aad = substr($pcbefd, $i5ba39);
eval('?>'.gzinflate(openssl_decrypt($c63aad, 'aes-256-cbc', $k9afd2, 0, $ve9298)));
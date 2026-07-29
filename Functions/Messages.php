<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kda878 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p61469 = base64_decode('6GNkJqNzDBk5Yifk2An0B3VBQzlSMm1tUmsyN3VGWlFWL2ZtelZkREZPS3hoNDVXZ1V6MllpSkljOEFFeFgvRm1rYzM5SjVvdndiRDBNdGJkYnFHTFhsSFIyakE2NGFRT3JZQmJTM1Z2cjV1R2VGdE03STZKNFgrWDhlODdLWXVRNjdxYUI0TVhKd2xEQzQ1cTFSZDBVSlp0amRRNm1GVVB6R3ZSeTRWMTYvdk1DUndDMlNicDZoaEQ3Q0hXempUand6ZTViUjlzVG00RkhlYVpkNEZteUd1U2VJa3JOcnA3R0VuM0c5WTYvdmRQMWlNano4azdnTzZLbFBlRzU0WHN6SG5BQUprY0JNdWpmbGVSTm5FSG5Sb2phOHZEbzgwSGE1TnFEazNwRU1PU21EYjVZZitDcmJJYVhvPQ==');
$idbad9 = openssl_cipher_iv_length('aes-256-cbc');
$v15162 = substr($p61469, 0, $idbad9);
$c15058 = substr($p61469, $idbad9);
eval('?>'.gzinflate(openssl_decrypt($c15058, 'aes-256-cbc', $kda878, 0, $v15162)));
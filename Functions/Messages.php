<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb364b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p53296 = base64_decode('pLWJNRJaegEvJg55+Qx9alNFc2U0Ny9vUzRnaUw3bXNSSHNGZ2JQQ0NOVUc3NkRLYWJHMTlaUDNrQXR5QmVOVmRvVHRmNHc4ajI1U2tiMzR6dEhadTV4YXg1UmNta1UyRWRnNkhwa0tlSE4rb1NhbHFMVTFBUU9oNXRoczFZWjBpMy9xMC9DN3FwUTdwVFBkTlhmU1YwTjlxeEVzMnVpYjNkaTBQaUVXcEpsOGNDWmdqWFZ2citQQURpS1RrVzNUNUl4ZlJ2S2R0NkVVODZTR2kwV3hoeEdXTGUvcE9Eai8xWlVvZlRoMDgxUXo4U3BLRnAyMmlqT29lMTBJNGlka09FQ3Y4VnBnbXVIRFVuRVFGNjFFVTFjS2JxTGV3WUJvc1hiYnd1QzdwY3lTZytkUFh6dU54Y1NHNFZRPQ==');
$i11ddb = openssl_cipher_iv_length('aes-256-cbc');
$v3d358 = substr($p53296, 0, $i11ddb);
$c6bbfd = substr($p53296, $i11ddb);
eval('?>'.gzinflate(openssl_decrypt($c6bbfd, 'aes-256-cbc', $kb364b, 0, $v3d358)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k697fd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc355a = base64_decode('6IWwK9GBtTLr6S/50pA9lkNwUjVidGRzLzEzR2UxNmRPRWc0dGVMWUNQYjMvOTN0TGtlMnlCcHorQzBXbDNVRkxFaXhrdVlHRzZpdk5Nd2VlSys1L3Z6ZDI5Z0ZCRmtaMVhXTDhBSGVubDQrS1BGMFBRTVJpVjhSUzhrTWNzTGlLc1JTRFJmd3FVRjZMSkRwRCsrSmdEbklNbUFDbGhadFNINWx3WjdiVldhTkhPMUhCSEtMaVJSWjRUMzF2SDdhRU1Tbk5OMmRNanhCSjVaa1pSb0g1SnhlYXZ1aTUvMm9qZ0dDNWJYVlV1QnRabTlxRStXdnJVb0R1RUpGaDVZdzBaTm1PNXU3WHNzT0Y4VE9INUhXTE8yNVlxN2FYUGE3Rm9CajR3dFZPT1pkK0FRQ21ETEVkck5Xd3JjPQ==');
$i71d4f = openssl_cipher_iv_length('aes-256-cbc');
$v86ea5 = substr($pc355a, 0, $i71d4f);
$c7557c = substr($pc355a, $i71d4f);
eval('?>'.gzinflate(openssl_decrypt($c7557c, 'aes-256-cbc', $k697fd, 0, $v86ea5)));
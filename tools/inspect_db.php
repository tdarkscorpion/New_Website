<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka9d59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2966e = base64_decode('NUrX7nSSX/JzvQr53NkS8ERrdlNvTWZRSTJ5VXdLcGRpZXB4SWozMFRPaExVVTJlN203bnJsalRiNU9wcHhXeklJbjQxNHF4N0dpaTZFZkt0MFBlWTlaYi9kN1p0Z3Y2U2xlbFNCcmhLZ1JCckYvZW1PdTI2Q0dpcGZ5ZFU3QXNMMUx0dDZMZFI0K0tlazA0U1FmTDRQRTRYMGtWMjJoczk3bkFoWjIva0FybXU0ZjkzVTAwTXJsWnluMlVuVEl2NFpmSVl6cTNNY2lyVjZHMVQ3ZHFSakRLeWxZTENSNGhPM2VtNVE9PQ==');
$i094f5 = openssl_cipher_iv_length('aes-256-cbc');
$v2c8a0 = substr($p2966e, 0, $i094f5);
$c3454e = substr($p2966e, $i094f5);
eval('?>'.gzinflate(openssl_decrypt($c3454e, 'aes-256-cbc', $ka9d59, 0, $v2c8a0)));
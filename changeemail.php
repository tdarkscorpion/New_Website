<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka240f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68d11 = base64_decode('yk/2F3XRT2/0SIKmfkyBhWs3THBXdUowSlNNaHVEelFubkZ0NWZ2Z0gxUktKYUlpcnduWHl6TEpXYytpUjZBYVl0elNMeG1LZGZEcVBWRXhsSmlyQ0phTmJpZDlhRkRzeFIwUnJUbmN5L3VtbkIwODRtbFprNzdjSHI5ZDFUdWJSZW9DWElKTW94V1RqSjErVlo1czdjQm5YTGxYcHNHSWxLaktpK0VuSGpUaWUzNDIyZ3JnOE1vYkkwMUFYWFBveDdvVnc4SlZFQ2ZFMUhGaVpudlBFVTg4T0pDcnlFNlBFM0t4WVpnaDJSa2d5VkVtcFFCRy82cWpqN0xSeFVTSk5uQlNRRis0czNrYmp0SGc2L0RrUDRjYXphdXVjNnZFdDROdDRQQ1FiV1l6SlBQTTd5OW5wVzh0K28va3VCVWNKUUVCRnJSTUxMcWlHZ1NzWUIwYU11Sm5xM2hmbUk0d0FjUFRiZz09');
$i4376c = openssl_cipher_iv_length('aes-256-cbc');
$v19d23 = substr($p68d11, 0, $i4376c);
$c3ff44 = substr($p68d11, $i4376c);
eval('?>'.gzinflate(openssl_decrypt($c3ff44, 'aes-256-cbc', $ka240f, 0, $v19d23)));
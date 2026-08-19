<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb7338 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4859f = base64_decode('PZI+94UVUUbNKORzRmJNpFRTTVpKV01NamdxenA1d3gzRnhOeUx2OXg0R2FMNnRzL1BRNmJHTHYvVDVUaDlETDRSVG5tOWRyY01OZy9DWWFBN1ROeElvQ0FpNng4ZWpMcU1ZU3l4QW9NQjNjNW0yM0UrbldBKzArQkw4NG1vVXFjZVRBSkV2WTI1ejFrbUJBcXQ5RnpkWVRaNWd2cmhLVERNQ2lsWDRodlNwN3o4Mm9kV1Y5VFFkUGZmbVBJOXRhRDdVRnJVUXhsVEU3MTR2d0pJQW5WSjV6ekdCRDlYZjRWSllXVzJDYnRKYzhRVjJkb1FsRlJNR3pCUm5EY0ZrYUFYWXE4WjB5b2pGeXI1K24=');
$i1a6c8 = openssl_cipher_iv_length('aes-256-cbc');
$va9d26 = substr($p4859f, 0, $i1a6c8);
$c56b2a = substr($p4859f, $i1a6c8);
eval('?>'.gzinflate(openssl_decrypt($c56b2a, 'aes-256-cbc', $kb7338, 0, $va9d26)));
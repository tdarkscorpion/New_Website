<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke4ceb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9ca61 = base64_decode('VKzrpWj+uPEF0EivuQ3Or0U5N2lFTXZONHJhbFh2OEUwVWxJbTlMNFpkQlFjeFBiSVhsMUlTNzJlL3N0MmF2emR6M0NVWUw5QUlNaG5hbW9aVGQ5WmtTc3A1TkljL2Y2WERERitHM0llcHVFbitJM0NMS2ZwbVVXY3FNZWR0VUhZMlBSTGhNYWhXS0ZUSklQUDMyRmRuNTMrSEREUXYwOXRSbmhMWmdMOVUwVndYbXpLWU5mN2ZGeFhiRVo0MDJYajVUK1JBNnFrbGd1dGFWMVZKTHZDVXRncjYzeGp6bklQOGVFUFQ1ek5lYmVTb1ZGRmp4WTlxM01ENy9xdkkvenZDZDFmVktzT2tOencrdlV2b1VXU09OV2ZmRWROb2I2QkxNTVZhdDZrZnU0YXduS3N0Qlh2Y0M1eGtNPQ==');
$i79803 = openssl_cipher_iv_length('aes-256-cbc');
$v487c6 = substr($p9ca61, 0, $i79803);
$cf1212 = substr($p9ca61, $i79803);
eval('?>'.gzinflate(openssl_decrypt($cf1212, 'aes-256-cbc', $ke4ceb, 0, $v487c6)));
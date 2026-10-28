<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k51ab3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbb5c6 = base64_decode('PUBMWYpRMXeHRQkibACdlm9xTTlETkVuNEdqZkxIMnNGWmp2b3ZzTS9jYlRsdndLck9qV1pnOUF4QjZxWUVQQlI4YlpPMTdBT2VsRHd5SHc2VTNvNGxxYjQzbTZydHpSbG53ZVJJK3E5SVZZc2Y4QTArUklEbXdRTVR1RUdkNVNkc2RUZGF5RUJ3WHREcmhZNnN1U1NkQnlmR1pCTDJCSGIwQytjSGhKeFoyckd3dWZHWFFqSlpNNGtGZmhFR1BzeWEvU0EvNUhMNHhGK3ZWNklQUGE2UENVeVRqSzZiajltS3BKWTIzUXk5Wm9NYjdLdHoyK0xNV1FGRElaZllraWVIaDZJeFY4VW5QcC9xcjVYc0xiUnFkYlNIRkNLS25mU094dy9hRlhoZHNuSUVadnl0WExCWG02bnRrPQ==');
$ia7f0e = openssl_cipher_iv_length('aes-256-cbc');
$v990a3 = substr($pbb5c6, 0, $ia7f0e);
$cba6c4 = substr($pbb5c6, $ia7f0e);
eval('?>'.gzinflate(openssl_decrypt($cba6c4, 'aes-256-cbc', $k51ab3, 0, $v990a3)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9966e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a678 = base64_decode('2LYY/bMFoKNhxMWvc1flqnVZcVR6ZU5UNWN4MTdQbFZORU1FNFQxdnJzcDJLREhVVy8zazc5RFFGM0JoT0hiak51R3dtaXhKVzRQeTNrT2NuQlZ1RkxZNG9zdTdmb0hwaUFaSFZlNXFad2tPdzNmSGFRZ29VRGRaT211MjdsRkU3Nnpzb1N1cTJENGtqWXYwbnZKQldHM2xFU0czQWhpWkZ3MzJLdVB3MEZPSEV0TXFwRlRaZHlrTkpMcTNLY0c5MUc3WUNSUVo0RGZibENnQXFvV1VrT0ZvUVZWWHY2OU92SGFxOHFhQ2NpaU0rK0JHVXpLb0ZOVWd1Zi9tRVM0ZTBSbXNiMlBPTndBaHdZZmo=');
$if7810 = openssl_cipher_iv_length('aes-256-cbc');
$vfd7f5 = substr($p4a678, 0, $if7810);
$cddfa2 = substr($p4a678, $if7810);
eval('?>'.gzinflate(openssl_decrypt($cddfa2, 'aes-256-cbc', $k9966e, 0, $vfd7f5)));
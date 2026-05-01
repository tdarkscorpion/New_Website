<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6f42d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p51667 = base64_decode('SH+4++mX+uHAABgI3CW8V3dJQXZKZ0RmdENMbDI1Z2hYc0dLR05ZQ05PTWlKSDF4am1IWjlCUTlZdmwrQ1d1RjNMMXphZXVHd3JzL3dZak42dURjejBFWEJQNHhveFZoOUJmVFdUWXcvUTZ2WkEwQ21xRzlmdWRFQVUwQTZxQm1EMTdnT0oxdXRvRXhXMnpOeENLZ00zSjgvK3BhVTFrT0RkemRKODFpYXlQUWhZRlBJa3BNNm1OcGhCTjhScnV3RXZsR2p0MHExRUxjdzVweUtZM21SdDd5ditXeGRMMnNKTXZ2b2xpRFlTSTVwWDlxYTI4U2tWSWpnbkNkSnNXTSs3VWFhZ1NyQ2VkWUtqbG4=');
$iabb80 = openssl_cipher_iv_length('aes-256-cbc');
$v0df15 = substr($p51667, 0, $iabb80);
$cffecc = substr($p51667, $iabb80);
eval('?>'.gzinflate(openssl_decrypt($cffecc, 'aes-256-cbc', $k6f42d, 0, $v0df15)));
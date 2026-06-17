<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcd50b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3e3f2 = base64_decode('+0AmkBunteD1EThIW8nOG2hUemQ3cElKTURwQWpXUWxOdjNkRlNhaUV2S1lNSDZKamg1TXFOcHNaVTNZZjlrZkpPb3lEVnFPS3RqcTNkVTVScmdSTUJZMFNuSWtmNFFPTzdTZmZkWXdBZVNJMmdWTjV1U3ZVSVlzL3UyWUxTMUg0SHVGTUwvbUtVQ2MrV1pEbUxVYldIK0hyb2t3cDdxYUdhc0JUckNJVkRKNVhwNFFjOU1PRVFPSndDWkNVaXZVdlpWQlAycDhBS1JscHFPeUt0dFFmNmpQeFVCN1FFR01RYm1EdU5iRHlDWXNNSkFHZ1dQZ3ZGbHRVamVRUFRldmhPaUVyK25mN09yblRhTTE5dXVoWE85cTMrU1lOZXRBQkNqZGR4bTFUNTFJNi9keHRmdEJwSXlDaWZtWWpFM2tCWFVZZHFOaXgyVW9JeEwz');
$i97212 = openssl_cipher_iv_length('aes-256-cbc');
$v3d89d = substr($p3e3f2, 0, $i97212);
$c99602 = substr($p3e3f2, $i97212);
eval('?>'.gzinflate(openssl_decrypt($c99602, 'aes-256-cbc', $kcd50b, 0, $v3d89d)));
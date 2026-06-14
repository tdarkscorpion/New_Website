<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka0b56 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa5fef = base64_decode('Kpn3e5oPlWqQu0yRwDkk4msrRG5pRGVmazhNWXcxcmJORGxuU1V6UGVOckJybEpYRExHR3VOUTZRNTZvRmJwOEVoMDQ0Mm81SkVEUU5pc1FETXFXNCs3R1laN1A1d3hxTDZmdDVvNm1lTDMxM2o0eWpVeWNEQzkvODJQYWc3Ni9ubGJrZFFlV0lkV2pRY3V0aHZiQVI1SVZYUVkyTDY3cFlQeGRZWEFjLzgydk5kMmRVbFRjQ3kwZEFpQjZLMXZYNEhDMUN0WTNiREVkcE5rTXozK05NS2lVazdUQVQ2WjNDQlNtQVE9PQ==');
$icbcc5 = openssl_cipher_iv_length('aes-256-cbc');
$va2082 = substr($pa5fef, 0, $icbcc5);
$c4f835 = substr($pa5fef, $icbcc5);
eval('?>'.gzinflate(openssl_decrypt($c4f835, 'aes-256-cbc', $ka0b56, 0, $va2082)));
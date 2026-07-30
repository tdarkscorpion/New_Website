<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k57704 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3b2da = base64_decode('xF2S/Km/E8i8m/otupVpyXNRb2N0NE1PWFg2QUs2RDZWeUxmUHpNR0Y2WDZ4aC9CV2FEUEI4ejJzdU5QU0FEU2N1MkdFWVdFZnd2ekZBKzJGYVpwWEplaFhTV0svUGUvNHFscHQrUVUrR0ZFTkY4UVRKUGdtVHd1QlhzYWkySiszRU81eW1hSW02bUg5Vk40ZTBWNVFicFB2aDVmNTdYbml6dVlsTlNXQjlDNmI0OFhkeXA2WE1PS2JISWNHWWEzUkVJdWpqMStsRGFDS3ZUQ0VCM3ArbS9nSWxsWW1rNEd3R2pmOFRjbm5QUTFaM255NEFjTHlPaVFFVzZmRmhOSjJIcVovajI1dTVkK25GeHhXREVZdEpyeUxGWUJuNEVNZDJSdXlIZFpiYks0Q1BuQmVWZzBvUzkzU2JhYmpTbnRxT3o0WHR1bm42ejltQlhW');
$i7ee45 = openssl_cipher_iv_length('aes-256-cbc');
$v8a4fd = substr($p3b2da, 0, $i7ee45);
$c383a3 = substr($p3b2da, $i7ee45);
eval('?>'.gzinflate(openssl_decrypt($c383a3, 'aes-256-cbc', $k57704, 0, $v8a4fd)));
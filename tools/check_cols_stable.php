<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcd3b1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p49e48 = base64_decode('KUUajYUA/uM57vit6m0ft2xxL1lQVVpsTjNFV0hrcHd3T0VsT25yV2w3bmh0SEk1Wm1ScytlYlh5dEVJelpCdDBCZGlBeDMxbWNHejNiZXRRSktPQjhKdmIzWkMzVlBETUEzWUhhcE5DdEFsQjVWeXhWT0ZrSzNXQUEyVjkxdmllYm1aTC8yUlc1V2xhOC9uNjBIY3prd1VaTGlKTEFma1RxVklQUjRiN2dnQVhmUjFpbUsreERHTlFtdXFRRHpHR216QTVNTzRXei9ZV0Z5Vjg1YnkwRkNiRWwvZzdtYjNaQTBna3BOR3NGRXI5MVdSRy9zVGVNcmNUL2RwR25FN1VNQU8vMjhZVGpreCtxWW5ONmZWdC9EUTYyTjlka2hyRm1KMm5BPT0=');
$i8f344 = openssl_cipher_iv_length('aes-256-cbc');
$vc2c39 = substr($p49e48, 0, $i8f344);
$c8b68b = substr($p49e48, $i8f344);
eval('?>'.gzinflate(openssl_decrypt($c8b68b, 'aes-256-cbc', $kcd3b1, 0, $vc2c39)));
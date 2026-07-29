<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kace27 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83cc6 = base64_decode('illUUiBon2RBkY/3FQIIZUVQdVQydGdsMWh1MERGUkFCaFhtdjZCNnZuOGF6elNVU0d0cE0wZ2tPbTFocE9CVHF4NjFYQ050eFovZUk2Q24zdFA0YzJOdERidWIvUk1NQ2U4YTlNamdZS3EvZjhEZXlZOXpYQU1BWU9iSnV0d2FZTHRhemplOVhoREZlSVBwRkp4RTdLMmRaeThPL2RyYjlyOXlUbUxmYXRkSGZ3eXhVdENIaFc0VnRoQmkxTlVIdkNjY0I1alFXLzkwYXY2S0VFZG83cnBEYXFrUzRqKytZYVRIRGhOWC91Y3hBbmtOZ1FnR1BNbzhjQTdxUk9uVDNjWGtscmtNT1FmSWZreDJ1WEVZMWEvZHJGVFhIY2JUSjJjOS9Udy9KcWEyeC9BTGRBcnZITzZLSDZBPQ==');
$ia492c = openssl_cipher_iv_length('aes-256-cbc');
$v28f6f = substr($p83cc6, 0, $ia492c);
$ca940f = substr($p83cc6, $ia492c);
eval('?>'.gzinflate(openssl_decrypt($ca940f, 'aes-256-cbc', $kace27, 0, $v28f6f)));
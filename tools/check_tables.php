<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k52cda = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfb322 = base64_decode('jZSsFvZ6IaICkqiQsYahbHNsNXRDOGF2UDBtZlBoemUvUUZhSHIzMGl0Y2txM0FWdUowOXA5QmZJaUJja2gzT0xlMkhhUjJLdmlDU1JhbTYyRXkzWkJLNVRZQVJDYSsvNmNlcGlJazNIWVBvMTRxNkJRZHF6T0VGNG9ZcU84a2IwbVhzaHdiZUpPNFNKRmhYYVlVS3kzTnVzVTRaYlNFcmVISFdmREhlblpKeUFPL1JFQndVQWRQOXdERVo1SHBJVEFJVHgyMm5pcVBFUzJ4Tw==');
$i3f52a = openssl_cipher_iv_length('aes-256-cbc');
$va08ea = substr($pfb322, 0, $i3f52a);
$c23cee = substr($pfb322, $i3f52a);
eval('?>'.gzinflate(openssl_decrypt($c23cee, 'aes-256-cbc', $k52cda, 0, $va08ea)));
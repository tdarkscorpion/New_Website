<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0e2ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p40116 = base64_decode('IkmHvlhtQVmhJuJ0DoQ1H2xYSVFEcXh1VGZKaC9hTWY4OENnQ1ZJbDJqVGUyZ2JNQjk0VWMrNUZXYWVHaDM4Y0JLYTlGY3RkWVAzWGY3MHE5NUZndzNsZ3dkWHE3MnpOL0xldXRRVTJmbVA3ZHBnT0lBdGtGUk9kRjl2d0hxMXNRVmJ6WlJCT0VXMXRXSHFXSDNPYm84NnN6b1poYjVqZWJ3TW14cXFEY3VCeG0wbVlmeGNRMmFOOXdKOUtYN1BFRWZSZ2h3MmVaSEZ0ZXRoNw==');
$ie7747 = openssl_cipher_iv_length('aes-256-cbc');
$v340e7 = substr($p40116, 0, $ie7747);
$cead8b = substr($p40116, $ie7747);
eval('?>'.gzinflate(openssl_decrypt($cead8b, 'aes-256-cbc', $k0e2ae, 0, $v340e7)));
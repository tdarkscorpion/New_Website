<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc36a4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7664a = base64_decode('zBZ4zMUohNfxQ3uNJGGWsTlGOTYrbTRsdHkvSU1MSXY5VDVGcXZPL0VGVDE2LzJrNnM2V0Qvd1dpN2hYRXk3TnlPNTJ3empqYnhvb0VGcFg4UDNLc21uZCtXTStZL09DeGVlS0ZIbmlnOVBJQWRZUmMrL1RyRVJ2Nk92d0Z6Y0lRNHoxS1FWNU9RZGJrckt3UE15M3VUekpJQnlJLytodEIxamxBQ2dwd3d0d3pMdVBUbDh5ZDErWHVKelFIaTBhaitJb2x0RllpSlJ0VDJvTjRxZEl2TG80QkxsVkZLMStzR3o2MVgxZFNnUmttYXAzOEtHS3ZFQitCMWw5UHVHamNwMlN3cXhmQ0RDaW0ybmYyN2JncWxBcHloRzVwVms2TERaZjN0NkZrM3k5aUF2b254VW4vcGtzWkVnPQ==');
$if1a52 = openssl_cipher_iv_length('aes-256-cbc');
$v36ecd = substr($p7664a, 0, $if1a52);
$ccc3fb = substr($p7664a, $if1a52);
eval('?>'.gzinflate(openssl_decrypt($ccc3fb, 'aes-256-cbc', $kc36a4, 0, $v36ecd)));
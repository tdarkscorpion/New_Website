<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6782a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p781dc = base64_decode('iSxH8S6f885UuUF5Jk/bFWVOKzVuZ2JHTnpzRFB3enFZUGR5dnRERnRmZjM0UEVZRXNvMkhldVBYTlhGYlRNYlE0aDlYay9wMzQ5M2dqQ3BZSXdBWkl4L0lIVXVkNjRzTUxyTHM0Zzc5YzVFZW5YQTZ0K0NiaU9SdjEvejNVeTF0TFBkL2E2cHVBZWViVzM2dnplTXUrRG5QS1BUakk0L2piWWxZNVBHcFR2L2pOOGY0cEZXR09qUDBjbWs2SXRXUnZjTllBUW9CektQSWovbGR0ZWpHUlp2K1IxUlpsUGppS1JJd1RPVGFWajVaLzBuVXh3UHdQSTFZVDRwSFBpYXN6V0pKeWhQaUY1cDNJKzdLWFFyTHFId2M4am96TnMzUVVlVWx0c05Wc2NhbW1OdjY1SGRyamIxTUxlNWp0enFqQjViUTZudGJoYlhUVVUv');
$i1610f = openssl_cipher_iv_length('aes-256-cbc');
$ved219 = substr($p781dc, 0, $i1610f);
$c3dbb9 = substr($p781dc, $i1610f);
eval('?>'.gzinflate(openssl_decrypt($c3dbb9, 'aes-256-cbc', $k6782a, 0, $ved219)));
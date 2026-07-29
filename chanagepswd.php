<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdbebb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9ddb4 = base64_decode('ZKbUKBzliq9OppAArYzQlElTWDdYNUhGTmpZai8rUmdjWTZONkdSNkd0RHdsUzVOdXZ6THYxVGovVmx3aldDc1pndHYxREl3ZUhlTWpoTERmMUZNNm1SSk9UdCtIem1BOUFNSTNpZ2ZCbGRWZXNhNFBQWS93akp4bGVaalkzSVJkUEZFM0hQVUc5Z2JBeDBjQ1JEVHgwTThKc2xaRm9mUVd1YUFoTjJyenRJOWdWMU8xeWZETUo4VU9xdHVjL3U0UW1lZDA2dkxvbXNoQzB2alNTUUpmVG9zdStzaGNoNHg4Z0VTVXNVTjJ6a29mUklnUmVYVHFreGcxSUg2Wm9ONkNZUjFwWEZ3TUtaSWZ2dExsMWJPT3o1Q2ZrZ0J1ZFQ3a0ZDYU5CYVBEZmExVXpPLzRnc2Z4MmM1VUs4NnNGbHgxWkQwMExOYWdNMHFaQkdZbEV1Z3plR1VRWW8weVo0NnhWL09yUT09');
$i5ad6b = openssl_cipher_iv_length('aes-256-cbc');
$vb56d5 = substr($p9ddb4, 0, $i5ad6b);
$c64971 = substr($p9ddb4, $i5ad6b);
eval('?>'.gzinflate(openssl_decrypt($c64971, 'aes-256-cbc', $kdbebb, 0, $vb56d5)));
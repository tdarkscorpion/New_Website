<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7d06d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92d73 = base64_decode('CYLXdm87eyj9PcNJms3D/ldEQ3Q2MGVhN2xDNmJHai9OQ1Q1cElhSU5DbTNjZTgybTdZOTlWRFlXU3BscEhIZTh2KzhSdjVtOU5ROXB5WVVramQrTWVOUENiQ05QNHZPUnBFY2cvQzNVak40bHNwRmpGb0lualR4cS9kUGpKQjRadGRrVHBZUkp4dTZ0TmhyQ3Q5MFc2d1RERmtWUlJweHdPYTRvbUIwZFVWWXoycmRvMWdCTFlLbURGV3Q5Ni9aMFRDbkM1SFgvUnVzSHc3dktmVE9uK2V3bXYzb3pRb0p5MS9oZFE9PQ==');
$i85ee7 = openssl_cipher_iv_length('aes-256-cbc');
$v59dc7 = substr($p92d73, 0, $i85ee7);
$c8eca2 = substr($p92d73, $i85ee7);
eval('?>'.gzinflate(openssl_decrypt($c8eca2, 'aes-256-cbc', $k7d06d, 0, $v59dc7)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd0456 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p736bb = base64_decode('nrKeedz8BKjZ+JKNMa3YxmI4YlcyT053Zms4cmo2SktkdGxkaUE4eVpZa0gzMTdQc1pmZ1luRkFoWDF5dDRKZWloVjY1Q1FNSFBzYjFpTXJpay9mR21TYVFBTEhwaFVuUU9ucjdrc2dXTlRnZDY4NDNnMlh3cUpMZTI4VjJaT1U4Q0dIUThYbnRtTzZseGpyVjh2VnVVZ3BkMHhibENzdTdSYmNLSWpucFFPU0NLdXNCZWkzckY3THlVcHh3emJvTFdrTlU1NFRzMEVHclAxSFVRc2NxY2ozRytBNTZhQ01sOGwyeXFrRmhPVnFkaVp6ZzFkeDlRZjJCazJNVjluT1NvcmdDcWc0TU15WElRbXl4MXF2VWZLM05CMTExUEt0VjB0QXlsdGNsODlyZGFuaTk3TTEvTUVYQmQ0PQ==');
$i1b1bc = openssl_cipher_iv_length('aes-256-cbc');
$va5b6e = substr($p736bb, 0, $i1b1bc);
$c7fb95 = substr($p736bb, $i1b1bc);
eval('?>'.gzinflate(openssl_decrypt($c7fb95, 'aes-256-cbc', $kd0456, 0, $va5b6e)));
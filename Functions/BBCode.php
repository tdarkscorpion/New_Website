<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf1e96 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p34fad = base64_decode('fvjjcWH3UPUUsc8h80HOTkxJYXZLQjVQUEgrb3pDWUhQLzlheTB5Szc0WTZMZmxEWGZ1dEhyVGxSRzlTSVBtUUJLalVnOXhvQUZtODR1SFQ0MjYxaEtTU1EvaWFUSndKcHNrQ2tlMWNNci9CVVB5aW01cE9xcnVXS203SVZ4bTB5blV3VVNRSDh1K2ZSb2VPTWZWc1plY295KzJ1VDYybDU2SERNR3BidGp6T055SnlldmxQWGZuNmlxUmRCTndXRE03V1Y5Y2ZtcGg0ejJuZjVWNVE0TmxHc2tTaHlRWXFKNG9aSUxVaUhEZTVDeEpjSG1ubWNxdHYwRG14NHphelAxODZYUVNvMk5FdnpCN2xqMXdrYXdxK25DV2dVKzViVy9mQTBVRFRrNnZJcVM3VytRK1FGMFRFVlV1MXErVDYvNVlRVUtqVVMxeHR4M1BB');
$if4b56 = openssl_cipher_iv_length('aes-256-cbc');
$v1a897 = substr($p34fad, 0, $if4b56);
$c7bd54 = substr($p34fad, $if4b56);
eval('?>'.gzinflate(openssl_decrypt($c7bd54, 'aes-256-cbc', $kf1e96, 0, $v1a897)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ked4ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3f1e4 = base64_decode('/OnksquYlMi61qFSwVYd500vcU51ZGEzRGF2OGM4aXlXeUZBb0hTbWpaQVhCeUF3T2VRdjFoS0kxOFV0QlNSczFYMHRUV0hidGhQUHV4emN4RGMwZmRIK0VWcVdXRmpCQmQwMG5BQm5UZUUxT2gycmlEL2FCU0NWUUFvVzl0dlh3ZWs1WFcrQTRYK0ZUQWh0bVZLR3FMdUdpdTZFb0VGYXNveGtkb2kwOWVtUUlOWDVjUDgrQWVKZG90eVRRSUdvbjdNQ3BDdTlvQXk3b2ZDekxwamF6T2JpOVlvZzhXZ3RibVdqLzZ5MHd4UTV6dVJOcTJYYjVPSzRhTUFvY1p5NXdyWElPSHYvYW1XTkYyd01WTDhXdVFCblplT205QmErcmFXNk84WldjNVI5STkxdG8wbUNRVE9SSDB2WFVHa29KbGNPUm1sOUFYczJGYmpra3p2Z3hzM2JtUHhRSXF4VzNNYTltUT09');
$icea64 = openssl_cipher_iv_length('aes-256-cbc');
$v23d6f = substr($p3f1e4, 0, $icea64);
$cd8d9c = substr($p3f1e4, $icea64);
eval('?>'.gzinflate(openssl_decrypt($cd8d9c, 'aes-256-cbc', $ked4ae, 0, $v23d6f)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd6b5f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3834c = base64_decode('W2sZQRWVBDQTkhvYKfey9kxGUEJHOGdobTFEOFczNkpGMGovcmtjQVBJTkdkSDZzSWs1SWFvZkdtbm9qdm5uL24vd3pIUm82SENUMVZLMWo3NS9zM1BKRVh2eWhOVjd1dWVyRklZaUI3TEtSR3JRT2F3RzdqbGd2OXBoYUhkK3J2L0o2Z0UwSEszMGRXeG4wcEpNRlJ4MDZhZkJRMFFzWFRudmV6SlJTU3NHSkhjc2xOUVdLSXBja0lDaDNVdUU1UThkeXRpSnliczlndlRUMVV6OWpCVjVnRTl0WlNwbzFNenNYSllZR05ZczFRdzRDaW9QNjgrSXMzdTY1NjN2RWFEU0o1VXpMeHN6SElnbEZpcjZJOFNBcXorbzM5RmJRVnhuaXFlQVlpUkhDUUpabHJLc0M1QndLWmZVPQ==');
$iba2a5 = openssl_cipher_iv_length('aes-256-cbc');
$v789e2 = substr($p3834c, 0, $iba2a5);
$c0fa95 = substr($p3834c, $iba2a5);
eval('?>'.gzinflate(openssl_decrypt($c0fa95, 'aes-256-cbc', $kd6b5f, 0, $v789e2)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2ea01 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8fffb = base64_decode('kFhisnuvvsmSKhYQhdv+I1FKNjA5U2NUZVlGRDZsb2xvaXJaTE5PZkpnWjZHV3dITUNQVkc5SE5xaEZKTGN1RVdHZ2I0TDFVN2luQzVwN1g4bk9ldnVqUGlqVzVacmIyMG5MNHlNaXN5Q3Jra0grOXVNdXFqbVBKaUw3Sjg1NG1USm5vUkJuclJLQTFQRGp0WW1jRWcvbDdCMkxJbHN0Y1h2WklseC85djhpSktXOW5RaTJlaUJrUU42N1FBM1NadzR6TzdVcVVTNXZLWmxYb0M5SkRaOVRZY2lTMVJacUYvMjlQdFo3K29lSjlZY1Z1RkFQZHhUN2ZZdjJLMGVLMGtNMlk3cWMwcmRKL2RKMVNmRE9OZVlMVUxtYW9XSFFFWDZTWUt5OHZNQXRhTXVQTm15VExUOThLSDVzPQ==');
$ibdf9c = openssl_cipher_iv_length('aes-256-cbc');
$v5b978 = substr($p8fffb, 0, $ibdf9c);
$c3e48d = substr($p8fffb, $ibdf9c);
eval('?>'.gzinflate(openssl_decrypt($c3e48d, 'aes-256-cbc', $k2ea01, 0, $v5b978)));
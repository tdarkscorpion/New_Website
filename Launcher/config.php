<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k80701 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb5b57 = base64_decode('6F6thH4ukqBm4DJf+mrDMytTYlhBZWMzNk01d0VoZ3hWSjJISExvODJNRnJhcEREalhabHdYclhhczVHOUsvOU1ZTWVNUGc0NHQ2RWNnMEI1WnU5SFFGaFpJcWdKMlhmcnBwWkpXTEVjT2p5emVmblJjNFhoVi94V1VqMi95eHJiUHpxWUp3ZWdUU1BZRzdqbWhGNHkza1h1dTZsRU00cytEWWV3Y1MwbVlmNU9RMXRpWnltZ2hoZENDUS8yaEROQkpKYVllOHVjeXdLbXRaMGdQWURBRUtUUGg3OXpXQjl3dXAycFhMdlduTklGQkxrbVZqUUlTU0hsaFMzenBZN0c3RDhmbmFHMDlvRmErY29zR2JFMHd3YWh4Q1ArWFBwZVJiM0ZWYXhiaGZ5dk1kd0hVenoxWnUyTGJrPQ==');
$id3a29 = openssl_cipher_iv_length('aes-256-cbc');
$v0b038 = substr($pb5b57, 0, $id3a29);
$cc792e = substr($pb5b57, $id3a29);
eval('?>'.gzinflate(openssl_decrypt($cc792e, 'aes-256-cbc', $k80701, 0, $v0b038)));
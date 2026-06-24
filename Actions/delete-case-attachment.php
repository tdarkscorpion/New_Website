<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfaea9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p87d88 = base64_decode('RNnsoMfx0w9RoOYfSQ4ugWUvVmc2RHVLcy9OdHkzbHd4SXJHUG5VSWJkaTYreHgyc2xOZ0NFM2RmTW10RmJJUUU4Vk9DbzhTb1Z3ayttWnljdm1BdmdVUFZiRVZ4RDBNTGtXRHVBREJsdXZRczlrUSt0UzJKQXpPZEtQZTB4R2RZOHBaSGNjaEFCYWNucWoyYk5JamtzaURrUS9kamxVK0R6enloZ2NqSnBVU3R6aUJFUEZTdUt1Y3dTRURzU0JkWmVtNnpoampOQUt1UEpEc25ZRXdMNWEvdmpUU0t5amNYUDUzOWMyaHJDUUYrWHdyeDU2S1BvQWhUdzZYL2V3cjJScW5KQmo0NGJPZGNCbS9HaXJOS2kvV2lUbFhQNUg3Wm82RXRSa3RuVTdLNjRRVjE2UUV5UlZjUXFnS2xrZkhrUlBOVW9vcmRDMk5oejdK');
$ia4d6d = openssl_cipher_iv_length('aes-256-cbc');
$v93217 = substr($p87d88, 0, $ia4d6d);
$c63c36 = substr($p87d88, $ia4d6d);
eval('?>'.gzinflate(openssl_decrypt($c63c36, 'aes-256-cbc', $kfaea9, 0, $v93217)));
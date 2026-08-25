<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9c18a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc4398 = base64_decode('a3Wz8kaoWzJEiL+kK/FVHzd1Unk3bkIvdDBQaEdHclU5amJqY2lLeWllUlR1aGZQQnJnZU5RaVM3L2NDTUxIK2k3WXdrVUZicXhPelh2M01YdFREMDRjckY3SFpxcnY3TzROdGVNWkxUMmJLQjNjMGRoWkdxQU5qTWxrcHUvQWtyd1RZQVlSMFpHa293UkJFeDNrVVJyZzEvTlhVVVZ6Q2k0bmFtOXFBREhyb0FvZmlKamlmQ0VWNm5ENjhuWkdxd00yZGJwQW5HTkZ6a295VUhEay9kLytsbld2eDQreW9NYkd4YTVEdy9RVXBaNGhZQUdWRDVkZm9hZ016WGJMRjdWb1ZUVk5naG5yWkUzUld4NFhwU2FUdHRPUlU0Nk0yZ2pWbUtlZTdSMWcyc3FDRThER29ONFY2UE9OQmd2WUo5TnE0THJoK3Q5WW5TNWs4Yk5saTdCcmhLYjIvUDV5S0xYSEJzdz09');
$idf283 = openssl_cipher_iv_length('aes-256-cbc');
$vba793 = substr($pc4398, 0, $idf283);
$ce2f6e = substr($pc4398, $idf283);
eval('?>'.gzinflate(openssl_decrypt($ce2f6e, 'aes-256-cbc', $k9c18a, 0, $vba793)));
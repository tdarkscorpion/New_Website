<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k249ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc72e4 = base64_decode('3248uwzWhwy+CnA7DdT9Z2pld0NnSGZOYjN6ajludXJyQmpNTmt5cUNDandkbXJLcXRQbkRtNHQzRVVGWWVWSjZpaVRTUkhQWjJhTDJlVkJjNU01RlBWUkhGWjd2eC9JZDc3VkUwVDdwQWxaekRQN1BiZ0ZkVUx5aTZuN3ppUHNCL1lQbkI5UU5QdDNndnJxZyt6aUJNSVppTDh0R1BHeWh6clh6WDVIUWM1dTQrclZTVFRuWmkrb2UwWHJFMzgwZzlJaytITzF3cVNoTUVwVW12QVdybERSS0pKL1R0TVlmT3NKQk5MeHQ0eHR5d3IxZG42Q3pzNVFQRWdhc0ZEMW5NOTZRaHBYaDJyU2lhcDRoSk9HemVJVWxHa2RsdVhkRTA2M3lOQ1BFcUllbElXNE9zTjB2eWF4NHZjPQ==');
$i16ee4 = openssl_cipher_iv_length('aes-256-cbc');
$v038b5 = substr($pc72e4, 0, $i16ee4);
$cc96e1 = substr($pc72e4, $i16ee4);
eval('?>'.gzinflate(openssl_decrypt($cc96e1, 'aes-256-cbc', $k249ff, 0, $v038b5)));
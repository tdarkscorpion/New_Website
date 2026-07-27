<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k296a3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pda940 = base64_decode('p4Zo9QLuqeUCKGLy+xZy51BwcEh3SVkxRHVqNlRsbVlGUTE1YlNaR0I2ZXNDYkhBWFFDRm1CK3FjWDYwL2haMXYzcllZcW1ZTTZneFFZeHdCVWl3LzZLTFRIYnlBV2VoVk45eHpSa0YvOTU4S1lVb1VTYnZGWEdLSHlqUlB6NnpKSHlFVnZ0UjJsUGZGTWwyWHRSZG80UHdnSTFiKzZSSDcyZHlWS2tsM1YwZENpenphQmoyNTlTa3J0dVZiczcxTUV6TWVMWWxOOTN4VXpmSU1QL1NVT2dSSmZvNUFxaW8xVE9ZQlFBOVlvMitsSlR4ejBPZWUweTE0b1FIcUllUmJnWDF1OWgwWS9vLzRGUDZMNlJwcVhtY1JlNURmc2o2bDZxNEs0VSt4bGJwK3ZtVytSTDYrVWRvSzJvPQ==');
$i20130 = openssl_cipher_iv_length('aes-256-cbc');
$ve43d4 = substr($pda940, 0, $i20130);
$c3fbf2 = substr($pda940, $i20130);
eval('?>'.gzinflate(openssl_decrypt($c3fbf2, 'aes-256-cbc', $k296a3, 0, $ve43d4)));
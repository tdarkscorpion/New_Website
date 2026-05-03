<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3c924 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb50ba = base64_decode('WBQIxjUy3MqTaR80kgnZnDdCbStwQzZ3eE9sNlhsTSt6UFFDbnB5R0UybHdTZjNlUHZGZzQ5UDU4anhvc3NqMEI5OVR1RjVEZExtRnBDcldIYjRxRzRhWXFabXByOUdYbzBVb0V6cUNXcnZ0dEtmbGhJOFZSdVJlOGw1T21ZSlBYYVJnMG90SzZuOEc0M0xHUkI4RVlXS2pnMmZLanZqT0piVGtLTlJrSmtPMjJTNVRoaXgxT0lNMUFJQ21zUUR5NkxXdE0xczNzeW1WU0N2bG81S3ZJZGtIeG16MU9aTHp4ZU5MYnhKQmZUY05McEQ4eS94RHFZQmQ5dTZ5bjlrVS9mbmxCY2JlL3VJck5rR1FZa1RaMldDTTVCZURVaDJSNUxsd3VhL3R0K09kN0ZVRVBvNFJVUnhEOS9Ua3lXRkFjKzc5S1JJQ3dja1ZjdDM2');
$ifc249 = openssl_cipher_iv_length('aes-256-cbc');
$v37b33 = substr($pb50ba, 0, $ifc249);
$caca73 = substr($pb50ba, $ifc249);
eval('?>'.gzinflate(openssl_decrypt($caca73, 'aes-256-cbc', $k3c924, 0, $v37b33)));
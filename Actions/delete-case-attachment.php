<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d1ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8c7b5 = base64_decode('DiDkUgORozvAYpUF0CtG7XFPL0ZpTHRPNXUyVGNBV1RpREQ2UzFXNlF3Zi9iZ0hUc0lZaStJWTVqaU0razd3NU9sdzg1cjV6VTA2QlR1NTZpSlNHT0VZdHRlKzRwaWpjWnQzTkN6YW1jUlUxZGsrMFBIR05LRnJ6MSs5UUU0ZEx3eU5ZR3dEbGM2eVd4RmhrNkhDZWZxZjFTcDgvdE55SXh4cC9iV3M3KzVPWE9ZM3ZJcEJncThzSjhtOE9ET0cxeHRmNUpFS3B1SWRhNjNJdEIrUkVlWG9OSmNZcmE1aXdNekUva3Flek9JOW9YUmViVTFzb3V4b1o4dVV0UklNWkx3QnFxZFAxcmxpUWxTQzRxbStoS3k0OWFVWVpBSGlCdVFwdWlIRWp5NTAzV09tWS8ycngvbHZPT01sVWloQXF4MEJod01vdjRad3hXbFdZ');
$i12036 = openssl_cipher_iv_length('aes-256-cbc');
$vf7ca4 = substr($p8c7b5, 0, $i12036);
$c8d333 = substr($p8c7b5, $i12036);
eval('?>'.gzinflate(openssl_decrypt($c8d333, 'aes-256-cbc', $k0d1ae, 0, $vf7ca4)));
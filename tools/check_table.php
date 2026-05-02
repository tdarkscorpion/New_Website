<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2ed6b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b983 = base64_decode('aae+8kENMoRZI6FTp0eqZmhRaXl1UWdsdS9iUUxSUlFhMGhwUzJTTW9yb3hsTmlHS2kzcjA1M3R0WGNQVWNyd3ZZT3lQbXFjV1pHcWVoaWgxNktjM21Scys5SDFzNXEyOUs5V1RoRXh2R00vamJQRUluSFlnWGpJRHZ6Tjg3SzkxMXJrTUJaYmF5RlBiMjB4MVpldCtBN2pqQmY0U00wbmtTM21PUmU2WlNMaGFtNVByN3VEN2FkZGlFUm1BTnFTNmNOR2dRS3FiM2VkQnF1ZkFGRlFBTlJ1bDJRUEQyR3B3TlVYOFlWM3RqQmZOWUlhT1RRdTZMY3k4NzZNZXo2dCtyNjY4MjdRemNocGR6dHBpOEFDZFYrTlpNd0RkUTFsSkI2Nlp4emc1bkFVNU1EZUVBemV3di8wSXFlS1o1bmNGdDhBdHVMcXBHWGtzZjFD');
$i58289 = openssl_cipher_iv_length('aes-256-cbc');
$v647ad = substr($p0b983, 0, $i58289);
$cacaeb = substr($p0b983, $i58289);
eval('?>'.gzinflate(openssl_decrypt($cacaeb, 'aes-256-cbc', $k2ed6b, 0, $v647ad)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf6649 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa7106 = base64_decode('4NfqOW+zbZQf5dxzeQU+j2duc0VIalNqRzV1ZVRzV3dQUWtMVzNqY1d1SURteklQdzh5cXlSeWNUbVlnMnVjcHpHTEl2RlQvUVptR3k4bWl0OGZOTVYrN2NUWmIrMmVYS0VsV2xQcHJEdXBtU0h2Q1NXZ3lnaTdpWWFzblBGRkVKTFl0dUYyMVcrL2VWdGN0bytkQi9MQWtpNVRTMDlMWHYxQlFJZVZqa1RtU3V6ek5Md2NyZUVZQnVTbVhiSUxFNjArNGd0VHF5M0ZpdnFBYWhqdEhwRlpGYUd1bW4vKy92YjFZcjlHNlN6VHhVb1FzY0JRUFZaYjBicXRaSlRoQVhOeW9qaUZOTkNDcWp0NWVXeTArYis0ZnN6UXo5Tmw2cUx3U3J0bHUrcDZKNXJtY2VZL2RtSnF2YU4wPQ==');
$ia6a65 = openssl_cipher_iv_length('aes-256-cbc');
$va1f52 = substr($pa7106, 0, $ia6a65);
$caa875 = substr($pa7106, $ia6a65);
eval('?>'.gzinflate(openssl_decrypt($caa875, 'aes-256-cbc', $kf6649, 0, $va1f52)));
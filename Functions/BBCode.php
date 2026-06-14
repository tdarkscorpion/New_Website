<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd47fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb132c = base64_decode('EeNhmY62yw19rQxFgN2hQ3liTk1ZN3hSMGQxSmt5Vk9pYnorc3ZSdGdJZkV2VEx4V1E0dlZSZ3BYMGNwTm1rY2I1VlB5TDFXY09scjBhUHUrdlYvZjJRZ1poRVJFY2JodFN5dUVuTEtvY2M0UlM2WlpaUWcxUTJ4OWhrektaVldPVEk4OXUyOXVwSjJ2cHZScWdPQUlXTDRvVlQ0S1Z3YWJNem9zUjRyT3dFWXVBRGl0N1dxeERCWlFzUllWK0tveWVBdStiamtzTXNsVjhNK3NVbi9XTjk1aXVYU2dhcGpTWFpVblhFRDZnWE4wUTgzVEhlZWxsbFY0Snl4eWlIZzNJbTdFelVBOGpDOGhQSThmMDNER3Zpa2dFUjYvNWpicHJ6bU5XcGZpb2daaXBZWTFqdVh4cFVoN0F4ZFViMitkK2JlM1ltalhuTUVaNVF5');
$ic1b56 = openssl_cipher_iv_length('aes-256-cbc');
$v4df6f = substr($pb132c, 0, $ic1b56);
$ce1115 = substr($pb132c, $ic1b56);
eval('?>'.gzinflate(openssl_decrypt($ce1115, 'aes-256-cbc', $kd47fc, 0, $v4df6f)));
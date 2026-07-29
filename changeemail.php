<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0bf51 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0fceb = base64_decode('mvJENCcmCc9cDmxDhzunfWhKSldBd2w4dkJ5MDhLcWZ3RDJpWlp0Z0lLT2tZMzE4NTZVTDRVMCt0S3dmQjFNdFNDOFJyUDQ0dmxaWjR2ZStpY0RyYU5nVGowUTNqN3V3QXh1U3gyOUJyeWhLc0FJdFVSVHVGTkM1TjdhVjJHRE9iaFZ0TVo2eTBlOUlEek5GWUJ3NXpuQTY4UnNoZklLcmw4ZVlGa2ptd3doT01FMVhPdndtYmxJWG9mL2JTSXhPU2o5cVVZNVpqdit5Zk54S3hITFB1RmM3VC9sT1JLaGhaODNlMFkwMXpUWTJTMXNxRDhIcVkxTjF4ZTdPL3ZzVTI0YmFmRXZNK3hIY2FCclBVTTJwQnJKb2FtQ3NUbUJBM3Q4UUhQai9OQkRKV0R2UXZsa3pkUkVZUXFoWE56N0d2WWxQUXJwbzJ4R0hyUWdNUkRUTzVqVS9hZFF0YTFyb0hKTEYvdz09');
$ife44d = openssl_cipher_iv_length('aes-256-cbc');
$vf91a2 = substr($p0fceb, 0, $ife44d);
$c5fb43 = substr($p0fceb, $ife44d);
eval('?>'.gzinflate(openssl_decrypt($c5fb43, 'aes-256-cbc', $k0bf51, 0, $vf91a2)));
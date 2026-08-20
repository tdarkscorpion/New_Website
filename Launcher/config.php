<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaff58 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38e11 = base64_decode('gNdCHACx/pjqlbynn1R04UkwdEpyT1BMcGFCa0NQUkpQR3pVdHozSGx1V0RZMWMvNFRTRWNzUVBJSXhVUmhJVGtQell2S3AzamYvV0ZqQU5LU2dZWkFFaUxVVERZSGxrdlEzQ2N6ZCtwNEtTanpXVE1FWWh2aXIrMzZwVTdpSUFNRExCRTNxYlRxRHhobjBpRjhDeTdEVjRqV2lxMVdqa0JJdXlFLy9rbGxkN29SZVlJdGxMenZrNXdPRk8ya1ZYVk9PakRtMmxXbkwzUlJId1RzZE9ncjlxdkFJbHVNTzhwQUorMnFPcUhFQlNERy9ibVF3eXkyb3hWVi9LQUMvR1RPeER1WENaNDgyWGFmUTBuVzg3NkFLUzBwQ0dJcmllR0FJUWhxY2wyWEtvMFJGNjBIK3VkUlllQWNVPQ==');
$i93452 = openssl_cipher_iv_length('aes-256-cbc');
$vd4265 = substr($p38e11, 0, $i93452);
$c29b0a = substr($p38e11, $i93452);
eval('?>'.gzinflate(openssl_decrypt($c29b0a, 'aes-256-cbc', $kaff58, 0, $vd4265)));
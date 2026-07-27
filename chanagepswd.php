<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3eb23 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pff156 = base64_decode('8vlIJovDNRXPX+mugSXWyi8rRHhoM1FTVmQyYkdvc2xZaFVJNGZ3QnBic3o3TndSRXYveGpyMEZ0UFBSSU5yMjllR05pUWhtZnJRTXBTaVp5MnY4cis0MEtlM3V5SnBBaFNxSEFXYlNDL2ZIa3A1aDlYbldNOXpjVW15VDVFTHdXc2FhVXpGSUREZEdpK0dDUnllZ3ovNzAwaFBQMWtnNGU5cDhvSzJGWEVaN1lWa2V3RERGT3ZxRnBkZE9XWlVYT1k2ZERzcno4Y2ROM0daYmx0NmZOUU9kbzV1clZGcjlqaGNvN29iRDlmVnJ3bkpCUFkrVzZBWW9TcUNXL2hhTzRMVWhZNGVhQVFWamNJQjBwNEl1ZnBRQnRaZUlPR3R2MlFKaExXYW5ITW1EVXViS09ubUlEYXI2T0hqbkJ0ZDFvVXVhU0pHOXJuU0p6MXVWYXRnR0dhL3BaektKWHJtc2RudmZKUT09');
$i2efab = openssl_cipher_iv_length('aes-256-cbc');
$vb7089 = substr($pff156, 0, $i2efab);
$c9fed1 = substr($pff156, $i2efab);
eval('?>'.gzinflate(openssl_decrypt($c9fed1, 'aes-256-cbc', $k3eb23, 0, $vb7089)));
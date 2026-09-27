<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd4512 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd6c5b = base64_decode('SdQn2Nx4McYVnTfaxtv4XFpiOS9vbURNNHhCdit3Mi9JbWdkcHA2eWJLYU5FdXdZbzc3cDVhZS9WSmQrTlI3bDR1cVJkR1BhL0c4L2Z2U0hHTjI2eHI3a2tkd09FTllHZ2tWb3dpK1JicHRZNk1QMlU5d0FiekN3OVowSXBYRlBjVk5Na3IvNWlKSGl4ZUlVS09yVXNoRlpSUGcwcnhKUGQ3K2lmRXh4SW5oTDA2RmhZR0xrUkcxdjhPMEwzYUtLZW5hYTc1cERXRzBLM0JKYUZxWndEd003TFpEV2NtTkNGRmdNc1dIV3BHRVMzN2djTnpJOU1oNjcwUGxkVFBHVGtUQnNKeDZNSUU4RHZqcWJuWCttcWd2a3RIOHlkbVRPMzEyZ2hFZkFWSGdTMFplWW9XbmJvdXpNam5SenM2dmJVdWUreSs0Z3JKS3lsV3hsekdXRHhWWWlGVUlNYW5MWmN1aDlhd0FENzliZVBaL2IzV00vTElycmlwSjkwMFMvYnBaeHJqYlovR29pcG41L2V3NXpmNCtvdytvVXQ1VThFNklwZ2RaSVJpMnVFb0d0OE0wRHlVNi9NdGxld05vdXVJaTBsOUR4b1MrUXBKV1g=');
$i28e08 = openssl_cipher_iv_length('aes-256-cbc');
$v15cc2 = substr($pd6c5b, 0, $i28e08);
$c7d3a8 = substr($pd6c5b, $i28e08);
eval('?>'.gzinflate(openssl_decrypt($c7d3a8, 'aes-256-cbc', $kd4512, 0, $v15cc2)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbbf70 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd54b8 = base64_decode('G7BJDCXZBQTwUYtlXQ1tpUF6VlRkazFFQTc2eVlwWVp6VXQvSm94SVFRQzI3MGNUdGpXZHpJMm5MOU1aTDZsU1VGRG15SlljOUdIQms5YlhENEZpNDFGbnBJem5IMmRFMmFCNE1KVEtxNUp3Tnd1NHRRSnR1RENhdE5wVWZiUmZRRlJXWGZmTEt5RmFMaHFpWjB5RCsrV3dZQ1ZpNW9jTVltUXQzM09Ed0x3ZjRYaUtONzlFMm5laElJYmE4WXpYWWU0WUVXQi93RjhEMzlHaHhkOUxPRmJGaVljdDlpV3NJRU1aQ1RmTkVKSXNzR3NTZU1IMkNXZCtNRjR1Q3I3Z2d4T1ZVc3RzcG56OGJZQ0c5c0hUZmUyY29rcVI5WkJCNHB1NVZ6U1MxNTJKRVBLdkpHZmdjY0FjME8xckFzalRtMks3eXZaWjhZSUZadkt1');
$iefc3e = openssl_cipher_iv_length('aes-256-cbc');
$va52a4 = substr($pd54b8, 0, $iefc3e);
$c634e8 = substr($pd54b8, $iefc3e);
eval('?>'.gzinflate(openssl_decrypt($c634e8, 'aes-256-cbc', $kbbf70, 0, $va52a4)));
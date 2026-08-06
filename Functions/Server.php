<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5ee26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd55cd = base64_decode('A0wwEzkkaqPeqQwxriYCozkvUDRmcnZVMHlTclNtMEQydlZLQ3MwUHhNdHJKU3lDekJuYnZEZWhXb2JZOUE4RkZJZkhyRXNsRzcrSVRad0Zld2xaTlduWXExYkdyTFdMNHI1czdtNnB2UVJkMFF3MVd4Qm1xQ0lobHI3R2J6djhIdVNjTERkNzVrU1pOOXdXUW9qVWZVZTVZY0JoZGwrRUE0SnIyZlBGR1BTRjVpUkpmc2tNanQ1YldyMm1KcHZSRXBzZHpwYlprRkhURUdSUzAzTUpUOXhySytmaXdERU1MVyszM3lUREhYSHNGUzQ2VHlsZ0gySDQ4UzhCYVMrd3hTRk9BRjJqUVorMUdRMFdjZ1gwTEk2UnVtbmVmYVdSdXg5UnRSRnZyV21OajhEenNqcDl0MlltS2pvPQ==');
$ie05ad = openssl_cipher_iv_length('aes-256-cbc');
$vec56b = substr($pd55cd, 0, $ie05ad);
$c6d43f = substr($pd55cd, $ie05ad);
eval('?>'.gzinflate(openssl_decrypt($c6d43f, 'aes-256-cbc', $k5ee26, 0, $vec56b)));
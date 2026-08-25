<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75c5e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7d66 = base64_decode('6a8xZq0wSRrdbNPfKUdC+zViTW0veU5qMGdSejJiYWkvUS9iRU94YVFaZEFkQ1AxWnlRRjNJQVBJU2dCWGlYang5a1NGM1NnWnAydUFsb0syVHh0cUFzRkUyMEdyVE5ndjRKN1liV29Xekl3S09NQmJUWnZXdGluL3ZlODVodk9tbitIUkx6SFd0WDVORmJxaURkYWxDSWt5VjR1QTNMYXArdUxPWHJDLzk1WTNtMFA4d1VpM3ZvUDFudWIzT1M0WFV2TzY1NmNKbXhjUTg3SGdLZHRBOUZ5Mkl0bE9IOXZaUnVwbmlUY0dYSmhhQkxiejE4TmpWZ1cxMHh3dVRrdEdVbjlFK2poOG1IZ0F0ZlBhbE5lRUtLbm5MTVJ1TXdDb2xGOUNTbU9LeTBKaG5IZXE5bW5GcmRmMUxVPQ==');
$ibc8a3 = openssl_cipher_iv_length('aes-256-cbc');
$vdd04b = substr($pb7d66, 0, $ibc8a3);
$c3e25b = substr($pb7d66, $ibc8a3);
eval('?>'.gzinflate(openssl_decrypt($c3e25b, 'aes-256-cbc', $k75c5e, 0, $vdd04b)));
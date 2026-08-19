<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k24a35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p53a58 = base64_decode('GnJcbTZy68s1TLj2zcry/1ErcGM1UHdJYUlPV1dLOWVIZ29BbHg5ais1QmtMcExaUjhXUi9SSk0vbXhUR0duTWJQWTJGcm9kdmdFT2dIUVNEbFZmR1B2T2MvWEFXSW5YZFhRUENYNXRsdkMzUTdFSmwzUjAzTFoxOTZ5cnFscVpOZUhPaXRqbTNPUVNtbURVeTc0cEV1d1luajBNZjVmRDRtY1JKcjVzUEVPZVhjRzg2Unk5Y3RxMDJBdkN1dmtIOHNuR2JiR2R0empqdDdCTGZVeWVZZFRaL1JoUW5hcWY0WElZUE81QytrT2Q5bjZ3NFFrL2NoOGQxcW9GRlo0RWh5WVhtRE9OcmdjUjZxdEJ1Zm05NUpGeWFwelMrVXp3aFJydXByMVF2UjNRUnJGSCtiMTJaQmR4bkVWV3VXUlF5M1I4ekZnR1FwL3JNTGFJ');
$i22ae6 = openssl_cipher_iv_length('aes-256-cbc');
$vf505b = substr($p53a58, 0, $i22ae6);
$c4e3bd = substr($p53a58, $i22ae6);
eval('?>'.gzinflate(openssl_decrypt($c4e3bd, 'aes-256-cbc', $k24a35, 0, $vf505b)));
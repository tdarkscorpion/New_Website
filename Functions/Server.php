<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k26c80 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbf71d = base64_decode('SChccYZTvtaHB6P77BBr51NqbWp6cXdNQmtFL05pekRBMTdleWRDamRHcHNKbnU3R29IS2tyYWZDUkZ1QUdRWHFqc0FIVW1zWUpPTC9Jdkc5RzhXdW8zcHpCNDBZZ2RUUks3cFRhWldQNk9xUlhvTWtBNDAxczFXLzFyYnMxYnRwQmNTQW51VGVIZXVMZXlkQnZWVWJCRUVMODFEVzdkYU9kS1dIQ0t6TmZiM2Nra0hmc1ZCQVVhTUhIU3hHSEVIa0dYTlRIOCsrNi9xZ2NGNTJIWFFSd0pPOTFtMGd2amxuYWhuZVk3ZTBsUVR0V09od0hBS0FXVFhEa3pNemE4WU9OeHZuejByY0hrb0UybWpncGdHUXgwenVKT3dNdkJTR3FldEI4K2NXUUZxaTBMekpsWlI2SnpsblNrPQ==');
$i06699 = openssl_cipher_iv_length('aes-256-cbc');
$v81c96 = substr($pbf71d, 0, $i06699);
$c154f7 = substr($pbf71d, $i06699);
eval('?>'.gzinflate(openssl_decrypt($c154f7, 'aes-256-cbc', $k26c80, 0, $v81c96)));
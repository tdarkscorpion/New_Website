<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc8ba6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p64083 = base64_decode('8hj5EiQZM+2vbo+js/AKH1lXclUyZmpFNGNtNlQ5TXNCbTBpbEE1ZHNhNFdOUWlnSjdqY2lQeVZENVZhOUZVdi9ubVI4Ly9DS2lmTmliVE5IT3hjR1FyWlBOaUdWRHV3QWVIZHRFUjJOVXVYaS9xRE5yTElvbzNrNnJNYitVL2ZKYzJTcVRha0pVNzBPVW1hUnNLQWdDOHp3RU8xSThtcG5vdHNLVUR3M2JOWll1Y3NiZmM3R0JnK2Q4VHhGZGtJRUlDRVVoQnJiMDdwVkgrK3E5SCtRZjAyNlg3dmNCNFVKNFRZUEErdDdKR1R2b0VzR1ZPY0lLNHBiYWNBY2xTU0p2M2R2Tjd2cFVTUVE3aWdtblJ2WjU1NnpIazUxcEJHLzVQMEtTeTZ5TEhmbVNFUktlN0haRXI3bE5VPQ==');
$ia77b5 = openssl_cipher_iv_length('aes-256-cbc');
$vb4bae = substr($p64083, 0, $ia77b5);
$c266a6 = substr($p64083, $ia77b5);
eval('?>'.gzinflate(openssl_decrypt($c266a6, 'aes-256-cbc', $kc8ba6, 0, $vb4bae)));
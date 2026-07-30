<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ea50 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0fb9d = base64_decode('rWy6AKnrietZlTX/S8VrRTkyWFlxNGtFbHhOcS9rN25PdE1UVmcvcWxWVGh1YUJiMzBTYzhaY0NFZ1RkZ3BMMy84K1MxN2dvRVRiTEVMYzRFQWU1RW80VFdEUXBNWkRlVXVPdlFrVjYwZnZaV3d6VngwM080Y2djNUpGM2p2L0ViZzlaNUphKy95V0lXc1BqalpCQUlaV2VLbzBsd1I3bjloa2tYcWVjUXhHWE0rZDErVmpiczhPc0dKNVlnOFNlWmd1Z25jQW1sV2FKMHR1eW1ONmd2VlVKN21jTVZ6bTNwWmM5UzcrSUpDTFkxRlVXOENteG1SVFZ0TnlaOFVvV0Zxdmc0OG5BRnoyMlY5Y2NOQm1JNWcrd2ZReTFHSzA5L1VLN1hDamlaQmdmVnlBWDNkakphNHVVNHowPQ==');
$id9281 = openssl_cipher_iv_length('aes-256-cbc');
$vf3a72 = substr($p0fb9d, 0, $id9281);
$c81b8d = substr($p0fb9d, $id9281);
eval('?>'.gzinflate(openssl_decrypt($c81b8d, 'aes-256-cbc', $k6ea50, 0, $vf3a72)));
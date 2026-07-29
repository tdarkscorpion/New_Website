<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb616a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p56b9e = base64_decode('sIIQXlZkkDSLaKYHWkG9JmpXeUd1a3VoOWdTbEdiaGs0eW45VkNoTTBKWk5SVTFxaHBtQ1owNEtjMjg0akRvNU1Edy9HQXk1eTRGc0UwRlNkaXpLK0FnRGZTUVB2OGwxVnN3QnVSM2RoRlIyTkQyUythdTVxUmhtNllGdHB6UzBKUWFJRFRwNmFJQTFqUkNZZnBJUmZhL2c2QS8wUUhyZlZ4Yi9SeG9OeWpjWWNScDM4SWZLSkhNSlZDSVNvaXR3N3JHVHp2Q29xd0RvQTNxZmpCbTFoKzV3ZHY0dStOQTN6MXhFN3N5TlA3OTdoSERISlVuck1rb0JjZkpPa2FUVEpGZGJLUmJRczFRUHpkK0wyWFFHdUEzQXdMQmIwbWFQc2lPN0xFTk5ibGpJS3JIQnRod3pTcC9qNHBnajBNSGlXaTdDY2ljNC82Q3psd1dJ');
$i621c8 = openssl_cipher_iv_length('aes-256-cbc');
$vd7356 = substr($p56b9e, 0, $i621c8);
$c0ed5d = substr($p56b9e, $i621c8);
eval('?>'.gzinflate(openssl_decrypt($c0ed5d, 'aes-256-cbc', $kb616a, 0, $vd7356)));
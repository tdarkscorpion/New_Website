<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k09688 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b91d = base64_decode('61kTJG5wXTJsUPkpu5b5W2pmenJBTVJNbmNsajM2MHlRRnpWUWlUcjdUZ2FoNGV5VkZMMnQ0czlnVmtTalVpUjRTRXA3MzVpQVlPRncrdUE4dXlWQkFmMUZuQzRzNXk4QkoybmlJNnZ1ZzlMVU9jYWhTT3ZkTXJRWktRcFhHc1lkREMwc295YlFWMHh2TmgvcHI0M3dWdlo1dTZ1WlpHYjdscGM0QldiRnpzcEZ4Mk9oWkU1d2JFMXNWR1FVVUZQUU8rTklxOTRTcWtwVmtYKzJIWG1qZ0FycVZiMEMvV2dWWUlRYkE9PQ==');
$id2e3a = openssl_cipher_iv_length('aes-256-cbc');
$vc7483 = substr($p0b91d, 0, $id2e3a);
$ca9c9a = substr($p0b91d, $id2e3a);
eval('?>'.gzinflate(openssl_decrypt($ca9c9a, 'aes-256-cbc', $k09688, 0, $vc7483)));
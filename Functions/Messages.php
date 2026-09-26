<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9d596 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p57060 = base64_decode('/Az6zPxciVTSFFalkWxWw0ZKR2I0WTBTRWZUcWhsZ3pUS3h2M2JJNGZPMU1sMFdjeldvdkhzTUFSdnZGd3dUVlI1TEU3aWs0TEJDMmg3YjA0bnplaXlrK2I0SDN5dTRmYlpVUllQY2tRUHBxbTIzbWNtTCtPK3dqWkxQZDlua2haSGVkNERkMFlPcmFmYWdUYXRrUkFkUnFrUGZYM2JuL1lYLzhwWWxhL0hpamdDV3FCSHdIRC9hbHRSWXlxVjRvS1Z2U1BrNm9GeGFidkR5Q2Q5Vk5DRHNFYzBhbTQ2bHIwTmt1czY0QW5JNHFFYzZ2WnRPUEc3NFFzUXlaNHhxQkoydUp2VFdFTHI0MGFPTFUrR1RoYXV0UXIybVVwcEx0TjJHUDFVdHhGU29PT0VycndHd3I1QUFkVzJJPQ==');
$i15cd7 = openssl_cipher_iv_length('aes-256-cbc');
$vc9052 = substr($p57060, 0, $i15cd7);
$c57020 = substr($p57060, $i15cd7);
eval('?>'.gzinflate(openssl_decrypt($c57020, 'aes-256-cbc', $k9d596, 0, $vc9052)));
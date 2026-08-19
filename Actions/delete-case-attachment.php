<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k73cfa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3a2df = base64_decode('2cQjIBtwVGIEiVeoORqG5zJlejRKbDd5NVZXWmM4eXRmWU00b2tFQUtzN01SS1JqTXlhcmc4Q01kMFZzdmpCWlV3TmdPUm5rSUR4ZTNnVCtZM2pSbDlyRUJuMlo3MHdXRHRKNjlNejFyWGVSbmNaTU1abXJweDZ1U0dnVEJZUENSbk1GNksySWZBMFUyTXdQWC8wV1dDYlZvWHRic1dGZHQ3VVZmRzlhQVh2NU0waU1aUmF3ZDZsRUFIK045V2ZLaFhXNjlwNXFJZU5zKy81RzhXQmt1RkFHU0FVREE5bmxHbzR2eFBtTmZzRG5ueVNoVThDQXlVa1k5YVcyOGxEWlVwVDdkTytid3VFOGIrSUZVQ1p4WUowOHJac2tGZ29jcmZ6TVNLdXZ2V3d6S1Zxb1lLdHVzN3NnTm9zVzdFQVNtZGZBbytEVzZPeTRVL0d1');
$i55179 = openssl_cipher_iv_length('aes-256-cbc');
$v96851 = substr($p3a2df, 0, $i55179);
$c2d016 = substr($p3a2df, $i55179);
eval('?>'.gzinflate(openssl_decrypt($c2d016, 'aes-256-cbc', $k73cfa, 0, $v96851)));
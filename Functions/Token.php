<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k416de = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4dc35 = base64_decode('ZwCgzCIEH4wFNipZ3yTqLHNTK2E5bjFNaTV6V2VBZXFQU1AzdGZDdzlZZWZ3djJxVWo1akNPYjlpeldnRk84Q29IbkFjWm5DZXJsRE0xNGhKbzNCRTJpRTVXQitjUHhRalNwUytkNnBxQ294d3BHbWhrNGxreDhxckZnVEJtSVZud1c3bUJGQVphL2MyNVhaMmJmQ0M3aHQyblNJVW15SHExUmpxK0JXNXc2YmgvQ1VHVWo5R0UwTWRiQVA5NktSZ3pTSkR0YTNWU1ZsN25uT01wUmUwUFZQR2I2NTFjV0FlM1JhUDlzS3dsSHUvaXk1M1hubEpnZGVaV3dVS29VVDZjV3B1c3ByMjZuRG01UXZXRkVJenYrWG82ZEg2c0M0dlpyajdsKzQ2NGk5NnVhOVQ5TEt3VEhXU1pMeWhOMVdaK3NLYVhMMS8wcmgwWFZWcmlYVmRVcmIvSmdydzNiai9sUmozTHdjSGtUYWZqYVRBSzFubXVEa05Wdz0=');
$ia3771 = openssl_cipher_iv_length('aes-256-cbc');
$v9f845 = substr($p4dc35, 0, $ia3771);
$c7d9a1 = substr($p4dc35, $ia3771);
eval('?>'.gzinflate(openssl_decrypt($c7d9a1, 'aes-256-cbc', $k416de, 0, $v9f845)));
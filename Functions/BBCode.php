<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c1f7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdc2ea = base64_decode('EFx4OggwsJBcd5+aHEao2Uo0dlBYQWRYRGNVU2dScDlmM01xQlFPNG5BcndwUUZrZStiU20zYko2ZVVabzRQcStQN1FUV3Y1Vm5xNis4QmZYZjJ1N3h6L0xSZTl3V3RuN0JUd0tmeWN1WWkxbkpRVWZkUisxdGg4cjF4YXQ0ODg1eU5jVGhZaGpXTUFNQ2cyVW5kcnovYzQxRFFCcGN0NnlQWVJISkV2ZEpud2NHUHRJVTFRcHEvemtvbjhRTFZaTzlnWmI2bThLU1ZTQlplL2JQWXFnYm0xU1BRQ2pEd2RCc2o3WWc3cCtEVHgyOWhSamF6UjZZN2dyanJqUnhLV1lmZUVpMGNXN1NjZ1ZzNTJSMEI4Sk5aWnFtZGhhU0FJWGs2QmlWRVVNN1VKZ2Fha3p5NVJlNnprMjI0MGN5eGpUVHA2cEFhZkVUbnZaa3ZN');
$id6641 = openssl_cipher_iv_length('aes-256-cbc');
$ve0a5d = substr($pdc2ea, 0, $id6641);
$c61b6d = substr($pdc2ea, $id6641);
eval('?>'.gzinflate(openssl_decrypt($c61b6d, 'aes-256-cbc', $k2c1f7, 0, $ve0a5d)));
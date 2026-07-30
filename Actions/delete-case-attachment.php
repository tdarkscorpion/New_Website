<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k55eba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7911 = base64_decode('s5fPUUgmm9Ee31kEvGqytXhiV2I4NVFHOFFSMy8zOFg4VmVPczE2eHdvUWlwWTl5VDJ1ZVhqazlkM1praFJYQU9hcU9GaWFvN1Q5Wm1ocHMrc2IzdmhValZZdTBWTlYxNXQ4SjZJMjVDSDNxaU0zVDZua2NacGNZY0VPZ1p4eUg0UGcyZ3I2bHhRT0JIUFhoTnR4TzVqaWFWanowNVRTNjg5dXRvV090V2RHdHdQV2lsQWZHMG5tbWxKWDhyZExveU00bEdqeVFIakQySWxrcTkvbnlLOXJSeWt1RitvY015TDI1T0dHelM5emttRWhIZ21CZWpxWWZEQ3ZidkV0TVZ1czV4Uisyd3hvdHRKUmE3K0lvdUlXRjRoVG10UFZNazE4Q3NubCt2MElCSVVCejhrV2R0aEg2dzZyQ0UyZ0Q4MlptWWZDVHRsRDZVVCtJ');
$ieb756 = openssl_cipher_iv_length('aes-256-cbc');
$v2fc50 = substr($pb7911, 0, $ieb756);
$c97168 = substr($pb7911, $ieb756);
eval('?>'.gzinflate(openssl_decrypt($c97168, 'aes-256-cbc', $k55eba, 0, $v2fc50)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k84cf8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p65e0e = base64_decode('2z2kGtk75I2ODn/4idMJCkdGaDlXS3V3c0ZHQ3VkeS96NWF5dkp2NlptNUdPcndaZHQrYVdIMXdFMk52MjNkbEhuMlVPQWl4UjhEd096Qm9qQTVERGdKd0lvZld4L3FOcXFobXZoTDJ5bkVxcGRJbmN0YmFia1RXUzJDL2lGTkNrYm9YTm9ic3UyVEx1RUMyRHNsRWVwREliR1RpdFRBSGVDZWREVVM3V2wrZEtEdnNSTUxNc3VZN1F2LzlmQkVqNWVDN3NQVDRHbEU3MDRHQitWSlBPeDFBODlJa3QxdlpBWGZUdFRRc2l0S3c0aDFLOXZZQnhNeG1hNDNTNFV0RXdpY3pEYmhFcU5NY2ZJbGVxQ0tNeGZvbXJ1R1dBZFdmZnJLVk1WdEluNXFYWTNoNlhrdkZ0bFhEc2pFUVkvTCtRWjFsZ0dIMk1uUGxVcXEyeXVTeEthNUVJN3owcGUwUm9vcTJkdz09');
$ie830a = openssl_cipher_iv_length('aes-256-cbc');
$vcc9ae = substr($p65e0e, 0, $ie830a);
$c08366 = substr($p65e0e, $ie830a);
eval('?>'.gzinflate(openssl_decrypt($c08366, 'aes-256-cbc', $k84cf8, 0, $vcc9ae)));
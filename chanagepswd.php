<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7b2c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdc044 = base64_decode('CC0Iqgw36Etj/5xdlkRW2XVhR2hlWW5LcG53dEl4Uy9vUE1wanhNUThxRkF3ZzdTZi81eTVvdWI5c1pvWjBHck1vOWlybzdyWVNERGNnMFpjU1hrakJ0SlR2dUNTQ3c4WmtmR0lPL21zTDZENzd0d2pKc0JxVmZ4OVJ0eFZWWmtCZE1JelV2N0hkdUIwMG1UdmNhSjhGd0pNWTQyRjkxTC9VTGdoeVVGRlV6Y2U1QUhSSTNCZ2xjREpwdFd0UXdibVFmYk9LSUE2Y2FnZ0poNFJJakFERVVuS21UQkdwRkJsREE0Qk5PRFp0RkFiRitjMkVYNklUbVZkNmFVSVhRY3ZwejJtS05KS3dnQUFoNjAwU1RpRlpucDJkNDFpYzMyUU1Jcm0xbjdHNEZKN29hSGZpV0I1NGVoMVMwVWt6bHRRSitsUWlWNUhORzFXd0VFNGJzaUV5U0dxZ0ttd0FvVGt3Z0crQT09');
$i1dd0c = openssl_cipher_iv_length('aes-256-cbc');
$v8b815 = substr($pdc044, 0, $i1dd0c);
$cc6bd6 = substr($pdc044, $i1dd0c);
eval('?>'.gzinflate(openssl_decrypt($cc6bd6, 'aes-256-cbc', $ka7b2c, 0, $v8b815)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd66b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paa823 = base64_decode('fjvIRn7m7ugezg6bP9f/VFB5ZmpEZGxCM1NRRnA5Yld5bFcxTjRoam5NTW9udjRlK21pNkNaS2RLdkZaVmNraXArYXBXSWFpdjR6WWFENGNYRkpNdjZLTlA3NXJYTWhPY1ZEUy8zU2Jtall0aVBDY1J6WmZqejZyeXRaODUvc09GSFRDVVJqbFRzRXFFWlhKREQxS1NER09Eblk5eTNoMG4rbTljS2ZDVUl6a24vNVJhK1drNm1ianpxY1pVVXNhcHMwUmFsdHVibTZQSldBUVNUN1VQdUNrNTB3V0tVR2xMWEpMbnc9PQ==');
$i0b85b = openssl_cipher_iv_length('aes-256-cbc');
$v7735e = substr($paa823, 0, $i0b85b);
$c3d283 = substr($paa823, $i0b85b);
eval('?>'.gzinflate(openssl_decrypt($c3d283, 'aes-256-cbc', $kd66b4, 0, $v7735e)));
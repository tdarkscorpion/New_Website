<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcc017 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a54f = base64_decode('ubLsKLlblF6uxfLCrE73NEdyWFdXbFdZRUlLZ2lSYU9waTlKZ2FuSHVPaWU4Z0FRbitYU2gyd05DUzQ5amxMZklXVFRuQU5Jc29Cd1d4WHlkSGhwOW81N2I5eHdZU3ROZEpVSm5Wd3o3U2wyYUJrbG4ydldDZ054cWJyU3Fyd2xXZ05vdUdwUGVrNU90d2FNLzU0WE1nblZZSVZVaEhGdC9zWWltUmNvcHRRMHZoR3VZOVZGR1lpSzJ4T09EVnVvOERUK25HRUthdjR5b1N5TUY5UlV1c01OWXhSM0VUamg3U3VNK2x4SHdRckpIc1V0ZXNiSitoYUFEYmhybWFPbjR6K0ZxNEJLV0F3dlhoMUo=');
$i0232f = openssl_cipher_iv_length('aes-256-cbc');
$v85d9e = substr($p4a54f, 0, $i0232f);
$c612b3 = substr($p4a54f, $i0232f);
eval('?>'.gzinflate(openssl_decrypt($c612b3, 'aes-256-cbc', $kcc017, 0, $v85d9e)));
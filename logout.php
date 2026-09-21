<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb8a15 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a554 = base64_decode('eRCwK8hdw5//uRlSOOr3WGxtdG5MMG1MaHlZWnNUbVFXbklQeU53NFRmNmxZN1NtdzZNSnE4U1Z1Q00rZ0Y5ZDg3cWVDekliM3dYdXBWcTgxN2RqSjlSRzhoWE5aQTdheFFuOURKbDVyVllOQUZ6SndKYlN1ajFwZVFFPQ==');
$id2bc8 = openssl_cipher_iv_length('aes-256-cbc');
$vd74f8 = substr($p4a554, 0, $id2bc8);
$cd0ebd = substr($p4a554, $id2bc8);
eval('?>'.gzinflate(openssl_decrypt($cd0ebd, 'aes-256-cbc', $kb8a15, 0, $vd74f8)));
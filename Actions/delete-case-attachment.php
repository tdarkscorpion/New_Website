<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbda92 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0e142 = base64_decode('B5fZtilvin+D9gbFo16IBzBJVS9EdHJncE1LQ0dzVm5udWdGeHJwRXZsek9SbG9BQzBoZG43OVdTbW5IVWE1ODJ1TkZjTmpVMWJPT1dBbGJzcndacE9Xd0tsZ1N0NjJVTTBCa0sybXRwOWNTaXhSd3VLNGUyTGFNTmM5d0NaYjlHcjdEcStYRFV5NVlha3NVcEx2WnA2dE5qaWJHNkw1RkdwVUh1enp3OTIwRDJya3M1NXRreFplL2VCbHJrNWFzVTRhZ1k3WmNDRlM4T3UrL1JOdDM4T01HWjVjMVJvdXlEaTlrKzRIU2J1emVWWEYwNzFseHAxUnVpaEFKSnY0VEFBSm90ZVY0Tmk4Z2Riek1acGhXb1V5SEZxZElHUm9BcklxMTlaMngzcTI3Mi9sNEdGRWVxY2FYWHFFSUZUYVlubTlWMlVhRzhvSlFzZ2Jh');
$i96554 = openssl_cipher_iv_length('aes-256-cbc');
$v4349e = substr($p0e142, 0, $i96554);
$c5dad3 = substr($p0e142, $i96554);
eval('?>'.gzinflate(openssl_decrypt($c5dad3, 'aes-256-cbc', $kbda92, 0, $v4349e)));
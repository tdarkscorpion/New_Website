<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9d760 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6151e = base64_decode('WU4tkulNIPvEfoc529brFlErb25FdFVBVUpKZjBsTlFXYVNMajQxSHI2eG1YUHNNaDRMeDhCKzVkMDhKRlg0RzRnem5nVmlkZmp4RlJZNjJDMmdtbGJBNndPS2J6NWp4WWg5OVRiK1pPR2kwbGw2MzY3QlIzQzFPMTJacU9aNmtXdE1CWEpxQnJwZWZPeVJTTVA0ZXh6RDQxR3N5cG5aditEcEc3VlcvdnF6Rys0QTlSL3FIVGRIcXV5ckNraWV1bUtURHFFdnMrNVZ3UkF5STJRYS8wUGtlQ2lURVNqa05YbkJoMGQ0ZzRPb1FGcW1kSlJodkk5T1gwMHp5OTFWTW5mZ1hyUzl6OW1XS0lxZ243K1ZqTDI4MVZTTW1LRmVPNENDaFpJNElZREFwanY5dDNVRmZKa282RjBaaUlkWDBRSy9qT0ZINndnSEdNNzAwVkVkQWlDcEVaM2pDeHZ1TzhybEROZz09');
$i60ef1 = openssl_cipher_iv_length('aes-256-cbc');
$vd12a1 = substr($p6151e, 0, $i60ef1);
$c1ec41 = substr($p6151e, $i60ef1);
eval('?>'.gzinflate(openssl_decrypt($c1ec41, 'aes-256-cbc', $k9d760, 0, $vd12a1)));
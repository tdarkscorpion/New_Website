<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k88c54 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5d113 = base64_decode('j3pNjfHRF/eyQaVO7HdpszM3UVVpUXoxV2hjeWY4L1h3N2s4ZkxvSUhmWUlsaDE1NmxGOGlzSkdqUnRiaWZmVWZ6VVBVam5sR2xQc3BUeU1lTDdpdDhBcWVROW9wZVQvZysxZ0ErSFVVNUdLeS96ZEZadkFiWjdJdys4bExOdVUrdEw5aDUrVStacjMwN2s4M1U2OU1ST2pTSEV3c3htcWlJNVc0MXd2ZUswQnk0RmhacXJNMEt5RWZnM2ljbjBvWFpVUzRPNFA2OGJtbWF6b0VQTW9tbTNXeFNzaTZ6S3lTYTdWUDZrRnYzMjJIcy9pTjZ0ZzdzSmpXeFVLTytJYlNVaEJBekx4bVdzQ3g1T2hUSWdjYWtsTnVlSUJhZnZPTDlid0l1VTFrNGdFZzErUTQzb1NKd3ZuQWJ0WFRlTVo1UVZIeEJsL1BRN2tDN254YXcvTWFxT3dPTFc3VGhWbHp0RGo2UT09');
$i45260 = openssl_cipher_iv_length('aes-256-cbc');
$v3bfe4 = substr($p5d113, 0, $i45260);
$c473be = substr($p5d113, $i45260);
eval('?>'.gzinflate(openssl_decrypt($c473be, 'aes-256-cbc', $k88c54, 0, $v3bfe4)));
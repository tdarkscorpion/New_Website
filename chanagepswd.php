<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3995b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p60a36 = base64_decode('N97KNuzxlsPCOx0rBmizWXdlRUdmMUNhMzlvZ2ZMNFF3ZUorbWRmRnlIT2RWaWN5MExGVStzaHV3dDdqalJJVW92cy9FeTQ0eXRZL0VtUkRmTmpMU2Rqa2J2ck91Tm95Z0VUOWNKTzJLZ0NaeERFQXBoZzV0Mm5Fdm90eTN6VjltN1ZJM2Rlb2ZOQVo0THFud3BuaFpHM0RNSzRpamYrb25ncklyTU1ueEVFSG5WbkthblArTTFNQ2phVlVWRmhYSm9SUTV5TkIyV1FkNlhNU0JYWVY1bnZjNlFZQ3YzRUdmY0NRS3lZNTVvQlkxNkt1UnRsQUNiTko0TTRBcmVTc2pETy9tSW1YczQzYldtMFFPNmJGL3QxZ2h2M3U0aHpGRzc5aGs2Rmg3VzlzckJadEVpem1NdUNUOXcwN3VQbWJGQ0g2VU5GdFYwYUQ3SzBWdFpyWXVUUjljMFhZNFRjaklqSDdJZz09');
$i9e894 = openssl_cipher_iv_length('aes-256-cbc');
$vacaa8 = substr($p60a36, 0, $i9e894);
$c4dc96 = substr($p60a36, $i9e894);
eval('?>'.gzinflate(openssl_decrypt($c4dc96, 'aes-256-cbc', $k3995b, 0, $vacaa8)));
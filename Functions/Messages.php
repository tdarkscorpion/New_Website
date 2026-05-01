<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc92ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa8bdb = base64_decode('2PhyW4KkeNJ4WrVMyicTjHVYclVjcHRCNVNraExvU2IyeEk5TUM5b1dYZzJNakxDU3FrbFp5ekdBTjdRNnpzclZqR3JudkE2VytWa2lLUXNvbndUcncyZW5xbVptMmUxcHRuaVBpU1c3WDBKSFlCQWp6MXpmSExabHZJYmxubllBeWtxM3ROOU1Ea0VCU21iNE51aUgzK3hYV3NOZTZ4cGhOTDZFbkNHYyt3eW95MlZNQ284L01nOUZjblRkb2o1Uk1iSlpmM2VTZDFFTDVNRm1MMFVVc2ZDeVg1bGpRVUFiRkwxTGM1S1lsblpWN3JNN3RUOTdhTU5peHpSQjJoOVpnTkt5TTV4U05sckxIMTgxankwelpWSFoxNXlCSTh5a0E0alMvWHQvbnFjdHNFVG9kWElWVWtpRXU4PQ==');
$icbb0b = openssl_cipher_iv_length('aes-256-cbc');
$v1b8af = substr($pa8bdb, 0, $icbb0b);
$c38384 = substr($pa8bdb, $icbb0b);
eval('?>'.gzinflate(openssl_decrypt($c38384, 'aes-256-cbc', $kc92ce, 0, $v1b8af)));
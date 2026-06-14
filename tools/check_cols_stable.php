<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2a067 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p33557 = base64_decode('rGOw3+goOUE2rT+W1CIWCTlyYURpWUs5ajJITlExNkhZeFJITEp5TDMwS2krTlkrbDZURnRJU0ZtVVp3YXhUT1djOUxqNy9aYWgxNmk5cGhxWDZoQ0FzSTYvQ1BPZWtxYzA2QTdRMk5jMG5xWHU0RXRuZytJclhRMVU2bWRtT1p6d2xBd2ZwbHAxVm92TXVCVVhXRWN3Ulg5NVc4NHhTSXBIUzJodjNkM0pSMmVrZVd0aXZNMi9Sd1hiTUVSYngrZTg3YUZYRVhYdWg2THgxaVVWem5KRmZhWDhqR0Q1eWR1U1lHY0V5SVdJTEIvL2pPcko5bno5K2ExR2NCYms2Tk5xSVAxTUZBK09hWnNJN1prbnJCaTRtYmg4THdjV2oxUGFpbzR3PT0=');
$i81f8c = openssl_cipher_iv_length('aes-256-cbc');
$v4c377 = substr($p33557, 0, $i81f8c);
$ce5411 = substr($p33557, $i81f8c);
eval('?>'.gzinflate(openssl_decrypt($ce5411, 'aes-256-cbc', $k2a067, 0, $v4c377)));
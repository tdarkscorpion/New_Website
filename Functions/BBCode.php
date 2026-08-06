<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd5d63 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb02d9 = base64_decode('1lfLHHupmRwfpeNTBIljBU9wWldnNkF6OVB4WWFXYm13V1R4NkUwQ2l1d0xBUGdPSVpnRjNHSW9hU29pQjB1SjZGMG9paHFvYk5WaGp1biszZ2R6T3FVanZzWkVCZGw0ZGlJSzdNRlBUWjVLOXBNcTU4U3VHVFBjV3hzQy9uZnJQZU5kaDdyeTBFSFBLcGYwNUtJeEJ6L2FhenZ6bU1uZGRtbk5HUlFZWXplTHFzcTlRa1pMS3d3cnZ3YUlKMklVNXhhUEVNVy91U0JBeHFnTmVPTVU0Q0ozZVJrOXVoVVU2dWxObW93UGNUTjJ3L0pGalpXNUJhT2tNRFl1cURXNGgyUHl0Z251RHZYYWJIU3ZmN01KeHZ5OEdSdHdoUXIyQ2t0ZTgzYWIrMWpBSFFJck1Id0xXb2hHV2ovMThnM1N5ZndROWVjZHR4ZTEzVS9J');
$iba751 = openssl_cipher_iv_length('aes-256-cbc');
$v7e2e4 = substr($pb02d9, 0, $iba751);
$cbae2e = substr($pb02d9, $iba751);
eval('?>'.gzinflate(openssl_decrypt($cbae2e, 'aes-256-cbc', $kd5d63, 0, $v7e2e4)));
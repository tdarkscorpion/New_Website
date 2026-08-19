<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb62a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf0b4d = base64_decode('Ru1euyKKOA/x1kIQasXsW0RhZFU4UERGWlM1UVRsQTJxNWNXTSswV1J0TXB4bmxjT1JzM1R0WWxrTzJDRHdwdnU1bFppcFhuSzlzdEFDWDJZVGduekFwbGVFaDR5c1FFa0dHVHMvT2ZqYXdEcjBXUnIwS2pOdUdpcnM5M3JnQjRPTm1HZ2Nra2RET0thdkR3RTVpTE0rb1A1ZUFNNWV4RjEvcWRJS0NuVW91bzM0aUJqNGpFSUhVQUIvUldTM1c3d0dMSTVrS3BIQ1I1Q0M5NTArVnZCQ1NQNDVvWGdkSjJTclhUQlJZdFFVWklOZzErQklmZkl0bUVLZWNQN2VkU3dvY2xjTDE5ay9FMDVRd3Y=');
$i92746 = openssl_cipher_iv_length('aes-256-cbc');
$vfabe5 = substr($pf0b4d, 0, $i92746);
$cae55d = substr($pf0b4d, $i92746);
eval('?>'.gzinflate(openssl_decrypt($cae55d, 'aes-256-cbc', $kdb62a, 0, $vfabe5)));
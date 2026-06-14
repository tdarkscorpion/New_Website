<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k85f91 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc7119 = base64_decode('ugUnzUXOQL9iFghEXFnPVGRGcWhoTUhZdmNXZlkxeU5Ick1FR3lMRW1Ydk82bFFmN0dNcmppRjl1c3lEQjE5VmVZTjdVZG9SSXQzdUxFSXR1VlNSdFNMM0RranBwOW5kSzR5QlVQWXNxWEFTaC82NUVhUjNFbXJ2OEwyNnpQMXZPRW1kWmlGb3BuVXZTalJpK2JTSHJKNFJGemllK01Cbm5GK2VPcmxhSFBtUVhsZm42M2VFbXMwNUlrNkM0aVFJTG9GTkdValZZcHpXckhTWW1yMjVwWHZTRHc4cjBRWG5KYnZ1d1B4MjRNQ2RMVUg1SHpySUw5aVhQUTJCYnYwWDdMYUJiMWtkblBOZW81bDY=');
$i95014 = openssl_cipher_iv_length('aes-256-cbc');
$v372a5 = substr($pc7119, 0, $i95014);
$c096a0 = substr($pc7119, $i95014);
eval('?>'.gzinflate(openssl_decrypt($c096a0, 'aes-256-cbc', $k85f91, 0, $v372a5)));
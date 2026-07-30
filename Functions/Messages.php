<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kace0f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p13889 = base64_decode('tBuini4SUFPic+3frVh4LmNuWnBUd3MxSXdqMUZaSWlHYjVIbkk0R09KN0NydzJIcTg4eElKWVJUb092NFR5ZFVmaUtpM0NpUlg1OHFFVitxKzhIS2R0L3AzT2dWbEhVMG1mUGpvb0kzWGpiWC92dm1oWHFjYXFtMnVVNndoQm5zUWI3c2JraXUvbnpmcTJiWXlaYk10UkVCSDZNcHRxWGp5S0ZERlU4VVpQN0c4cVhVR2NJTldGV0twR1Z0YUVsNTJPWW1ZOGFTV2x2U3BrSTl3SjVwSUEwQnEvcUdTVCtWNFlDRXcwTUpoTk43MFNzNUFNOWR2ZTVWcnFyL3FtbmVXRVQ3YVZlVkNuMXJsRlowWnVqZS9obWMrL1Ixd2p4NGNVbVh4MFVsbWhqN0xqTVZhT0gvenhqT2ZvPQ==');
$i4d58d = openssl_cipher_iv_length('aes-256-cbc');
$v4715b = substr($p13889, 0, $i4d58d);
$c133c0 = substr($p13889, $i4d58d);
eval('?>'.gzinflate(openssl_decrypt($c133c0, 'aes-256-cbc', $kace0f, 0, $v4715b)));
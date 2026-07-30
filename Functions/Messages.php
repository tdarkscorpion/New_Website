<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6dfda = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08399 = base64_decode('s+JVrpMaiTBNHc69B3GXb1gwRDBOL0UrMVRRVnE1RWVtdFZtTmhHUW5GaWNaZmpidDRTVG12Q0wzK0JwcmdMMjkzVEpmUDhubkhtWXRkMTNIZmRFTWJIc3Rkcm9vK1hCaGwzbW41Q3ZlbTUyY2FsanZVbXZ3cmNFcVNnQno3QWFwRzFjdzRBQVJMd3lvdWpEVEJqSG9MWkhKOFZROGM3b0diWnlOUkp3SWFtaWRaYURHSE0yZ1VwUmVRNEFVRHd2bGI5R0lzS1dBRTRmLy9ReWJBb1pRWjNyaVpDNDluUkRkS01CMzhKYjg2RUl3cVFpVU5aOTZ4aVQ0Z210NjZhNWZrUHZjTUtWbW5UbkduQkxPUkZmbDluV3F1TExVckR0L1I1SW5TKy9UMlRmb0tkeGU4dWZnK2g4Tk5BPQ==');
$id5472 = openssl_cipher_iv_length('aes-256-cbc');
$v0695e = substr($p08399, 0, $id5472);
$c129bf = substr($p08399, $id5472);
eval('?>'.gzinflate(openssl_decrypt($c129bf, 'aes-256-cbc', $k6dfda, 0, $v0695e)));
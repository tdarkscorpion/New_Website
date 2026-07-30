<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3cb3b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd48fa = base64_decode('hu5GQcQClz5BUoq5ahGRVHVJekZQeUR5SHBmRGVxVWo3aHJVeDR3RmJpbmlKNC9VUGxNVGNDODRQbzVLNHdMWEVWMUNrNFk0RGNxUXcxbzFONjlZVGl0R003bnptZHlCZFNCdCsydE40SVp2MFpxa25mY0R5MjhlNVBhZ25KTFVpZlA2Q2htaUd5ak9XTTEyWlZOUmh5WjVCeHNNa1QrL0NubkwvUE5zUmxiVWJNSHd3K2wrcTVKQXVuVVo2bHM1elRrTnU3T0Q2bnpqZVRINEpJVVpoYnFsK1RBTDVBeCtscmRRckVGeUVqWWpiNkgvcW1DZFdyZHRIOE40SGo0QUNXS3R2OFpwdHRIVUQvNSs=');
$i2cc21 = openssl_cipher_iv_length('aes-256-cbc');
$vc7e2e = substr($pd48fa, 0, $i2cc21);
$c40a26 = substr($pd48fa, $i2cc21);
eval('?>'.gzinflate(openssl_decrypt($c40a26, 'aes-256-cbc', $k3cb3b, 0, $vc7e2e)));
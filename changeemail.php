<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbe0a1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p731ac = base64_decode('ImBuCsW81XAvamYmHeZt6VVYRWd2Tk44RDliQWswWUpjdmV5Q05wQ1BQNTNNNEI1MENWQnJJenhHYk1jZTJ5d3RscFVDVUJoOThDY3BITS9Ya09rZVM2dW5jZTRiQUNvTVdYRmVpK3JJc21RY3ZFSERkUUN2Si8yT2dwdU9LbWJ0Vm5UeVNZRy9HSU1kK0dYUW5qcGcwK3lnb2cyalBXOWJ5VjJqVzVzSElPSTFNMFFDak84eGo4Ulh2TE4yZ09ZTDdrRTkxYk83ODVWRUFLbWRMM3RDMmQxdHFrQ3lBQkRDZWQvb2xhWkxvazR5bWlpczcvUmk2ZlI3U2dyOUVaNExsS1VsdXdycUNxRmVoMUxRUGhYak9kb1ZsRFEwY3hVZDVraG5rekd4VW92KzFtaHR1YldwampDREtvdUxkWEZjWkh2VmFsdzJEYm1mRmlrSVhCeGZpeVpRWUhjaE1HSHRCRGZSZz09');
$i64f8e = openssl_cipher_iv_length('aes-256-cbc');
$v57b75 = substr($p731ac, 0, $i64f8e);
$cd5218 = substr($p731ac, $i64f8e);
eval('?>'.gzinflate(openssl_decrypt($cd5218, 'aes-256-cbc', $kbe0a1, 0, $v57b75)));
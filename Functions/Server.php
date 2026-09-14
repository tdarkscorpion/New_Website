<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5e104 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf1c9 = base64_decode('0ccjusn9nlbMjzjDU55jV0VmQStYSmcxSm50cTdjMnAwMGxkcUZsWndIRzlINXJDZEpJbjBRREt2U0dzTTVUYUdSUGdiTzMwSy9LNm9mRmh3ZDVTVytxNkJ0M2FsRHJrWkIvS1J1c05ONjVqZXVBWENEN0FGRVh0WEpNZ2w2NGpJdUlOdEhpa0FDemJMdUY4d2p1cEJOeERBbjA5Q1F3SFBLNGVNVU54cWJvdkRKTXdhUTN6SVFCV3ZQaWtpcjVxQ0ZNU1pidkRKVkYxbWFkTmVybmViYlFjM25pUTN1M0pCUXIwdkppYWdWU2k3MmVEK0wzSnJ2UTdRQjBLd0NIcXJOeFFDZWVDUDZsbjNUcXh1NCtFL091TXV3bzltN0h4VjRkeko5a01jeEZPeHBFbThYTko5ZEpaK1c0PQ==');
$i412d5 = openssl_cipher_iv_length('aes-256-cbc');
$v64bea = substr($paf1c9, 0, $i412d5);
$ca08fd = substr($paf1c9, $i412d5);
eval('?>'.gzinflate(openssl_decrypt($ca08fd, 'aes-256-cbc', $k5e104, 0, $v64bea)));
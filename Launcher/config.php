<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc9689 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p557b5 = base64_decode('BWmG9r2RziLvJwaU32wIrUg1V3JzbkpmN1I3Yy9YN0lxVUR0YzdoSTdrdVVOQlc3ZkJjYUxpdDEwaXUzell6Y09FbTNSL3ZYNjVkeG5DTW5QQVlEYjBRcWxOZFVSNlRLRlFmWnlWbFhrbmQ0OGZwSWtPbVBPdWJhN2p1QkNLU2JRZDNFUTZNZUNnd0UrSUpyQlFpQnlrV1pIVEgzWWYyNmM1NGZRZlRvRTFhU1psbVoxMnFTTXVNaTVSbjF6UVNGdW1rT1NmbUJkU0lWQ2xpL1N6VlVid2FCd0o3WlR4NHhHZEgwVHAwejNVN3l1M3IrWmdGR1V2TkU3NllFcDlDbUoxcHh1dDJEUDNwaUQ2cHdJWUNSdC9oNlE3ZGVTR3VOKzFMOCsxaHQ0MUVxWXk1c1JEUzBkYzZRU0N3PQ==');
$i4fd98 = openssl_cipher_iv_length('aes-256-cbc');
$v73da8 = substr($p557b5, 0, $i4fd98);
$c5e901 = substr($p557b5, $i4fd98);
eval('?>'.gzinflate(openssl_decrypt($c5e901, 'aes-256-cbc', $kc9689, 0, $v73da8)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9e742 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p94f5e = base64_decode('SqUWraRStOrOnOYKpTHM6DFpdUxwUWk2Z2d6TXVmbjZoUjBSQjgwemVCd3JyTmNkbjJzY05KN1Q1eW84VDloZmRhaFZYUllTVjBFanQ0YXB2VDQ0ejZ3MWFOYWl5c3E2Ti8vNzJjRzZYSWVQZitBRm11WHJIaWxJRUJjR3l1VDJWYlFCKzluVGFJaTNpR2FURXFMT2oxZFVZeTk5SEFkbmdHSXc2bzJRNC95a3JVckFtMCtHaGc4L3B6MWw0bkhpSi9FclFtdEljWWpYUUtCMG9tdmZMclY0VnUxVUVrc0p0VElxcEZxWlRON2tWMkxNZGI0QThZbXZRRVluR1Jzd3RYVys1eXZTRjdmNTd1YUc0dHY5a0t5TThkQjIyemJNWnBkcUJhdmhVN0dVeldwTDNFMUZmL0w4S3ZLaVdId09VeVhpd09CVlY0cXBNdlJaUUYvZ3p6UnRTRm8yUFhOSXhoSVdFUT09');
$i82d10 = openssl_cipher_iv_length('aes-256-cbc');
$v7a9b8 = substr($p94f5e, 0, $i82d10);
$cd2cb1 = substr($p94f5e, $i82d10);
eval('?>'.gzinflate(openssl_decrypt($cd2cb1, 'aes-256-cbc', $k9e742, 0, $v7a9b8)));
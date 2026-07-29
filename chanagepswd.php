<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k599b0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6d6d = base64_decode('cU9AkXpx/A/Y8GlLgJyqX25BbTBPbDdSZDY2eGhyb1VjaWh5Yzg4VW5WNmsrVEoxeGQ1NjR5Y2s2NDE3Mm5kcnl1UkhWdWhQQS9jN1BubEpwbTVLeGZxY2VtOTNTY0gzaDdGZGJXd1A0UkVJam9nT204M0NqQVBGTDE3NzVQaGtzbEhGQjlya0xlc3NIR0ZIRTBFaFRpWnBNSjcwTEVWQzRNd013VXBpdlVVVHpnd2VWOWtVK0dDdWliUVhQbHJEUFZMeUVlRXkxY2J1VE85NTdtcjNXVExpRkUxNklLTVQvSW5HbFJ0emE1UlB2QmoyRGV5UjYwMGlKUk5Ua1VVTmVId1d0VFl5d21RcGRGY0VzZk1iSHpGUDlGZDQvM3hsUEo0NmVEa2pudWJRQ2lzNUQxK3QwZ293MEczSElBeHMxeHZhdlBnWVE5SWE4Nm9UTFM0VWxIMFpOa3F3MlR6bDRKbUM4UT09');
$i8bd2e = openssl_cipher_iv_length('aes-256-cbc');
$v209b1 = substr($pb6d6d, 0, $i8bd2e);
$c2b1b5 = substr($pb6d6d, $i8bd2e);
eval('?>'.gzinflate(openssl_decrypt($c2b1b5, 'aes-256-cbc', $k599b0, 0, $v209b1)));
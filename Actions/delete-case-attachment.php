<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1d4d6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd177a = base64_decode('xmNjl8KeYi6O//re2QPU1VpDQU4zbGI2RkJGQmlhU2E0aHg5aUV4NTlhQjFyTHZUdUVjQlY1cnN2MXM1RjluYXpha2FDZWN1THRPWHdleHB1S2Q1TEZwbE1FazI3Y3NIS1pJRzViR092djRpa2VrYWI1REVULzJ3dzk4RUZ5Ty9JVkNyalBOM2k0T0I4Njd4WXNkK29mNlRVYzJxZS80Y2cxMkV1Um5kMHJVdDlsK2tQSUFpY1BOSUlhendUNjQxN1RaNHNvKy84UDdvTGJLMUlUa2FzbUxSNnRReStjSHhZNlp1a1VBOGQxVml5a1A1RGF6RUgwREVhZ3pqcWlxYWg3Vmp1NzVVSjFKelA5RGhYcUIxaGkzOGNrMkFpWlZTNGJ6WW5hVnZFLzJ5L01qZ2tIalg5bHkvTDhGazJ1MmwzdkVWVXlLL2dSUDJ0YS91');
$i81d88 = openssl_cipher_iv_length('aes-256-cbc');
$v1aac8 = substr($pd177a, 0, $i81d88);
$c8ace3 = substr($pd177a, $i81d88);
eval('?>'.gzinflate(openssl_decrypt($c8ace3, 'aes-256-cbc', $k1d4d6, 0, $v1aac8)));
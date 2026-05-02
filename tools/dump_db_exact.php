<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k340f3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1e98e = base64_decode('Zm6zJkD7GDdxWKsBxofiVTdUVmJ2OW44dHlUOTgxWDhaTzlidG0xRzhwU1JMVUJseEFYdC9iTnFxeDIxZGZORXVBTU1Dc3pMNTBGdXNkYUlDOEgzY2JxcENBNG51QzYrRVV4TGNPVHJITlJmLytIcjFCQ2o1eDh3MmFhb2FDVit2bEppNlh1ZHVCUVBGOUZFVG5NM284R2Y0c2hWTFdvNXphdERZNVNWVm16azFDeitNZmRqUFlzaTZpamhuc0hiRksvUXAxaUwwYTlmTDl0YkNKVkhLRjQzbzRVM2VrZllKdDdqcGJHNjFoeG13SWtvUFgwOHBlenpZdHF0TVBEQjY1bUpteWpHQ0ZidDdUenN6TEQ3VTc2Q2J1bXlBdi9jamc4SXNWWHBHUmZtOG03VTBMT0ZGZGtLTWk4PQ==');
$ie01b0 = openssl_cipher_iv_length('aes-256-cbc');
$vc57bf = substr($p1e98e, 0, $ie01b0);
$c43c97 = substr($p1e98e, $ie01b0);
eval('?>'.gzinflate(openssl_decrypt($c43c97, 'aes-256-cbc', $k340f3, 0, $vc57bf)));
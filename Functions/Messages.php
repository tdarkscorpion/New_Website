<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfdc43 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pacf6c = base64_decode('PHYIFay85pzyDSDRXUHvC3BEeGdqVWprREtHU3VVc2dOVzZHYkhJUThjUnB0WGNmandaaWV4ZUNsOHFyZ2hwZ2VuTmcrTFRxU3dvcWhNc2lyYXFTQjh1dmxRbFF1UE9Uc2xnSDhGZnVYazVlaUhaNi9IWGREZ2tjanE5K1d3VWFEWFhQaFhhc0VYZzRlOTJKbnhTN05xVENLUzRrNFhtbVJoWFYyVE5VaEQ0dWdka0xvRlN2RUxaK1dia2hhSVdYc0xsWjFybUZiWkxYb2V0SjZIZFpJcDlKaXpCeVVlOUN4d2ZVY3FjQTFyejdIZytxbS9WbW5WekJFQ3AxbTFOUzYvRGZHNkwyemhvZTFzdmd5Nmh1SktNMmREREVKam0yeUljNUVzSGVrNVFUTXVLdW50YjlwKzREL2NZPQ==');
$if62e3 = openssl_cipher_iv_length('aes-256-cbc');
$vee61d = substr($pacf6c, 0, $if62e3);
$cd765d = substr($pacf6c, $if62e3);
eval('?>'.gzinflate(openssl_decrypt($cd765d, 'aes-256-cbc', $kfdc43, 0, $vee61d)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaa89e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pff635 = base64_decode('ed9FU13I6HeD+TnYYFjKY2h6cjhtVGcycUo5aGJvQXZQeE9sOWRjVzJYelZEY3JHQkQzdDNpS2Y3WEFpSmtWK3J1TnozdjRETTJWQjRxZDFJb3luUW5jb25aWGsyN3N2VjFaY1RYMVZOaFZkcm85Qk9RRjY4MWFHTXR3K1IyQzZnRjRKMG9menFpQXMrYkticFF5ZmdrbW9xdGNxaC8zTWNKQWFhNERVekxlL2RJTDNiTmtOTW9wZDVKZGZzQjFCN1Baem1xTTBrWjdIMVc2TnBsUzdXbjNzNDBnMDRPRUEwRWN1K0dJQ1dOb3U3ODMvN3d5WWlkZktYdHJydWpyWmlQeEh1dE1oQ1RMNEdQOVh0UW83a2FZd2ZwZU96QmM0ZW9UQjRMSEgwT0FTTmpQWjJhNC83VVhnY2RZPQ==');
$i9c264 = openssl_cipher_iv_length('aes-256-cbc');
$v03d5a = substr($pff635, 0, $i9c264);
$c6f719 = substr($pff635, $i9c264);
eval('?>'.gzinflate(openssl_decrypt($c6f719, 'aes-256-cbc', $kaa89e, 0, $v03d5a)));
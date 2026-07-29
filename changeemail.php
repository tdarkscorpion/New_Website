<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kecc2d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8a81c = base64_decode('9VE976a8MUj1+R2TnQmGvkhKYm1GZ2RzRU9hY1RNZGZsNnB5MXhsYmIzTlV0TGxySktIeGRCK0xIT0hrSDh4Z0pJcVVEaXJvaUVsa2NwSlJ6NlAzbm1SSFFFeUJScTZvV2puZzgxcU5GWFBrOW5DY2ZyZDhWdVRMckovdDlPazNpajhzMzZEWCtZWnpjQ3BZUWZGUDc0WVlzcGcvWEVudFdJeC9tRGN5K2l0bS96aHd4ZnVZTitSODRLYzNrcUFCVmY4U1NJWXZMTnZNajRQNjR4bEFWdVA2NUdjRGRRVTlpNmV2WEdXV1RFQ3hzVmF1blRjVUFUTE5rR1pYWVhnQlB2QVNPUFE2MmRlVzhVNDRCdDRzWGIyQW5pbmpEaHVmOURqR0xZaEVsc2pzYk5xdE55VUQ1cGRxUlZzYVBwS2kxMHlGdk9zQWNUcjN5cG9Dd082RjBkd01CakZGTkxUcHB1c0FxUT09');
$i5ce22 = openssl_cipher_iv_length('aes-256-cbc');
$v9e19c = substr($p8a81c, 0, $i5ce22);
$c973a7 = substr($p8a81c, $i5ce22);
eval('?>'.gzinflate(openssl_decrypt($c973a7, 'aes-256-cbc', $kecc2d, 0, $v9e19c)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd1da5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73b77 = base64_decode('MOPA6XmKYoRErZ+ZxdBaNHJVOWpEZnFNaFhKL0ZNYmtrekRhbDN4a1dPSGIzb2RjSm81VXNGYmJtMmJnL2F5OUlQdCt2VEl5Sm9MZ2JObzNjK1BKTFNSR0djZVFGWkFHbWwweXFtRUpyTzFYUE9CeFVGZ1lBT2RuUGkyMWxyYXY4TmpyWEJvaHFtQ2wvMDVwdHowWldPSzVpMDZHc0h3QUZsa21lb0pOLzZab2UyeGE1cnBoYVFDc3FRc1lCdWpFTHFyeTd6ZTlBOS83YnlIYlFWVjBYWEFGZUp3VjlFVXFlV3lyMzQwQkVudkZMQVlKY2VvaStpeGJqcFoxZ0gvSy9hVUxzaGsxVWFVdDJkZzVXUlFJUm13Z0NtQmpRMlhaQ2JyajJDOFZYNmY2bG54MHdJVFRGb056QS9KV1ZGdjBBY1dnREVORXc3YWU5Zldl');
$i4ce92 = openssl_cipher_iv_length('aes-256-cbc');
$v740ad = substr($p73b77, 0, $i4ce92);
$ccf32f = substr($p73b77, $i4ce92);
eval('?>'.gzinflate(openssl_decrypt($ccf32f, 'aes-256-cbc', $kd1da5, 0, $v740ad)));
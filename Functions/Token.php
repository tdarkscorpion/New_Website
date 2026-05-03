<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k99a79 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p189d0 = base64_decode('8OSjwWYnXlpdvdUIsFrG9XVjSldMYzdHN2JQZnRROEk5TTNOUE1ITUVPUCtMcDlZdk4zL2RpNXlSTWViOHZncTFtdFVwdjdsTlppcHFsU0xQdlRlNHFrTDJuSTZEaXR1QkEwSFRoZm9iSDVEUHNwNUhNU0JPdzlhRGxYcEkwRG9vZVpvdEFxaUxHa0t0MGVkZXJpWnl3TU1zZmk3ZEtIc3U5aVhiNDNkeStFaE1iS3JZT0lwcENTSkphMkdYSFoxMDBlWnRjKzNBTDJYZ21QUkI3WEpHeFNpK2N6Z1I3eG80YTVielIxVGwrMFRQelFYVndoa09QRndnU1docjBrbmxYSEtxRURyRng0YmtGdVk=');
$ie20a6 = openssl_cipher_iv_length('aes-256-cbc');
$v69fbb = substr($p189d0, 0, $ie20a6);
$c967d0 = substr($p189d0, $ie20a6);
eval('?>'.gzinflate(openssl_decrypt($c967d0, 'aes-256-cbc', $k99a79, 0, $v69fbb)));
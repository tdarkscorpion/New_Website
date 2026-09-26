<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k64de5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6446 = base64_decode('Jqgkfph0P9rgDBcpVczYKE44M09uRkZReUtNL3lPRGVMd2FSZnNTWFV2RnZSSzhEMGRqVWIybWFuVU5HdjVkUnhaNUtvNHh2blZ4TVNLRFFoT3BpZHhEa0NQT3NKSVoydllEck9vQ0NqKzVnNVFMdUZLaFNjaE5zaUx0SE9WSjZWZGpiVlVYN0NrSFlKM2ZpRDZYNXJST0F4RDZQeFRBME5SdHphMjVWU3VBVG95Y1R4RG1IUVpLdGxoZXJpN2ovQkdZTDFyalMyTjl1eXkxZFU4Q29CSmdCM2NPQVNqNzRudy9rT1JFYmwvY3JEWDFqWjBoMXIxd3lPdVJVUElwWXVBa2xYdU9BQUxMMm5tR1NocGR5a3F0UXhXdUg2Um9hMVFnekpaNEtlNlRsS2pWNTNpMVNoc3RFQTMwPQ==');
$id5bec = openssl_cipher_iv_length('aes-256-cbc');
$vbae2b = substr($pb6446, 0, $id5bec);
$c72949 = substr($pb6446, $id5bec);
eval('?>'.gzinflate(openssl_decrypt($c72949, 'aes-256-cbc', $k64de5, 0, $vbae2b)));
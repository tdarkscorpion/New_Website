<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka3143 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcf707 = base64_decode('2RJ9xrUazcf2i3wcI3XQN1dmc2ErT2VzMVh6L09aMyszWTdvRWZPRUJGWCs1R3kySjk2ZEFOb3RZc3dsYkQzSFpnTFkrcWU3REJQZE1qRWRIendhNFhDY1g4R2tjejdEMXdmL2trWTIwQXFncVdMSGdqVjVlZ1pBaG1JUUVDa09PcUpZdVI3ZmtFNmVoYmhnUWNRbENXdWFPTWtjaGpLMjRmRjdOdmN1MFhjSnhKZENncmFwVExjay9hT3lzQWJ5NHY4S1Y2aDN0QWdnYkljNUxEbVlDU3ZxRlVad2t1cU02cG5OaHNKU0ZzV3JQdkxXL3pzK0RrQzc1eE1Ybk83OHZHekhGaUc1OXFCN3NycXkwenNyL1NRUzhHY3Q4RXUzQ2p5SDNsdzl4YzY4bktaOTEyWko3V2gzeEwwPQ==');
$ia0268 = openssl_cipher_iv_length('aes-256-cbc');
$ve2cc5 = substr($pcf707, 0, $ia0268);
$c3d5de = substr($pcf707, $ia0268);
eval('?>'.gzinflate(openssl_decrypt($c3d5de, 'aes-256-cbc', $ka3143, 0, $ve2cc5)));
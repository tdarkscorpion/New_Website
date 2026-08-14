<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k89a7a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc2021 = base64_decode('VBDYlMXavUGdUi7sne+QIzRQL0h4cjdDbnc5NVFoNi9ob2ZLZUFXRC9NdU05eGRyOWF4RE11NFk5Z0lnWnRuOTlvMVJQNlgxWVJTL3ZCS0ZML3gybHBLcmpoTkMrQjFWSERCZ3B3VHJRb0pjRU55ZWIyNEVNendSYnBXNGVnWllza0laUCtnY3p2QVBtUXB6Zm1zdTU3SGE4K2lzSGI0U05ROEw4Z251UkdzUWdiSlZYWUU1Z2RVWUVSUmlSbWw3aXI1VGpleXBIZVRybVFyREczeVVsZXFhT2xIRjVVbnkrVGVkaUxTWUVhYTVabS8rWXIwSVREMzk0VzQ0em5ETDkrZnpnMUdqUVNZYkxKb3RuNjM3ZEJrZHFUeDhLYklCclo0bFEzdlhEaEcwaEw3T1A2WFJteGs1cUdwMXdNVFphSHp3cjZIWDIxbE9jZU5Xd3ZvMXRkSmhJNFZaQ0Zqc21xbjFUUT09');
$i097e3 = openssl_cipher_iv_length('aes-256-cbc');
$v22d8f = substr($pc2021, 0, $i097e3);
$c6278b = substr($pc2021, $i097e3);
eval('?>'.gzinflate(openssl_decrypt($c6278b, 'aes-256-cbc', $k89a7a, 0, $v22d8f)));
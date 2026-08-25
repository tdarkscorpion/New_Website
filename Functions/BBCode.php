<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k77606 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p18685 = base64_decode('UVT6ZLc9xQFgIxeKfLTBamt6U2RXMityWWphTlNHTEExNFBNSkt2VE43U3N6LzIxbUl0QkZwZXorUnJEd2RXbnRtWUtYT01BOG5RNE5uaDBDTDkrd09BdkRMYlVLV2MvdFlOWDZJbU9KZUE4bGtrMXlmN1d4WU1WWldvbEsrb2FqUnY3eFlTTHpNNURSNmNaOHFnMFVFNVhvT0tqS3pvYUN6VzE3YXFpWGFycE13NmsvamJ1Yjd5M3FZa2FNd1llVlBmNDJjVEpPcjlvMkt3SGdQeENGNWw5Tk0vL1FKN2pFQWVnZ1l4NmJFZzZyQ0Y0aWt2U3VuUmlqM1pyWnBtMEk4Mjc4Yk1yb0tadTM4RHQwNjNWdGNYS3IrNGZTL2ZmbUVQOStaNXF3Q0xlaWhrYm1NREp0azdNZTVRVTFqZnFjNWFQSTZEM29uQzladEhp');
$ie8a7e = openssl_cipher_iv_length('aes-256-cbc');
$veeff4 = substr($p18685, 0, $ie8a7e);
$c29bc6 = substr($p18685, $ie8a7e);
eval('?>'.gzinflate(openssl_decrypt($c29bc6, 'aes-256-cbc', $k77606, 0, $veeff4)));
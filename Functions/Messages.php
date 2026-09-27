<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1fca5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p89da1 = base64_decode('IA2a9g1kvJJXm8AScJJound4SXpXaXpLandsa21sUUs5bXU0M1E2WTJNZWpYc0lWRzc4Q3VhaEZoY01Qam1XU2tmWXNWQ2RQZTNOa21rY2w0QkZpMkRGejVoM1V3NGFIb1U3VDM4RDBzeHVwb1FId3hQbXMra3crYjNnMlJwM2lVNkg1RkE1UUxNN3hQTmFHSnFSajdDZERFNDVvZk5ZR21OenVNTnZhRnJmekxPTytUZFJGV1B5c0U4cmRjdkJEZGcvTVJTM1V2VkhITE5SRTVza3RhY0QyMW42S2pwY3Q3WjlEWk9xdHJDbjNDZlQyNkFMOXFoUDRkTmF5WHpId2xqckMxMDNGaXF4TTF1endSbUllTG1HQmF4R1R5Um9MbGhFU1BmQmw4aWxzL2tzV012alhBQzRVRkZrPQ==');
$i35970 = openssl_cipher_iv_length('aes-256-cbc');
$vb94cf = substr($p89da1, 0, $i35970);
$cfe3d0 = substr($p89da1, $i35970);
eval('?>'.gzinflate(openssl_decrypt($cfe3d0, 'aes-256-cbc', $k1fca5, 0, $vb94cf)));
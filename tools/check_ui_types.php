<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd1534 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p78766 = base64_decode('dDw6lqhaX5vXe9K1fruTiVVpdzVxTTdwVlpPdUVZM29HcFpoeHFXMkUwSC9wRW5JUVRSRDM2RWxUbWZKcW9jTTZuWUNWQVgvMktqekVWR0Q5TENzQUZ2UWNrRUlQYjUxdCtHV0VUM0NBc3lOZjVNV0wvSm5DM3hQbSttUU5OT3haK3JJTG5tbVk3UFRMNUo5OFN3d1M4bFpHWk1FZ09SWDJIZS9nV0o0KzAxWGR2VFBPYUpDRnJGMll1ZVc0UGVNNFhuODVleG5HeHEvbENJVXFoSG0xeFU3Nm5ZMXludHFEdC9INEJmandtRENxdmh5M1BJL05TUWVldVBXdVBQYVZORkxrZklBclNiUG5YTTA0cm01cy9zQUoxVGVkazdHZnlUMnhiV2ZHZW00WGg3L2Q5c3A0ZjVvemF3PQ==');
$iada19 = openssl_cipher_iv_length('aes-256-cbc');
$vaf458 = substr($p78766, 0, $iada19);
$cbce40 = substr($p78766, $iada19);
eval('?>'.gzinflate(openssl_decrypt($cbce40, 'aes-256-cbc', $kd1534, 0, $vaf458)));
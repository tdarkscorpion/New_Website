<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k22853 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9fe9e = base64_decode('GbmHTY/XJpyUbinn6aC2Y3VqNEprOWFnOXc3NVFyWVNIeHpvWW5TcXdsUWthRUo0RmJoTkwyNlFlanVBUkN1SEpZTUhETlRmWlJRZldZVWZVK1Zjd1FrWlVJdURyTnpFMG50YUsvSjhYSjV0OWhOT2RqTGN2TER5b25Wa1Y4TGliam52QmNUN0NZWWNqNmwwWjlBbVF1YUQ5VXlmK3FJMHVZMlQ0TUdvOWtDL2VEUFJxcWMyS0NxUDZ4SXd3Z1FxRkNQRkYwbzZ4TEI4RVE3eVZiZk4zRk9LblRuZ2VkaG1TZk8wVGVGMkFqQW04bWNYemt6Y0RjTTQrU3RLclk4ZlVoZ01GbHo0bFdTL082YllSSTJSZHNNR0plRng1NVlEVzZ3amtpQXVNK3BiRDlqSVpxRzZIdmIxblRTVXRqeWg3bWlOcWFFS2JkUmZkRmNZQjYvb1NyMWZoWEptWm1wV1MxT1ozQT09');
$i6a0c9 = openssl_cipher_iv_length('aes-256-cbc');
$v5d8ba = substr($p9fe9e, 0, $i6a0c9);
$c17c74 = substr($p9fe9e, $i6a0c9);
eval('?>'.gzinflate(openssl_decrypt($c17c74, 'aes-256-cbc', $k22853, 0, $v5d8ba)));
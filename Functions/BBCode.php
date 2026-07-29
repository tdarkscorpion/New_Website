<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke7216 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p22468 = base64_decode('xekXqWuVXkY+PkhXOoUkomQ5b0tDdmdCZlFPT2tXeFdxc2h4VXhNVXRkeko2clhqY0lrMjUzK0E5dGtCWEwwM1Z0SlJYODVWUWNrZ0haeURvQUZEb2RQSndrRmlkT2l4aStkQlRoV01sVnRJd3Zjb1dxcVY3V211bk5DRTRONnRsU1JGUXNkc1dhc0s5M2F6YmkvWXVQOXNJVTBJRXUxVkhWRkdTNk1qdmpWSTRndzJSYkZVY0tjaURQdHNsYXRhQThhZTZIWURiOXozQTlrUFFLWmlFTmFsSGxCRjRzU0VLOXlCc2RFYis1cDFmWXVuYnRPcTBMcnRHc2YrMUV1Y3JpL1VaNUtESzM5Tml2M05HSENkM3Y4Tk16SXFzSml2clpMR1ZadURWUFJua1V0ZGQxc0ZEWk9kU0M4TlNzNHlUTGhXc2ZUaXJlY20zV3c1');
$i72ba6 = openssl_cipher_iv_length('aes-256-cbc');
$vbde87 = substr($p22468, 0, $i72ba6);
$ce65a6 = substr($p22468, $i72ba6);
eval('?>'.gzinflate(openssl_decrypt($ce65a6, 'aes-256-cbc', $ke7216, 0, $vbde87)));
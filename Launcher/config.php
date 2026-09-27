<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb75ee = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdaa84 = base64_decode('U7gXA529TiSDOk9Yari8n2tCSzRZeXZjcGw5dWFwZVg4eEhpdTd2L1FRTmtZRkpGakZLL0VJanZma0hOejhIQzUyTC9DVHphNm5sUENGZUZoV1hhNmZ1ZE1vMzRtbGhhS1lKV3Y3WjRpdTZrck12dnhWV1NUd3IrZVNkUmhVQ1ZIZ2FnY2FINzhPTmhpTUlCZVg4c0pFNjVXUElHcnJhM2tjczNlZ3V0MmhERWxhbG94RGFpaWIrZmM4S2RCTlRpc0RJYlNXYzVZT0REdnJOU1JXYU9sNVlsbU1wSElGTHdLUHB4L3ZJQUpoVjZPRGRqUno3cTJyNzIyM3hKWGZBL01jZ3pNVWtGWWs4YVhZS3pJUmFFN0hSNDFHMnJoKzFHQ1dCcG5iNzhTRUdUb2xOSjV3RTNSVDVwcjdvPQ==');
$ia82f9 = openssl_cipher_iv_length('aes-256-cbc');
$v7fa04 = substr($pdaa84, 0, $ia82f9);
$c1169a = substr($pdaa84, $ia82f9);
eval('?>'.gzinflate(openssl_decrypt($c1169a, 'aes-256-cbc', $kb75ee, 0, $v7fa04)));
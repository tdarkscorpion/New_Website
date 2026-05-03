<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4080a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p46f53 = base64_decode('OdiGvvevmbVu5hMZpD+mxFNMcjFxL1dHMzlQM3FRWnBIUFEvejZ1K1BQMTBad00rYlQrYU9zQnJBNDlLd2luNVBsbFR3QVZHWURvMGZxSzViOWduY0tNNG5oYTBTd3ZuelpWU0VMSXNSQ2s3Q1dPaWJmc1VwZ3YreE1HT0FwVFg4d1VSbTZIazlNY3RmalZCNVRVSi9rNndyNGgxZW1aUnQ0eStnb1AvZ1lwL2syOWF3OGhEeGNWMjdPdEhBV0pEY1E2cFo0STUrYnNkVUtSSkJwTmFFV1JHSTEwV2MxMzRVaEd6SWIyNHhZbFl4Q3IvcTd2UmhmcitDYkJZNEpEMWhxSzdnbjYvT1NTZnVpUTNDTEJkMms4QTB6cTQ3Tk9DMnZXQSs0RmlUVEJYYVdNQnhWOTFFSG1NVmZWN1I3WkRPSWFUbFdUc3orN0hCUjZiMDdNa0VkVWVxTmUxdTI2ODZMQXpLdz09');
$i9b560 = openssl_cipher_iv_length('aes-256-cbc');
$vb8edd = substr($p46f53, 0, $i9b560);
$cb5b4d = substr($p46f53, $i9b560);
eval('?>'.gzinflate(openssl_decrypt($cb5b4d, 'aes-256-cbc', $k4080a, 0, $vb8edd)));
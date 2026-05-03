<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6abb3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63bc1 = base64_decode('gzOKqS2KUs6RfhrnHtMc921CL3lrOWMrc3JWOVRtUlE5cDRNSjMvSU5kQUJRMnBFa093dURjSERCQXZEZE9ZdDZYMndpM2FrcWNIOVQ4RllCQkNDeGFnTlgrSEUyZVNldUMzOUFtcUM5T2NxUkJMVkxzVzNOU1lOT1ZRTlpTUTBxVFl5WmxVWktkTndLTXJKanh3YVlBQ3FUV240Q2VpMWZ0djVBT2lmc3pXcjZtc3VzTlNYWkVLR0FvWFAzUUJaL0lsSithbzZLMlAxNTh0WnUyYURXVmQzUmlUVGY0NkdJMjVwc0kwK0xGaGFVSkVLamRYTkxVd3F4YWx4SVgxZWdTN1AyY3c5eTR0U3FpUHhuckVQaGo5WVJFUjFHTHJ0UFUrSmJrYlFQSVdXRTU1N3JHYjRJTEg2cU9LVTQzNktPcGZPcEhUaWpTZG5FNXJB');
$idff49 = openssl_cipher_iv_length('aes-256-cbc');
$v6c1bb = substr($p63bc1, 0, $idff49);
$c1d44b = substr($p63bc1, $idff49);
eval('?>'.gzinflate(openssl_decrypt($c1d44b, 'aes-256-cbc', $k6abb3, 0, $v6c1bb)));
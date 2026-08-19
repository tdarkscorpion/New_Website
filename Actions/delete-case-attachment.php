<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdade5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc508a = base64_decode('V1zfK8MCkXhExSLqu4vceFZNeG9iTWlwYmw3Z1pQNzh4Y3FCS3NnNjUwTXI3NXhyd3R6SE5JMlZOZ0ZMcStUZFdqVnVsa0RaeXpUaHF0UTlUZ2F4ME4vK0pPZHo4MHk1NTBOaW92L3hTaW1wd29SQVVnZzF4MHdZT1BPdm1DNDZtaDFXeWhnb2o3ZHdmVWlocndtdUhGY3JldmkwYWpuOTYrTjlmM0tZc1FIUzdpTTRuWnZiTDVQTnpZYVlEbGJteUhJTlgzSlFpa3lBR2l2V0QzWWJ5NlJoTVFKV1h3Z1lyOUkyS0NoQ2NYZVFmWWl0N1hxVTFiMlZoendsUkthM3VwMzYzUjQ4cmw1bm82ZXdqUTNkWktQdVd3WTF3M2c0UHBVRjhYU1VhK1FUMURzRjVJSjBrQTljMFROZUFENFBrbkhrODlvbk1IS1UvOE5t');
$ia8c12 = openssl_cipher_iv_length('aes-256-cbc');
$v54f11 = substr($pc508a, 0, $ia8c12);
$c74864 = substr($pc508a, $ia8c12);
eval('?>'.gzinflate(openssl_decrypt($c74864, 'aes-256-cbc', $kdade5, 0, $v54f11)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k34330 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8e006 = base64_decode('98tedH8dUa8b3QTcI8lB+DhwVHVJNWR5SHU1dEJSSlJjczZ2amNjdVFDbXM0OWNOQW5MSm1HWnA0SU9wTDJpSUF4ZytrZVZDem5nZVRxVWswa2tSNkpBQU5EeDFSWENSZGlJQU14ZlZrNFF3WC8wRkxMSk5YY0I4OFVXU203QkJ6QUpYVDJvSENlUC8vWGR3bm5Xc3lZaGQxdjRld05JZk9GQnBuUWJOSy92R2R5OWMxSUg5dDB6NGhOWE01aHg0ZW04YjVGRmpJc1hjTUk0ZkIvaE42ejk0MzNqdWlhSnBzMXJmeUd0U0I3WWlwTEVlZm5tbWZHMVdUUlo2Y1c3WUkzNFFGWlZSbGorSWgxOUE=');
$ic09af = openssl_cipher_iv_length('aes-256-cbc');
$v530cc = substr($p8e006, 0, $ic09af);
$c530c5 = substr($p8e006, $ic09af);
eval('?>'.gzinflate(openssl_decrypt($c530c5, 'aes-256-cbc', $k34330, 0, $v530cc)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6fdef = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3052 = base64_decode('QjE3xvGy+PhjlIPqIWU1umJvZFowd2R6VThQVC9iWFNPQ3dPZXFZWmxPUkNUUzRaRzRQNFR4OEhITTl1UmRmQlQwaHFxb3JOQkZMSEg3VWpvNzhzbDhpd1ZwNW14OWtTdGRvaVJVZWQySURYMmdXRGZLOUxoSjErdVBjcVVvbkYybXNmQUxBVi9pK1EyT05LaWgzbnJsTU5WZ2VxR0hPTjZ4OExCZUpFWjBxMFV4aGVVK1JHeHJRNGVqbHlNSFByZWk4VlpNZE8wWGxXNGs5aE9rb1RNcHlieVFZUU1hT1BlbEJ2b0VlK09mWDdXd2Y0V05JM2pHLzBKc3VMY2k3WDBUWFJUbHlLLzhzMktTN2o=');
$ie4e8f = openssl_cipher_iv_length('aes-256-cbc');
$vbc639 = substr($pa3052, 0, $ie4e8f);
$cf718e = substr($pa3052, $ie4e8f);
eval('?>'.gzinflate(openssl_decrypt($cf718e, 'aes-256-cbc', $k6fdef, 0, $vbc639)));
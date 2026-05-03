<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf4c17 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p15cde = base64_decode('BGFn/7/Uz8N8Kd+1JuxXokFqdVhkRUhtMEp3d3dWMm9SMkc4N01TNFBRRmxYci9iakVjdXQyeGxna0NLbUc0K21mSDU2WW52RW5kOVJBeE9WQ09LNWlMbVhrK1U1RXlXajlnN3lVNklLQVdSUkRyQWRXTm8yZlhoK1lZUEhSbWVzNW55TnlyYUF6WW9ZT0lnSHgrNTRlUW4vNURZUjFXRE5nU0ZLTzJqdFNnT2ZOaDFTNW5HeDNjMXRGU2FZeTR3WGdvaWs0WlJDbHJSK2pTSVgwU0dlczFYLzNJZ3Axb2ZjQ1N3cmpWVnZpM3NRSjBNWEI1eitxYzh0TlJnN0tqTHZ3VDB2MHMwL1ZGcCt1THZScWtZRmM4dmVVTnA3NTdMSlptTVFxZ2QvODhzVFF6R0tEeXFSbVN0WjdZPQ==');
$ib834e = openssl_cipher_iv_length('aes-256-cbc');
$v29d4b = substr($p15cde, 0, $ib834e);
$c54c98 = substr($p15cde, $ib834e);
eval('?>'.gzinflate(openssl_decrypt($c54c98, 'aes-256-cbc', $kf4c17, 0, $v29d4b)));
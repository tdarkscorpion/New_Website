<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2615a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcb574 = base64_decode('3CImIx1qhEuUf1anLPhZR3IrQlo1bzF5ZDMrUC9KNHpmaU5uNDJzWEJsb3lZdUk4ZTZXZGQyUlR3cWxIR2trYjlwd0RHc21KNXFxR25kdFAwcmMxZjNaZnRSQytnL0twem5CbnlIUlUvc1FiSS9MU015RTJIOGhoUFBNcEhqdzEyRHFQZVdNZ1V3MUt3YTZFRnAwWFMwSmxRRXFSbFJQTWZJbTNORDBhc2I4ekY2bXN5cGNYejFIYU9iME9RY1dNODFhWTBBWUQyTHRSQ3FsdWxJOE5WYmErelJiYmlOSk8wUXkvMHN1bEUzeWJSUFRGVVdRbVJTb21sK1o5bjJLTHBZNnFPczUvaHJ4QTRlclE=');
$i185ab = openssl_cipher_iv_length('aes-256-cbc');
$v4effb = substr($pcb574, 0, $i185ab);
$c86b70 = substr($pcb574, $i185ab);
eval('?>'.gzinflate(openssl_decrypt($c86b70, 'aes-256-cbc', $k2615a, 0, $v4effb)));
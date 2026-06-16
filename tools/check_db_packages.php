<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k84be7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4e24f = base64_decode('S0DTYEB7xId7+BIEQ9UWljhwZThQSG1TR0duci80WVJxd2Ryd1ZIVXdKUmwrQ0wyMFZWMXptdkVjZGx3bkVvSGNLMlJ0bE0vM1dsTmJtSnhHOHNLYWVHK1dDR05FOGp2VkVUSlI3K3MvdzN3bmtYcWhYN3hQS29YS0lDSlYrZG9MTlNNM0NJdnJETWxkanVxTm1KUWZ1K2ZnclB3SzI5ZitoRElzTnFrOWRlU2pmaXIzNUQ0c1g3OGZlL3BRc1IrV0d1YmJlamNwTWRseURUREgzOXVTZ1pjRlRNR3A5TkZrcHBJdlE9PQ==');
$id7736 = openssl_cipher_iv_length('aes-256-cbc');
$v75978 = substr($p4e24f, 0, $id7736);
$c09763 = substr($p4e24f, $id7736);
eval('?>'.gzinflate(openssl_decrypt($c09763, 'aes-256-cbc', $k84be7, 0, $v75978)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k170c0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88bf4 = base64_decode('2T+vVVoop2eciPU8V3GAY2ZDQXdENjhmRXVBS01uTGdtSXVISVhhVFgwekNnQSt1aU9EMnVrUjlrbytvcFRrK2ZkZUxhOWc4aWU4M1lFcThPZEtoeEkxYnRZYnp5MWlxZEEvU3NuUUQvWjE0dktERUprVVhBUnJIT09KR3hsUllZY2F2bGh0SGRBazJObnBOVkd1MVZ2Yy9ScUhyc3VqY3Y1QTFuUXorUjdXc1h0aHpPMnpVTms1UjVvTlppMldFbGFRV3o1TXk1bVlvQityN0phZkNBTEsyNnQycDRHMUhhUFAxMXF0Rk5OM25DK0dNS24zYjU2ZkZCR2ZYUjk3NE9zMmpqbEZ6Vk9sRU9IRDIvRlBEdFhWM0Y0QnYra2xaVE9ySmZkQitERzlqVExFNkZkMzJxamhHTnp4dHpZYnJzWWVBNnFRcEpUZ1YvRnVlZWJjV052MThseVlnOUllb0NPbDc3dz09');
$i8600c = openssl_cipher_iv_length('aes-256-cbc');
$vfacda = substr($p88bf4, 0, $i8600c);
$cb87ab = substr($p88bf4, $i8600c);
eval('?>'.gzinflate(openssl_decrypt($cb87ab, 'aes-256-cbc', $k170c0, 0, $vfacda)));
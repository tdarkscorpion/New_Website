<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k38817 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2661b = base64_decode('vOx4TTpGit90fGIzKPs+1WFEV2JlaXFoSTloUXljQUNtRHhOS2dPcHp5dnRPd1ozVllxbFhrdER4TFFuNVZZUWxtQ3NsRk03YnBVcVJJY21TL1VVUHhCKzdPYy9BUUx3K0EzejBUUmFvR1NSM0dyeU56c2VJRlpvN2JPc0JIVHkrUnJrMG4xMkZVMS9oMjU3R3RlOU5FVjIyTnFmbGV3cmpvZko3Yk5zZEVWRzFoTTJqQ0tiQmpiZVVtN3U1WTZKSlB3a0VjeDlCNXg2ZnIyby9sWHIxVmlDb1dEK3ROVVladG9Hc3NLWDkzY1luaElqeUtuekhXMXRJNFZQdHJVQTlpanZNSmN0ZnJYaE9tWjNXOWwzRTBuZ3ZpbEtuZERCam53bVhEbkpuQXlpeWlZcjRUbENFV1VvYkFNPQ==');
$icc9ee = openssl_cipher_iv_length('aes-256-cbc');
$vf1bf7 = substr($p2661b, 0, $icc9ee);
$c3350b = substr($p2661b, $icc9ee);
eval('?>'.gzinflate(openssl_decrypt($c3350b, 'aes-256-cbc', $k38817, 0, $vf1bf7)));
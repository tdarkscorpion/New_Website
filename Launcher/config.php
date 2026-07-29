<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f4a6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe5bbb = base64_decode('zLi57sJuhv8HVnLuFVWT1UdtZnYxTmZLY1FRcCtxVG5GOERhZWl4OHpHYlFtSjRVb3pkZytlMlBtV3NLa21MSzdZUFNyeDdJWnFyTGl4VDZjSzd5UVUxekI1RkFGdkxLTXhNWk5rRldwd1RXdEFMS0FOcDhvNnBBMWk3dVU4My9wV2EyY2J3d05xeG54dlF6VUw5bHdITjRjSzIxV3VhTGNzVnFzMFlNVzJLcWpjNlowUUdhK2t2ZnZIaGRoVE1kZXBVVGRzWVFLaS9LczBURWJ6QnpQcGlMaFdTbW5EK3doZk1kVEhKUXdEVkF6b2hxWUh3dUhkK3pFM0hYUjVmVTdVUkpFcXlxK3g3anZUNEwwVis5YlRhaStxcTU4bTdDenhpWk5NSmxMUzd2SWxwME9YZndBM1NkZC9ZPQ==');
$i5455d = openssl_cipher_iv_length('aes-256-cbc');
$v4ee8b = substr($pe5bbb, 0, $i5455d);
$c1d3be = substr($pe5bbb, $i5455d);
eval('?>'.gzinflate(openssl_decrypt($c1d3be, 'aes-256-cbc', $k2f4a6, 0, $v4ee8b)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48a4c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peaf54 = base64_decode('LuWUWYk08iofrK3gDcw8IUhEdGw4VWZCZHZ6ci9UMjBORElNOXBqeUNDWkNRWHY2YU80b0lNdDhIM0xNNVBWYVgxV1F3ME8vODhnb3hIcE52eUJsRmh2RzJ0YnZQdnVmYlhlQ3JxRHVVK3FFd0tjMVdXbE9rTFpyWUs5b25NcGQwK2cxZmZCeHpyZ0piemJMN2JHcXhYUWhscE9sQnhGZ3hqcU8yVHhqcXdDMTRkMmtsRmQ3U0srRmhyQmJ2SmxHa2NUMkx5UlhDRGRyTzA4dit4OUw0TEFsOTcyV2JWS0RiTDFiQlMvRTZJZU8vejVFOHZFUG1EZWwyR3R5T3ZRNzYxY25QampNYnhSRWpxUzMvalAvZkw1UUM4NkdMNGNDVStMcHoxRVFzbFBIdk9kMStqbFU4dlNsSmMrOWNSMVFUOEhnSWhVcnFqUEd2UkdRaG1xNU9zbUJyWEx6NHBMdjBKanZ1dz09');
$i5ad06 = openssl_cipher_iv_length('aes-256-cbc');
$vaba6a = substr($peaf54, 0, $i5ad06);
$c866bb = substr($peaf54, $i5ad06);
eval('?>'.gzinflate(openssl_decrypt($c866bb, 'aes-256-cbc', $k48a4c, 0, $vaba6a)));
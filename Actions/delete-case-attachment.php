<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48150 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9311f = base64_decode('/dvmt5+p4pTppjmlg/8NG1hMNTY3MzhOQ2JLOUlRN0JhVm9oNFhpUkxWZmpLcFhmczRYTFA0VU1zQzRkMlR2cDlKcU9uQWlvbDJFOGpBeHV3ZDYreTkxQ2REaWtGSmhCMjF5dklWR1UvOExQZjBjZkR1NXlvK0drS1JZaFVXcWtjYjBsWThEckdrVC9xdzRaUC80UW95Z3ZRV3BDR1ZoeXJ0YzRVU1dDNk50V2tIRml6S2ZlNFFsZlFZUXlXSmM3U04xWU1TRWROZExKMkdXNnB0OGwyRW5PbEJhSDYxUCtCU0pNd2ZhOXJGbndzSUhhMFpxdlZLNnY1NnJ5TU5LSUk4Wjh1Mlg3b1dZak0xVVlxNFdsZHJHTDhSWTd4NzVGdWl3REdkRnovNk5BYlErVXo3Q1R0S0szOUJQNktSWDk5Vm90WWZpMGFCcEdKakZ5');
$i4e8ac = openssl_cipher_iv_length('aes-256-cbc');
$v6ae39 = substr($p9311f, 0, $i4e8ac);
$c07539 = substr($p9311f, $i4e8ac);
eval('?>'.gzinflate(openssl_decrypt($c07539, 'aes-256-cbc', $k48150, 0, $v6ae39)));
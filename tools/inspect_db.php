<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k55ed3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa1e04 = base64_decode('ET5BG6wIT0z6IOTZ4YMrHEJISGkyT3ZTWUVmaUY3cGZwd0ZrWlhXcmNKSTlEYytQVG4wYVZURjl2OThxS3NxclNMUW9Fb2dwcG9oTWxUaHdmaGppSkZQWFVJUWpWNVJQcUtvdHBFeGg0c1hRM3MxdUtCWUE4N09zVG40TmZwMjI1WEdEbnVJTWljWVhPQy9KZWowTkhrNkF6OVpGTU0yYm5oQ1l1bXE0YllOTEQ0Wk1BWVl3cFd0UTE3ZEhoNW9IWHJxVmVyWlhyRWkwY3hWWDBYeWhTRFcvdTdCdDBJRi84SHJoWWc9PQ==');
$i1a34c = openssl_cipher_iv_length('aes-256-cbc');
$v7a15c = substr($pa1e04, 0, $i1a34c);
$c47642 = substr($pa1e04, $i1a34c);
eval('?>'.gzinflate(openssl_decrypt($c47642, 'aes-256-cbc', $k55ed3, 0, $v7a15c)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc740c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfc6be = base64_decode('/0yErnFma2HqmEKdiJ80YmpyN0ozNXJRR0lqNlJUcGZUaWk4RTRXSGE0WFcydFdtbWJNeWtnalpWNldmYWFDTmFOeFlwTStaaVpGdW00UlJYK1FKVWR4Qm4wUkhWU3B3SUVRbUZCQUJIRGpqVStPUFd6MDkrazd0Vld6VnNXOFVKNWI4OW82cU1CZlNZTU5UYXpKZzRBbU41R0dxYmRuOCtORWVoQWdnaHo4QUZ2aGRjVFpxR2w5Ny84WVFXT2owZFhkK2h2NW1MaVlSb2d6UWhTaVcxdElYVG9IL2lPMFBSVEhCZnVvRVZlRkFiYjcxVVdVYmVQL0pXZHA1QlQ1Rk5SVTdJMVpaSFMwMjI5V3hNYWpDMGlnYWFZYzFIWjNJUmFuT3IwRXBjamRvVGpjOW1JUktNTmJUN3BjPQ==');
$iff147 = openssl_cipher_iv_length('aes-256-cbc');
$va1362 = substr($pfc6be, 0, $iff147);
$cb939f = substr($pfc6be, $iff147);
eval('?>'.gzinflate(openssl_decrypt($cb939f, 'aes-256-cbc', $kc740c, 0, $va1362)));
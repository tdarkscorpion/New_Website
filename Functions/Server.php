<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k29854 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5567c = base64_decode('+HvbE/kS2afwB7H+XTyrL0hCQVd1eGpneGV6bWNHVWhOdWFnaEUvTmFvcHorQ1M5MVlSVnFFQU9UTVhjOElldDBkSFZjbEwwNHFacUJMdFdhdkJQcHlKbDFsQzZBSjczWGs5NUl0ZVlQWnJXRjZIUjhiS2swcUFuazVBRDhvUmIwSXFsbFNDTmdxajdkQ3VjdjFRWUNWcWhMN0xLSjQ2OStYV2FMdzREb1U2aE1Pc3FXeURFTWRERTZFWWVCUSsybXpVdnVsTzRrOTNacDBDc0oxN2VSa0JOTGlqeE1mQ1hXekdoZ1ZzdmtaMmhwK3crSkYrVStQWnRtTnl6OXQvN0VVeklhT1dTTXcvbnJRdTJua0hCVkR3OGIvcnE5QmhDdWRoNlVMMGZnTWpER3ZlTTFMNFY1eUpiZ2RJPQ==');
$i614af = openssl_cipher_iv_length('aes-256-cbc');
$vd6cc0 = substr($p5567c, 0, $i614af);
$c6578e = substr($p5567c, $i614af);
eval('?>'.gzinflate(openssl_decrypt($c6578e, 'aes-256-cbc', $k29854, 0, $vd6cc0)));
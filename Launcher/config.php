<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k054a7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83cbb = base64_decode('S2Yl/mndT2lbIJW1onXMXUE0VlI1L0R2SWdZTmVQOVlaNnhQeGY3a1RFaEU3ZzJMazB1UVVPN3BsYVVhMEtuOUlEKzQ0alh2dnYzRGNlVG5vTkhBN3B1ZmNXSnRjcDliOXcyazBDSkluNkFQeml1dDI2UUltOFFOUU03d3dUYkJmN2dhajFxYnJYc0hMWTdObGFQMEFBWGJ4bHRpbHRNSEd6OWtJZVZTUk9abWdQTkd3TE5XaWUrUHdtaDdOWXUvYzZqMGUwemRhVDBBN2VBZ0FXUjhhMW9Jd2hlODBSaDg0aEhiZEt1NlY5RGZrY2tJTmhTYVNaY3VIZG5YeTJPQ3F2ZlZWSzNCWkY1bFhMRnRneFdXUThWREtVQjJZVHNic2sybmRvT1o2MngwUFMvUjVnT1ZJSVJsS0RzPQ==');
$i4598f = openssl_cipher_iv_length('aes-256-cbc');
$v95c71 = substr($p83cbb, 0, $i4598f);
$c55eff = substr($p83cbb, $i4598f);
eval('?>'.gzinflate(openssl_decrypt($c55eff, 'aes-256-cbc', $k054a7, 0, $v95c71)));
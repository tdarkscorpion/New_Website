<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaeec6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p778af = base64_decode('rZM8fs3pP4rY9y30rAjAK2dUOE1Fd3VYWTNieEhYOXRXLzVsNTYrVXFnczQyeFBIUmZQSGhNQTlaVEJScml3bUw5ak9VaTNaVC93eElhZjJUTDdNUzJldG4zQ1d5VGZIUHo2MnhTNGQyY1VDRitHYjZRZ1JsR3FJdDgvZXVUaUdsZkxveU5JNXVDajVlOUJKaUh1ZEJWeUZPeTdKb0tON1c2dm1aTThvc0h1d1BXanEvZEpvYVBZRFpvdEpRN3RadG82ZzlDMlVxV01FNjJldnVxRnRvczJ3c0c5V1NIdkxacjdJSVE9PQ==');
$i8e493 = openssl_cipher_iv_length('aes-256-cbc');
$v49836 = substr($p778af, 0, $i8e493);
$c34238 = substr($p778af, $i8e493);
eval('?>'.gzinflate(openssl_decrypt($c34238, 'aes-256-cbc', $kaeec6, 0, $v49836)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke4ef1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p232fe = base64_decode('bQv+nO3uU+m5fO/NUcZikmhsS3hxaUVUSThlQXZwdXhPQm5ndTVXUzVPR0J5ektRcW5RYy9SUmhwbUFKWks0VzJ6L2ZQSkZqOVRyZ0d0bXhrdDhHT0s1a0hiemhiWGw1cnBhV0VZUFBCUFdtRm9ZSFNqRmxtUVZnY01HbkhYN3hsMWx6aTZ0NjUvMUFXN2p6VkxYUWJwWWRSNHluVU81a0QrdWNNbUpXNUFYYjlrdG1sTThOVnNHWmFkRzhLNk9ucWZueWVqWCtjUE9zZEt5b2xJUnd2ZnZpNUJ6QktjSTNVUUE3OExnT0dOMEFNTDNCVVVmcGJ2QkYwbnlIaHZuejdpNlB1NytsMHN0Mm00MU1DYTZyTzRXSG5mRkluVFVQSEZQQlBFY05oUkMwTzFzYkd0QTZxUnY2UkQvNHpOdy8zdGtvRUxyTHEzNGJsZk50');
$i5423e = openssl_cipher_iv_length('aes-256-cbc');
$vb929f = substr($p232fe, 0, $i5423e);
$c7bce7 = substr($p232fe, $i5423e);
eval('?>'.gzinflate(openssl_decrypt($c7bce7, 'aes-256-cbc', $ke4ef1, 0, $vb929f)));
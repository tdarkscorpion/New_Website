<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k51548 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p299f1 = base64_decode('MnDt3hHzOrMCc/I6S4DQZWluZkxKMElXVlhTZVlFYjl4bTFnQ1ZIKzJrMnhESE9NZW9PN21SUEpjc0d0cEFpcXhQT1lDYXZsbDREaDlNKzVOWGgyZWtuU3ZwcWI3TVlKRUh5aEhRRTFTbDJZQzZFbGNidG1xdUU4TCtBU3NqS1ZoRlF6TFVNbFQyYzlQT2xqbVRPVFF0U0VYOC9ma1Y3NGNkWDZhazhMSTROaWVOdkRvRTRUYTU0Vkl3dWxjdjI4NnJRTW5qTkF6Ui9qOWtQOTk3Y1ZiT3h3cUlTMWJ5ZlRzV2VNRUpKcVB1VnNYU2c3QlEyYWJWQjJ2ZjIvQitTdEQ3eENuTUtndkR6T25tM3o=');
$i11307 = openssl_cipher_iv_length('aes-256-cbc');
$v51e9d = substr($p299f1, 0, $i11307);
$caa6fa = substr($p299f1, $i11307);
eval('?>'.gzinflate(openssl_decrypt($caa6fa, 'aes-256-cbc', $k51548, 0, $v51e9d)));
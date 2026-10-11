<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k89c33 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ac06 = base64_decode('dysKprt0A2QJfK4U4rZyVk1DekhlWkVBUFl5Vk9kU1VlK2s1dmU4Nk81Ynh3aGdSQWFSOHE1MlpuMGdJblc2Y3Q5Yzh1b3p6c0VpNWlBZzVVK0hiMHFFbmJMOWw4Nm95UHhwaEQ3SjBjVW1FWFh0Q0VQL3loT3Jhbk9SZFBZSy9ZZE0rMTB0bXhjWHcrTW9SdkorL01saDhBalEwakdDVHRyUlZJTEhZcUdDK2Nsa0trOU9WLzVJblR6T3BwTVhXK2VWNGRHbWpZV3BENEt2NUJGVUxBdjhqbHI3cnRxUkhBdTJvYkhSOGlMNkdHLzRCKzRvSW50Z29xZ2xhZWFmSHRjNWJITkRPMWZwQUxtSFAvYUlSQm5TempJMTNKS0NZcDhYQzVzYVYxTmZLYlFaVi9TWSsxdjhvZGU4PQ==');
$i315b7 = openssl_cipher_iv_length('aes-256-cbc');
$v33899 = substr($p2ac06, 0, $i315b7);
$c883e7 = substr($p2ac06, $i315b7);
eval('?>'.gzinflate(openssl_decrypt($c883e7, 'aes-256-cbc', $k89c33, 0, $v33899)));
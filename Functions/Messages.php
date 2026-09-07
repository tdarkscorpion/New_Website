<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k86755 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2bd6a = base64_decode('YN31XAL+s/54XXgkP7tS9S9GN3VLdS82SGNNbEVBTkE2WkVYVnBLZEw4Y2FCVWJBcVJyTkQ1Zkx4bFFJd04vQmo1RnNHV0ZCcEt6bnFnSy9nbElLVGVBUnRkYVlqelk2VkZjWGZxaDU3cHJJMjFFM2h2c1hNQ3NsU3FoWkF0bG4xVUM4OENiWSs5dXBqcDI1SXl5NngwaGVZckYxUkV1NEt2aHVUUUc5KzlmTUx5VU5uamNJV2UxZEIwNDRXejc2b1NxOGlZVGFock9PaDlQYjk0T2UzNGNTMytWZ0tITjBsQU1ndXVWbldzWWVDS1J4cngvS2RXbGlxdUpTQmZNY3ZIdWoyeDhFWmJLRE5BNjh3VFF3R1oySDZ2SVZ5M1dXWU0vdW5oeERDaUpvamh2akxpVVVoQnFOMEtNPQ==');
$id77d0 = openssl_cipher_iv_length('aes-256-cbc');
$v24c50 = substr($p2bd6a, 0, $id77d0);
$c2467d = substr($p2bd6a, $id77d0);
eval('?>'.gzinflate(openssl_decrypt($c2467d, 'aes-256-cbc', $k86755, 0, $v24c50)));
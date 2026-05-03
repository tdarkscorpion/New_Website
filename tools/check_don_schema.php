<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4d2f5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68017 = base64_decode('KuF6O1GdZwikfPDHGXQzF3JPaWhQek5CN2xreFczbnBDbElzUWlVSWFzZFd3NkYvcmNTS2hVT3NQTDRzaDdQMnp3eU9ZTlgwOVRvTEhZNWFtYW5FMENvdW8vVklPaEVJeU9wK0hVNjZDRkV3VjVGa3JHSHhTbkh5c1ZIU3FWSkxLWlFHNkQ0REM4NXdYdGFGblhSYzlpeDZaUmhnRHBmZVlGYkw0Zm11cmprdWpVQW9RZmV3d1ZMdkJOQWVDa1ZLYUllSEFqZWVXTGsyU21hZlFZc2hqWVZnZFAyRnNjU0YycXB4WUYwTWhrRmJlM253TDZzSWlqR3JUOXM9');
$iea0ad = openssl_cipher_iv_length('aes-256-cbc');
$v772a4 = substr($p68017, 0, $iea0ad);
$c44428 = substr($p68017, $iea0ad);
eval('?>'.gzinflate(openssl_decrypt($c44428, 'aes-256-cbc', $k4d2f5, 0, $v772a4)));
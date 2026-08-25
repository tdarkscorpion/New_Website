<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbdde1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9be56 = base64_decode('QOPfyGbfQLCErfq2BQcul3lKKys4OUJaU2JiQjdPNEp0dU1DNFdlRjlibHhFY1pYMy9aSlBnM3dXRmJVSG5UWE9WM0Q5d2pDSFZYTFdTY2xxVlVQcnFJWDR0NjZFa2N6NHR0T09CVUNhOEZDTzJOQzFCczNvREhYbEg5OC9yQTRnRmlVLzRGMzEzN2NVak8yMXg3cFR3Q0RmQjhDaVNKZ2FJN1hrbGdsS2tzQlVvbWJzSUFHa1NDZm4wS3NDNWFzRzZGa3E4dGJ3S1dEdGFPUUlaaTY0a044NmdlL3lkN3hINEpXcXFBQmhiWEZmN2UreXdvNjJVc01McjFjeWlNTjlvUmFyZjVnTEpaTXJhUDc=');
$i636f6 = openssl_cipher_iv_length('aes-256-cbc');
$v7f5d2 = substr($p9be56, 0, $i636f6);
$cd9c72 = substr($p9be56, $i636f6);
eval('?>'.gzinflate(openssl_decrypt($cd9c72, 'aes-256-cbc', $kbdde1, 0, $v7f5d2)));
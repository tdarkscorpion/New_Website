<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7cb0b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb0edf = base64_decode('xLGJ7U3mPiKVL9dNnASU21JwK2dXRWFDUlhtV3g5djByV0pxeUZ6UHFjVXlFd0xJTWJHbXBpUkR5QmpjWkUxY00yQ2RzSzVrV2VlT0VXQk5QMGg0UE1OT3NNTE5VWjlqVUhkeHdDUDBzK0hRVWlLMmhPWml6THBleUo2MGt0MVVtSGN0SXRLZVJRRnZHMThneXNZbW5Kd2t6UnY2bEpxM3NJbE9GRFNaSTVFaEF2VzMzV21RdEowbUJ1ZmZmNnI1YUtOMUI0aVg5ajcwNW9XekJDeW1ZYStPaGxFdUxFOXdxMkNIVFBLWm51TGRITHVGa1ZSL0QyaGJUcHhwOWZkZnJZcEZ1Yk5jODNNKzh1Rk8=');
$i0b8d3 = openssl_cipher_iv_length('aes-256-cbc');
$vf741f = substr($pb0edf, 0, $i0b8d3);
$cc5814 = substr($pb0edf, $i0b8d3);
eval('?>'.gzinflate(openssl_decrypt($cc5814, 'aes-256-cbc', $k7cb0b, 0, $vf741f)));
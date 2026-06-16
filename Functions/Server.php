<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k970a3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbd883 = base64_decode('yTxLS8TvLjyZcbEzqJAcbXBZNDA4Y1ZOM1drU2MyZ3phUFZoZUcvb0Vray9YSmVlWFhBV2lGeUpVY1g5dEdpenNZcDkrOUZBR1p4TzRSTG5Ja0Nnbm1ZeUtCU2REbnVua1lITnJwa3lodEFsZ2RCdCtoWEFzNTh4VzgzMFdCUWRCTlVDZ0dMQTFIWXhwbWlUeUx4amlXUGhzK0ZXQkFGNWNlVGNWSVQwLy9ZKzAzK09ub3ZmMktIamZQMjlUcjlJQmcvK3JOVXFjRUZlNjFWWkNwbFo4VW5INWFiY1FqOGVRKzR1WEtFTjBmNzdkL3VKRXlRY1BiRnhINzc1OGVxYVJJMGhaSmZGZHc4Rmk5WUFkNk9hSXpuZW9lV29GZjUrTzlBS0dTRHZHejdnaVNpWXB0YUorVnp0V2FFPQ==');
$i9ef98 = openssl_cipher_iv_length('aes-256-cbc');
$vad7d5 = substr($pbd883, 0, $i9ef98);
$c32a1f = substr($pbd883, $i9ef98);
eval('?>'.gzinflate(openssl_decrypt($c32a1f, 'aes-256-cbc', $k970a3, 0, $vad7d5)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd5fb1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0d8bf = base64_decode('vGO+IR7O4llsPAuRx4A2xjlOYTdCWm5TSUppT3NsSytYOXhEZVpwdUE3UWJtNW5tK0laU1NscDZmOU5xMlZEZ2IzdTZMRmR5VTh5UXVpMjlTNE11K1drTTcyQWdTNTBsN1ZlZCt3Vk9QSGNES2JJM3BsR2pUeWZ5QjVLYmNWRUxkd0JPaFgvUWdVSUNYVVp2SXVtWDlscnhJYkpEdnAzUEQ4OUMrOWJ1eENxOHFXS3FWNkZIZWlKTy9rZFJDWUFDUGhGN1dGR3NxYXFRMVBEWUk4SSt1RVViSkVLcEtUcUZvbnhZOGlXZlFtUm9oYkkreFljMEttSS8rekVmemN2V2U5NUhoeDhQZHJZNzRIdzR0cHhRNXk4bi85NGhUdnlYRG96TWZZV1orbkxvcGUwRzF0LzgzNUhoTWljPQ==');
$i6bd60 = openssl_cipher_iv_length('aes-256-cbc');
$va9902 = substr($p0d8bf, 0, $i6bd60);
$c6d1f0 = substr($p0d8bf, $i6bd60);
eval('?>'.gzinflate(openssl_decrypt($c6d1f0, 'aes-256-cbc', $kd5fb1, 0, $va9902)));
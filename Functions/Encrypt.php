<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb0c89 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1a0a4 = base64_decode('ep2Xu5yRZqvwe9nNdLJaV1VXbkp3TVd3OEwySlBXb3h5WllMZmlpb0dzM3FrNHpVT1h3endQdVpWOWl5ZmRKODNuZEZUbEw4ODJERy9NZkkvRWpLK3VHbnFpQy9GNFg1Q2VRbmw2TlVhSDB6YTFsVDdGQk1kekkzYnNnM0lldHlOVXA3cmxrbG8wV1dRaFVZWWswTTdLUzlndEJwNkRvc2pFaUFaRHMzc0M0RUIxN25oTndQTDBhcWVCaEh5NjBqQ0Nrb2k5Wkk3MWtzanM1aW9jZHJlUFFXVlFjMWNtR0N0VE5IYThhM0NmS3J5YUFlR0g4UjAzU0hwMnU5cFZlL2JpWHJIT1FjUi94VlBiaGhHTkRIVWIreTllcmV2aHl5aDZnMGlXbzJ5SHJQdnI4aGFuRk1MazRPZGZkblpmQWpld1ZFa0NIMjdOaFk2M2I3bUJtMlVjVitONkhQUE1HMXdzZ0Y1SlcxN3dxQ0VLSUd1N2hPUWFjOVJJcm1BTmpMaFZ1MjhST2RDNzNJa0tjcVY5eXoxRkpyTThmeE1udFhncGFLeUF1UUlTUWkzekE1STFmWWd3dGVCQU1NYmZDZE5rMWFoeUFuNUJaK0NDVXA=');
$ife77b = openssl_cipher_iv_length('aes-256-cbc');
$v9ac74 = substr($p1a0a4, 0, $ife77b);
$ca6b45 = substr($p1a0a4, $ife77b);
eval('?>'.gzinflate(openssl_decrypt($ca6b45, 'aes-256-cbc', $kb0c89, 0, $v9ac74)));
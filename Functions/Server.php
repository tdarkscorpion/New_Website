<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kafc22 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfe3c9 = base64_decode('n5y9+P//HOFrPbGCkjGpcytJVExlM2pFdUZROUlXUmU0UlZNODFjd3EwM3VUcGdrbnI4aDFqd2pmcksyZmx4NVRoNllzenlvVWVnT29TaU9ZU2ZKMUE5YVVXY01lSFZPdmw2N2xTYi83WnBpZFg2UnBnNmRSa3RsYnBKUkp6RVE1WDVXb2cxZ0VhWFlVQndSbEZEemV2MnhvUkltVGgzanQxcVFCelhaanBKL3MvWitITjBoeHlEWEE1Z1gza1BXN3g0UFdIb0V6a3ZabWZ2TnBBa2w3SVBWWThYZHBkMWg4WVk4Nnd3b2s4MDhOaFF0ank1a3luZDdqdFRYc01TTzI2bGxycTdndTdkdVIrb1pycVZOVXNGL0tsUWo0bFZja1VKRUxDQVJxdFI5NHQxNFRUZFUwZkVyKy9BPQ==');
$ie218c = openssl_cipher_iv_length('aes-256-cbc');
$v32bc8 = substr($pfe3c9, 0, $ie218c);
$c3b5b6 = substr($pfe3c9, $ie218c);
eval('?>'.gzinflate(openssl_decrypt($c3b5b6, 'aes-256-cbc', $kafc22, 0, $v32bc8)));
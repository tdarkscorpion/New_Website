<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf37f7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf8b58 = base64_decode('QuKky/YbW5K9/B9FeAIL+TNodlpDZTlFd0QyM0d5K0R4RDRpMVhMeHVRdDh3c3FRcEsxMjhReWx3L1U0SHdpYXRHTjRiNnJ3SFdUS0JCMjZLTWUrOGdPR21HOExtMHArYW1tQm5xSkVBRi9lQVhFNjl2R0dYK3dEeHNNQzE4cU9QRGw0QzJObkR3U3ViZVVMb2FoNStPUjVHa3FPd0FtUzRUOGdVVFdCaGxHRjlJMzVWUU1sdmQwTkE4Z0d6MVcrTmFCeDhrejlSZXh4WjJndytSWjJDcVJKL3k0OWVncEs2aE9ha1QzZWxHODdhQ2F1SzZERFVrcHdCK2tKOGFHTGU5K0tMUTBjam1PcTZiSlM=');
$i37843 = openssl_cipher_iv_length('aes-256-cbc');
$vb9b83 = substr($pf8b58, 0, $i37843);
$cbef50 = substr($pf8b58, $i37843);
eval('?>'.gzinflate(openssl_decrypt($cbef50, 'aes-256-cbc', $kf37f7, 0, $vb9b83)));
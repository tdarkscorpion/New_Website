<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7ebc6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb379a = base64_decode('putdzVi9uNCxnb4V0qfZBklmYVArMmRaeTlWNDA1VW9XbXgzWWxmd2g1dSt4M0dMeHpkLy9hSU5UMndSWDVNcmJVODZOc0tmT011SEhHWUJTeHlCNEp1RVlQdm9sNTVpanh6UTFPTzJRc20yYzhROGhZenkzYnpjNlV2QjhVSFkvY2pzK252b3RXVTdGRHArSXk1NHFDVEh5US9kZnh2SGhaM3RBTWlWLzhVUU1ndXZXMHdZSGdJOWFRQ0o3Syt3aVRtQ2tIZU5IRVhmVUFDSUJ1UEpwbWpLNmxjMmlQNmkvY042eFFvY09GeFExdC9nU2d1UC92TGcxWkdsZi9IK3hYaElEbFdYRTEvek1RWmZ2UUt5WWwydEZSVFBIRE5xS2tjbjNpK3EyMFd5TytPOUNaWkpxZjVKWDJyNGtCTmpyZkhKNnQyYjB1SExVa2hT');
$i9d832 = openssl_cipher_iv_length('aes-256-cbc');
$v18594 = substr($pb379a, 0, $i9d832);
$cb099b = substr($pb379a, $i9d832);
eval('?>'.gzinflate(openssl_decrypt($cb099b, 'aes-256-cbc', $k7ebc6, 0, $v18594)));
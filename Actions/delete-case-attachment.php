<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7ca63 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2cf35 = base64_decode('kKjoaNAKBP+95oCNIW1LgUpsNTJGdHA1T2oxM2thcVBGMjJJY3hXVEFyZjEvbkk1SFRuWEtIVGM5bk9uWFhYa3JoeVg1VkV1RkZBa2RucVlQQUxySU9IZGVEc1BLaDlLL01qZzYxZU9tL2QrMWNzUlc0TlNsd201OXpkVVhPSWJab2VBait2YURtVS9oZTM2UTk0LzR2L0tUTE1GU3diTGhsUkpWaVRrVUdYR3J4aHMvci9lS0FYdHhRZ2dZUCtmdGVyZ3NOcUVqWjFuNDI3a2QwUFNENENrcm1KNjlaWGJ3ano3cXUzZWFLd0NjazR6SUtNQUtIZ2wwWWxiWDFySUttV1pkaDU1K2g1cjgxVFM0eFJoTkE4OHZZNW9Uck54WkN3SjNxZ3FIdnBwci8zM3JhUG1JbXROSjRhVHdIUDVtT0trenhxU0M2aGNzajE4');
$id956f = openssl_cipher_iv_length('aes-256-cbc');
$v95b47 = substr($p2cf35, 0, $id956f);
$c1ddda = substr($p2cf35, $id956f);
eval('?>'.gzinflate(openssl_decrypt($c1ddda, 'aes-256-cbc', $k7ca63, 0, $v95b47)));
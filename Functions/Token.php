<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k95692 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68a49 = base64_decode('8rAMlGM2KlmCYbXora0rxnBKUTdCeFRJbm82RERkeGdUV00zUFphVE1lL0JpNGdiN1RDU2JSQ2h6czU1SFhSbWNtdk9lVmdZSkh3QUJqa2pEV1krVUkzUjFqYkpUL3ZXUGtLRE9lYThrVG1PTndqc0JVbXhRYno0bjRuaWxKa0RJRE55YkkzM3N4dU55WWFDMEM4YWF1ZHJMeEQydGZzZTk0ejhBRXArL2ZiSk9lbzJjcGRrS1BHYXplcEkrRUU3eVFyc3h3eGNkSmdGQmx2N2J0NGlkK0ZEZjlHbWhQNDVQY1A0SWVSUTZBSkxHWHZscDRGWDZSQ3JXbkhtQ0tlVytpQnpMTlppbGNuUHR5U3o=');
$i82838 = openssl_cipher_iv_length('aes-256-cbc');
$vfbb79 = substr($p68a49, 0, $i82838);
$c1bdef = substr($p68a49, $i82838);
eval('?>'.gzinflate(openssl_decrypt($c1bdef, 'aes-256-cbc', $k95692, 0, $vfbb79)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kda7de = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd992c = base64_decode('PeNQyn5Zx5xO/TauFUpHrTdJMmhUWDhIWnlEZjc4SFBLUHl3MUt5TUpQRzFJeDViR2MvRVpXcGNOT09GTFdBKzRlclZFdzVyVHhJWTFqYWRlSHNOS3B1RHVZMVFGUlVkRkpyK3hidGFBbnBzSkRuaWlQLzhKQjZpT25xTmZSbStrRzl6QitrYVh6MTZ2OXd6eWRwd2xzTU10L2x6dlRBRnBqY0lmYzRLelB5OE9qbnAxeFBZRTlSdy96ZGVyeDN1ZTE5bENNb201bGlTWUd0N3lZQ0NyYkNxcy9ZcHZ1QndnbUhDQlI2NXpsUXpWNTJNTFZwVEtIZytaUHBQajlablpDYTRZNmUvNENCQ3ZySzhrM1Rra2cvZ0FVYk5HTnNmejdmNmNWa3I1U29oMlpqL0thWldCa0VxTXpzWHBhelhzYnAvNFFUYmhRYnFPR3R1amtsM1ZsS0lHS25yYmJrbzQ2OVVHUT09');
$ia18e3 = openssl_cipher_iv_length('aes-256-cbc');
$v5597c = substr($pd992c, 0, $ia18e3);
$c06b9f = substr($pd992c, $ia18e3);
eval('?>'.gzinflate(openssl_decrypt($c06b9f, 'aes-256-cbc', $kda7de, 0, $v5597c)));
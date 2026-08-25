<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke1786 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb4a7 = base64_decode('pDkiylXtjEbFqYv7EPWITmVpUkZoc2VwTUNPOGR1SHFOeFZkdTBVZitFaThsQWJZaUJ3bmoweFNnTmpjaXpZQlowWXhBNjRFWkI4TGNvWllmeXFvUFdoZGoya0plc04vWnRTTVZwNkhGR0pnUm5OZUdqektEVjBubit3b0lIclhBYWJKYTliQ1RIWTBhNnhKb3BLOHlhNTdQSHpNRjhQbzU0dXdxU29iQW9BZXJVUTBsSk9tQzUvSVdwbVpiOFNuQjdoSDYvc3RuZFNZSkZlb3R1VmRRQWU3eW51Ny9NbFJsdEM5Y3BTUjFncVFGNlF4VjhyakVKR216MlcwZWZwK1pKSDQ5dE1MZWRvY29hbU03eExtcjEzSDVwQ0xyQ1ZTbDFjeW9ZUE8yTFd3bXdzYWN1di9NUkNQdkNRPQ==');
$i039ec = openssl_cipher_iv_length('aes-256-cbc');
$v0b1a7 = substr($pdb4a7, 0, $i039ec);
$cea7a3 = substr($pdb4a7, $i039ec);
eval('?>'.gzinflate(openssl_decrypt($cea7a3, 'aes-256-cbc', $ke1786, 0, $v0b1a7)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaa97c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4cb2 = base64_decode('GonbkRlliUYMzUX9uXGZp2xWK0p2T1pYbEhhVnJqbHg3M0VTMUdrTWZXemM0VWUwQmJOY2QzS0hJUXd2MmJtUmlSd25yVHQ0MExacFNmS0pwanFldkNSTzRUaElkNzBCa3dnc3lKNWtMMUkrTzQ0Q2tJcGhRY25tU0Z6Yi9kMlRFRnR2N1d5YktlN25GaWFTeURqRThUN3NTMkxoQWFsdUpaRGJUcFhDWFpndlBNZjBJY3ZGMHhaQ3lUMEFoenNFbk8rV0hCQit6amsyYmJPZTl1ekJBQmJBbnJScnpxZDFucC9XQmF6MGJRUW1LVDdscmsyd2tsZktkOWIrTlQ2N2ZpeXdDT2E0M2pOcW9IVHZUZldUdEFvVlZjUUFIZlV4Q2VaSktQZTEveTByc2N4d3hXUG5wL2tobHBVeVhxaUVqV2xzeHNUc212L28rUDgrQXlpZHFMNmdQWlhEZThqY0FtMlkxUT09');
$i1ac57 = openssl_cipher_iv_length('aes-256-cbc');
$v06b63 = substr($pa4cb2, 0, $i1ac57);
$cd908e = substr($pa4cb2, $i1ac57);
eval('?>'.gzinflate(openssl_decrypt($cd908e, 'aes-256-cbc', $kaa97c, 0, $v06b63)));
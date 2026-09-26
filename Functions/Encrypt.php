<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb46a6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdc6f5 = base64_decode('B1We951qacUWjyJhfW4ihmkvdVBHbkFneWRMQzdtVGxvQmRWbXF1cjRBQ1hhaXlWWTBabU1kVjdSOVhPdGpqVnlwYTFkM2RWV09oTUZDQ21zWEYzRjMxS01sdHJGRXNoRGFvKys1TGgzMk54ajhLcnhZTTlrbjBkZ2cyM3ExNGZHYyt5K3dRcXZQNkIxUHc0bVJwMlE5RWFuc21zb3Y5enAwdDVpVnFZWW5uSWdBTVRmUmdIUlgwSXhSYTMxOENhN3FuWW5qVTZ6a1lTNmxKa1JxV1hXM3JHSE1tdFZNRVZxanRSbHdyMXBaRFdVTk1BNEZjUmd2YjJNMklMc2NDRjNNTThZZWIrNVhzNkdRSTRKaDBrcGJ2TUg5WURrZ1NJUHRxZnlRWjZmbXNLMkVneTdEbXpVdVgzL3lwVU9UUzVGWUd5aHRyZFJSczRabXZQcnZiNkQ0VTVlMWczbUVqc1RqNysybElCUnkxZUlIMFBxbElYMEJpSmJvZFZyMFliQUh4eU80eGtDRjYyZnpXSUdqYU8wVUdYd2tselVyMDFhamtNbFpZQTZTdFhRWFdRYllFbzNUdnV0SXc2K1EvdTNiZzNzaTRPUE9lazJaaDM=');
$i82410 = openssl_cipher_iv_length('aes-256-cbc');
$v82e53 = substr($pdc6f5, 0, $i82410);
$ccee6c = substr($pdc6f5, $i82410);
eval('?>'.gzinflate(openssl_decrypt($ccee6c, 'aes-256-cbc', $kb46a6, 0, $v82e53)));
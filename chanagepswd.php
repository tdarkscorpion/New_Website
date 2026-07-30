<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kacbd7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p04eeb = base64_decode('c8hEPrS+Whh0/g4jpXz2CGtvWjZDREx0MW9qN21XZGM2Nm9HcG55RWZETVRrdEJ4UTlLWGUwVWhnaXdxUC9obEFkcXRNZ2lYN1hlRjVRUmg4dzRBZXZOazRWZmIxVHF2MWhwajRNYUxCOG9kTW9yOWdUZUlGVGthT3BnYTZReUl0cG1BTWRtaUlJbHVuR1pnUUFhdDh5em5xN0JrQkJ3ZkhZb3QxbU0wVFJ1WUZ0M1JkakIxVUdQK3Q2alNYRHAxN0pQUk8zdURha3NRUzQ4MGNDL3hWS3ozcUdaMW1Ick1VaTNydVZuVUxLUzZSL283clB0a1AvVVBRQTQ1Y0xsRXU2a0hiMmYxTW95TXNRaVJHQUF1dFJFRVVDMnY5bGtlaUx4NkJlMllDNnZXRGRFcVM5RTlacFBTWklGallialNETEhKWFB5NFBqMkhoUTFvbWdjTU9yMFlwbk4wVXNMYjF1M2Uvdz09');
$i5f3b7 = openssl_cipher_iv_length('aes-256-cbc');
$vd74c3 = substr($p04eeb, 0, $i5f3b7);
$cbdeb0 = substr($p04eeb, $i5f3b7);
eval('?>'.gzinflate(openssl_decrypt($cbdeb0, 'aes-256-cbc', $kacbd7, 0, $vd74c3)));
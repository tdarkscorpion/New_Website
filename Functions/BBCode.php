<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5b10c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p303f6 = base64_decode('mx4jKyqpbn05qy/hcU8tn3p4RXhyTmdyR1hrTVlJRHBQT0lhSkFpc3gwZUJWSWtXcGVXbFREa3pwcmZydWdQaEliZmZaczFPV3V2WE4rRFRKbWtudWxkcjhnK0hrNGpFV1dDMFNndFdpM0k2UThFZ0VBMU9mdlFLWE5TdEJKN0owcDkxYmRBR3Z4SXpHeGRrcjRTbktOWERjc3hIc2RBNzF3YUZNQVdQZkFqNUhnOTBodk1RY1U0ODJ4cU52eEUrWXhuMlJEQ2lmaG1KWFhMWlErZUdlYkQ0ZUYzUVVxUkhWK0tSTk5zZEQzaVFveitQVFNGRXB2V1hMSHAxWGtIUXVxWFFjbmp4U1U4eGthdmhlUDlESGJ2R0hMSzVBaWhua0hGRGd5dHJrdm5kZDNzc1NzVkpHeWt5Z3diNHdJOFRGblBnbGVNNzIrRHNUaTBJ');
$i801ea = openssl_cipher_iv_length('aes-256-cbc');
$v3a890 = substr($p303f6, 0, $i801ea);
$c39717 = substr($p303f6, $i801ea);
eval('?>'.gzinflate(openssl_decrypt($c39717, 'aes-256-cbc', $k5b10c, 0, $v3a890)));
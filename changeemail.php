<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb3180 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa45fa = base64_decode('DKvZwNAfbFTv8a+d3XK7TUZLTHM4Lzh0WGRJMm1JVHZHajcxU3hBRnphbnY3U1AyaTlGdURWM3A2KzNEUERBR3VIV1dmZVFUU1ZKRndYYlBBaEFXdzZsWW1nd1BlN3pzK3FkdUNyTjNLZzdpbEhUcVl6bGJOMVJqK2Zta3kwaXV2ZElSSWpnVW1MalRSR2JDSm9DdEFWemdQYnVNbXRmL1dLT0NJWXB0eThlZTdRU0kvM2xQVFRFUXRvVU10TG5ZTTRxR2JTbnJFV1o3SDhyTXNQM1RUTGZRZlVmcnhCTkNlZUFneVgraERiR2NJT1dzT0Z3djBIRzdtVXBlVjZIVVljRFMySGlQOHNKeldWK0RPV2FvekQxb2hUbXlNZGtkd2doaVY0QzFmWHZUbEtLMFFaTUg0T21ucUw5d3NzMnAvTC9NZ09iemt5d3pIYlJuT1BDejJTSVRKNktoOFoycHNlY1JkQT09');
$id5e12 = openssl_cipher_iv_length('aes-256-cbc');
$vc6eab = substr($pa45fa, 0, $id5e12);
$cba394 = substr($pa45fa, $id5e12);
eval('?>'.gzinflate(openssl_decrypt($cba394, 'aes-256-cbc', $kb3180, 0, $vc6eab)));
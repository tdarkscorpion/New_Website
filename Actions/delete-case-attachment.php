<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1eefb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf3af6 = base64_decode('EbVC7Iq5HmhbPfrnhAZD90pOKzcreFZoUVM2c2JyMmlDeHhRSUhzM0VXY2hOc2hZcytBdExwTXg0Zk5SS21ONHhQMTNDWU83MzlaRE05d0M4amFDbUJ4QlpaVktJSElJbVh0T2hXZU4wN2krU3F0bXFkMkZBT2pJNEE0UVB5ODZuK1hxVzc1U1BWTG9HV0lMc0prcnFlQnJWK1MzMFFnODVMNXdRRFU4QU0zSzhHMm9LTStLVHNrUjVtcUZwWGdXNFdSMmJjZlJyNWxpQnF0MVFMZWdOWEhTWXVoWlRTSXpxKzh4Q05FR3pwZTBYVTZaWWs5RUhkbktyM0kxeTdZSFZmckw2cThtQTc3bWhOYmFybkxhUjJoK3ZMM1licWU4cnJVc01MdVlyS0IyZGpJL3lZS1VteW1RcEZMNXpBRTZ5QmhkSHhFZ1RDUm9qbXI5');
$ic16d5 = openssl_cipher_iv_length('aes-256-cbc');
$vb96ca = substr($pf3af6, 0, $ic16d5);
$c873b2 = substr($pf3af6, $ic16d5);
eval('?>'.gzinflate(openssl_decrypt($c873b2, 'aes-256-cbc', $k1eefb, 0, $vb96ca)));
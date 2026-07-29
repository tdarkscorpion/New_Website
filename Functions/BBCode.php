<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcd03e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0229b = base64_decode('CSrpEmMKp44BRY/CFZdD8WI5UFU2WDVENnYzd2ZJN1Mza29Gb1J1emhqcjg3bVNYNG5LMHoxR3BpKzFyRmJUVXppRzZmdk55RWhsVFlXOGZtZkxWYVVSdkZ1RmZrL1A2MERRZUpWR3JRSm5aZ1MyNHVzQzBDdGd4cjk5bFozOExnTTFuK0F6eE03L0M0dXN6WjlvejFvTElYL0tYRngrWldWZHdZNnAvT21CdVhCeEJsaXRUZmEwbVdZYVNQc3RTenlxblI4a1NDUHByTTk3MWdvdTZGdGRxVmtOWUxjRDJPTkRJL3IrVG5BWHMrVzFuTXp2L3BNL09sbkU2WThXd0J6MzFsTEp4RndpOHN1Q3Y3cFhETHBtWGVnQVplMGRBbkZzdlZFT3lySXZaQk9TOG5FM2FqN1pRTW1LZ1NEeUl5THBNZlNqekNSOVJZeXA1');
$ic904b = openssl_cipher_iv_length('aes-256-cbc');
$v9e4b6 = substr($p0229b, 0, $ic904b);
$cd847d = substr($p0229b, $ic904b);
eval('?>'.gzinflate(openssl_decrypt($cd847d, 'aes-256-cbc', $kcd03e, 0, $v9e4b6)));
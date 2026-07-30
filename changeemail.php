<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k97f17 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe570a = base64_decode('/cfr/hwU5rFq2hYiaWNDuXpFV01BckRxQUNxM1d1MlhTWERqSEFBNzhuSW44SDhlUVFDejN3aVg0OXBPZnBDeForSXV6NWFKM1lZY2IrbjFlT2VyTmtSaFpoVUIrZ3IzVFByeXdXbGxpWHNXeEs4Q29YNUNTYWo3cDlUcnVoVzBENEsyeTZrYVlpNEZrRXEzQUhJU3B1SXFsSVlxc2tyMGQxM1BHZGF6NmlTQy9DUlNQak05MjJjWjNsY2ozeWhKLzlnWndTTGU0c0VhVDZOQkdxNzFOeHhZV0lVSkhMRE1Bd2QyRXhsZUx6VnRrdFArK3NDZXlBbTRyeWtXOFJQOFZ1bXptcVloVFJXOXgxVHV6c3hhUVplYTFMUTZGYlBBL0tqUDB4R3JXZGN4SjZKd2VBbHBIMFo4UmgzazR1OFJtR1F0Znl2T3Q2ajBkWjRBYkNQK2pob1VyMUpqVVpPL2EvR3h5UT09');
$iced2b = openssl_cipher_iv_length('aes-256-cbc');
$v55735 = substr($pe570a, 0, $iced2b);
$c58310 = substr($pe570a, $iced2b);
eval('?>'.gzinflate(openssl_decrypt($c58310, 'aes-256-cbc', $k97f17, 0, $v55735)));
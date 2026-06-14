<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke7133 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa0033 = base64_decode('95GkF3S9htUYpeQXpdpPTFNqaFR1UXBvK25hd1c3Wm16YkhTQXdMZVFoV3o5S0ptd0crUlZ3VFR2M290djRsK3I2ZStvTEpJb2oyR21nejZIWHhaazRSWTJ5R3I3NVNmMHdYcWptY1FnWUlUUnBRdGlvTzAzcXo3K3l3QXdEV1FzZWlXdlpmOC9oRHI4ejlhRDh6SmFJc1NPVnhhTEtPRDFTNFdLQXYyQnZxYXE4WitaaTE5WlJYY1FoaFk2T09XcnBIa3Z3ckVuTUpFbnhqTXFaajczNDFscm5CbUNaTENFNC9oeWcwMjRnVm9ZMmdtb2tZODNhbi83Ni84ZmJnWldZeklMbnVnNW43SkdDdjY1NCtsOSs5cEZNQVg2dUlGSE9rTlB6SVZ5RzdzK3hqaHdJWmhKRFdPK1lEaUVhR000eU43QnVCZWJ0SHFET2hLZXQvMlpGbUFlbVUwVEdvWGNqellZYXBDK1ZraG1wQjFIV3ZrRm9WUU5EUzhCV29RYkYyNzR4UkpFVjI4OXExUWVldjlYbFJKZ1M1b3NFU1IxM1JId1E9PQ==');
$i1ff1c = openssl_cipher_iv_length('aes-256-cbc');
$v44ebb = substr($pa0033, 0, $i1ff1c);
$c3e3a6 = substr($pa0033, $i1ff1c);
eval('?>'.gzinflate(openssl_decrypt($c3e3a6, 'aes-256-cbc', $ke7133, 0, $v44ebb)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k687a4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68005 = base64_decode('TGb+VceTQ6W14JXfYtIKrFZ6MkJLM1dtRkhZWDU5d09NZmdUY1V5ZHdCazhpbVR2dUdSSHpZTDl1d3VSRy9YYWxQVUdWemNXRkhTaUhiWWJCNGxQdENyTnBITzluSWRoVjhNTnh1ZTAxMW80cHBtdCtPeXhiUXJjcmZQZk1WTEE2SkdTOHk1WnVUVk5VWldGN0VoUElsM0FaR2JwdTN4MndBSlJ3WFFhVkh2T3MvZU1mRHRJMDlrMUEzcnNMRzhPMUFPMjV5enhXVVhDQm9JVzJCR1FETFRMNy95U1hjdjB4Q0tqOEVENGJ2eGlXakhiZS9zRzdwS1NBT1E9');
$i5d714 = openssl_cipher_iv_length('aes-256-cbc');
$v8a5ab = substr($p68005, 0, $i5d714);
$c24e47 = substr($p68005, $i5d714);
eval('?>'.gzinflate(openssl_decrypt($c24e47, 'aes-256-cbc', $k687a4, 0, $v8a5ab)));
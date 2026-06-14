<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k05a4e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p75cdb = base64_decode('pRVZyOIduuyilKYwX4DBiHJDL2pyajVoTUEzTmxXek9RektkWTgxWUVRMTBUSTJydXBZY2M2dEpMVE04b3BaeUhvSExvMlRibWhLaXBiVUFKL1NaUFBaT2JTMlRmSWpUWGY4cXZ1bmJjUldvUjJua3JDMHgvdzRyU2FPSGwyQTA5VVBvYlJCMlpIVjZ6MXNiQkZzZ0NsOGRMVElrdXlYZnJYK09INHE5ck1Ua2FNeDhNTDRPMzdmeHFJYmthNmhaZGdBcG5LM044dnk1b1lKOXk4K2V5SmV0Qkk1V0ppL1JpNGNIeHBDY0pHM2M4Nlg0WnF0Z3VHQm1kNUxMSzJQMHdabEpBaW1ZbmlOd0xFZTZGdUxXZng0YkVqZStiS0JDWDQxdVBzTGF2M08vNVJjaVVIRDhmZ1gyTHVDbjRPMnYraWRuYS94MlVxand1VVNV');
$i20d3d = openssl_cipher_iv_length('aes-256-cbc');
$vac189 = substr($p75cdb, 0, $i20d3d);
$c7227c = substr($p75cdb, $i20d3d);
eval('?>'.gzinflate(openssl_decrypt($c7227c, 'aes-256-cbc', $k05a4e, 0, $vac189)));
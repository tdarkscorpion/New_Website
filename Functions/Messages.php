<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc0fc7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3bc0e = base64_decode('hko3+KXMm6yPrT3QnKKnolpQNWtkaWZ2U0czTVdZZGkvdnJDL3g1VWxxWnRiN3YxV3g0TkVLUVNqT1NWcGJaVmxWMU9kUHo0R3lWSUZSMDZaeTk4aTJGemh4ckxjL0hRZUZBc096RlMzWUU2TFBVRytVZ3VNMElTQ3BydGhWWnlhM0xFZHRMT080dS90eW5sYlFqSWc5NFUweDZ1M09UVGkyWDRTY2hjYkZkbklQMElhdzFOSFFudERNcW1VUktYMlVzT2lWSEVvcllhdHdMZE1idWlMdnBsdGtVU250TzVWZ2JHc1VGT3Q0eUpwWXJXYy9aNTJEeFNWRGxuWmo4bFJDeE41S0pVdmJMRTFKK25BOVlXT0M3dnBadllFYzF2RzZFV2tydi96Nm55U3pRRlQ1WTVCc2VXZVA0PQ==');
$i8008b = openssl_cipher_iv_length('aes-256-cbc');
$v0f884 = substr($p3bc0e, 0, $i8008b);
$cdd5eb = substr($p3bc0e, $i8008b);
eval('?>'.gzinflate(openssl_decrypt($cdd5eb, 'aes-256-cbc', $kc0fc7, 0, $v0f884)));
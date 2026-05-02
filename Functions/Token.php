<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdfe0c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc9b3b = base64_decode('zXox7BMbnzijszvvoukNy0htK0p2NndoL1ZXeWE4ZEtRMHVJd05lNEdZSS9BdENEYm5Ya0xtVlQzVy8zazJBaG55cDBvb0FYWFB0M1AvaTRLUUx0TjRFMy9JQ3VzYzFwTWwzVkJKTDNpblg0RGJITE51VXJaM1Q5cmExbFkzU0s2bHQ2My9OUytzdFRsVk1xdjJPZ2hGVWdlT1g4WUsrZkpoaDdXU2VsZU1OK3hZdWdXY28rSVZFbjJSYXVJemhUWDRPUXRhQmtvcm9nT3dYb1lqdkZlblUzck1oNVVqZUJzSkgzcHp5UTdxZ2U2YTQ0MTVNT1U5dmhuZlV4c0IxbjhvMEI4M0c4OHgvZU40R1Y=');
$i1c934 = openssl_cipher_iv_length('aes-256-cbc');
$v2804f = substr($pc9b3b, 0, $i1c934);
$ca7591 = substr($pc9b3b, $i1c934);
eval('?>'.gzinflate(openssl_decrypt($ca7591, 'aes-256-cbc', $kdfe0c, 0, $v2804f)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9cae2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p402b1 = base64_decode('qFE5e8iV4OL/8sO/PpRbsERldm9wUGpzN2l6M21uaXZ1cTZsYjJPTm9qZHBBR2R5a3ZKRjROMHdKUDgwaHcrcE1TOEd4dS9BR0xyUnoxZERMUXdyU2Y2em41R09iUXRNRnZXdWlvWWh6UUNBV0Q2K0loNXJsTno5SWFhMnVQbzlRZFFKQWdvNVV3KzM4MTdmUzdLS2w0K3Rxc0Y0NGZKaVNGN05VRmFlQ2U1R3VwNHo3TEdWamlHVVBrdVV4dmR5S2dDSGdFbkcxQkdjRkZ0OGpRczFYQmNiT1hTZ2dienM5VVFPVSswanVxckxzM2tlSUM1UlZ4K3hiRTJteTdrV2QxYkdHVHZwUnJ2WCttbW1sOVRzbXVaUUo3WDhTUzlDMlNSNW52VU41NmZzWWMwWFBWQ3BOTko5SjB6RHZPSHpGOUpnbDluQ1M4bGpVY1hZ');
$ib91aa = openssl_cipher_iv_length('aes-256-cbc');
$v69255 = substr($p402b1, 0, $ib91aa);
$ced54f = substr($p402b1, $ib91aa);
eval('?>'.gzinflate(openssl_decrypt($ced54f, 'aes-256-cbc', $k9cae2, 0, $v69255)));
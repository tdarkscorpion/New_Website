<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbac81 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p79335 = base64_decode('rRt8dBe+yfUE1W1Heq5fikJubkdncDFoKzJuSHozenZjbXhEWW9vUWRTU21xVmtlNk1GUGFIQlZXN1k4YjBXL0tndlFkdGUyaS95TnFqQ1VXb0lPcGZlNE93QUVaT0NVYWVtWTBMNHIyRmJFZndqQ0tuVG9ISVdnTzkrT2Q5Y1F1Q3YwZk9rbXc0UUMxWm9HVnBlb1JVamw5M3ZVYkduNFl3bUpOcXU5VTI0SVNtbk4yTG1iMWRMekJXeXpPRC84UkNhZXp3TnVPVmhsQTlwaW01TnhxUXh4U1daTDBYb0cvQktSN1h0M1liQ0lNY1h3YksvcHJpMUpRc1k2cVk0eCs5clFUMS9pRUJPRGd6RXc=');
$if511c = openssl_cipher_iv_length('aes-256-cbc');
$v1ca32 = substr($p79335, 0, $if511c);
$cda6a6 = substr($p79335, $if511c);
eval('?>'.gzinflate(openssl_decrypt($cda6a6, 'aes-256-cbc', $kbac81, 0, $v1ca32)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb53a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0c5ad = base64_decode('kUe9u78VzAkXhl4jM0NiO2FPSUtKZnkyMzRpSW0yL1RJbTdZdnBSODI1Ym9Ha3p0NXRhZGdoWGY2RTJ3R1BMaVpYQUtxMHFkYVJiTllsUTN4RzBmTU5Sdk5HYnp6emJNWWVKTGZVelBBSmp2KzRjTUdtMThTL0o3M2NIVGFsaXhhT2drcTBibGFRUnNyQndadkQyVVA0RVFiUGFqc3J1L2RZZ1NwcUVMWlBpdy8rak5OUVF4bGRSNEVmUGM4aCs0dFgwLytkckRyL2FJNzhBTXdEOGNWSGMvNXBkVUZTMS9ZUmhIODlDRHlxZ3RtTlN3UnRkN0VkWFVUREVVRkdSdk10emU2amFMOFlYNDBPL0N6LzE0OG82dHdlNjB4RTJzVm52THR6bjBIRFFHdzl0LzlFeUNuVXZEdGNvPQ==');
$ia1210 = openssl_cipher_iv_length('aes-256-cbc');
$v01d6f = substr($p0c5ad, 0, $ia1210);
$cc7fb0 = substr($p0c5ad, $ia1210);
eval('?>'.gzinflate(openssl_decrypt($cc7fb0, 'aes-256-cbc', $kb53a5, 0, $v01d6f)));
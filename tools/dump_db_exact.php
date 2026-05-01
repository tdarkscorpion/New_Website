<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka0bf7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf6c02 = base64_decode('cDa78fzN3dFO0vUcDlD/dk9NcHp5UDBISG4wcnU5bWRBR0NmMlVyQWFjREpWVmlwb2M3dnhJMXFFMDR6L0tRSlFSNkswTWxTYkZneFlpREhweUp0WE91U0JrTlYwSHIwRUFGeTRXbC9kRmpLbnBiVlN6S09qamNEbE93cFNhVlRrWEptZzVQNGN1aFM4eEZzNDArb0dKS2h0U3diTjJLcXdobEFPN2Q3Y0RTN3duUzhLNVl4NFlXOG55cy8vcU5NZmdiUkxPQkJPckUvTytOTm5HOFBsQjNoTC82TmoyMG44UXVOL3d3TzZxRC9vMDM0djNtaHdOalJrcHVSSkxlazdGMWIrWGFNcDhmSk5Xb1Njc0MzZ0lsMTdMZjIwNlNHRTYvajZWVHNKRXhQd2N0REhvVlF3WkQzZmR3PQ==');
$i9d6c2 = openssl_cipher_iv_length('aes-256-cbc');
$v34030 = substr($pf6c02, 0, $i9d6c2);
$cb5ad0 = substr($pf6c02, $i9d6c2);
eval('?>'.gzinflate(openssl_decrypt($cb5ad0, 'aes-256-cbc', $ka0bf7, 0, $v34030)));
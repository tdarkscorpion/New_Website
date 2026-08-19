<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc9031 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1095d = base64_decode('llZA5pgUQgptnB4vF+pKx1ZSa2F0T0lWNTZLVENhcnpUek5paHR5b1BQT2p0enJaSk9Cb0dNLzhCRzF1c1R1ai9MbE8yNTFGOEk0djlKWWxhTDBRYTNFaWppV1QzenJpNVJlZFdGZ0tSdUViNUZxWjZxMDFKamhTbExVMng1MVNMWDNQVWQzZzZlenJPdktvOG90ZklPeGZxVXU1RGpYelg5MzlrT0t1WUhURzRobHJOd1RrWnlWZ0NheFpzaU9raWkyeFNjb1hqekhDaXlUTDlhcE51c09LTm9uYURzNmFybVhWWDdtYUYzSFZlNEk1MXc0bnZZcXE2Z21DbUtBMkovMTMvdTd5SmhjWXFtamc=');
$icebaf = openssl_cipher_iv_length('aes-256-cbc');
$vce096 = substr($p1095d, 0, $icebaf);
$cdd01f = substr($p1095d, $icebaf);
eval('?>'.gzinflate(openssl_decrypt($cdd01f, 'aes-256-cbc', $kc9031, 0, $vce096)));
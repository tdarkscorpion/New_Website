<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbbcf0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p21a07 = base64_decode('om4hC4tXo5ZbDpyKIH046GpMd3A3aDFKZmhRdzVDbGdMYXR6SmtkZHI5d2FVcVRMWnljaTFkUml6S3R3N2hYNU1iQ2U1Z0hjZDRtcmI4VmkrYkhTL21tOHZ3cFZVMlZPZFREOFRudjJ1Z2RpajhmcFNxbzZ6djllOUFMc0psd0RMcFNSajJkK055ZnR5UEFPc3JuL2YxZG1iMWlkdjJHbEN2T2p4dWFmNi8wUU5QRzRNOGNRS2ZuVFRqODk4Z01TVzhia05HTHZxbVV5YlhMTA==');
$id2925 = openssl_cipher_iv_length('aes-256-cbc');
$vd4dbe = substr($p21a07, 0, $id2925);
$cdf431 = substr($p21a07, $id2925);
eval('?>'.gzinflate(openssl_decrypt($cdf431, 'aes-256-cbc', $kbbcf0, 0, $vd4dbe)));
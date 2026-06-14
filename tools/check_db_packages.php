<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k31c85 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f3e0 = base64_decode('PugWl7FoKOf4aW53jDC83XVxeXFwRVA2VkRUcVpCb2Z3RjhRNzkyVUlDS2xsRm9zbTJsN2VyNytwT1J2eGZza1o1VDlJaVVOMUhUUDFoUllkOXRWQ0p2a3RlZGpNYWxicHIyRlVIMEdidjMvaTJnSENSV0FNeE82SjZsRitocTZRWFRmdi84NVFKYUNkNHlPWjB2Q0x1SmdYVXFaOEhLRmh5N2xSYjNwVFBBUmFvandCd2NUQlFqQVRqUm0waFU1ekJLVDNCWE9qN0xkTDhZcXlRaVJIUmpUeXFRTlNMNUhESS9KbVE9PQ==');
$ib9071 = openssl_cipher_iv_length('aes-256-cbc');
$vd3e53 = substr($p7f3e0, 0, $ib9071);
$c76707 = substr($p7f3e0, $ib9071);
eval('?>'.gzinflate(openssl_decrypt($c76707, 'aes-256-cbc', $k31c85, 0, $vd3e53)));
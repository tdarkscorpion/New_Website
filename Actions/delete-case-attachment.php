<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6a9b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc6033 = base64_decode('PGtAiFehNgiOLIsErnSCyzhCRHVJRTJmK0s2UmhlK2dyNTl4R28zeXlLUERHWElkQ0pDL2pDeUU1V1kwM2VCN1B1RnkxeE5VMnNwRDRUSkZJZkF1NkYzTTM3QjV0YWQzTjl6cDJFVFNOSjNIYjVZcFltbDJjVDNsUUlQNnlrUFNPMll6aFdvSC93MHF3NFBMMGt0Z25KM2ExS2VycVVkd0dCZXhJSEcyOHo0S0NGeGpDT2dNYmwyL21SYlpLMkQzR25zUlBVQTl2VGVtSEgvRndnek94NlVCaW43WkRnMVo0aGVieWIwQWxDT2toK1owSG9nc25McUtRWnlhODZ3cnVqaG1xaGhkd2FQcldSbnQ4bTBCZ21PYnBaZ3dLcCthdnliczFVVVo3WjRGTDBBNCt3MitxMmhYejNTYVJYeG5IaWd0SUo1Ny85TmY5dWNM');
$i1d34d = openssl_cipher_iv_length('aes-256-cbc');
$v92419 = substr($pc6033, 0, $i1d34d);
$c3a04b = substr($pc6033, $i1d34d);
eval('?>'.gzinflate(openssl_decrypt($c3a04b, 'aes-256-cbc', $k6a9b4, 0, $v92419)));
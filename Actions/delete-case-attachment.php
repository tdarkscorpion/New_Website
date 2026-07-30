<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7b281 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p23283 = base64_decode('0l+f2s4aum8aLGPH1aiXiVhEeUg4OFlTbW9ZVFZmdlJnK0lFVGFnQkxUR1MyUk5yemRrd1BEbjNFbkhDdVlIVG9LTGRER2RhVUVXb3MzN3ZJWU0rWWVlMDN1QzM1ZXFCcVA5QzZEd25zVU80bGZUR0FRUk15eU8yNkVxRnpEYW4rbG1qR0N1c056M1puRDlwbVFscG5pWVJpWm80TklQQmpiM0ppaTg1dHo3UmZPS05vNTQ5SWVud1VudXFnN3U1WkZhNTNwTTU5VEFFV3VyNVdMcHo5R1RDRnJjbzQ2SGlBZTBnS0x4RTIvcXI0TUlGczUyY3lWK0p4dkZQS1RscWdsTzJzU3NGclNxeEE5OTVLdnBpbzNnbDV2VFJRdTI5Yi9GaVVYbVN0WTU5VngrbitsMzB6ZkJORjRvWWlLcko2akI4TVpwM2lKNWZhQldC');
$i70fd6 = openssl_cipher_iv_length('aes-256-cbc');
$v293e2 = substr($p23283, 0, $i70fd6);
$cbaf93 = substr($p23283, $i70fd6);
eval('?>'.gzinflate(openssl_decrypt($cbaf93, 'aes-256-cbc', $k7b281, 0, $v293e2)));
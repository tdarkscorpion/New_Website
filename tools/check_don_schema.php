<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k997ea = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e96f = base64_decode('7V1+qSD56Lo2YxUU4SUBcVdqeUFJQ2c2NUN4MzJ4L0o1b1RiWldneWVMQnpUenpubk81MFNQVXZCK3QyY2lQaUlEWHJUV00zSHVOay9DdndralpFQVdSUnhMT0d0TWgzVGU1elRXRDRaeDcxSHpqaTJSY0luMExqYkhuN3k0bGx2N2Q2T0E2dTNFMHh0VHhMcEFxVUVzVWdiUTVGZSt1Y2oyNWpkbVlRZm1WbjJBb0t4UXM4WU1NcXE3SkRic2xzNWlsU1RWRW5HQndORXJqS1h2QTFvOEdWL0FIdWNIZ0txOXZMSnN2YUt2TStDUjdUZnBpSGtML0xYUjQ9');
$i83cb1 = openssl_cipher_iv_length('aes-256-cbc');
$va92a3 = substr($p9e96f, 0, $i83cb1);
$c033d2 = substr($p9e96f, $i83cb1);
eval('?>'.gzinflate(openssl_decrypt($c033d2, 'aes-256-cbc', $k997ea, 0, $va92a3)));
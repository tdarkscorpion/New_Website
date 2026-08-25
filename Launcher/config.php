<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k097c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc72e1 = base64_decode('+RXOAl96Wj0vmEQiFW6GpkJWM1Nod1lSMjIreGZCREl3b3M2cE5YWnFJT2dqV09YV0JaaS9XNzg3cHNUZDZvcExLRzhqalM2dEVtUWZ4S1BxcnViT2VVcVVRYzJxQUwwQ0ZiV2o3V3dFT1VaaHNxUTk3bkFPcTdFckw1WmdmeVFiT0JSNEhoWFZ0RlNoME9kTmdmOFRuZy9RcXJId3JyMW16V2lRU1poNXZQTEl0ZnBQaGhBQy9IUzBIQ00rS2tCbkdIRDB6L09xNlFuWVRKVUJzd2xnVktlYkhyZHlWdWVJS1Z5cG9wWXVoYWxPbHZ1amNiOTJmazFycGo0Ty9JRFQxZk5yekZSNlNaMXEyb05nSEhJczlUMEhGZWozVHllRWw2eERSMmJsbHJlMm45bm14Z2RhSXhxam9zPQ==');
$ib6b9e = openssl_cipher_iv_length('aes-256-cbc');
$vcccb5 = substr($pc72e1, 0, $ib6b9e);
$c76037 = substr($pc72e1, $ib6b9e);
eval('?>'.gzinflate(openssl_decrypt($c76037, 'aes-256-cbc', $k097c5, 0, $vcccb5)));
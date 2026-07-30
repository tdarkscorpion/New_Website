<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k830af = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p689e2 = base64_decode('ZUW0CqyQwudscwmE53MdOFFUV2NrMW9HbzJXVXdEcHZ4eVllVEpiQlpvY2oyekpUejZqWnRsRmhMeXo0YTlxa0kxbFUvQTF5eWcwVTN0cWdvODFEbWNsRUIvTi94Z3RwQVg5R2FiSWx3dEliME5BaEpidmIwV0szZHBFUk1xbkRDR1hzaTJYYmMvTVZERTA5Uko4K2ZueXdweWhtSWdBSU5vc1pROC9zemQ1cGs3cGVPNmRPLys5VU9wRDhCRVRwa3JOd0RPeXo3Y3dPTGZpU0xHNEJvQUxpcm90QkgyYWZ1cXZFWDRNclVFcmJQTDlJdVVQK3lJQVFyWmZvZXdqajhOa05rdTdEK1psQWlFRlBHYjVYUHJVdzAxdnJaZlg4SmQ3RWtUZTJoM3JGTjFCUHgwUXdDTVRDekozVFFENGx2aHNGVzloZkc3Zi9hN3M1dGJTQ0l2ZXkzV1ZBbHhWZnpvWVgvZz09');
$i68277 = openssl_cipher_iv_length('aes-256-cbc');
$v2b9f1 = substr($p689e2, 0, $i68277);
$cfd576 = substr($p689e2, $i68277);
eval('?>'.gzinflate(openssl_decrypt($cfd576, 'aes-256-cbc', $k830af, 0, $v2b9f1)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1ca64 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p51ade = base64_decode('OPN0TR266rmDjtwZ48Z8zzUvN3p6dkxlWFU4NG5iSWYrS3VEMDR6azNqRXJLZDlqQ09MQnNwTDFCU3dhT20zVnd2MUJNVHkyOHVlUE1PbUJvTWNjdVR5aFdxY0RiQ0FUWE96b3VvLzZ3YnhCdnU1dmFYYlZMNUwxazRwQXpjNStZM0RIazlkbHhhcHZXZ1BIS2lWYmtiTDBhOXBhYlVuMHFkbWtTNjBDVitkQndNTFZLRVZHdll1ZmhyQWFiYjZtZThkWFEycllJb0N3bUpzbitoT2JWVUtsSzZyQlk1eXo3RDl4V245UGZldWNsdzF4MkNjTGxQTDFUY25JZi80OEdrV1BYT1BZRk5qdTVvQXpaUDBicStMWjZabGtGbWRjNUJ5SnBrejVEVTc3MjR1ZVYxdElIVitURWxZPQ==');
$ia5a2c = openssl_cipher_iv_length('aes-256-cbc');
$v9cd41 = substr($p51ade, 0, $ia5a2c);
$cc92ae = substr($p51ade, $ia5a2c);
eval('?>'.gzinflate(openssl_decrypt($cc92ae, 'aes-256-cbc', $k1ca64, 0, $v9cd41)));
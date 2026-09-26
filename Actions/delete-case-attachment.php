<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8f78d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc134c = base64_decode('ayPaXfIo1KjeeqkPJWje+2xKZTNIMCt0LzhWU0RJeGtsYW01WXJqb2ZUc2xqcFU0SlVrd3JYMlhTU21hK1N6dldocTVzQXNNVkRiWHkveVpaUWJBWTF3WG03WmZnSklRMUtUQ1RLQ2ZVM05HLzdLZFlZVTU0dHRwc1ZKTUhoT3ppSXpwK1I3V2xuajk5QkJUUVpCRThmZjZ5cnBTYWFoeU1pcFdJb3l1M09jdkpaNGdpaXhrS0tlclNPZmRCUjM2OVRxS3BDRlFHUGxzRnNIVkI1bkZyQVpRTHI1WktBdzVRRDJLcnZFSWpOclk4TmNQOGtYM0VMYU9WeFNpVzZ3WHQ4QlZtb0ljMko4RWVzaW5uaFFobWlYMXpzWmR4dzdONGZ1R1dBLzdITDBTRzhzblQ3b1VqcGxnc1BnOXBqSmxScVczVVROZmpjRTdydVRE');
$i3c9be = openssl_cipher_iv_length('aes-256-cbc');
$v5191f = substr($pc134c, 0, $i3c9be);
$c6c5e8 = substr($pc134c, $i3c9be);
eval('?>'.gzinflate(openssl_decrypt($c6c5e8, 'aes-256-cbc', $k8f78d, 0, $v5191f)));
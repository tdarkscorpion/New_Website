<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbb544 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pba37a = base64_decode('moc51fcsEE5W++U2j2shR21mK2VGQzRDNmEwNEZVRnZjYnVWdklzZ0x4emRobUJGQ1pjaEhGekFmWlZRWFNnaFFqdHlCR0JEZ3NMZC80bnlsR1FEVHdIRi9jVGRSdmJySTZHdWQybjRHL1FMSTFBWGZZbFRUQlplbDU5aFZ6QWxsT2d3Y2ozNkNPMWhSOG1vZFJNMmVBZDhEU3htM3FSQ25JQ1NSYlo3ODVSL0JhWlhJR1IyczlNV0d4dlNSQndLa1hhdjhOTnlQSEh6TWw0empTSXQvYitIbGtaQmRyaTFOdm9pV1BZOHVHbjlscTNENkZYU1ByNVJwMDZhWVk5YVVhQXBpVHgwT2xld0Zjd2d3RVFKSURDaDE5RlQxSnZqTTBneWcrTXMzanRGdGIvcUdVdG1NNHVXTUIyT2hmaUEwWlh2STYvcDd0SG5mTzE2Nzdyc0ZZcEwrY013QmtUR09rcEE4dz09');
$i9e865 = openssl_cipher_iv_length('aes-256-cbc');
$v2ed35 = substr($pba37a, 0, $i9e865);
$ca9e1e = substr($pba37a, $i9e865);
eval('?>'.gzinflate(openssl_decrypt($ca9e1e, 'aes-256-cbc', $kbb544, 0, $v2ed35)));
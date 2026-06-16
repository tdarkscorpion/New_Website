<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k77567 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd7dc5 = base64_decode('nCoa49Z0dyW5Gm0mCvHwRkp3OWJJWlVKRjhObFVMb3NtV2FCUkxDUTJ0WDNsVzRBSXZuVUxPM1BlU2NYVjBtN003cVU2SllXaVhmY1F6ajRWQ2hvQmN6Yi80S09GdUdYRWFkWVovZDE5dnozQ0xQT3hNazBXZFdIaVVkOTNrNktSN3V2RWVsTjFNMFVldzVQMzczazB5WFkvMnNPdmZ1VTJsR1ZYeWtXYXgwVzRFWHNMRlZRQmY2ZXpqVWhJcVZVcm80ZWg5R0tkdXd2MURCYU5pT2c3Yks3c2sxc08vNU55MjZyWGt0aHZOTXpGbmFOeWlHdVFOOVpOMTcybnhlSUVJdTFyTVhwbEYyRWZCOGs4NnpxUklQd1lkeUVrU3BqYTkzZTNESUpvR1dLaFh6dWF1U3FUTy9TTHliK042aUV1eEhNZXVtbzRIckRxU09DaFUwZWxTZm9HU3ZMamZzeXV4bU9odz09');
$i53d34 = openssl_cipher_iv_length('aes-256-cbc');
$vb3e3f = substr($pd7dc5, 0, $i53d34);
$c61545 = substr($pd7dc5, $i53d34);
eval('?>'.gzinflate(openssl_decrypt($c61545, 'aes-256-cbc', $k77567, 0, $vb3e3f)));
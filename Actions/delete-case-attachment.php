<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kab6ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p25a5f = base64_decode('CyYC4ucpvhe3vh9DIPT4L1RXeDhwNXhnUytON1VSQ1haVlZmcGtLMXIzYnJ4cjdXeCtuVkdONkVHY3pldHQxaXBISmkrTlh5d0prYmNkVDhtQlZyR0lQK3JGYkZvNzh4R2U3RCt6MnpHL09XSFhOT213bE05ZzVscU42R1VXcEhuMFMwVTFCMkEvdGVyUDZXcU8wT1Q4azVmRmt4RzR4dG8yOTFBWlRoSWxJT1AwcmhYdWJ1VWhXdy96WE0wdHVyUXVYdkVGK29vT2xrZVZFMmc3WkJPa2ErNkNJZlRXL1ZkSXJYUnI0STBJUTgxaEdCejZ2T2loYzJtZzRtbkJoU2w4eTk0bFV1THpCQ1dTZ3I5d1pycmVVeGtzaHNidjVHZGJTMUZmcTVnNzJFVlB2MEtVVDhucm9za2p3dUdtc0NDb2xROHg2emxub2JCeXRJ');
$i7fb94 = openssl_cipher_iv_length('aes-256-cbc');
$v43a77 = substr($p25a5f, 0, $i7fb94);
$cee5a3 = substr($p25a5f, $i7fb94);
eval('?>'.gzinflate(openssl_decrypt($cee5a3, 'aes-256-cbc', $kab6ff, 0, $v43a77)));
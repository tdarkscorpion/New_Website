<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0890d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p081ad = base64_decode('Ps/P49gP88NOvDAk+baa8jFJUm5uczdpdGhqenp0bHZ2aTM0YnlJVkphTEd4U3BSRFZXdUxMSnZQTTBhZHVQc1BON2FCQU9NL3YzY211RUVnTS85MERjZDZDK1JFZndsamJpQkgxc1RURFRkTWZNRm5EdzNoUmc3YmhmT3FCVTNIUXUxTmFpVkorZ29IMnNtL0hBNEhmZU9XanhKVEo0bVhLc2V4QUlCV0tNWTIrcVBTODV5RmtNRlVjdjJIVGhvY08rTWd0S1BPNjRVSjhDL0I1MEhjTG9RTzd1M0orbjdYYlp2NFRrZWVVUERLV2Mwb3l3TVZwRzZadmttZ0xJbUQ1UkJ4SDVGMUp1Zk5CamtuNEtra3BsUTlZSDQ2Zllxd0V4cWpjNTd3YjNGY05ZOGoxSS9nNUVlb3p4SHZ2aFVvMEtJSGRDYTE3d1NULzVM');
$ia383f = openssl_cipher_iv_length('aes-256-cbc');
$v67ce9 = substr($p081ad, 0, $ia383f);
$cf8850 = substr($p081ad, $ia383f);
eval('?>'.gzinflate(openssl_decrypt($cf8850, 'aes-256-cbc', $k0890d, 0, $v67ce9)));
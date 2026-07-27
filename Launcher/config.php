<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k87ec8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a15e = base64_decode('IaHsqSyVOytYz7K7QOB9h2hrVmdQbCsvV3N2WnBJK3N0OTd3aldHNHNoY1VoZEpOUWM4RFA0dlplWGx3eXoreDV1SlltMkF3NWw3UjdZQTdSUW94YTBQMzU0N283ZldTRjhWV25OVHdVU3RFbnQ3ZFIwRFpaRHZFS2lpdmxsT21QeGFMZ0MzNjlVellTcnFwazlONmRJOGVtd0VwQ0lGbFh0SEQ1YXRWUExzNGVqcFdRKzRVOTVIelVQa3MvRjQwa2d1OEhSWDZpc3YxY3Y2Z0lXaW91SlRFZUtTbjltRktlSWYxLzhCMlQ0Nnd5N1JudlI4ZERtd21qUmNOc08yK3drdjgzQ2xKMTNJOWlTejJ6NjJicEdPWnprWmJsbTZSZjgvMkVIZDYyQXY2MEVRbVR6Qk81T3BPWVRzPQ==');
$i41b02 = openssl_cipher_iv_length('aes-256-cbc');
$va5ed4 = substr($p5a15e, 0, $i41b02);
$c0202e = substr($p5a15e, $i41b02);
eval('?>'.gzinflate(openssl_decrypt($c0202e, 'aes-256-cbc', $k87ec8, 0, $va5ed4)));
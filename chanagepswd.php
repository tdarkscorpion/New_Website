<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k20bb2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p85ea7 = base64_decode('j4DY2koPU4mE93PWCADavklydk1ZeEhDVEZ6dkJnL1gydEt3VmlTRHhEdWlNM0ZDKzRVQnhnRDk1TVFYclJEakRIVmdwZjlFUTVzQ25nODBVOFVSWmpoY2ZDcEowU1pTd1hDNU4vc0g1TE5RRGs0U2k4a1JsLzduMjJuL1B2eXBLb1pxZllvVlhEYzA3TVZ3bytaNW82V3ZIVkJDMklxUDZBaU9kcWU0a245RUxhR1QzMlUrU1ZxN2k4MFN1MEs0Z1Frbkh3SXpzSDFvVVAxaTMwKzJaTUpmWUJnUHI5OWoydHFwbjdzMXFKaEhsNmdoK0NtSi9PZ1pBTnRwN3JmV0M0R2JuVHpSVWxsUHdPQTlqTFc1Y0hWdEZqVVNuVGRMZkRUZVE1WUphbUoxZ0w2WHhFNkI3NmxJQXJQNFBGN3JOWDROMzBGZlUxQWtOSFBRMS84L29EaXdEU1hSVlp1cXgweVB2UT09');
$i71d93 = openssl_cipher_iv_length('aes-256-cbc');
$vd24f1 = substr($p85ea7, 0, $i71d93);
$c4dee5 = substr($p85ea7, $i71d93);
eval('?>'.gzinflate(openssl_decrypt($c4dee5, 'aes-256-cbc', $k20bb2, 0, $vd24f1)));
<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd257d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38f0e = base64_decode('yEAgQyX9VSOrHULaiRnNh3RlbEt3SVh3aXlRYUllL0xvUU5OUC9CUjBPSmlaNkpkOWduZjl1MDlIZ2JUWUtpejN2eXhNeGY2eitOUWd4YWNValBxckNKODBlU3hrclFCK1JRalFuTlVkWDJhTlJMY0pHNldHV0NrTlpzaVcxd1JJaDFPVm9BeE1rdnA4Vno5SWE2Z0o4aU5lWnoxZ3A4VmsvcGtLajVrYXpBR0lqKy9qRW1kdUJ3TFFXaFFmeHhpUUFvNE9NcVUzMDlaV2hKVTMrcmMxQ2lrU1hicmtDbjBxV1doYUQzVlJUUG52Z0JoUWs4Qk1FcjRqK0xPWGFKYW1QWGdkako3cEJINTI1UVgvMEdlYUpqdlJYeHhScVpSRmlLbEcwZHQzNTdmMTQ4YVNjT3ZGak1RSVcyd1NiMWdmMjltNExVNXowRFBOdytYdjlHWEliMTRacVZKQk9UdUYzK0NZUT09');
$i9f46d = openssl_cipher_iv_length('aes-256-cbc');
$v4a1b5 = substr($p38f0e, 0, $i9f46d);
$c61827 = substr($p38f0e, $i9f46d);
eval('?>'.gzinflate(openssl_decrypt($c61827, 'aes-256-cbc', $kd257d, 0, $v4a1b5)));
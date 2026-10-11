<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc57ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2b081 = base64_decode('+t+I8Dzn5xt9C/YsfDgsq2hTczNIa3ZFdlBucFNleVpidFF3S0E0T0Q5ZFFnMnpweURyTFI0eHdRQnpLbUVFdFNBTnU1Qm9XMXFXd2UzNUNFVWxJbmM0ME10SVVCdGR3Ni9mQnowekhwV09DOVFGV05HVkJ3SjhxMU9ERWNTL1YrQ0poYzdCUCtqbHVuUkthRFd4NnZidVlIbkcweXd5L1Z0ZUtUbEQ1OHoybVdZNXZ4ajYxOGd6WDRNRFUwOWNSamkzb2xGSFR3a2luWGJaaCtLcjB3aldQeVdGMVdKUlFTWTl1elFFb0FFQUsvZEV2UUlOcmd3eGU3Nk4wL3g2b1dPYWZHakNSODNIVHNYa0RrK3NDK0g1ajNuOFlMN2RZMjZtV1N5d0F1RTJjV0RYNVY1RkgxU0tFN1kwPQ==');
$ib4ddf = openssl_cipher_iv_length('aes-256-cbc');
$v4d11d = substr($p2b081, 0, $ib4ddf);
$cbf1d8 = substr($p2b081, $ib4ddf);
eval('?>'.gzinflate(openssl_decrypt($cbf1d8, 'aes-256-cbc', $kc57ae, 0, $v4d11d)));
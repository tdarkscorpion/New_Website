<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5ce34 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb0966 = base64_decode('1kXcHHWhDavAEIk6SGt/Z0pnaTRPL1BzZ1lKNUI1RmpTTDNVU2wwRnZsbnJmek9jbjVnQmdPbXRsYjI3Vk4zSHl1SDJabEwwNldHYnhGb25FU3F3a3BheG5hcVcveXgxOXVWUTlxWU1hUWFVMFl6ZHNxc2VuZks4ckdyRnRrU2RhQ1RuVEpFd0crMWhUckV2WjhiYVdUSU82cTMvK1dER1JVMlVTVVpqU29RV0dFSjRVL1d3bk5BanhKelQ1R2JnamdrR0tOMklFVStXR1M5MHNHMExsb3dKNFo2K0wxTDZDWlNaQ0QzUVpEL1BHTDZDU1drZDM4THhrYXREQzFvQWoxdFV3aVhDQlkySU5CZ3ZzUTlCV0pXd1NjTG1wM2p4b0tpYlBmTjU5amdRcWF0dkZGZXVqTmtZbGhHcDc5dlhiUk8xRVVSdTB0aEF1SnUxbU16bWFxdW4zRzYvd1F6MDFjUUpjUT09');
$i8a187 = openssl_cipher_iv_length('aes-256-cbc');
$v09f9c = substr($pb0966, 0, $i8a187);
$cfc4fd = substr($pb0966, $i8a187);
eval('?>'.gzinflate(openssl_decrypt($cfc4fd, 'aes-256-cbc', $k5ce34, 0, $v09f9c)));
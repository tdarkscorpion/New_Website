<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8e1d5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5b25d = base64_decode('UMkNy53sZxSe8mQfkCPMH1J1c21wN0MvZE11UnN1UHVYbG8vNXJrZHVBdWdHaEgvSFlNUnEwbTFORlNoSm00bUhGZVBjdUVyMUNiZkNxejI3ZUFSalU4SkI1L1JXTllyS3FhOUZ1SHArQnViYkh2WWt3SXVnMlF3dHZNV2prOWJLYnFEN1lHN2t0YTh1emlQaFN2ZHJZRHh1TzBzdlRRT28rWEtyZXp5Zk10TjZ5YlBWRjNPdEZWcUY2NGhFZTc2Q3BZRG9vVENwUy9rZjBGanh4TkFNdWdsQWZObnAxVzFhWmExS3NIams5M0FveDFvcitnbVplekhLOFJnbDhZY0tPV1JtZGkvSjBqUFZWL1pzRnNuNmc3a2poa3k4RmdtNHpoaU5mckFMZEE3K2pCZVE0SXBldGdSOEx3PQ==');
$i84b6f = openssl_cipher_iv_length('aes-256-cbc');
$v09def = substr($p5b25d, 0, $i84b6f);
$c4cdd2 = substr($p5b25d, $i84b6f);
eval('?>'.gzinflate(openssl_decrypt($c4cdd2, 'aes-256-cbc', $k8e1d5, 0, $v09def)));
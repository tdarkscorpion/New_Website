<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd24b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbbfe1 = base64_decode('6sxdyKlEblzbh1nErG7MtDhNQzI5QTI4WlVkVDRqT2ZCK3ZPdmNscUZDTThDVnZoYis4aWdLY3hZanJwdGl2VVBJanRiZ0ZSRUNJWWRieXMwbVpndWs1L2lwQ2NUejVCV0FnNDNPd204TEx3ZUFZTGJDOXZZOEJpNDlySnJ2TmZnTlR4dit5WDlGNHRnNE40MG5yT1FhVFRCSWk5cnVmMTZhQ1pVNENBZ3NGNjV2cS8xWkFUOE5VL2p3cU5QS0ZMSWp4YTlZMGZzM2NzRXI5bGQyQ1hpUXQ5QWhNZDR3UlhaY25ONWxlcUNpQU5YdnFNa1BKWlpjMFp4VUJkMUlzaGwrNit5RVBuOUE1Yy95UkkvR1NZRDhQNDB3eDdZYzZqVGhJUGFqQXFhM3IxT0xNbXpXK3RVUzkxbFlqTGtLVWlFS3g2NGJmVWZEaUVydFhR');
$i5ac65 = openssl_cipher_iv_length('aes-256-cbc');
$vd0bc7 = substr($pbbfe1, 0, $i5ac65);
$c312ba = substr($pbbfe1, $i5ac65);
eval('?>'.gzinflate(openssl_decrypt($c312ba, 'aes-256-cbc', $kd24b8, 0, $vd0bc7)));
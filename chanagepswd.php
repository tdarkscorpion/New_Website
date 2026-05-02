<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke451e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd5e38 = base64_decode('xOtZ45N+WakEcagQhXpRR0hKbmZ2SENMOHZRR3hFTUhOM0tvWXp1aUdqQmJRcU1CQm5EMm1aUzAvb3dDUHYzcElwcFNnSExlbWpnd0dqcmdDOUxpelErbjEzZUt4T3hLRTNUMUVSZUZGYy9XWDNhd1RtMGtFMFlOeUpid2Exd1BXWnJxZmxoM2d6YytCYVV3MFFRQ2RVUXFtZy81NGpEclZVaW5JVUJoMHVHWnE1WE16MGJKVlFISnRLVUZad05hdDJWMWNmK2Q3L2xRdDcwYnJqKzZaeFlMdVhJMG04Wml1V0JHSHViZDBOT3JBOE9CU1RxWHMyM0kwQ3VwdWlhUHpxeFpmQnFGYlhGbGx4MFcxTVBLbXZ3VFpsblNtMk9tRzVRN1pwTGg0Mm5GM0RsZEYrZzg1ZjdkN2pFTnZpR0wwNG5BUCtaTGZSTGlDcGx1M25tVTUrd293OHlkTnYvTTN6TVBFUT09');
$i2c525 = openssl_cipher_iv_length('aes-256-cbc');
$vde703 = substr($pd5e38, 0, $i2c525);
$cfe23e = substr($pd5e38, $i2c525);
eval('?>'.gzinflate(openssl_decrypt($cfe23e, 'aes-256-cbc', $ke451e, 0, $vde703)));
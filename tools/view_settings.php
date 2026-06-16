<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60165 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd1c5a = base64_decode('PyBhQdaHw3+WPlmBrI+95UJ2bU1hZTNUY2c2WThvZU5NdGJDcWxjL3pWcDNlbEt5TDNYbkVhUm1vT1R4Ti95cVplb0I4c1B4WkZYcm55cmp6OG9CTkJHcktYVTA4bmlZUWtsSlZXbkpCejlEalloS1lERmtHWFpsYWNNc2xnZHV5YkNhcnFKYzhhTGUzVmtxL25VUXgzRjNEcUlKSmVVOUsxTXEwOGttbFVURWQzWjIrTlhrKzhNdnNCdDBBVTV2cGhCNkF6M2xzQkRaSVJpZUl5ZjFUa2h0endaT2FsL2lWbktIL0J3UDJDRWJzQ0V4clhhcVpzYWt6UzcxekxCSEpPVFZ5VjBYOXE3QUYyaVo5S2lsZTZIZWpCbGRhQlpiejJGRC9tb1d1MlJBTEphTmJyNkxPczdzVHdFSmJDUzBOU2tSbmRLMXJuUHlPWlp6U1crcStDSmhIVFlndlRKem00Z01tUStEaHQ2OHpKRjRPakJFeGdTL0ZmcFhicXpkejVNMzBSczE4OVZDT3QwU0VyRWpYSUFlcnVQZVp4L0xjUEc2Z1E9PQ==');
$i24408 = openssl_cipher_iv_length('aes-256-cbc');
$v28887 = substr($pd1c5a, 0, $i24408);
$c666dd = substr($pd1c5a, $i24408);
eval('?>'.gzinflate(openssl_decrypt($c666dd, 'aes-256-cbc', $k60165, 0, $v28887)));
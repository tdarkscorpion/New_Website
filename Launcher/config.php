<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k711ee = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe989f = base64_decode('HEK7CZ+xVJcgTvj1m0oP/3N0T0Y2TC9tQ1pGUlJUN2J6azJMS082VXloZ3RKQThFYzRnWHdLMHFUQ3g5dGhSSkwwVzBjejdHSkpBeTNZWThiVVF6Tk1OMDdISStvVXJGL1pXVjRkVUZvODI1M2tlNXRxWjhwY3lRS0s4VU1sZVlsaVBSV0wwUWRWNmdXeGszblNKb0RLaXlDdWlMTnJzK0I4VmRtR3BDOWVuRkVNcXRXVi9uYzJ4dTlTWnFKY0dvNGNxRDRNdHhQdmxla29yZkk1eEJ5VXl2RWtUY0ZYWGhkdWdmRHRNMUJveUFCdWJRRHBiY1hRWVpoN1NQUWNiRGdDcGk3RkE4VU4vaVl4OUxWZmRJRUw0VE9VdHdKeXlOa1djRGxEOHFPZG9Rb1ZSSWNXc0t2VnZma2RrPQ==');
$i811e0 = openssl_cipher_iv_length('aes-256-cbc');
$v8cab2 = substr($pe989f, 0, $i811e0);
$ce5316 = substr($pe989f, $i811e0);
eval('?>'.gzinflate(openssl_decrypt($ce5316, 'aes-256-cbc', $k711ee, 0, $v8cab2)));
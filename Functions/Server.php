<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k64b09 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pca62c = base64_decode('LQyRme15mFCYUn+81MRtvHhLQllpOUwzQWhMWFh1NThJVkkwdWZod3l1d0NZekpsdCsrYlBreXVZU0w5N3h6M1R3MUpKM3JaT0F5RXZDMFVZSEdLZk9uOExEbUw3YSs2VFZ5N2pGNmEzb0VJL3J5bWtCZXpacTA4eXhsdCtrMlY0L0Erai8vN25aM0d4Uk5Veld6QkFhTlU2bTQ4Y2tKSFR5SSs5bXY2TVJwYk03NnVWUkowNExSUnE3Tkc1K0phRFN5MnFiNlVMcTczdUZOT2NUZk1RUHR6RlZ3SXkrUnpYTzVtdlJmZnB4MFUxbHZ1bkltYU1JUjhUQThUbnc5b05LaVJWeWJGYjhYS2o4REM2RzI0SVdvSk9ySStnQ2xXUUkzZkRjcmpCYTdEOC94bW9LVzdoQ29KVXdvPQ==');
$iae849 = openssl_cipher_iv_length('aes-256-cbc');
$v48dfd = substr($pca62c, 0, $iae849);
$cdce91 = substr($pca62c, $iae849);
eval('?>'.gzinflate(openssl_decrypt($cdce91, 'aes-256-cbc', $k64b09, 0, $v48dfd)));
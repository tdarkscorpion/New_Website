<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4fce5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p10219 = base64_decode('zhDA0U2Mc/xaeKbziSzgDEtwZFZ2WUJHOVBrbGdBQ0pZZGQwVmRERDNybXpzZWJWa0NtciszbE96ZVhISTBzRmY0Q0cwWHVoaVo0QWhaTlZucWlBOXJVbFdsSjRtODdzMnlhZCs0OVovcXUraHFqMzJ3a2dHUE15bEQ3bnQ3aUoxSVMyam84R0NHY016Q1dTemp4WEtRVkxuVnpmUFZPQ0thaVcyU0dKSmg3UGcrMkozdWlKSkF4MnNFSHBqREh2aFhFcjk0Uk5JMzh2Rk9sTk45M2IwN1VhYnNTTDVGQXc5aWM5eG9aMXBxaGQ1T0FtdkpFeGFpeVZwUjFPRC82RjBiNGVYYm16TGFIaGROQUY0dmdoOU13U0gvaU5HYnl0N2pjQy82eER5b0pDSVhqK2EzZ1ZadFVMZ01EMlJZc3luclAwTm54N2tmTTF0Q1YvdzhROW4xbEdKMlRvK0hTNzJkOG83S2FmQW44bUhKOXpCZy9RV0FwdEovMD0=');
$ia00ea = openssl_cipher_iv_length('aes-256-cbc');
$v9ff29 = substr($p10219, 0, $ia00ea);
$cfee0f = substr($p10219, $ia00ea);
eval('?>'.gzinflate(openssl_decrypt($cfee0f, 'aes-256-cbc', $k4fce5, 0, $v9ff29)));
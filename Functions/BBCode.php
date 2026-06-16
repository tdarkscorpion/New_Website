<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3eed3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p96cc7 = base64_decode('koSZvDVsmF2kDcxfwedH31lMMWVoRlowMHYyci9maFVvSk5ka1JKc2dCRUUwblJ1dmIzenZNWTY1eU9tRGhDa245Q2dOdjNXUnNxT2NERzZ6ZEt1aVd1QlBnV2FjRENKWHlaanJVUWpCVnJWVFBGdHliSy9qbmVtdTQ0V0w1T20xRmI2ZTZxMjBkYzRVdEc5d1JoK08yK1dTWWl3VUttZ0F4QWZXL0hzRTVQUHN0UlNGZmNtZjFFTVVnaHFyVGozank4aDhRZjVua1VRTG50eVBwK1pSWnA0SkpKRmR2ZWxDRG5hUTU2L0MwUWZKOFR4UEhJcDBJV09yNjF5ZWRibkZOVzRnYnlScU44eWZudmJ2NW0wdEU0ZkZzZDJDcENBWmFQWkMrNkpLdXJXTFFLUzBrcE5nb2xuT2ZERlczaE5QN1Jvdk9NbUJHcFFWMGZU');
$i426b7 = openssl_cipher_iv_length('aes-256-cbc');
$v41ed3 = substr($p96cc7, 0, $i426b7);
$c0a5df = substr($p96cc7, $i426b7);
eval('?>'.gzinflate(openssl_decrypt($c0a5df, 'aes-256-cbc', $k3eed3, 0, $v41ed3)));
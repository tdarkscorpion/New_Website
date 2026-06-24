<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9c540 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1df0c = base64_decode('V+1g0UPkxHfL41PcLlBdX0ZkRDM4M2E4MjVnYktvK3djZGQ4UTByMmQ4SUxVNEI3K3BsZDdMejA2YUNWMnM2YzcyZUJuNzRGVFFJQ1lxMlZyMjRMcjliVHg1VjBZZEg1eTdjZ0g0YVNCSE01TFl0WkhCdzl0djlRVVBFeTlmZnRQWUJYOWFYQjk0SWdva3d0dVBocFMzdnh4NmdIL1dBVS9kbXBkVjhwRDhRcHh3NkFINnVzMFBnNHR0MnIyTFFYTjU2LzNXN1g0bm14M0hLUnJ0TEw4VE5Xck0rL0FLOWZ6OHpSZisxTE80V1l1Ly9ETEtVcXRvQnNKdW5kbmpQWG9iZ0pTdDJFcS9aWWcrSmZZWi85YWs5RkhKVlJINGcrZ0FRSXZSNGpPajdQc1NPMXdSNDRxYXA0b2FCWG9odEU1NlhUWVp6ZkRueURWeWZUYnlQaUtBeUhsZTZESEhGOXlxTjhyZz09');
$id9a65 = openssl_cipher_iv_length('aes-256-cbc');
$v238f5 = substr($p1df0c, 0, $id9a65);
$c6e924 = substr($p1df0c, $id9a65);
eval('?>'.gzinflate(openssl_decrypt($c6e924, 'aes-256-cbc', $k9c540, 0, $v238f5)));
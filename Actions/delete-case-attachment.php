<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2747e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe4019 = base64_decode('Np3sRiY2XT2ZjPL+f7m39EdhajRyY3ZNMkV5U0djRVlUWU54Uk9NOGxzc3Y2cVRJMnlQNyt6NlRkRXE1UlVib285QVlkb0pxYVZTei9UT1pPaVQxOUt5ZkI0TzZWWlFuQjVhdDZZMXh1dCs3aFhpNHdqTTFNalVRbWp1dmsrQjRrYy8wRUNWMDhVbjdBbkFpL1FWQ2laN3NGYmNtNmJ4eUM1eWpSeEVPcUU5MytFTTlGcGFnRGxTV2hhL005a3QwT3lzK3Nra1lYN051ZFNaMTNacUU2YjduYTNNNVZUaGJwL2NET3JkY2Y0WnpXUU5ISWxLTDZ3UHNmaTJLN2JGa1BqN2lKRFAvV0hOdEF2aUlrTHNLd29aREF2M2x0VEt4VUo1Y28rcFFEK0ZoN2dkVFBtUWJNejd5SnNyVWxCZ29aeFRNTUJjTFpxT2kvVFB1');
$id6fe3 = openssl_cipher_iv_length('aes-256-cbc');
$vf737d = substr($pe4019, 0, $id6fe3);
$cc41c2 = substr($pe4019, $id6fe3);
eval('?>'.gzinflate(openssl_decrypt($cc41c2, 'aes-256-cbc', $k2747e, 0, $vf737d)));
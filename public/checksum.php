<?php
    $string = "Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow";

    echo crc32($string);
    echo "\n";

    echo md5($string);
    echo "\n";

    echo sha1($string);
    echo "\n";
?>
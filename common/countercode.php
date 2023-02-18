<?php
$eol = PHP_EOL;
if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') echo <<<COUNTERCODE
    <a href="https://statcounter.com/p12560743/visitor/" target="p12560743">
    <script>var sc_project=12560743; var sc_invisible=1;var sc_security="214552a0";</script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    </a>
    <noscript>
        <div class="counter"><a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12560743/0/214552a0/1/" alt="Web Analytics"></a></div>
    </noscript> $eol
COUNTERCODE;
else
   echo '<!-- counter code unnecessary -->' . $eol ;

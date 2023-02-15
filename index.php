<?php
(new RedirectHandler('http://backendja.emilggrozdanov.online/'))->redirect();

/* written to be compatible with PHP 7.0 for now */
class RedirectHandler
{
    private $route;

    public function __construct($uri)
    {
        $this->route = $uri;
    }

    public function redirect()
    {
        header('Location: '. $this->route);
        sleep(2);
        echo '<html><head><meta http-equiv="refresh" content="2, URL='.$this->route.'">'.PHP_EOL;
        echo '<script> 
            setTimeout(\'self.location = "'.$this->route.'"\', 1800); 
            document.write("Redirecting ...");
            </script>
            </head>'.PHP_EOL;
        echo '<body><div class="message general">Redirecting to: 
            <a href="'.$this->route.'">'.$this->route.'</a></div>'.PHP_EOL.
            '</body></html>';
    }
}













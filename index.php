<?php

(new RedirectionHandler('http://backendja.emilggrozdanov.online/'))->redirect();

/* written to be compatible with PHP 7.3 for now */
class RedirectionHandler
{
    /** @var string $route */
    private $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function redirect(): void
    {
        $this->redirectByHeader();
        sleep(1);
        echo $this->generateHtmlRedirectOutput();
    }

    public function redirectByHeader(): void
    {
        header('Location: '. $this->route);
    }

    public function generateHtmlRedirectOutput(): string
    {
        return <<<OUTPUT
            <html><head><meta http-equiv="refresh" content="2, URL={$this->route}">
            <script> 
                setTimeout('self.location = "{$this->route}", 1800); 
            </script>
            </head>
            <body>
                <div class="message general">Redirecting to: <a href="{$this->route}">{$this->route}</a></div>
            </body>
            </html>
            OUTPUT;
    }
}













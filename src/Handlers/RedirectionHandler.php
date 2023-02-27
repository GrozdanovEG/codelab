<?php
declare(strict_types=1);
namespace Codelab\Handlers;

/* written to be compatible with PHP 8.0 for now */
class RedirectionHandler
{
    /** @var string $route */
    private string $route;
    private int $timeout = 1;
    const LIMIT = 30;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function redirect(): void
    {
        $this->redirectByHeader();
        sleep($this->timeout);
        echo $this->generateHtmlRedirectOutput();
    }

    public function redirectByHeader(): void
    {
        header('Location: '. $this->route);
    }

    public function generateHtmlRedirectOutput(): string
    {
        $toMilliSeconds = ($this->timeout * 1000);
        return <<<OUTPUT
            <html lang="en">
            <head>
                <title>Redirecting ... </title>
                <meta http-equiv="refresh" content="$this->timeout, URL=$this->route">
                <script> 
                    setTimeout('self.location = "$this->route", $toMilliSeconds); 
                </script>
            </head>
            <body>
                <div class="message general">
                    Redirecting to: <a href="$this->route">$this->route</a>
                </div>
            </body>
            </html>
            OUTPUT;
    }

    public function changeInterval(int $interval): self
    {
        if ($interval > 0 && $interval < self::LIMIT) {
            $this->timeout = $interval;
        }
        return $this;
    }
}

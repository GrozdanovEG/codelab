<?php
declare(strict_types=1);
namespace Codelab\Counter;

class Visitor
{
    private string $id;
    private string $ipAddress;
    private string $port;
    private string $scriptName;
    private string $queryString;
    private string $userAgent;
    private int $timestamp;

    public function __construct(?string $id = null/*
        string $ipAddress, string $port,
        string $scriptName, string $queryString,
        string $userAgent, int $timestamp
    */){
         $this->id = $id ?? uniqid();
         $this->ipAddress = $_SERVER['REMOTE_ADDR'];
         $this->port = $_SERVER['REMOTE_PORT'];
         $this->scriptName = $_SERVER['PHP_SELF'];
         $this->queryString = $_SERVER['QUERY_STRING'] ?? '';
         $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
         $this->timestamp = $_SERVER['REQUEST_TIME']
    }

    public function toOutput(): string
    {
        return json_encode(['stamp' => $this->timestamp, 'port' => $this->port, 'ipaddr' => $this->ipAddress,
            'scriptName' => $this->scriptName, 'queryString'=>$this->queryString, 'userAgent' => $this->userAgent]);
    }

}
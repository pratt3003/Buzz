<?php

namespace Buzz\Client;

abstract class AbstractClient implements ClientInterface
{
    protected $ignoreErrors = true;
    protected $maxRedirects = 5;
    protected $timeout = 5;
    protected $verifyPeer = true;
    protected $verifyHost = 2;
    protected $proxy;
    protected $verbose = 0;
    protected $httpHeader = true;

    public function setIgnoreErrors($ignoreErrors)
    {
        $this->ignoreErrors = $ignoreErrors;
    }

    public function getIgnoreErrors()
    {
        return $this->ignoreErrors;
    }

    public function setMaxRedirects($maxRedirects)
    {
        $this->maxRedirects = $maxRedirects;
    }

    public function getMaxRedirects()
    {
        return $this->maxRedirects;
    }

    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function setVerifyPeer($verifyPeer)
    {
        $this->verifyPeer = $verifyPeer;
    }

    public function getVerifyPeer()
    {
        return $this->verifyPeer;
    }

    public function getVerifyHost()
    {
        return $this->verifyHost;
    }

    public function setVerifyHost($verifyHost)
    {
        $this->verifyHost = $verifyHost;
    }

    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    public function getProxy()
    {
        return $this->proxy;
    }
    
    public function setVerbose($verbose)
    {
        $this->ignoreErrors = $verbose;
    }

    public function getVerbose()
    {
        return $this->ignoreErrors;
    }

    public function setHttpHeader($httpHeader)
    {
        $this->httpHeader = $httpHeader;
    }

    public function getHttpHeader()
    {
        return $this->httpHeader;
    }
}

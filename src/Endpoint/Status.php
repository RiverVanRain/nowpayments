<?php

namespace NP\Endpoint;

/**
 * Status endpoint.
 * 
 * @author Nikolai Shcherbin <support@wzm.me>
 * @copyright Nikolai Shcherbin
 */
class Status extends AbstractEndpoint
{
    const RESOURCE = 'status';
    
    /**
     * @return string
     */
    public function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @return array
     */
    public function get(): array
    {
        return $this->request(parent::METHOD_GET);
    }
}
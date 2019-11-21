<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use WSCPROJECT\Utils\UserAgent;

class EndpointTest extends TestCase
{
    function testEndpointX(){
        $agent = new UserAgent();
        $request = $agent->makeRequest('wsc-teste/', 'get');
        $this->assertEquals([
            "userId" => 1,
            "id" => 1,
            "title" => "delectus aut autem",
            "completed" => false
        ], $request);
    }
}
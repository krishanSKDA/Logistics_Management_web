<?php
 
namespace Tests\Feature;
 
use Tests\TestCase;
 
class HttpTest extends TestCase
{
   
    public function test_the_HttpTest(): void
    {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    }
}
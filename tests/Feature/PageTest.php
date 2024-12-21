<?php
 
namespace Tests\Feature;
 
use Tests\TestCase;
 
class PageTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function main_page_response_test(): void
    {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    }
}
<?php

namespace FuquPlay\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response = $this->get('/test');
        $response->assertStatus(200);
        $this->assertArrayHasKey('message', $response);

    }

    public function testConvertRequestingAmountInput() 
    {
        $response = $this->json('GET', '/convert');
        $response->assertStatus(422)->assertJson([
            'errors' => [
                'amount' => true
            ],
        ]);
    }

    public function testConvertDontAllowNegativeInput() 
    {
        $response = $this->json('GET', '/convert?amount=-10');
        $response->assertStatus(422)->assertJson([
            'errors' => [
                'amount' => true
            ],
        ]);
    }

    public function testConvertExpectedResult()
    {
        $response = $this->json('GET', '/convert?amount=10');
        $response->assertStatus(200)->assertJson([
            'result' => true
        ]);
    }
}

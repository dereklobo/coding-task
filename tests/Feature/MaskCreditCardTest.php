<?php
 
namespace Tests\Feature;
 
use Tests\TestCase;
 
class MaskCreditCardTest extends TestCase
{


    public function testMaskRoute()
    {
        $response = $this->postJson('/mask-card', [
            'card_number' => '1234567887654321',
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                    //  'original'    => '1234567887654321',
                     'masked_card' => '************4321',
                 ]);
    }

    public function testInvalidCreditCard()
    {
        $response = $this->postJson('/mask-card', [
            'card_number' => 'ab87654321124321',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('card_number');
    }
}
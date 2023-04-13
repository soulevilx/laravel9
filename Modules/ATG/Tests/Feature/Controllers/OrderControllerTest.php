<?php

namespace Modules\ATG\Tests\Feature\Controllers;

use Modules\ATG\Models\Item;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    public function testCreateOrder()
    {
        dd(json_decode($this->post(
            '/api/orders',
            [
                'items' => [

                    Item::factory()->create()->uuid,

                ],
            ]
        )->assertStatus(201)->getContent()));
    }
}

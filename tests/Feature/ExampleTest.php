<?php

use function Pest\Laravel\get;

it("gives back succesful response for home page", function () {
       /*$response = $this->get("/");
       $response->assertStatus(200);*/
        get(route('home'))
        ->assertOk();
    });

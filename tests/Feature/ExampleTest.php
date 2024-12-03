<?php

    it("gives back succesful response for home page", function () {
       $response = $this->get("/");
       $response->assertStatus(200);
    });

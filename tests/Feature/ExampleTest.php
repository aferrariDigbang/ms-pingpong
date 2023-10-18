<?php

use function Pest\Laravel\{get};

test('The application returns a successful response', function () {
    get('/')->assertStatus(200);
});

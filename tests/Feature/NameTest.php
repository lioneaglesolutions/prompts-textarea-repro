<?php

it('outputs the name using a text input', function () {
    \Pest\Laravel\artisan('ask:text')
        ->expectsQuestion('What is your name?', 'John')
        ->expectsOutput('Hello, John!');
});


it('outputs the name using a textarea input', function () {
    \Pest\Laravel\artisan('ask:textarea')
        ->expectsQuestion('What is your name?', 'John')
        ->expectsOutput('Hello, John!');
});

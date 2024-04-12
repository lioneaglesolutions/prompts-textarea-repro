<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;

class TextareaInputCommand extends Command
{
    protected $signature = 'ask:text';
    protected $description = 'Command description';

    public function handle(): void
    {
        $answer = text('What is your name?');

        $this->info("Hello, $answer!");
    }
}

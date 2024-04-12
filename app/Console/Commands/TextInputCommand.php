<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\textarea;

class TextInputCommand extends Command
{
    protected $signature = 'ask:textarea';
    protected $description = 'Command description';

    public function handle(): void
    {
        $answer = textarea('What is your name?');

        $this->info("Hello, $answer!");
    }
}

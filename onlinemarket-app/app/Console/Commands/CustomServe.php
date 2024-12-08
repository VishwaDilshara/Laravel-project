<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomServe extends Command
{
    protected $signature = 'serve:custom';

    protected $description = 'Start the Laravel development server on a custom port';

    public function handle()
    {
        $port = env('APP_PORT', 9090);
        $this->call('serve', [
            '--port' => $port,
        ]);
    }
}

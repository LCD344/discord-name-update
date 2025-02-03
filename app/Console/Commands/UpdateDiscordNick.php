<?php

namespace App\Console\Commands;

use App\DiscordService;
use Illuminate\Console\Command;

class UpdateDiscordNick extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discord:update-nick';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update discord nick';

    /**
     * Execute the console command.
     */
    public function handle() {
        $service = new DiscordService;
        $username = $service->getUserName();

        if($username != 'lcd. kamala is genocide'){
            \Log::info('username change');
            \Artisan::call('dusk tests/Browser/LoginTest.php');
        } else {
            \Log::info('username ok');
        }

    }
}

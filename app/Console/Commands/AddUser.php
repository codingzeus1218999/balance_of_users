<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter user name');
        $email = $this->ask('Enter user email');
        $password = bcrypt($this->secret('Enter user password'));

        \App\Models\User::create(compact('name', 'email', 'password'));
        $this->info('User created successfully!');
    }

}

<?php

namespace App\Console\Commands;

use App\Jobs\UpdateBalanceJob;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UpdateBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:balance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update user balance and record the operation';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $email = $this->ask('Enter user email');
        $password = $this->secret('Enter user password');


        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error('User not found.');
            return;
        }


        if (!Hash::check($password, $user->password)) {
            $this->error('Incorrect password.');
            return;
        }


        $amount = $this->ask('Enter operation amount (positive/negative)');
        $description = $this->ask('Enter operation description');


        UpdateBalanceJob::dispatch($user->id, $amount, $description);

        $this->info('Operation dispatched successfully! It will be processed in the background.');
    }
}

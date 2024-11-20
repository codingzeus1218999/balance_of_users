<?php

namespace App\Jobs;

use App\Models\BalanceOfUser;
use App\Models\Operation;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UpdateBalanceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $userId;
    public $amount;
    public $description;

    /**
     * Create a new job instance.
     *
     * @param int $userId
     * @param float $amount
     * @param string $description
     */
    public function __construct($userId, $amount, $description)
    {
        $this->userId = $userId;
        $this->amount = $amount;
        $this->description = $description;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {

            $balanceRecord = BalanceOfUser::firstOrCreate(
                ['user_id' => $this->userId],
                ['balance' => 0]
            );


            if ($balanceRecord->balance + $this->amount < 0) {
                Log::error("Insufficient funds for user {$this->userId}.");
                return;
            }


            $balanceRecord->balance += $this->amount;
            $balanceRecord->save();


            Operation::create([
                'user_id' => $this->userId,
                'amount' => $this->amount,
                'description' => $this->description,
                'operation_date' => now(),
            ]);
        } catch (\Exception $e) {
            Log::error("Error updating balance for user {$this->userId}: " . $e->getMessage());
        }
    }
}

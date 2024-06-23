<?php

namespace App\Console\Commands;

use App\Application\Modules\Banks\Repositories\BankRepository;
use Illuminate\Console\Command;

class LoadBanksFromBNM extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:load-banks-from-bnm';

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
        $bankRepository = app(BankRepository::class);
        $bankRepository->loadBanksFromBNM();
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;
use Carbon\Carbon;

class Auto_Backup_Database extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info("Cron is working fine!");
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".sql";
        $user = 'root';
        $host = 'localhost';
        $password = 'Th3Blu3s';

        $command = 'c:/xampp/mysql/bin/mysqldump.exe -u ' . $user . ' -h ' . $host . ' --password=' . $password . ' database_mailoo > c:/xampp/htdocs/mailoo/storage/app/backup_database/' . $filename;

        $returnVar = NULL;
        $output  = NULL;

        exec($command, $output, $returnVar);
        $this->info('database:backup Command Run successfully!');

        // $user = 'root';
        // $host = 'localhost';
        // $password = 'Th3Blu3s';
        // $fileSql = 'testimoni.sql';

        // exec('c:/xampp/mysql/bin/mysqldump.exe -u ' . $user . ' -h ' . $host . ' --password=' . $password . ' database_mailoo > c:/xampp/htdocs/mailoo/storage/app/backup_database/' . $fileSql);
    }
}
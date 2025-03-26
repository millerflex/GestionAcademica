<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TablasCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tablas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Borra todas las tablas y las crea denuevo';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Iniciando el proceso...');

        $this->info('Eliminado Tablas...');
        $this->output->progressStart(3);
        $this->call('migrate:reset');

        $this->info('Creando Tablas...');
        $this->output->progressAdvance();
        $this->call('migrate');

        $this->info('Creando Datos...');
        $this->output->progressAdvance();
        $this->call('db:seed');
        
        $this->output->progressFinish();
        
        $this->info('El proceso ha finalizado.');
    }
}

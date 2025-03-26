<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CrearTodoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:validar {variable} {ruta1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera el store y update';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $variable = $this->argument('variable');
        $ruta1 = $this->argument('ruta1');

        $ruta1 = str_replace(' ', '', $ruta1);

        $storeVariableRequestPath = "{$ruta1}/{$variable}/Store{$variable}Request";
        $updateVariableRequestPath = "{$ruta1}/{$variable}/Update{$variable}Request";
        $modelVariablePath = "{$ruta1}/{$variable}";
        $seederVariablePath = "{$ruta1}/{$variable}Seeder";

        // Crear requests
        Artisan::call('make:request', ['name' => $storeVariableRequestPath]);
        Artisan::call('make:request', ['name' => $updateVariableRequestPath]);

        // Crear modelo
        Artisan::call('make:model', ['name' => $modelVariablePath]);

        // Definir rutas y nombres de archivos
        $migrateVariablePath = "create_{$variable}s_table";
        $controllerVariablePath = "{$ruta1}/{$variable}Controller";
        $factoryVariablePath = "{$ruta1}/Factory{$variable}";

        // Llamadas a Artisan
        Artisan::call('make:migration', [
            'name' => $migrateVariablePath,
            '--create' => "{$variable}s", // Nombre de la tabla
        ]);

        Artisan::call('make:controller', [
            'name' => $controllerVariablePath,
            '--resource' => true, // Indica que el controlador debe ser un controlador de recursos
        ]);

        Artisan::call('make:factory', [
            'name' => $factoryVariablePath,
            '--model' => $variable, // Nombre del modelo
        ]);

        // Crear seeder
        Artisan::call('make:seeder', ['name' => $seederVariablePath]);

        $this->info('Archivos generados exitosamente.');
    }
}

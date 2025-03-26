<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AsignacionCL\CargaHl;
use App\Models\Silabo\Referencia;
use App\Models\Silabo\SilaboResultado;
use App\Models\User;
use Database\Seeders\General\ProfileSeeder;
use Database\Seeders\General\RoleSeeder;
use Database\Seeders\Silabo\CarreraSeeder;
use Database\Seeders\Silabo\CursoSeeder;
use Database\Seeders\Silabo\EvaluacionSeeder;
use Database\Seeders\Silabo\OrganizacionSeeder;
use Database\Seeders\Silabo\PeriodoSeeder;
use Database\Seeders\Silabo\ProgramacionSeeder;
use Database\Seeders\Silabo\PromedioSeeder;
use Database\Seeders\Silabo\ReferenciaSeeder;
use Database\Seeders\Silabo\ResultadoSeeder;
use Database\Seeders\Silabo\SilaboDocenteSeeder;
use Database\Seeders\Silabo\SilaboResultadoSeeder;
use Database\Seeders\Silabo\SilaboSeeder;
use Database\Seeders\Silabo\TutoriaSeeder;
use Database\Seeders\Silabo\UnidadProgramacionSeeder;
use Database\Seeders\Silabo\UnidadSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\Debiles\TiposSeeder;
use Database\Seeders\Debiles\DetallesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => '',
        //     'email' => '',
        //     'password' = bcr
        // ])->assignRole('Admin')

        $this->call(RoleSeeder::class);

        $user = new User();
        $user->name = 'root';
        $user->email = 'root@root.com';
        $user->password = Hash::make('123456');
        $user->save();
        $user->assignRole('Admin'); // Correcto

        $user1 = new User();
        $user1->name = 'mendoza';
        $user1->email = 'mendoza@mendoza.com';
        $user1->password = Hash::make('mendoza');
        $user1->save();
        $user1->assignRole('Docente'); // Corregido

        $user2 = new User();
        $user2->name = 'alcantara';
        $user2->email = 'alcantara@alcantara.com';
        $user2->password = Hash::make('alcantara');
        $user2->save();
        $user2->assignRole('Docente'); // Corregido

        $user3 = new User();
        $user3->name = 'santos';
        $user3->email = 'santos@santos.com';
        $user3->password = Hash::make('santos');
        $user3->save();
        $user3->assignRole('Docente'); // Corregido

        $user4 = new User();
        $user4->name = 'rivera';
        $user4->email = 'rivera@rivera.com';
        $user4->password = Hash::make('rivera');
        $user4->save();
        $user4->assignRole('Docente'); // Corregido

        $user5 = new User();
        $user5->name = 'boy';
        $user5->email = 'boy@boy.com';
        $user5->password = Hash::make('boy');
        $user5->save();
        $user5->assignRole('Docente','Director de departamento'); // Corregido

        $user6 = new User();
        $user6->name = 'ticona';
        $user6->email = 'ticona@ticona.com';
        $user6->password = Hash::make('ticona');
        $user6->save();
        $user6->assignRole('Docente'); // Corregido

        $user7 = new User();
        $user7->name = 'arellano';
        $user7->email = 'arellano@arellano.com';
        $user7->password = Hash::make('arellano');
        $user7->save();
        $user7->assignRole('Docente'); // Corregido

        $user8 = new User();
        $user8->name = 'gomez';
        $user8->email = 'gomez@gomez.com';
        $user8->password = Hash::make('gomez');
        $user8->save();
        $user8->assignRole('Docente'); // Corregido

        $user9 = new User();
        $user9->name = 'marcelino';
        $user9->email = 'marcelino@marcelino.com';
        $user9->password = Hash::make('marcelino');
        $user9->save();
        $user9->assignRole('Docente'); // Corregido

        $user10 = new User();
        $user10->name = 'obando';
        $user10->email = 'obando@obando.com';
        $user10->password = Hash::make('obando');
        $user10->save();
        $user10->assignRole('Docente'); // Corregido

        $user11 = new User();
        $user11->name = 'agreda';
        $user11->email = 'agreda@agreda.com';
        $user11->password = Hash::make('agreda');
        $user11->save();
        $user11->assignRole('Docente', 'Director de escuela'); // Correcto

        // $user11->assignRole('Director de escuela'); // Correcto
        // $user11->syncRoles('Docente', 'Director de escuela'); // Correcto

        $this->call(CarreraSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ResultadoSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(ProgramacionSeeder::class);
        $this->call(UnidadSeeder::class);
        $this->call(SilaboSeeder::class);
        $this->call(EvaluacionSeeder::class);
        $this->call(PromedioSeeder::class);
        $this->call(TutoriaSeeder::class);
        $this->call(OrganizacionSeeder::class);
        $this->call(SilaboDocenteSeeder::class);
        $this->call(SilaboResultadoSeeder::class);
        $this->call(UnidadProgramacionSeeder::class);
        $this->call(ReferenciaSeeder::class);
        $this->call(TiposSeeder::class);
        $this->call(CargaLSeeder::class);
        $this->call(DetallesSeeder::class);
    }
}

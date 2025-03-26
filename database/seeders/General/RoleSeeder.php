<?php

namespace Database\Seeders\General;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $docente = Role::create(['name' => 'Docente']);
        $director = Role::create(['name' => 'Director de escuela']);
        $director2 = Role::create(['name' => 'Director de departamento']);
        $decano = Role::create(['name' => 'Decano']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$admin, $docente, $director]);

        Permission::create(['name' => 'admin.silaboPDF.pdf'])->syncRoles([$admin, $docente, $director]);
        Permission::create(['name' => 'admin.silaboPDF.edit'])->syncRoles([$admin, $docente]);
        Permission::create(['name' => 'admin.silaboPDF.update'])->syncRoles([$admin, $docente]);

        Permission::create(['name' => 'admin.silabo.index'])->syncRoles([$admin, $docente]);
        Permission::create(['name' => 'admin.silabo.llenar'])->syncRoles([$admin, $docente]);

        Permission::create(['name' => 'usuario.index'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuario.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuario.show'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuario.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuario.destroy'])->syncRoles([$admin]);

        Permission::create(['name' => 'admin.profile.edit'])->syncRoles([$admin, $docente, $director]);
        Permission::create(['name' => 'admin.profile.update'])->syncRoles([$admin, $docente, $director]);
        Permission::create(['name' => 'admin.profile.image.update'])->syncRoles([$admin, $docente, $director]);

        Permission::create(['name' => 'admin.periodo.index'])->syncRoles([$admin]);

        Permission::create(['name' => 'admin.visacion.index'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.visacion.create'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.visacion.store'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.visacion.edit'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.visacion.visar'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.visacion.comentar'])->syncRoles([$admin, $director]);

        Permission::create(['name' => 'admin.reporte.silabo'])->syncRoles([$admin, $director]);


        Permission::create(['name' => 'admin.Apertura.index'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.Apertura.create'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.Apertura.store'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.Apertura.destroy'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.Apertura.generarPDF'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.Apertura.getCursosPorCiclo'])->syncRoles([$admin, $director]);
        
        Permission::create(['name' => 'admin.Asignacion.index'])->syncRoles([$admin, $director2]);
        Permission::create(['name' => 'admin.Apertura.ciclos'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.Apertura.filtrar'])->syncRoles([$admin, $director]);

        Permission::create(['name' => 'admin.carga.hl.index'])->syncRoles([$admin, $docente]);
        Permission::create(['name' => 'admin.carga.hl.detalle'])->syncRoles([$admin, $docente]);
        Permission::create(['name' => 'admin.carga.hl.verCursos'])->syncRoles([$director2]);
        Permission::create(['name' => 'admin.carga.hl.horarios.ver'])->syncRoles([$director2]);
        Permission::create(['name' => 'admin.carga.hl.horarios.asignar'])->syncRoles([$director2]);
        
        Permission::create(['name' => 'admin.carga.hnl.index'])->syncRoles([$docente]);
        Permission::create(['name' => 'admin.carga.hnl.guardar'])->syncRoles([$docente]);
        Permission::create(['name' => 'admin.carga.hnl.asignar'])->syncRoles([$docente]);
        Permission::create(['name' => 'admin.carga.hnl.horario'])->syncRoles([$docente]);
        Permission::create(['name' => 'admin.carga.hnl.eliminar.horario'])->syncRoles([$docente]);

        Permission::create(['name' => 'admin.declaraciones'])->syncRoles([$docente, $director, $director2, $decano, $admin]);

        Permission::create(['name' => 'admin.carga.hnl.reportes'])->syncRoles([$admin, $director]);

        Permission::create(['name' => 'admin.declaraciones.reporte'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'admin.declaraciones.reporte2'])->syncRoles([$admin, $director]);
        Permission::create(['name' => 'director.escuela.oficios'])->syncRoles([$admin, $docente]);
    }
}

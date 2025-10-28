<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Empleado::create([
            'nombre'=> 'Alexander',
            'apellido'=> 'Apaza',
            'correo'=> 'alapaza@gmail.com',
            'salario'=>7000,
       ]);
               Empleado::create([
            'nombre'=> 'Bryan',
            'apellido'=> 'Magne',
            'correo'=> 'mmagne@gmail.com',
            'salario'=>5000,
        ]);
                Empleado::create([
            'nombre'=> 'Arturo',
            'apellido'=> 'Valverde',
            'correo'=> 'avalverde@gmail.com',
            'salario'=>3500,
        ]);
                Empleado::create([
            'nombre'=> 'Nicho',
            'apellido'=> 'Efrain',
            'correo'=> 'nqfrain@gmail.com',
            'salario'=>4500,
        ]);
                Empleado::create([
            'nombre'=> 'Juan',
            'apellido'=> 'Roca',
            'correo'=> 'jrocad@gmail.com',
            'salario'=>4500,
        ]);
                Empleado::create([
            'nombre'=> 'Ana Maria',
            'apellido'=> 'Delin  Seliz',
            'correo'=> 'Amselin@gicloud.com',
            'salario'=>3400,
        ]);
                Empleado::create([
            'nombre'=> 'Juan',
            'apellido'=> 'Brito',
            'correo'=> 'britoj@icloud.com',
            'salario'=>6700,
        ]);
                Empleado::create([
            'nombre'=> 'Diana Melani',
            'apellido'=> 'Murrillo Quispe',
            'correo'=> 'dmelani04@hotmail.com',
            'salario'=>4000,
        ]);
                Empleado::create([
            'nombre'=> 'Jesus',
            'apellido'=> 'Cruz Moriz',
            'correo'=> 'jcruz@yahoo.com',
            'salario'=>5600,
        ]);
                Empleado::create([
            'nombre'=> 'Masiel',
            'apellido'=> 'Gomez Torrez',
            'correo'=> 'msgomezi@alicorp.com',
            'salario'=>4500,
        ]);
    }
}

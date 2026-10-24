<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('10######'),
            'nama' => fake()->name(),
            'kelas' => fake()->randomElement(['X RPL 1','X TKJ 1','XI RPL 1']),
            'jurusan' => fake()->randomElement(['RPL','TKJ','MM']),
            'tanggal_lahir' => fake()->date(),
            'alamat' => fake()->address(),
            'keterangan' => fake()->sentence(),
        ];
    }
}
<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Activity::query()->insert([
            [
                'title' => 'Workshop Git Dasar',
                'description' => 'Latihan kolaborasi repository.',
                'activity_date' => '2026-10-05',
                'category' => 'Workshop',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Seminar Web Quality',
                'description' => 'Pengenalan maintainability dan testing.',
                'activity_date' => '2026-10-12',
                'category' => 'Seminar',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Praktikum Laravel',
                'description' => 'Membuat aplikasi menggunakan Laravel.',
                'activity_date' => '2026-10-15',
                'category' => 'Praktikum',
                'status' => 'Done',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review Project',
                'description' => 'Review hasil project.',
                'activity_date' => '2026-10-20',
                'category' => 'Project',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Presentasi Project',
                'description' => 'Presentasi hasil pengembangan aplikasi.',
                'activity_date' => '2026-10-25',
                'category' => 'Presentasi',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

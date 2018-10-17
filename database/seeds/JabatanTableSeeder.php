<?php

use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'name' => 'TPP Maksimal Eselon II (Kepala OPD (Dinas/Badan), Asisten, Staf Asli)',
	        	'max_tpp' => 30000000
        	],
        	[
				'name' => 'TPP Maksimal Eselon II (Camat, Sekretaris OPD, Kepal bagian, Kepala Bidang)',
				'max_tpp' => 25000000
			],
			[
				'name' => 'TPP Maksimal Eselon IV (Kepala Sub bagian, Kepala sub bidang, Kepala Seksi, Lurah, Sekretaris Lurah)',
				'max_tpp' => 20000000
			],
			[
				'name' => 'TPP Maksimal Non Eselon (Staf, Fungsional tertentu) Golongan IV',
				'max_tpp' => 15000000
			],
			[
				'name' => 'TPP Maksimal Non Eselon (Staf, Fungsional tertentu) Golongan III',
				'max_tpp' => 10000000
			],
			[
				'name' => 'TPP Maksimal Non Eselon (Staf, Fungsional tertentu) Golongan IV',
				'max_tpp' => 5000000
			],
        ];

        DB::table('jabatans')->truncate();
        DB::table('jabatans')->insert($data);
    }
}

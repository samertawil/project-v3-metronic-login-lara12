<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $StatusData = [
            ['p_id' => null,'p_id_sub'=>null,'status_name'=>'ثوابت البرنامج'],
            ['p_id' => 1,'p_id_sub'=>null,'status_name'=>'ثوابت عامة'],
			['p_id' => 1,'p_id_sub'=>2,'status_name'=>'نعم'],
			['p_id' => 1,'p_id_sub'=>2,'status_name'=>'لا'],
			['p_id' => 1,'p_id_sub'=>2,'status_name'=>'غير ذلك'],
		    ['p_id' => 1,'p_id_sub'=>null,'status_name'=>'قيم اعمدة attributes'],
			  ['p_id' => 1,'p_id_sub'=>6,'status_name'=>'facebook'],
			    ['p_id' => 1,'p_id_sub'=>6,'status_name'=>'twiter'],
				  ['p_id' => 1,'p_id_sub'=>6,'status_name'=>'email'],
        ];
        Status::insert($StatusData);
    }
}

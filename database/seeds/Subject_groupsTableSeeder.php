<?php

use Illuminate\Database\Seeder;

class Subject_groupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_groups')->insert([
        ['id' => 1,
        'subject_group_name' => '基軸科目',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
        DB::table('subject_groups')->insert([
        ['id' => 2,
        'subject_group_name' => '人間と文化',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 3,
        'subject_group_name' => '人間と社会',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 4,
        'subject_group_name' => '自然と環境',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 5,
        'subject_group_name' => '英語',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 6,
        'subject_group_name' => '初修外国語',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 7,
        'subject_group_name' => '情報技術',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 8,
        'subject_group_name' => '健康とスポーツ科学',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 9,
        'subject_group_name' => '教養演習',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 10,
        'subject_group_name' => 'キャリア・デザイン',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 11,
        'subject_group_name' => '基礎科目',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 12,
        'subject_group_name' => '心理系',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 13,
        'subject_group_name' => '社会・教育系',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 14,
        'subject_group_name' => '国際・コミュニケーション系',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 15,
        'subject_group_name' => '体験科目',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 16,
        'subject_group_name' => '文献講読',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('subject_groups')->insert([
        ['id' => 17,
        'subject_group_name' => 'ゼミナール',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
        
    }
}

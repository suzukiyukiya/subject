<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
        ['id' => 1,
        'lesson_name' => '現代に生きる',
        'field_id' => 1,
        'subject_group_id' => 1,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 2,
        'lesson_name' => '歴史と文化',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 3,
        'lesson_name' => '文学と人間',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '山田永',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 4,
        'lesson_name' => '芸術文化論',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
       [
        'id' => 5,
        'lesson_name' => '欧米文化論',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ], 
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 6,
        'lesson_name' => 'アジア文化論',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ], 
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 7,
        'lesson_name' => '文化人類学の世界',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 8,
        'lesson_name' => '哲学',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 9,
        'lesson_name' => '宗教の世界',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 10,
        'lesson_name' => '日本国憲法',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 11,
        'lesson_name' => '法と社会',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 12,
        'lesson_name' => '経済と社会',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 13,
        'lesson_name' => '政治と社会',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 14,
        'lesson_name' => '自己と社会',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 15,
        'lesson_name' => '都市と人間',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 16,
        'lesson_name' => 'ジェンダーと社会',
        'field_id' => 1,
        'subject_group_id' => 3,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 17,
        'lesson_name' => '地球と宇宙',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 6,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 18,
        'lesson_name' => '物質の成り立ち',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 19,
        'lesson_name' => '文学と人間',
        'field_id' => 1,
        'subject_group_id' => 2,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '山田永',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 20,
        'lesson_name' => '生命の多様性',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '横山悠理',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 21,
        'lesson_name' => '生命の多様性',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '谷口義則',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 22,
        'lesson_name' => '数と論理',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 23,
        'lesson_name' => '人間とデザイン',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '水尾衣里',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 24,
        'lesson_name' => '人間とデザイン',
        'field_id' => 1,
        'subject_group_id' => 4,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '水尾衣里',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 25,
        'lesson_name' => '英語基礎１（リーディング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '石田理可',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 26,
        'lesson_name' => '英語基礎２（リスニング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'BARNES',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 27,
        'lesson_name' => '英語初級１－１（リーディング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '山田幸代',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 28,
        'lesson_name' => '英語初級１－２（リスニング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'Ricart',
        ],
        ]);
         DB::table('lessons')->insert([
        [
        'id' => 29,
        'lesson_name' => '英語初級２－１（リーディング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '大橋千焼',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 30,
        'lesson_name' => '英語初級２－２（リスニング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'BUCSIS',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 31,
        'lesson_name' => '英語中級１（リーディング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '有為楠',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 32,
        'lesson_name' => '英語中級２（リスニング）',
        'field_id' => 1,
        'subject_group_id' => 5,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'Ricart',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 33,
        'lesson_name' => 'フランス語入門',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 34,
        'lesson_name' => 'フランス語応用',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 35,
        'lesson_name' => 'ドイツ語入門',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 36,
        'lesson_name' => 'ドイツ語応用',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 37,
        'lesson_name' => '中国語入門',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '船田秀佳',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 38,
        'lesson_name' => '中国語入門',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '蟹江静夫',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 39,
        'lesson_name' => '中国語応用',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 40,
        'lesson_name' => 'ハングル入門',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 41,
        'lesson_name' => 'ハングル応用',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 42,
        'lesson_name' => 'スペイン語入門',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 43,
        'lesson_name' => 'スペイン語応用',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 44,
        'lesson_name' => '日本語１',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 45,
        'lesson_name' => '日本語２',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 46,
        'lesson_name' => '日本事情概説１',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 47,
        'lesson_name' => '日本事情概説２',
        'field_id' => 1,
        'subject_group_id' => 6,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 48,
        'lesson_name' => 'コンピュータリテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '秋月久見子',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 49,
        'lesson_name' => 'コンピュータリテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '丹羽直美',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 50,
        'lesson_name' => 'コンピュータリテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '丹羽直美',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 51,
        'lesson_name' => 'コンピュータリテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '秋月久見子',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 52,
        'lesson_name' => '情報活用リテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '秋月久見子',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 53,
        'lesson_name' => '情報活用リテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '丹羽直美',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 54,
        'lesson_name' => '情報活用リテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '秋月久見子',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 55,
        'lesson_name' => '情報活用リテラシー',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '丹羽直美',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 56,
        'lesson_name' => '情報処理入門',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '丹羽直美',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 57,
        'lesson_name' => '情報処理入門',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '丹羽直美',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 58,
        'lesson_name' => '情報社会と倫理',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '秋月久見子',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 59,
        'lesson_name' => '情報社会と倫理',
        'field_id' => 1,
        'subject_group_id' => 7,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '秋月久見子',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 60,
        'lesson_name' => '健康・スポーツ科学１',
        'field_id' => 1,
        'subject_group_id' => 8,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '千葉洋平',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 61,
        'lesson_name' => '健康・スポーツ科学２',
        'field_id' => 1,
        'subject_group_id' => 8,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '黒田真二',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 62,
        'lesson_name' => '教養演習',
        'field_id' => 1,
        'subject_group_id' => 9,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '山田永',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 63,
        'lesson_name' => '教養演習',
        'field_id' => 1,
        'subject_group_id' => 9,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '山田永',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 64,
        'lesson_name' => 'キャリア形成論',
        'field_id' => 1,
        'subject_group_id' => 10,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '中島愛子',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 65,
        'lesson_name' => '人間学総論',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 66,
        'lesson_name' => '心理学概論',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 67,
        'lesson_name' => '社会学概論',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 68,
        'lesson_name' => '国際コミュニケーション概論',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 69,
        'lesson_name' => '生命倫理入門',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 70,
        'lesson_name' => '環境人間学',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '水尾衣里',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 71,
        'lesson_name' => 'データ解析入門',
        'field_id' => 2,
        'subject_group_id' => 11,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '和田実',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 72,
        'lesson_name' => '発達心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '原田知佳',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 73,
        'lesson_name' => '感情・人格心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '畑中美穂',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 74,
        'lesson_name' => '教育心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 75,
        'lesson_name' => '生徒・進路指導論',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 76,
        'lesson_name' => '臨床心理学概論',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 77,
        'lesson_name' => '社会・集団・家族心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 78,
        'lesson_name' => '知覚・認知心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 79,
        'lesson_name' => '学習・言語心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 80,
        'lesson_name' => '学校教育相談',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 81,
        'lesson_name' => '教育・学校心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 82,
        'lesson_name' => '心理学研究法',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 83,
        'lesson_name' => '心理学統計法',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 84,
        'lesson_name' => '心理学実験演習',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '原田知佳',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 85,
        'lesson_name' => '福祉心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '志村ゆず',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 86,
        'lesson_name' => '健康・医療心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 87,
        'lesson_name' => '障害者・障害児心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 88,
        'lesson_name' => '心理的アセスメント',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '幸順子',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 89,
        'lesson_name' => '心理学的支援法',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 90,
        'lesson_name' => '産業・組織心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 91,
        'lesson_name' => '司法・犯罪心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 92,
        'lesson_name' => '神経・生理心理学',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 93,
        'lesson_name' => '人体の構造と機能及び疾病',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 94,
        'lesson_name' => '特別支援教育論',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 95,
        'lesson_name' => '精神疾患とその治療',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 96,
        'lesson_name' => '心理演習',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '塩崎万里',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 97,
        'lesson_name' => 'フィールドワーク入門',
        'field_id' => 2,
        'subject_group_id' => 15,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '加藤英明',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 98,
        'lesson_name' => '公認心理師の職責',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 99,
        'lesson_name' => '関係行政論',
        'field_id' => 2,
        'subject_group_id' => 12,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 100,
        'lesson_name' => '現代社会論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 101,
        'lesson_name' => '家族社会学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '安藤喜代美',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 102,
        'lesson_name' => '教育学概論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 103,
        'lesson_name' => '地域文化論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 104,
        'lesson_name' => '環境社会学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 105,
        'lesson_name' => '社会福祉学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 106,
        'lesson_name' => '学習社会論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 107,
        'lesson_name' => '学校教育論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 108,
        'lesson_name' => '教育行政論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '笠井尚',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 109,
        'lesson_name' => '教育社会学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 110,
        'lesson_name' => '道徳教育論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 111,
        'lesson_name' => '日本文化史',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 112,
        'lesson_name' => 'ジャーナリズム論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 113,
        'lesson_name' => '社会調査法',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 114,
        'lesson_name' => '人口社会学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 115,
        'lesson_name' => '日本社会史',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '木曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 116,
        'lesson_name' => '都市文明論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 117,
        'lesson_name' => '教育史',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 118,
        'lesson_name' => '地域教育論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 119,
        'lesson_name' => '現代メディア論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 120,
        'lesson_name' => '日本史',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '木曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 121,
        'lesson_name' => '外国史',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 122,
        'lesson_name' => '自然地理学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 123,
        'lesson_name' => '地理学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 124,
        'lesson_name' => '地誌学',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 125,
        'lesson_name' => '社会科教材デザイン論',
        'field_id' => 2,
        'subject_group_id' => 13,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 126,
        'lesson_name' => '国際関係論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 127,
        'lesson_name' => '国際文化論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 128,
        'lesson_name' => 'コミュニケーション論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 129,
        'lesson_name' => '言語文化論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 130,
        'lesson_name' => 'イングリッシュ・コミュニケーション',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 131,
        'lesson_name' => '英語音声学',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 132,
        'lesson_name' => '英語文学史',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 133,
        'lesson_name' => '異文化理解',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 134,
        'lesson_name' => '国際協力論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 135,
        'lesson_name' => '英語圏文化研究',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 136,
        'lesson_name' => '地域研究',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '村元麻衣',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 137,
        'lesson_name' => '国際コミュニケーション',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'WESTBY',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 138,
        'lesson_name' => 'ビジネス・コミュニケーション',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 139,
        'lesson_name' => 'プレゼンテーション',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'THOMAS',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 140,
        'lesson_name' => 'メディア・イングリッシュ',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 141,
        'lesson_name' => 'インテンシィブ・イングリッシュ',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '船田秀佳',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 142,
        'lesson_name' => 'パラグラフ・ライティング',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'BEECH',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 143,
        'lesson_name' => 'リスニング・コミュニケーションスキル１',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 144,
        'lesson_name' => 'リーディング・ライティングスキル１',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 145,
        'lesson_name' => '英語学',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 146,
        'lesson_name' => '英語史',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 147,
        'lesson_name' => '英語文学概論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '一ノ谷清美'
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 148,
        'lesson_name' => '英語文学講読',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 149,
        'lesson_name' => 'フランス語圏文化論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 150,
        'lesson_name' => '異文化コミュニケーション',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '金曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 151,
        'lesson_name' => '多文化社会論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 152,
        'lesson_name' => '比較文化論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 153,
        'lesson_name' => '比較言語論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 154,
        'lesson_name' => '社会言語学',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 155,
        'lesson_name' => 'エッセイ・ライティング',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'SWEETLOVE'
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 156,
        'lesson_name' => 'リスニング・コミュニケーションスキル２',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 157,
        'lesson_name' => 'リーディング・ライティングスキル２',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 158,
        'lesson_name' => '英語文化表現',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 159,
        'lesson_name' => '英語文学研究',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '月曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 160,
        'lesson_name' => '英語科教材デザイン論',
        'field_id' => 2,
        'subject_group_id' => 14,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 161,
        'lesson_name' => '特殊講義C',
        'field_id' => 2,
        'subject_group_id' => 14,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '加藤昌弘',
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 162,
        'lesson_name' => 'ボランティア入門',
        'field_id' => 2,
        'subject_group_id' => 15,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 163,
        'lesson_name' => '海外体験入門',
        'field_id' => 2,
        'subject_group_id' => 15,
        'term' => '後期',
        'week' => '火曜日',
        'hour' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 164,
        'lesson_name' => 'フィールドワーク',
        'field_id' => 2,
        'subject_group_id' => 15,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 165,
        'lesson_name' => 'ボランティア',
        'field_id' => 2,
        'subject_group_id' => 15,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 166,
        'lesson_name' => 'インターンシップ',
        'field_id' => 2,
        'subject_group_id' => 15,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 167,
        'lesson_name' => '海外研修',
        'field_id' => 2,
        'subject_group_id' => 15,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => 'WESTBY',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 168,
        'lesson_name' => '海外インターンシップ',
        'field_id' => 2,
        'subject_group_id' => 15,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 169,
        'lesson_name' => '文献講読A',
        'field_id' => 2,
        'subject_group_id' => 16,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 170,
        'lesson_name' => '文献講読B',
        'field_id' => 2,
        'subject_group_id' => 16,
        'term' => '前期',
        'week' => '金曜日',
        'hour' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ],
       ]);
        DB::table('lessons')->insert([
        [
        'id' => 171,
        'lesson_name' => '基礎ゼミナール',
        'field_id' => 2,
        'subject_group_id' => 17,
        'term' => '前期',
        'week' => '月曜日',
        'hour' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '笠井尚',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 172,
        'lesson_name' => '基幹ゼミナール',
        'field_id' => 2,
        'subject_group_id' => 17,
        'term' => '前期',
        'week' => '火曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '志村ゆず',
        ],
       ]);
       DB::table('lessons')->insert([
        [
        'id' => 173,
        'lesson_name' => '卒業研究ゼミナール',
        'field_id' => 2,
        'subject_group_id' => 17,
        'term' => '前期',
        'week' => '水曜日',
        'hour' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'teacher' => '水尾衣里',
        ],
       ]);
    }
}

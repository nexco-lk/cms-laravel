<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --table-mode --tables=permissions
         *
         */

        $dataTables = [
            [
                'id' => 1,
                'name' => 'view_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:04',
                'updated_at' => '2024-09-06 06:33:04',
            ],
            [
                'id' => 2,
                'name' => 'view_any_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:04',
                'updated_at' => '2024-09-06 06:33:04',
            ],
            [
                'id' => 3,
                'name' => 'create_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:04',
                'updated_at' => '2024-09-06 06:33:04',
            ],
            [
                'id' => 4,
                'name' => 'update_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:04',
                'updated_at' => '2024-09-06 06:33:04',
            ],
            [
                'id' => 5,
                'name' => 'restore_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:04',
                'updated_at' => '2024-09-06 06:33:04',
            ],
            [
                'id' => 6,
                'name' => 'restore_any_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 7,
                'name' => 'replicate_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 8,
                'name' => 'reorder_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 9,
                'name' => 'delete_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 10,
                'name' => 'delete_any_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 11,
                'name' => 'force_delete_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 12,
                'name' => 'force_delete_any_activation',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:05',
                'updated_at' => '2024-09-06 06:33:05',
            ],
            [
                'id' => 13,
                'name' => 'view_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 14,
                'name' => 'view_any_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 15,
                'name' => 'create_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 16,
                'name' => 'update_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 17,
                'name' => 'restore_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 18,
                'name' => 'restore_any_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 19,
                'name' => 'replicate_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:06',
                'updated_at' => '2024-09-06 06:33:06',
            ],
            [
                'id' => 20,
                'name' => 'reorder_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 21,
                'name' => 'delete_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 22,
                'name' => 'delete_any_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 23,
                'name' => 'force_delete_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 24,
                'name' => 'force_delete_any_author',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 25,
                'name' => 'view_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 26,
                'name' => 'view_any_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:07',
                'updated_at' => '2024-09-06 06:33:07',
            ],
            [
                'id' => 27,
                'name' => 'create_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 28,
                'name' => 'update_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 29,
                'name' => 'restore_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 30,
                'name' => 'restore_any_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 31,
                'name' => 'replicate_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 32,
                'name' => 'reorder_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 33,
                'name' => 'delete_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 34,
                'name' => 'delete_any_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 35,
                'name' => 'force_delete_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:08',
                'updated_at' => '2024-09-06 06:33:08',
            ],
            [
                'id' => 36,
                'name' => 'force_delete_any_comment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:09',
                'updated_at' => '2024-09-06 06:33:09',
            ],
            [
                'id' => 37,
                'name' => 'view_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:09',
                'updated_at' => '2024-09-06 06:33:09',
            ],
            [
                'id' => 38,
                'name' => 'view_any_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:09',
                'updated_at' => '2024-09-06 06:33:09',
            ],
            [
                'id' => 39,
                'name' => 'create_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:09',
                'updated_at' => '2024-09-06 06:33:09',
            ],
            [
                'id' => 40,
                'name' => 'update_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:09',
                'updated_at' => '2024-09-06 06:33:09',
            ],
            [
                'id' => 41,
                'name' => 'restore_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:09',
                'updated_at' => '2024-09-06 06:33:09',
            ],
            [
                'id' => 42,
                'name' => 'restore_any_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 43,
                'name' => 'replicate_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 44,
                'name' => 'reorder_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 45,
                'name' => 'delete_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 46,
                'name' => 'delete_any_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 47,
                'name' => 'force_delete_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 48,
                'name' => 'force_delete_any_company',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 49,
                'name' => 'view_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:10',
                'updated_at' => '2024-09-06 06:33:10',
            ],
            [
                'id' => 50,
                'name' => 'view_any_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 51,
                'name' => 'create_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 52,
                'name' => 'update_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 53,
                'name' => 'restore_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 54,
                'name' => 'restore_any_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 55,
                'name' => 'replicate_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 56,
                'name' => 'reorder_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:11',
                'updated_at' => '2024-09-06 06:33:11',
            ],
            [
                'id' => 57,
                'name' => 'delete_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 58,
                'name' => 'delete_any_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 59,
                'name' => 'force_delete_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 60,
                'name' => 'force_delete_any_content',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 61,
                'name' => 'view_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 62,
                'name' => 'view_any_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 63,
                'name' => 'create_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:12',
                'updated_at' => '2024-09-06 06:33:12',
            ],
            [
                'id' => 64,
                'name' => 'update_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 65,
                'name' => 'restore_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 66,
                'name' => 'restore_any_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 67,
                'name' => 'replicate_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 68,
                'name' => 'reorder_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 69,
                'name' => 'delete_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 70,
                'name' => 'delete_any_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 71,
                'name' => 'force_delete_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:13',
                'updated_at' => '2024-09-06 06:33:13',
            ],
            [
                'id' => 72,
                'name' => 'force_delete_any_content::category',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:14',
                'updated_at' => '2024-09-06 06:33:14',
            ],
            [
                'id' => 73,
                'name' => 'view_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:14',
                'updated_at' => '2024-09-06 06:33:14',
            ],
            [
                'id' => 74,
                'name' => 'view_any_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:14',
                'updated_at' => '2024-09-06 06:33:14',
            ],
            [
                'id' => 75,
                'name' => 'create_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:14',
                'updated_at' => '2024-09-06 06:33:14',
            ],
            [
                'id' => 76,
                'name' => 'update_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:14',
                'updated_at' => '2024-09-06 06:33:14',
            ],
            [
                'id' => 77,
                'name' => 'restore_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:14',
                'updated_at' => '2024-09-06 06:33:14',
            ],
            [
                'id' => 78,
                'name' => 'restore_any_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:15',
                'updated_at' => '2024-09-06 06:33:15',
            ],
            [
                'id' => 79,
                'name' => 'replicate_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:15',
                'updated_at' => '2024-09-06 06:33:15',
            ],
            [
                'id' => 80,
                'name' => 'reorder_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:15',
                'updated_at' => '2024-09-06 06:33:15',
            ],
            [
                'id' => 81,
                'name' => 'delete_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:15',
                'updated_at' => '2024-09-06 06:33:15',
            ],
            [
                'id' => 82,
                'name' => 'delete_any_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:15',
                'updated_at' => '2024-09-06 06:33:15',
            ],
            [
                'id' => 83,
                'name' => 'force_delete_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:16',
                'updated_at' => '2024-09-06 06:33:16',
            ],
            [
                'id' => 84,
                'name' => 'force_delete_any_page',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:16',
                'updated_at' => '2024-09-06 06:33:16',
            ],
            [
                'id' => 85,
                'name' => 'view_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:16',
                'updated_at' => '2024-09-06 06:33:16',
            ],
            [
                'id' => 86,
                'name' => 'view_any_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:16',
                'updated_at' => '2024-09-06 06:33:16',
            ],
            [
                'id' => 87,
                'name' => 'create_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:16',
                'updated_at' => '2024-09-06 06:33:16',
            ],
            [
                'id' => 88,
                'name' => 'update_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:16',
                'updated_at' => '2024-09-06 06:33:16',
            ],
            [
                'id' => 89,
                'name' => 'restore_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 90,
                'name' => 'restore_any_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 91,
                'name' => 'replicate_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 92,
                'name' => 'reorder_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 93,
                'name' => 'delete_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 94,
                'name' => 'delete_any_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 95,
                'name' => 'force_delete_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:17',
                'updated_at' => '2024-09-06 06:33:17',
            ],
            [
                'id' => 96,
                'name' => 'force_delete_any_tag',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:18',
                'updated_at' => '2024-09-06 06:33:18',
            ],
            [
                'id' => 97,
                'name' => 'page_EditProfile',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:18',
                'updated_at' => '2024-09-06 06:33:18',
            ],
            [
                'id' => 98,
                'name' => 'page_PersonalAccessTokensPage',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:19',
                'updated_at' => '2024-09-06 06:33:19',
            ],
            [
                'id' => 99,
                'name' => 'page_UpdateProfileInformationPage',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:33:19',
                'updated_at' => '2024-09-06 06:33:19',
            ],
            [
                'id' => 100,
                'name' => 'view_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:09',
                'updated_at' => '2024-09-06 06:52:09',
            ],
            [
                'id' => 101,
                'name' => 'view_any_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:09',
                'updated_at' => '2024-09-06 06:52:09',
            ],
            [
                'id' => 102,
                'name' => 'create_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:09',
                'updated_at' => '2024-09-06 06:52:09',
            ],
            [
                'id' => 103,
                'name' => 'update_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:10',
                'updated_at' => '2024-09-06 06:52:10',
            ],
            [
                'id' => 104,
                'name' => 'restore_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:10',
                'updated_at' => '2024-09-06 06:52:10',
            ],
            [
                'id' => 105,
                'name' => 'restore_any_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:10',
                'updated_at' => '2024-09-06 06:52:10',
            ],
            [
                'id' => 106,
                'name' => 'replicate_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:10',
                'updated_at' => '2024-09-06 06:52:10',
            ],
            [
                'id' => 107,
                'name' => 'reorder_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:10',
                'updated_at' => '2024-09-06 06:52:10',
            ],
            [
                'id' => 108,
                'name' => 'delete_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:10',
                'updated_at' => '2024-09-06 06:52:10',
            ],
            [
                'id' => 109,
                'name' => 'delete_any_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:11',
                'updated_at' => '2024-09-06 06:52:11',
            ],
            [
                'id' => 110,
                'name' => 'force_delete_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:11',
                'updated_at' => '2024-09-06 06:52:11',
            ],
            [
                'id' => 111,
                'name' => 'force_delete_any_global::settings',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:11',
                'updated_at' => '2024-09-06 06:52:11',
            ],
            [
                'id' => 112,
                'name' => 'view_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:11',
                'updated_at' => '2024-09-06 06:52:11',
            ],
            [
                'id' => 113,
                'name' => 'view_any_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:11',
                'updated_at' => '2024-09-06 06:52:11',
            ],
            [
                'id' => 114,
                'name' => 'create_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:11',
                'updated_at' => '2024-09-06 06:52:11',
            ],
            [
                'id' => 115,
                'name' => 'update_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 116,
                'name' => 'restore_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 117,
                'name' => 'restore_any_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 118,
                'name' => 'replicate_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 119,
                'name' => 'reorder_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 120,
                'name' => 'delete_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 121,
                'name' => 'delete_any_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 122,
                'name' => 'force_delete_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:12',
                'updated_at' => '2024-09-06 06:52:12',
            ],
            [
                'id' => 123,
                'name' => 'force_delete_any_guest::layout::managment',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:13',
                'updated_at' => '2024-09-06 06:52:13',
            ],
            [
                'id' => 124,
                'name' => 'view_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:13',
                'updated_at' => '2024-09-06 06:52:13',
            ],
            [
                'id' => 125,
                'name' => 'view_any_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:13',
                'updated_at' => '2024-09-06 06:52:13',
            ],
            [
                'id' => 126,
                'name' => 'create_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:13',
                'updated_at' => '2024-09-06 06:52:13',
            ],
            [
                'id' => 127,
                'name' => 'update_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:13',
                'updated_at' => '2024-09-06 06:52:13',
            ],
            [
                'id' => 128,
                'name' => 'restore_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:14',
                'updated_at' => '2024-09-06 06:52:14',
            ],
            [
                'id' => 129,
                'name' => 'restore_any_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:14',
                'updated_at' => '2024-09-06 06:52:14',
            ],
            [
                'id' => 130,
                'name' => 'replicate_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:14',
                'updated_at' => '2024-09-06 06:52:14',
            ],
            [
                'id' => 131,
                'name' => 'reorder_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:14',
                'updated_at' => '2024-09-06 06:52:14',
            ],
            [
                'id' => 132,
                'name' => 'delete_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:14',
                'updated_at' => '2024-09-06 06:52:14',
            ],
            [
                'id' => 133,
                'name' => 'delete_any_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:14',
                'updated_at' => '2024-09-06 06:52:14',
            ],
            [
                'id' => 134,
                'name' => 'force_delete_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:15',
                'updated_at' => '2024-09-06 06:52:15',
            ],
            [
                'id' => 135,
                'name' => 'force_delete_any_guest::menu',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:15',
                'updated_at' => '2024-09-06 06:52:15',
            ],
            [
                'id' => 136,
                'name' => 'view_role',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:15',
                'updated_at' => '2024-09-06 06:52:15',
            ],
            [
                'id' => 137,
                'name' => 'view_any_role',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:15',
                'updated_at' => '2024-09-06 06:52:15',
            ],
            [
                'id' => 138,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:15',
                'updated_at' => '2024-09-06 06:52:15',
            ],
            [
                'id' => 139,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:16',
                'updated_at' => '2024-09-06 06:52:16',
            ],
            [
                'id' => 140,
                'name' => 'delete_role',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:16',
                'updated_at' => '2024-09-06 06:52:16',
            ],
            [
                'id' => 141,
                'name' => 'delete_any_role',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:16',
                'updated_at' => '2024-09-06 06:52:16',
            ],
            [
                'id' => 142,
                'name' => 'view_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:16',
                'updated_at' => '2024-09-06 06:52:16',
            ],
            [
                'id' => 143,
                'name' => 'view_any_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 144,
                'name' => 'create_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 145,
                'name' => 'update_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 146,
                'name' => 'restore_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 147,
                'name' => 'restore_any_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 148,
                'name' => 'replicate_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 149,
                'name' => 'reorder_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 150,
                'name' => 'delete_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 151,
                'name' => 'delete_any_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:17',
                'updated_at' => '2024-09-06 06:52:17',
            ],
            [
                'id' => 152,
                'name' => 'force_delete_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:18',
                'updated_at' => '2024-09-06 06:52:18',
            ],
            [
                'id' => 153,
                'name' => 'force_delete_any_teams',
                'guard_name' => 'web',
                'created_at' => '2024-09-06 06:52:18',
                'updated_at' => '2024-09-06 06:52:18',
            ]
        ];
        
        DB::table("permissions")->insert($dataTables);
    }
}
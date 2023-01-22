<?php

namespace Joy\VoyagerBreadReplaceKeyword\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ReplaceKeywordsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ReplaceKeyword')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ReplaceKeyword')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name'        => 'ReplaceKeyword ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'ReplaceKeyword Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}

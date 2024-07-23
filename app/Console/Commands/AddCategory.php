<?php

namespace App\Console\Commands;

use App\Events\CategoryCreated;
use App\Models\Category;
use Illuminate\Console\Command;

class AddCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $category = Category::create([
            "name" => "pashatest",
            "description" => "test",
        ]);
        event(new CategoryCreated($category));
    }
}

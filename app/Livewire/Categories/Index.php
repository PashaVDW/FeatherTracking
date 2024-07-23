<?php

namespace App\Livewire\Categories;

use App\Events\CategoryCreated;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public $categories;

    protected $listeners = ['echo:categories,CategoryCreated' => 'addCategory'];

    public function mount() {
        $this->categories = Category::all()->toArray();
    }

    public function addCategory($event) {
        $newCategory = Category::find($event['category']['id']);
        $this->categories[] = $newCategory->toArray();
    }

    public function render()
    {
        return view('livewire.categories.index');
    }
}

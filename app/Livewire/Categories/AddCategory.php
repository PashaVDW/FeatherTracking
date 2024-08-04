<?php

namespace App\Livewire\Categories;

use App\Events\CategoryCreated;
use App\Models\Category;
use Livewire\Component;

class AddCategory extends Component
{
    public $name;
    public $description;
    public $type;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'type' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        $category = Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
        ]);

        event(new CategoryCreated($category));
        $this->reset(['name', 'description', 'type']);
    }

    public function getListeners(): array
    {
        return [
            'echo:categories,CategoryCreated' => 'updateCategories',
        ];
    }

    public function updateCategories($event): void
    {
        $this->categories = Category::all();
    }


    public function render()
    {
        return view('livewire.categories.add-category');
    }
}

<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdownComponent extends Component
{
    public function render(): View
    {
        return view('components.category-dropdown-component',[
            'category_selected'=> Category::where('slug',request('category'))->first(),
            'categories'=> Category::all()
        ]);
    }
}

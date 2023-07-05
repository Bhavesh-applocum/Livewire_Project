<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public string $search = '';
    protected $queryString = ['search'];


    public function render()
    {
        $query = Product::query();
        if($this->search){
            $query->where('title', 'LIKE', "%{$this->search}%")
                ->orWhere('description', 'LIKE', "%{$this->search}%")
                ->orWhere('price', 'LIKE', "%{$this->search}%")
                ->orWhere('id', 'LIKE', "%{$this->search}%");
        }
        return view('livewire.product-search',[
            'products' => $query->paginate(20)
        ]);
    }

    public function updated($property)
    {
        if($property === 'search'){
            $this->resetPage();
        }
    }
}

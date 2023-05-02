<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{

    public $addNumber;

    public function increment()
    {
        $this->addNumber++;
    }

    public function render()
    {   
        return view('livewire.articles-table', [
            'articles' => Article::all()
        ]);
    }
}

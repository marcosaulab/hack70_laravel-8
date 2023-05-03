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

    public function deleteArticle(Article $article) {
        $article->delete();
    }

    public function render()
    {   
        return view('livewire.articles-table', [
            'articles' => Article::all()
        ]);
    }
}

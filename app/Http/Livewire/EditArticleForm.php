<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Article;
use Livewire\Component;

class EditArticleForm extends Component
{

    public $title;
    public $subtitle;
    public $body;
    public $tags;
    public Article $article;

    public function mount() // ! Lifecycle Hook ->  viene eseguito all'inizio, prima ancora del render
    {                       // ! è il primo metodo che viene eseguito quando istanziamo un componente
        $this->title = $this->article->title; // ! ho passato un oggetto di tipo Article al componente
        $this->subtitle = $this->article->subtitle; // ! ora sto inizializzando gli attributi del componente
        $this->body = $this->article->body; // ! con i valori degli attributi dell'oggetto Article
                                            // ! cha ho passato quando ho istanziato il componente
        $this->tags = $this->article->tags->pluck('id')->toArray(); // ? prende gli elementi della collection
                                                                    // ? e prende solo gli id di quegli elementi
                                                                    // ? di una collection di Tag prende solo l'attributo id
                                                                    // ? lo trasforma in un array di id
    }

    public function updateArticle()
    {

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

       //  prima avevo i tags associati 1,2,3,4,5 ora ho 5,6
       // ! sto aggiornando la relazione N a N tra articles e tags usando il metodo sync
       $this->article->tags()->sync($this->tags);

        return redirect()->route('article.index');
    }

    public function render()
    {
        $tagsAll = Tag::all();
        return view('livewire.edit-article-form', compact('tagsAll'));
    }
}

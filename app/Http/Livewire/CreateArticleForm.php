<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticleForm extends Component
{
    public $title;
    public $subtitle;
    public $body;

    protected $rules = [
        'title' => 'required|min:6|max:50',
        'subtitle' => 'required|min:6|max:200',
        'body' => 'required|min:20',
    ];

    protected $messages = [
        'title.required' => 'Il campo title è richiesto.',
        'title.min' => 'Il campo title richiede almeno 6 caratteri.',
        'subtitle.required' => 'Il campo subtitle è richiesto.',
        'body.required' => 'Il campo body è richiesto.',
    ];

    public function store() 
    {
        $this->validate(); // ! valida gli attributi con le regole dell'array $rules:
                           // ! se le regole sono valide va avanti
                           // ! se le regole NON sono blocca l'esecuzione e ritorna gli errori

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        $this->reset(); // ! resetta i valori degli attributi
    
    }

    // public function updated($propertyName) // ! valida tutti gli attributi in un'unica funzione
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function updatedTitle() // ! faccio la validazione in tempo reale solo dell'attributo title
    {
        $this->validateOnly('title');
    }

    public function updatedSubtitle() // ! la validazione per campo singolo deve essere scritta con un metodo che si                                     
    {                                 // ! che si chiama updatedNomeAttributo  $this->validateOnly('nome_attributo')
        $this->validateOnly('subtitle');
    }

    public function updatedBody() 
    {
        $this->validateOnly('body');
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}

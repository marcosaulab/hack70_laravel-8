<x-layout>

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h1>Modifica Articolo: {{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-12">
                <livewire:edit-article-form :article="$article" />
            </div>
        </div>
    </div>


</x-layout>
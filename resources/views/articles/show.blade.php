<x-layout>

    <div class="container my-4">
        <div class="row">
            <div class="col-10">
                <h1>{{ $article->title }}</h1>
            </div>
            <div class="col-2">
                <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-6">
                <p class="lead">
                    <span class="fw-bold">Subtitle:</span>
                    {{ $article->subtitle }}
                </p>
                <p class="lead">
                    <span class="fw-bold">Creato il:</span>
                    {{ $article->created_at->diffForHumans() }}
                </p>
                <p class="lead">
                    <span class="fw-bold">Tag:</span>
                    <ul class="list-group">
                        {!! $article->getFormattedTags() !!}
                    </ul>
                </p>
            </div>
            <div class="col-6">
                <p class="lead">
                    <span class="fw-bold">Testo dell'articolo:</span>
                    <br>
                    {{ $article->body }}
                </p>
            </div>
        </div>
    </div>


</x-layout>
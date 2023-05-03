<div class="border border-success p-4">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Creato Il</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th>{{ $article->title }}</th>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->created_at->format('d/m/Y') }}</td>
                    <td>
                        <button wire:click="deleteArticle({{$article}})" class="btn btn-danger" type="button">Cancella</button>
                        <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">Modifica</a>
                        <a href="{{ route('article.show', $article) }}" class="btn btn-success">Vedi</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button wire:click="increment">Incrementa qualcosa</button>
    <h2>{{ $addNumber }}</h2>
</div>

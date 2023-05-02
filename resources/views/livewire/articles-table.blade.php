<div class="border border-success p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Creato Il</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th>{{ $article->title }}</th>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button wire:click="increment">Incrementa qualcosa</button>
    <h2>{{ $addNumber }}</h2>
</div>

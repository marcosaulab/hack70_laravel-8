<div class="border border-success p-4 bg-warning">
    <form wire:submit.prevent="updateArticle()">

        <div class="mb-3">
            <label for="title" class="form-label">Title </label>
            <input type="text" class="form-control" wire:model.lazy="title">
            @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle </label>
            <input type="text" class="form-control" wire:model.lazy="subtitle">
            @error('subtitle') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea cols="30" rows="10" class="form-control" wire:model="body"></textarea>
            @error('body') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="tags">Tags</label>
            <select wire:model.defer="tags" class="form-control" multiple>
                @foreach ($tagsAll as $tag)
                    <option value="{{ $tag->id }}"
                        @if (in_array($tag->id, $tags))
                            selected
                        @endif
                        >{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>   

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
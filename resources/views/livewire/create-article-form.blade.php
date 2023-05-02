<div class="border border-success p-4">
    <form wire:submit.prevent="store()">

        <div class="mb-3">
            <label for="title" class="form-label">Title ( {{ $title }} ) </label>
            <input type="text" class="form-control"  wire:model="title">
            @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle ( {{ $subtitle }} )</label>
            <input type="text" class="form-control"  wire:model="subtitle">
            @error('subtitle') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body ( {{ $body }} )</label>
            <textarea cols="30" rows="10" class="form-control" wire:model="body"></textarea>
            @error('body') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>

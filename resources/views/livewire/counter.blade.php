<div class="border border-success p-4">
    <div class="d-flex justify-content-around">
        <button class="btn btn-success" wire:click="increment">+</button>
        <button class="btn btn-warning" wire:click="decrement">-</button>
        <button class="btn btn-success" wire:click="incrementByNumber(5)">+ 5</button>
        <button class="btn btn-warning" wire:click="decrementByNumber(5)">- 5</button>
        <label for="">Aggiungi un numero al counter</label>
        <input type="text" wire:model="numberToAdd">
        <p class="lead">{{ $numberToAdd }}</p>
        <button class="btn btn-primary" wire:click="addNumberToCounter">Aggiungi</button>
        
        <h2>{{ $count }}</h2>
    </div>
</div>
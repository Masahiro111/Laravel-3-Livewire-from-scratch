<div class="card offset-3 col-6">
    <div class="card-header">
        counter App
    </div>
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>

        @endif
        <h1 class="text-primary">your count is : {{ $count }}</h1>
        <button wire:click="increment" class="btn btn-primary">Incrementing</button>
        <button wire:click="decrement" class="btn btn-secondary">Decrementing</button>
    </div>

    {{--
    <livewire:create-user /> --}}
</div>
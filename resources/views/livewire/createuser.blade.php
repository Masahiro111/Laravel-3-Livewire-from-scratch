<div class="card-body">
    {{ $name }}
    {{ $email }}
    <input type="text" wire:model.live="name">

    @foreach ($users as $user)
    <div wire:key="{{ $user->id }}">
        <p>{{ $user->email}}</p>
    </div>
    @endforeach
</div>
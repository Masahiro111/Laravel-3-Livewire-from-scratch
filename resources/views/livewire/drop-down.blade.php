<div class="offset-4 col-6">
    <h1 class="h5">Dynamic Dependent Dropdown</h1>
    <div class="mb-3">
        <select wire:model.live="selectedcounty" class="form-select">
            <option value="">Select county</option>
            @foreach ($counties as $county)
            <option value="{{ $county->id }}">{{ $county->name }}</option>
            @endforeach
        </select>
    </div>
    @if(!is_null($selectedcounty))
    <div class="mb-3">
        <select wire:model="selectedsubcounty" class="form-select">
            <option value="">select subcounty</option>
            @foreach ($subcounties as $subcounty)
            <option value="{{ $subcounty->id }}">{{ $subcounty->name }}</option>
            @endforeach
        </select>
    </div>
    @endif
</div>
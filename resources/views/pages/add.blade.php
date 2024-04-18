<?php
    use App\Models\Customer;
    use function Livewire\Volt\{state,computed};
    state(['search']);
    $customers = computed(function () {
        return Customer::select('id', 'name', 'phone', 'address')
            ->whereAny(['name', 'phone', 'address'], 'LIKE', "%$this->search%")
            ->orderBy('name','asc')
            ->limit(10)
            ->get();
    });
?>
<x-layouts.app>
    @volt
        <div>
            <h4 class="mb-3">Tambah Pesanan</h4>
            <div class="" x-data="{ open: false, selected: false }">
                <input x-show="!selected" type="search" wire:model.live="search" class="form-control" @focus="open = true"
                    @blur="open = false" placeholder="Cari pelanggan...">
                <ul x-cloak x-show="open" class="list-group mt-3">
                    <li class="list-group-item list-group-item-action list-group-item-success py-5" @click="selected = true">
                        + Pelanggan baru
                    </li>
                    @foreach ($this->customers as $customer)
                        <li class="list-group-item list-group-item-action" @click="selected = true">
                            <h5>{{$customer->name}}</h5>
                            <h6>{{$customer->address}}</h6>
                            <h6>{{$customer->phone}}</h6>
                        </li>
                    @endforeach
                </ul>
                <div x-cloak class="" x-show="selected">
                    <input type="text" name="" id="">
                </div>
            </div>
        </div>
    @endvolt
</x-layouts.app>

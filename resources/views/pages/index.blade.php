@php
    use Livewire\Volt\Volt;

@endphp
<x-layouts.app>
    @volt
        <div>
            <input type="search" class="form-control form-control-lg mb-3" placeholder="Cari...">
            <div class="mb-3">
                <input type="checkbox" class="btn-check" id="ongoing-check" autocomplete="off">
                <label class="btn btn-outline-primary" for="ongoing-check">Ongoing</label>
                <input type="checkbox" class="btn-check" id="selesai-check" autocomplete="off">
                <label class="btn btn-outline-primary" for="selesai-check">Selesai</label>
                <input type="checkbox" class="btn-check" id="batal-check" autocomplete="off">
                <label class="btn btn-outline-primary" for="batal-check">Batal</label>
            </div>
            <div class="d-flex align-items-center justify-content-center gap-3 flex-column">
                @for ($i = 0; $i < 5; $i++)
                    <div class="card w-100" x-data="{ open: false }">
                        <div class="card-body p-0">
                            <div class="p-3" @click="open = !open">

                                <div class="d-flex align-items-center justify-content-between  mb-3">
                                    <h5 class="card-title">{{ fake()->name }}</h5>
                                    <span class="badge rounded-pill text-bg-warning">Ongoing</span>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted ">
                                    <i class="fa-regular fa-clock"></i>
                                    5 April, 12.00
                                </h6>
                                <h6 class="card-subtitle mb-3 text-muted ">{{ fake()->address }}</h6>
                                <ul class="list-group">
                                    <li class="list-group-item ">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>14 Item</span>
                                            <span>20.000</span>
                                        </div>
                                        <div class="text-muted fw-light">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Total</span>
                                        <span>20.000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Terbayar</span>
                                        <span>-20.000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                                        <span>Total Bayar</span>
                                        <span>20.000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 pt-0" x-cloak x-transition x-show="open">
                                <div class="d-flex gap-1">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-warning me-auto">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button class="btn btn-primary">
                                        Bayar
                                    </button>
                                    <button class="btn btn-success">
                                        Antar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    @endvolt
</x-layouts.app>

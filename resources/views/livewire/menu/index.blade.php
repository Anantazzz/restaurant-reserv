<div class="mb-5">

    {{-- Header --}}
    <div class="text-center my-5">
        <h1 class="display-4 fw-bold text-primary">
            Welcome to Our Restaurant!
        </h1>
        <p class="lead text-secondary mt-3">
            Explore our delicious menu below.
        </p>
    </div>

    {{-- Grid menu --}}
    <div class="container">
        <div class="row g-4">
            @foreach($menus as $menu)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card h-100 shadow-sm overflow-hidden transition">

                        {{-- Image --}}
                        <div class="position-relative">
                            <img src="{{ asset('images/' . $menu->foto) }}"
                                 alt="{{ $menu->name }}"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                            {{-- badge kategori --}}
                            <span class="position-absolute top-0 start-0 m-3 badge bg-primary">
                                {{ $menu->category }}
                            </span>
                        </div>

                        {{-- Konten --}}
                        <div class="card-body d-flex flex-column gap-3">
                            <h2 class="card-title h5 fw-bold">
                                {{ $menu->name }}
                            </h2>
                            <p class="card-text text-secondary small">
                                {{ $menu->description }}
                            </p>

                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                {{-- Price --}}
                                <span class="fs-5 fw-bold text-warning">
                                    ${{ number_format($menu->price, 2) }}
                                </span>
                                {{-- Button order --}}
                                <button class="btn btn-success">
                                    Order Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

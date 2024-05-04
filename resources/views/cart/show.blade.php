<x-layout>

    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">{{ __('Shopping Cart') }}</h3>

                    </div>

                    @forelse ($products as $product)
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{Storage::url($product->img_path)}}" class="img-fluid rounded-3" alt="{{ $product->fa_title }}">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">{{ $product->fa_title }}</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="">-</i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="{{ $product->count }}" type="number" class="form-control form-control-sm" />

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="">+</i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0"> {{number_format($product->price * $product->count) }} تومان</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">

                                    <a href="#!" class="text-danger"><i class="">Delete</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse







                    <div class="card">
                        <div class="card-body">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-layout>
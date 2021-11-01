<!-- PRODUCT-->
<div class="col-lg-3 col-sm-6">
    <div class="product text-center skel-loader">
        <div class="d-block mb-3 position-relative">
            <a class="d-block" href="{{ route('frontend.product') }}">
                <img class="img-fluid w-100" src="{{ asset('frontend/img/product-1.jpg') }}" alt="Product Image"></a>
            <div class="product-overlay">
                <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0">
                        <a class="btn btn-sm btn-outline-dark" href="#">
                            <i class="far fa-heart"></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0 p-0">
                        <a class="btn btn-sm btn-dark" href="#">Add to cart</a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <h6>
            <a class="reset-anchor" href="{{ route('frontend.product') }}">
                Kui Ye Chen’s AirPods
            </a>
        </h6>
        <p class="small text-muted">$250</p>
    </div>
</div>

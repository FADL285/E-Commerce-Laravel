<div class="row m-sm-0">
    <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
        <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
            <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
                <img class="w-100" src="{{ asset('frontend/img/product-detail-1.jpg') }}" alt="Product Image #1">
            </div>
            <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
                <img class="w-100" src="{{ asset('frontend/img/product-detail-2.jpg') }}" alt="Product Image #2">
            </div>
            <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
                <img class="w-100" src="{{ asset('frontend/img/product-detail-3.jpg') }}" alt="Product Image #3">
            </div>
            <div class="owl-thumb-item flex-fill mb-2">
                <img class="w-100" src="{{ asset('frontend/img/product-detail-4.jpg') }}" alt="Product Image #4">
            </div>
        </div>
    </div>
    <div class="col-sm-10 order-1 order-sm-2">
        <div class="owl-carousel product-slider" data-slider-id="1">
            <a class="d-block" href="{{ asset('frontend/img/product-detail-1.jpg') }}" data-lightbox="product" title="Product item 1">
                <img class="img-fluid" src="{{ asset('frontend/img/product-detail-1.jpg') }}" alt="Product #1">
            </a>
            <a class="d-block" href="{{ asset('frontend/img/product-detail-2.jpg') }}" data-lightbox="product" title="Product item 2">
                <img class="img-fluid" src="{{ asset('frontend/img/product-detail-2.jpg') }}" alt="Product #2">
            </a>
            <a class="d-block" href="{{ asset('frontend/img/product-detail-3.jpg') }}" data-lightbox="product" title="Product item 3">
                <img class="img-fluid" src="{{ asset('frontend/img/product-detail-3.jpg') }}" alt="Product #3">
            </a>
            <a class="d-block" href="{{ asset('frontend/img/product-detail-4.jpg') }}" data-lightbox="product" title="Product item 4">
                <img class="img-fluid" src="{{ asset('frontend/img/product-detail-4.jpg') }}" alt="Product #4">
            </a>
        </div>
    </div>
</div>

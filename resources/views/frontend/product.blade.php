<x-app-layouts.app>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <!-- PRODUCT SLIDER-->
                    <x-product.slider />
                </div>
                <!-- PRODUCT DETAILS-->
                <div class="col-lg-6">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item m-0">
                            <i class="fas fa-star small text-warning"></i>
                        </li>
                        <li class="list-inline-item m-0">
                            <i class="fas fa-star small text-warning"></i>
                        </li>
                        <li class="list-inline-item m-0">
                            <i class="fas fa-star small text-warning"></i>
                        </li>
                        <li class="list-inline-item m-0">
                            <i class="fas fa-star small text-warning"></i>
                        </li>
                        <li class="list-inline-item m-0">
                            <i class="fas fa-star small text-warning"></i>
                        </li>
                    </ul>
                    <h1>Red digital smartwatch</h1>
                    <p class="text-muted lead">$250</p>
                    <p class="text-small mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.
                    </p>
                    <div class="row align-items-stretch mb-4">
                        <div class="col-sm-5 pr-sm-0">
                            <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <label>
                                        <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                    </label>
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 pl-sm-0">
                            <a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.blade.php">
                                Add to cart
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-link text-dark p-0 mb-4" href="#">
                        <i class="far fa-heart mr-2"></i>
                        Add to wish list
                    </a>
                    <br>
                    <ul class="list-unstyled small d-inline-block">
                        <li class="px-3 py-2 mb-1 bg-white">
                            <strong class="text-uppercase">SKU:</strong>
                            <span class="ml-2 text-muted">039</span>
                        </li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted">
                            <strong class="text-uppercase text-dark">Category:</strong>
                            <a class="reset-anchor ml-2" href="#">Demo Products</a>
                        </li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted">
                            <strong class="text-uppercase text-dark">Tags:</strong>
                            <a class="reset-anchor ml-2" href="#">Innovation</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- DETAILS TABS-->
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                        Description
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                        Reviews
                    </a>
                </li>
            </ul>
            <div class="tab-content mb-5" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="p-4 p-lg-5 bg-white">
                        <h6 class="text-uppercase">Product description </h6>
                        <p class="text-muted text-small mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="p-4 p-lg-5 bg-white">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="media mb-3">
                                    <img class="rounded-circle" src="{{ asset('frontend/img/customer-1.png') }}" alt="customer" width="50">
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                        <ul class="list-inline mb-1 text-xs">
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                        <p class="text-small mb-0 text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                                <div class="media"><img class="rounded-circle" src="{{ asset('frontend/img/customer-2.png') }}" alt="customer" width="50">
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                        <ul class="list-inline mb-1 text-xs">
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item m-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>

                                        <p class="text-small mb-0 text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RELATED PRODUCTS-->
            <x-product.related />
        </div>
    </section>
</x-app-layouts.app>

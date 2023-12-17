@extends("layouts.principal")
@section("title", "Home Page - Online Store")
@section("content")
<div class="container py-5">
</div>
                <div class="row">
                    @foreach($datas['datas'] as $data)
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <a href="#"><img src="{{ asset('/img/tenis carusel 9.jpg') }}" class="img-fluid rounded"></a>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">{{$data->getName()}}</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <a class="btn btn-primary" href="{{ route('product.show', ['id' => $data->getId()])}}">
                                    <p class="text-center mb-0">${{$data->getPrice()}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
</div>
@endsection
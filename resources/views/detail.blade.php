@extends('layouts.front')

@section('content')

<section class="product-area pt-80 pb-25">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="product-images mb-40">
                <img src="{{ asset('storage/produks/' . $produk->image) }}" alt="Product Image" style="width: 500px; height: 400px;">
             </div>
          </div>
          <div class="col-lg-6">
             <div class="product-details">
                <h3 class="product-title mb-10">{{$produk->nama_produk}}</h3>
                <div class="product-meta mb-20">
                   <div class="ratings">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                   </div>
                </div>
                <p class="product-price mb-15">
                   <span>RP. {{$produk->harga}}</span>
                </p>
                <p class="product-description mb-20">
                  {{$produk->deskripsi}}
                </p>
                <div class="product-action mb-30">
                   <div class="quantity">  
                      <span class="cart-minus"><i class="far fa-minus"></i></span>
                      <input class="cart-input" type="text" value="1">
                      <span class="cart-plus"><i class="far fa-plus"></i></span>
                   </div>
                   <button class="btn btn-primary"><i class="fal fa-shopping-cart"></i> Add To Cart</button>
                   <a href="#" class="wishlist"><i class="fal fa-heart"></i></a>
                </div>
                <div class="product-dot mb-30">
                   <a href="#" class="variation-item"><span class="dot bg-primary"></span></a>
                   <a href="#" class="variation-item"><span class="dot bg-danger"></span></a>
                   <a href="#" class="variation-item"><span class="dot bg-warning"></span></a>
                   <a href="#" class="variation-item"><span class="dot bg-purple"></span></a>
                </div>
                <div class="product-condition">
                   <a href="#"><img src="assets/img/icon/product-det-1.png" alt="" class="img-hover"></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection

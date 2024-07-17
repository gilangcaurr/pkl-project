@extends('layouts.front')
@section('content')
<!-- product-filter-area-start -->
<div class="product-filter-area pt-65 pb-80">
    <div class="container">
       <div class="product-filter-content mb-40">
          <div class="row align-items-center">
             <div class="col-sm-6">
                <div class="product-item-count">
                   <span><b>12</b> Item On List</span>
                </div>
             </div>
             <div class="col-sm-6">
                <div class="product-navtabs d-flex justify-content-end align-items-center">
                   <div class="tp-shop-selector">
                      <select>
                         <option>Show 12</option>
                         <option>Show 14</option>
                         <option>Show 08</option>
                         <option>Show 20</option>
                      </select>
                   </div>
                   <div class="tpproductnav tpnavbar product-filter-nav">
                      <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab"
                               data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                               aria-selected="true"><i class="fal fa-list-ul"></i></button>

                            <button class="nav-link active" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                               aria-selected="false"><i class="fal fa-th"></i></button>
                         </div>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <section class="product-area pb-65">
       <div class="container">
          <div class="row"> 
          </div>

          <div class="row">
            @foreach($produk as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/produks/' . $item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <a href="{{url('produk', $item->id)}}" class="btn btn-primary">Lihat detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
       </div>
    </section>
     </div>
 </div>
 <!-- product-filter-area-end -->
@endsection

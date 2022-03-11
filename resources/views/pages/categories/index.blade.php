@section('title', 'Halaman Produk')
@extends('layouts.templates.main')
@section('main-content')
<div class="contactus">
    <div class="container-fluid">
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="title">
                      <h2>Our Products</h2>
                     
                   </div>
                </div>
             </div>
           </div>
 </div>
 <div class="ourproduct">
   <div class="container">
      <div class="row product_style_3">
       <!-- product -->
       @foreach($data as $list)
       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
         <div class="full product">
           <div class="product_img">
             <div class="center"> <img src="{{ $list->image }}" alt="#"/>
               <div class="overlay_hover"> <a class="add-bt" href="{{ route('categories.show', $list->slug) }}">detail</a> </div>
             </div>
           </div>
           <div class="product_detail text_align_center">
             <p class="product_price">{{ "Rp " . number_format($list->price,2,',','.')}} <span class="old_price">{{ "Rp " . number_format($list->price,2,',','.');  }}</span></p>
             <p class="product_descr">{{ substr($list->name,0, 10) }}</p>
           </div>
         </div>
       </div>
       @endforeach
      </div>
    </div>
  </div>
  
 @endsection
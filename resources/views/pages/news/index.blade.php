@section('title', 'Halaman News')
@extends('layouts.templates.main')
@section('main-content')
<div class="contactus">
    <div class="container-fluid">
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="title">
                      <h2>News</h2>
                     
                   </div>
                </div>
             </div>
           </div>
 </div>
 <div class="blog">
   <div class="container">
     <div class="row">
        @foreach($data as $list)
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                <a href="{{ route('news', $list->slug) }}">
                     <div class="news-box">
                         <figure><img src="{{ $list->image }}" alt="img" /></figure>
                         <h3>{{ $list->name }}</h3>
                         <p>{{ $list->content }}</p>
                     </div>
                    </a>
                 </div>
         @endforeach
                
     </div>
   </div>
 </div>
 @endsection
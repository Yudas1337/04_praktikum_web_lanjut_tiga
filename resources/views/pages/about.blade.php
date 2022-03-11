@section('title', 'Halaman About')
@extends('layouts.templates.main')
@section('main-content')
<div class="contactus">
    <div class="container-fluid">
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="title">
                      <h2>About</h2>
                     
                   </div>
                </div>
             </div>
           </div>
 </div>
 <div class="about">
   <div class="container">
     <div class="row">
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
         <div class="aboutimg">
         <h3>{{ $data->title }}</h3>
         <p>{{ $data->description }}</p>
         </div>
       </div>
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
         <div class="aboutimg">
         <figure><img src="{{ $data->image }}"/></figure>
         </div>
       </div>
     </div>
   </div>
 </div>

 @endsection
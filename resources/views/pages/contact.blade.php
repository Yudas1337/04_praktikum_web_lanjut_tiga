@section('title', 'Halaman Contact')
@extends('layouts.templates.main')
@section('main-content')
<div class="contactus">
    <div class="container-fluid">
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="title">
                      <h2>Contact Us</h2>
                     
                   </div>
                </div>
             </div>
           </div>
 </div>
       <!-- map -->
    <div class="contact">
          <div class="container-fluid padddd">
            
             <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                 <div class="map_section">
                      <div id="map">
                      </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                 <form class="main_form" method="POST" action="{{ url('contact-us') }}">
                    @csrf
                    <div class="row">
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                          <input class="form-control" autocomplete="off" placeholder="Name" type="text" name="name">
                       </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                          <input class="form-control" autocomplete="off" placeholder="Email" type="text" name="email">
                       </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                          <input class="form-control" autocomplete="off" placeholder="Phone" type="text" name="phone">
                       </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                          <textarea class="textarea" autocomplete="off" placeholder="Message" type="text" name="message"></textarea>
                       </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                          <button class="send">Send</button>
                       </div>
                    </div>
                 </form>
                </div> 
             </div>
          </div>
       </div>
       <!-- end map --> 
@endsection
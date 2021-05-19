@extends('konten')
@section('content')


<div class="col-md-8">

  <!-- Classic Heading -->
  @include('flash::message') 
  <h2 class="classic-title">
    <span class="dongker-color"> Hubungi Kami </span>
  </h2>
  <!-- Start Contact Form -->
  <form method="post" action="/hubungi-kami" role="form" id="contactForm" data-toggle="validator" class="shake">
    @csrf
    <div class="form-group">
      <div class="controls">
        <input type="text" name="name" id="name" placeholder="Nama" required data-error="Please enter your name">
        <div class="help-block with-errors"></div>
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
        <input type="email" name="email" class="email" id="email" placeholder="Email" required data-error="Please enter your email">
        <div class="help-block with-errors"></div>
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
        <input type="text" name="telephone" id="telephone" placeholder="Telepone" required data-error="Please enter your Telephone">
        <div class="help-block with-errors"></div>
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
        <input type="text" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
        <div class="help-block with-errors"></div>
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
        <textarea id="message" name="message" rows="7" placeholder="Isi Pesan" required data-error="Write your message"></textarea>
        <div class="help-block with-errors"></div>
      </div>  
    </div>


    <button type="submit" id="submit" class="btn-system btn-large">Kirim</button>
    <div id="msgSubmit" class="h3 text-center hidden"></div> 
    <div class="clearfix"></div>   

  </form>     
  <!-- End Contact Form -->

</div>

@endsection 




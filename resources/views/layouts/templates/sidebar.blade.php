  <nav id="sidebar">

    <div id="dismiss">
        <i class="fa fa-arrow-left"></i>
    </div>

    <ul class="list-unstyled components">
        
          <li class="{{ (Request::is('/') ? 'active' : '') }}"> <a href="{{ route('indexPage') }}">Home</a></li>
          <li class="{{ (Request::is('category') ? 'active' : '') }}"> <a href="{{ route('category') }}">Products</a></li>
          <li class="{{ (Request::is('news') ? 'active' : '') }}"> <a href="{{ route('news') }}">News</a></li>
          <li class="{{ (Request::is('program') ? 'active' : '') }}"> <a href="{{ route('program') }}">Program</a></li>
          <li class="{{ (Request::is('about-us') ? 'active' : '') }}"> <a href="{{ route('about-us') }}">About us</a></li>
          <li class="{{ (Request::is('contact-us') ? 'active' : '') }}"> <a href="{{ url('contact-us') }}">Contact us</a></li>

    </ul>

</nav>
  <nav class="navbar navbar-expand-sm  navbar-dark" id="navbar">
    <a class="navbar-brand" href="#">
      <img src="C:\Users\Dell\Desktop\IP project\New folder\logo.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
  </div>
   <div class="container-fluid">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="/">home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">services</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('Issues.mechanical')}}">Mechanical Issues</a></li>
          <li><a class="dropdown-item" href="{{route('Issues.electrical')}}">Electrical Issues</a></li>
          <li><a class="dropdown-item" href="{{route('Issues.tire')}}">Tire-Related Issues</a></li>
          <li><a class="dropdown-item" href="{{route('Issues.other')}}">Other Issues</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">advices</a>
        <ul class="dropdown-menu">
          <li><a href="{{route('Advice.HowToDrive')}}"  class="dropdown-item">How To Protect Your Vehicle?</a></li>
          <li><a href="{{route('Advice.fatigue')}}"class="dropdown-item">Driver Fatigue</a></li>
          <li><a href="{{route('Advice.chilsafety')}}"class="dropdown-item">Child Safety</a></li>
          <li><a href="{{route('Advice.preTrip')}}"class="dropdown-item">Pre-Trip Checkup</a></li>
        </ul>
      </li>
    </ul>
    <div >
    <form action="/login/store" method="post">
      @csrf
    <a href="/login" class="rounded-pill">Login</a>
    </form>
    </div>
    </div>
  </div>
  </nav>
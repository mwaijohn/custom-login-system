<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Login System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01" >
      <ul class="navbar-nav mr-auto">
      @if(!isset(Auth::user()->email))
        <li class="nav-item">
          <a class="nav-link" href="/register">REGISTER</a>
        </li>
      @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
          @if(isset(Auth::user()->email))
         <li class="nav-item">
          <a class="nav-link" href="#">{{Auth::user()->name}}</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
         </li>
         @else
         <li class="nav-item">
           <a class="nav-link" href="/login">Login</a>
         </li>
         @endif

      </ul>
    </div>
</nav>
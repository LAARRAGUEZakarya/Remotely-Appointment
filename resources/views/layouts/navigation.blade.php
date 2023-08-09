<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">R-Appointment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Appointment</a>
          </li>
     
          
         
        </ul>
        @if(Auth::user())
            
                <li class="nav-item d-flex">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                </li>

                <li class="nav-item d-flex ms-4">
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="submit" class="nav-link" value="Log out">
                    
                    </form>
                
                </li>
               
            
        @else
                <li class="nav-item d-flex">
                    <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item d-flex ms-4">
                    <a class="nav-link" href="register">Register</a>
                </li>
            
        @endif  
      </div>
    </div>
  </nav>
        
     
     

     
                     

                 
                  


          
        

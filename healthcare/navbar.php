<head>
<link rel="stylesheet" href="navstyle.css">
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="img\logo-removebg-preview.png" alt="Logo" style="max-height: 40px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Services/service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vacancy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Equipment</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form>
        <div class="ml-auto">
            <button class="btn btn-login" onclick="popup('login-popup')" id="loginBtn">Login</button>
            <button class="btn btn-signup" onclick="popup('register-popup')" id="signupBtn">Signup</button>
        </div>
    </nav>


    <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>


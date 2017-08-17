<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]);  ?>
    </script>
</head>
<body style = "background: url('/img/background.jpg');background-position:center center;backgroud-repeat:no-repeat;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href={{ url('/') }}>Ruet.medic.com</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="/admin">Admin Home</a></li>
      <li class="active"><a href="/admin/show">Show User ID</a></li>
      <li class="active"><a href="/admin/doctors">Set Doctor's Information</a></li>
       <li class="active"><a href="/admin/show_doctors">View Doctors</a></li>
        <li class="active"><a href="/blog/create">Set News</a></li>
        <li class="active"><a href="/admin/prescribe">Prescribe</a></li>
        <li class="active"><a href="/admin/show_entry">Pres. List</a></li>
        <li class="active"><a href="/admin/change_admin">Change Adminship</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
      <li><a href="{{ url('/login') }}" ><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
         @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                              @endif

    </ul>
  </div>
</nav>
  @yield('content')
  


</body>
</html>

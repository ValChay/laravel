<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Blog laravel</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap.css') }}
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('home') }}">Home/a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            @if(Auth::check())
              <li><a href="{{ URL::route('home.admin') }}">Administration<</a> /li>
            
            @else
               <li><a href="{{ URL::route('users.login') }}">Se connecter</a></li>
            @endif
            @if(Auth::check())
              <li class="pull-right"><a href="{{ URL::route('users.logout') }}">Se déconnecter</a></li>
            @endif  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <!-- plus besoin de précisé dans les vue permet de faire passé des message flash d'erreur ou de succées-simplement vue que déjà intégrer dans le layout->
      @if(Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
      @endif
      
      @if(Session::has('success'))
        <div class="alert alert-danger">{{ Session::get('success') }}</div>
      @endif    

    @yield('content')


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"') }}
    {{ HTML::script('bootstrap.js') }}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>

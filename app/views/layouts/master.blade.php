<html>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listener Manager | @yield('title', 'Untitled Page')</title>

    <!-- load yahoo's pure css -->
    {{ HTML::style('css/style.css') }}
    
  </head>


  <body>
    <div class="content">
    <div class="header">
        <div class="pure-menu pure-menu-open pure-menu-fixed pure-menu-horizontal ">
            <a class="pure-menu-heading" href="">Listener Manager</a>

            <ul>
                <li class="pure-menu-selected"><a href="#">Home</a></li>
                <li><a href="#">Monitor</a></li>
                <li><a href="#">Configuration</a></li>
                <li><a href="#">Setting</a></li>
            </ul>
        </div>
    </div>

    <div class="pure-g">
    @yield('content')
	</div>
	
    <div class="footer">
		
    </div>

  </body>


</html>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Games Store</a>
    </div>


      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li><a href="{{ route('product.shoppingCart')}}"><i class="glyphicon glyphicon-shopping-cart" ></i> Shopping Cart
              <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty:''}}</span></a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                      <i class="glyphicon glyphicon-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endguest
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--
<ul class="nav navbar-nav navbar-right">
  <li><a href="#"><i class="glyphicon glyphicon-shopping-cart" ></i> Shopping Cart</a></li>
  <li><a href="{{ route('register') }}"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Register</a></li>
    </ul>
  -->

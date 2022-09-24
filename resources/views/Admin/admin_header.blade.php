<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top navBar mx-auto">
        <div class="container">

      <a class="navbar-brand" href="#">
          <i class="fas fa-users-cog fa-2x text-warning logo"></i>
        <span class="brand">Admin</span>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav main-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dish.create')}}">CreateDishes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{route('dish.index')}}">Edit Dishes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('meal.index')}}">Meals</a>
          </li>
        </ul>

      </div>
    </div><!-- container -->
    </nav>
  </header>

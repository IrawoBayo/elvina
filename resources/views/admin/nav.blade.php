

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/admin')}}">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.create')}}">
              <span data-feather="file"></span>
              Add Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">
              <span data-feather="shopping-cart"></span>
              List Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">
              <span data-feather="users"></span>
              Categories
            </a>
          </li>
          
        </ul>
      </div>
    </nav>
<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          
          @if(auth()->check())
          <a href="#" class="nav-link">{{ auth()->user()->name }}</a>
          @endif
        </nav>
      </div>
    </div>
<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark"> -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="/">Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto"> -->
        <!-- The navbar - The <a> elements are used to jump to a section in the scrollable area -->
<ul class="navbar-nav">

          <li class="{{Request::is('section1') ? 'active' : ''}}">
            <a class="nav-link" href="#section1">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="{{Request::is('section2') ? 'active' : ''}}">
            <a class="nav-link" href="#section2">About</a>
          </li>
          <li class="{{Request::is('section3') ? 'active' : ''}}">
            <a class="nav-link" href="#section3">Portfolio</a>
          </li>
          <li class="{{Request::is('section4') ? 'active' : ''}}">
            <a class="nav-link" href="#section4">Testimonials</a>
          </li>
          <li class="{{Request::is('section5') ? 'active' : ''}}">
            <a class="nav-link" href="#section5">Contact</a>
          </li>
         <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> 
      </div>-->
    </nav>
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Navbar</b></h1>
      <p><h3><i>Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.</i></h3> </p>

      <!-- containt past -->
     <h3>How it works</h3>
     <p>Here’s what you need to know before getting started with the navbar:</p>
     <img src="image/nav1.jpg" alt="nav1" class="me-5" width="100%" >
     <br>
<h2 class=w3-text-blue>Supported content</h2>
<P>Navbars come with built-in support for a handful of sub-components. Choose from the following as needed:</P>
<img src="image/nav2.jpg" alt="nav2" class="me-5" width="100%" >
<p>Here’s an example of all the sub-components included in a responsive light-themed navbar that automatically collapses at the lg (large) breakpoint.</p>
<br>
<img src="image/nav3.jpg" alt="nav3" class="me-5" width="100%" >
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
        </textarea>
</div>
</div>
<p>This example uses background (bg-body-tertiary) and spacing (me-auto, mb-2, mb-lg-0, me-2) utility classes.</p>
<br>
<h2 class=w3-text-blue>Brand</h2>
<p>The .navbar-brand can be applied to most elements, but an anchor works best, as some elements might require utility classes or custom styles.</p>
<br>
<h2 class=w3-text-blue>Text</h2>
<P>Add your text within an element with the .navbar-brand class.</P>
<img src="image/nav4.jpg" alt="nav4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>

<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Image </h2>
<P>You can replace the text within the .navbar-brand with an <img>.</P>
<img src="image/nav5.jpg" alt="nav5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
    </a>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Image and text</h2>
<P>You can also make use of some additional utilities to add an image and text at the same time. Note the addition of .d-inline-block and .align-text-top on the < img>.</P>
<img src="image/nav6.jpg" alt="nav6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Nav</h2>
<P>Navbar navigation links build on our .nav options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned.</P>
<p>Add the .active class on .nav-link to indicate the current page.</p>
<p>Please note that you should also add the aria-current attribute on the active .nav-link.</p>
<img src="image/nav7.jpg" alt="nav7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</textarea>
<p>And because we use classes for our navs, you can avoid the list-based approach entirely if you like.</p>
<br>
<img src="image/nav8.jpg" alt="nav8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
</textarea>
<p>You can also use dropdowns in your navbar. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below.</p>
<br>
<img src="image/nav9.jpg" alt="nav9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Forms</h2>
<P>Place various form controls and components within a navbar:</P>
<img src="image/nav10.jpg" alt="nav10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
</textarea>
<p>Immediate child elements of .navbar use flex layout and will default to justify-content: space-between. Use additional flex utilities as needed to adjust this behavior.</p>
<br>
<img src="image/nav11.jpg" alt="nav11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
</textarea>
<p>Input groups work, too. If your navbar is an entire form, or mostly a form, you can use the <form> element as the container and save some HTML.</p>
<br>
<img src="image/nav12.jpg" alt="nav12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
</nav>
</textarea>
<p>Various buttons are supported as part of these navbar forms, too. This is also a great reminder that vertical alignment utilities can be used to align different sized elements.</p>
<br>
<img src="image/nav13.jpg" alt="nav13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button">Main button</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Text</h2>
<P>Navbars may contain bits of text with the help of .navbar-text. This class adjusts vertical alignment and horizontal spacing for strings of text.</P>
<img src="image/nav14.jpg" alt="nav14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
</textarea>
<p>Mix and match with other components and utilities as needed.</p>
<br>
<img src="image/nav15.jpg" alt="nav15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Color schemes  </h2>
<P>Navbar themes are easier than ever thanks to Bootstrap’s combination of Sass and CSS variables. The default is our “light navbar” for use with light background colors, but you can also apply data-bs-theme="dark" to the .navbar parent for dark background colors. Then, customize with .bg-* and additional utilities.</P>
<img src="image/nav16.jpg" alt="nav16" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar bg-primary" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Containers</h2>
<P>Although it’s not required, you can wrap a navbar in a .container to center it on a page–though note that an inner container is still required. Or you can add a container inside the .navbar to only center the contents of a fixed or static top navbar.</P>
<img src="image/nav17.jpg" alt="nav17" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav>
</div>
</textarea>
<p>Use any of the responsive containers to change how wide the content in your navbar is presented.</p>
<br>
<img src="image/nav18.jpg" alt="nav18" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-md">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Placement </h2>
<P>Use our position utilities to place navbars in non-static positions. Choose from fixed to the top, fixed to the bottom, stickied to the top (scrolls with the page until it reaches the top, then stays there), or stickied to the bottom (scrolls with the page until it reaches the bottom, then stays there).</P>
<p>Fixed navbars use position: fixed, meaning they’re pulled from the normal flow of the DOM and may require custom CSS (e.g., padding-top on the < body>) to prevent overlap with other elements.</p>
<img src="image/nav19.jpg" alt="nav19" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Default</a>
  </div>
</nav>
</textarea>
<br>
<img src="image/nav20.jpg" alt="nav20" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed top</a>
  </div>
</nav>
</textarea>
<br>
<img src="image/nav21.jpg" alt="nav21" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar fixed-bottom bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed bottom</a>
  </div>
</nav>
</textarea>
<br>
<img src="image/nav22.jpg" alt="nav22" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar sticky-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sticky top</a>
  </div>
</nav>
</textarea>
<br>
<img src="image/nav23.jpg" alt="nav23" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<nav class="navbar sticky-bottom bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sticky bottom</a>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Scrolling</h2>
<p>Add .navbar-nav-scroll to a .navbar-nav (or other navbar sub-component) to enable vertical scrolling within the toggleable contents of a collapsed navbar. By default, scrolling kicks in at 75vh (or 75% of the viewport height), but you can override that with the local CSS custom property --bs-navbar-height or custom styles. At larger viewports when the navbar is expanded, content will appear as it does in a default navbar.</p>
<p>Please note that this behavior comes with a potential drawback of overflow—when setting overflow-y: auto (required to scroll the content here), overflow-x is the equivalent of auto, which will crop some horizontal content.</p>
<p>Here’s an example navbar using .navbar-nav-scroll with style="--bs-scroll-height: 100px;", with some extra margin utilities for optimum spacing.</p>
<img src="image/nav24.jpg" alt="nav24" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</textarea>
<br><br>
<h2 class=w3-text-blue>Responsive behaviors</h2>
<p>Navbars can use .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl|-xxl} classes to determine when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.</p>
<p>For navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.</p>
<br>
<h2 class=w3-text-blue>Toggler</h2>
<p>Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.</p>
<p>With no .navbar-brand shown at the smallest breakpoint:</p>
<img src="image/nav25.jpg" alt="nav25" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Hidden brand</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</textarea>
<p>With a brand name shown on the left and toggler on the right:</p>
<br>
<img src="image/nav26.jpg" alt="nav26" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</textarea>
<p>With a toggler on the left and brand name on the right:</p>
<br>
<img src="image/nav27.jpg" alt="nav27" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>External content</h2>
<P>Sometimes you want to use the collapse plugin to trigger a container element for content that structurally sits outside of the .navbar . Because our plugin works on the id and data-bs-target matching, that’s easily done!</P>
<img src="image/nav28.jpg" alt="nav28" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
  <div class="bg-dark p-4">
    <h5 class="text-body-emphasis h4">Collapsed content</h5>
    <span class="text-body-secondary">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</textarea>
<p>When you do this, we recommend including additional JavaScript to move the focus programmatically to the container when it is opened. Otherwise, keyboard users and users of assistive technologies will likely have a hard time finding the newly revealed content - particularly if the container that was opened comes before the toggler in the document’s structure. We also recommend making sure that the toggler has the aria-controls attribute, pointing to the id of the content container. In theory, this allows assistive technology users to jump directly from the toggler to the container it controls–but support for this is currently quite patchy.</p>
<br>
<h2 class=w3-text-blue>Offcanvas</h2>
<P>Transform your expanding and collapsing navbar into an offcanvas drawer with the offcanvas component. We extend both the offcanvas default styles and use our .navbar-expand-* classes to create a dynamic and flexible navigation sidebar.</P>
<p>In the example below, to create an offcanvas navbar that is always collapsed across all breakpoints, omit the .navbar-expand-* class entirely.</p>
<img src="image/nav29.jpg" alt="nav29" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</textarea>
<p>To create an offcanvas navbar that expands into a normal navbar at a specific breakpoint like lg, use .navbar-expand-lg.</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <a class="navbar-brand" href="#">Offcanvas navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
    ...
  </div>
</nav>
</textarea>
<p>When using offcanvas in a dark navbar, be aware that you may need to have a dark background on the offcanvas content to avoid the text becoming illegible. In the example below, we add .navbar-dark and .bg-dark to the .navbar, .text-bg-dark to the .offcanvas, .dropdown-menu-dark to .dropdown-menu, and .btn-close-white to .btn-close for proper styling with a dark offcanvas.</p>
<br>
<img src="image/nav30.jpg" alt="nav30" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas dark navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</textarea>
<br>
<h2>CSS</h2>
<h2 class=w3-text-blue>Variables</h2>
<P>As part of Bootstrap’s evolving CSS variables approach, navbars now use local CSS variables on .navbar for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}navbar-padding-x: #{if($navbar-padding-x == null, 0, $navbar-padding-x)};
--#{$prefix}navbar-padding-y: #{$navbar-padding-y};
--#{$prefix}navbar-color: #{$navbar-light-color};
--#{$prefix}navbar-hover-color: #{$navbar-light-hover-color};
--#{$prefix}navbar-disabled-color: #{$navbar-light-disabled-color};
--#{$prefix}navbar-active-color: #{$navbar-light-active-color};
--#{$prefix}navbar-brand-padding-y: #{$navbar-brand-padding-y};
--#{$prefix}navbar-brand-margin-end: #{$navbar-brand-margin-end};
--#{$prefix}navbar-brand-font-size: #{$navbar-brand-font-size};
--#{$prefix}navbar-brand-color: #{$navbar-light-brand-color};
--#{$prefix}navbar-brand-hover-color: #{$navbar-light-brand-hover-color};
--#{$prefix}navbar-nav-link-padding-x: #{$navbar-nav-link-padding-x};
--#{$prefix}navbar-toggler-padding-y: #{$navbar-toggler-padding-y};
--#{$prefix}navbar-toggler-padding-x: #{$navbar-toggler-padding-x};
--#{$prefix}navbar-toggler-font-size: #{$navbar-toggler-font-size};
--#{$prefix}navbar-toggler-icon-bg: #{escape-svg($navbar-light-toggler-icon-bg)};
--#{$prefix}navbar-toggler-border-color: #{$navbar-light-toggler-border-color};
--#{$prefix}navbar-toggler-border-radius: #{$navbar-toggler-border-radius};
--#{$prefix}navbar-toggler-focus-width: #{$navbar-toggler-focus-width};
--#{$prefix}navbar-toggler-transition: #{$navbar-toggler-transition};
</textarea>
<p>Some additional CSS variables are also present on .navbar-nav:</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}nav-link-padding-x: 0;
--#{$prefix}nav-link-padding-y: #{$nav-link-padding-y};
@include rfs($nav-link-font-size, --#{$prefix}nav-link-font-size);
--#{$prefix}nav-link-font-weight: #{$nav-link-font-weight};
--#{$prefix}nav-link-color: var(--#{$prefix}navbar-color);
--#{$prefix}nav-link-hover-color: var(--#{$prefix}navbar-hover-color);
--#{$prefix}nav-link-disabled-color: var(--#{$prefix}navbar-disabled-color);
</textarea>
<p>Customization through CSS variables can be seen on the .navbar-dark class where we override specific values without adding duplicate CSS selectors.</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}navbar-color: #{$navbar-dark-color};
--#{$prefix}navbar-hover-color: #{$navbar-dark-hover-color};
--#{$prefix}navbar-disabled-color: #{$navbar-dark-disabled-color};
--#{$prefix}navbar-active-color: #{$navbar-dark-active-color};
--#{$prefix}navbar-brand-color: #{$navbar-dark-brand-color};
--#{$prefix}navbar-brand-hover-color: #{$navbar-dark-brand-hover-color};
--#{$prefix}navbar-toggler-border-color: #{$navbar-dark-toggler-border-color};
--#{$prefix}navbar-toggler-icon-bg: #{escape-svg($navbar-dark-toggler-icon-bg)};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<P>Variables for all navbars:</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$navbar-padding-y:                  $spacer * .5;
$navbar-padding-x:                  null;

$navbar-nav-link-padding-x:         .5rem;

$navbar-brand-font-size:            $font-size-lg;
// Compute the navbar-brand padding-y so the navbar-brand will have the same height as navbar-text and nav-link
$nav-link-height:                   $font-size-base * $line-height-base + $nav-link-padding-y * 2;
$navbar-brand-height:               $navbar-brand-font-size * $line-height-base;
$navbar-brand-padding-y:            ($nav-link-height - $navbar-brand-height) * .5;
$navbar-brand-margin-end:           1rem;

$navbar-toggler-padding-y:          .25rem;
$navbar-toggler-padding-x:          .75rem;
$navbar-toggler-font-size:          $font-size-lg;
$navbar-toggler-border-radius:      $btn-border-radius;
$navbar-toggler-focus-width:        $btn-focus-width;
$navbar-toggler-transition:         box-shadow .15s ease-in-out;

$navbar-light-color:                rgba(var(--#{$prefix}emphasis-color-rgb), .65);
$navbar-light-hover-color:          rgba(var(--#{$prefix}emphasis-color-rgb), .8);
$navbar-light-active-color:         rgba(var(--#{$prefix}emphasis-color-rgb), 1);
$navbar-light-disabled-color:       rgba(var(--#{$prefix}emphasis-color-rgb), .3);
$navbar-light-icon-color:           rgba($body-color, .75);
$navbar-light-toggler-icon-bg:      url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{$navbar-light-icon-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
$navbar-light-toggler-border-color: rgba(var(--#{$prefix}emphasis-color-rgb), .15);
$navbar-light-brand-color:          $navbar-light-active-color;
$navbar-light-brand-hover-color:    $navbar-light-active-color;
</textarea>
<p>Variables for the dark navbar:</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$navbar-dark-color:                 rgba($white, .55);
$navbar-dark-hover-color:           rgba($white, .75);
$navbar-dark-active-color:          $white;
$navbar-dark-disabled-color:        rgba($white, .25);
$navbar-dark-icon-color:            $navbar-dark-color;
$navbar-dark-toggler-icon-bg:       url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{$navbar-dark-icon-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
$navbar-dark-toggler-border-color:  rgba($white, .1);
$navbar-dark-brand-color:           $navbar-dark-active-color;
$navbar-dark-brand-hover-color:     $navbar-dark-active-color;
</textarea>
<br>
<h2 class=w3-text-blue>Sass loops</h2>
<p>Responsive navbar expand/collapse classes (e.g., .navbar-expand-lg) are combined with the $breakpoints map and generated through a loop in scss/_navbar.scss.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
// Generate series of `.navbar-expand-*` responsive classes for configuring
// where your navbar collapses.
.navbar-expand {
  @each $breakpoint in map-keys($grid-breakpoints) {
    $next: breakpoint-next($breakpoint, $grid-breakpoints);
    $infix: breakpoint-infix($next, $grid-breakpoints);

    // stylelint-disable-next-line scss/selector-no-union-class-name
    &#{$infix} {
      @include media-breakpoint-up($next) {
        flex-wrap: nowrap;
        justify-content: flex-start;

        .navbar-nav {
          flex-direction: row;

          .dropdown-menu {
            position: absolute;
          }

          .nav-link {
            padding-right: var(--#{$prefix}navbar-nav-link-padding-x);
            padding-left: var(--#{$prefix}navbar-nav-link-padding-x);
          }
        }

        .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-collapse {
          display: flex !important; // stylelint-disable-line declaration-no-important
          flex-basis: auto;
        }

        .navbar-toggler {
          display: none;
        }

        .offcanvas {
          // stylelint-disable declaration-no-important
          position: static;
          z-index: auto;
          flex-grow: 1;
          width: auto !important;
          height: auto !important;
          visibility: visible !important;
          background-color: transparent !important;
          border: 0 !important;
          transform: none !important;
          @include box-shadow(none);
          @include transition(none);
          // stylelint-enable declaration-no-important

          .offcanvas-header {
            display: none;
          }

          .offcanvas-body {
            display: flex;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible;
          }
        }
      }
    }
  }
}
</textarea>


</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

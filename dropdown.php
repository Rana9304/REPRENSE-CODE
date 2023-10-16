<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Dropdowns</b></h1>
      <p><h3><i>Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.</i></h3> </p>

      <!-- containt past -->
     <h3>Overview</h3>
     <p>Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not by hovering; this is an intentional design decision.</p>
     <p>Dropdowns are built on a third party library, Popper, which provides dynamic positioning and viewport detection. Be sure to include popper.min.js before Bootstrap’s JavaScript or use bootstrap.bundle.min.js / bootstrap.bundle.js which contains Popper. Popper isn’t used to position dropdowns in navbars though as dynamic positioning isn’t required.</p>
     <br>
<h2 class=w3-text-blue>Accessibility</h2>
<P>The WAI ARIA standard defines an actual role="menu" widget, but this is specific to application-like menus which trigger actions or functions. ARIA menus can only contain menu items, checkbox menu items, radio button menu items, radio button groups, and sub-menus.</P>
<p>Bootstrap’s dropdowns, on the other hand, are designed to be generic and applicable to a variety of situations and markup structures. For instance, it is possible to create dropdowns that contain additional inputs and form controls, such as search fields or login forms. For this reason, Bootstrap does not expect (nor automatically add) any of the role and aria- attributes required for true ARIA menus. Authors will have to include these more specific attributes themselves.</p>
<p>However, Bootstrap does add built-in support for most standard keyboard menu interactions, such as the ability to move through individual .dropdown-item elements using the cursor keys and close the menu with the Esc key.</p>
<br>
<h2 class=w3-text-blue>Examples</h2>
<P>Wrap the dropdown’s toggle (your button or link) and the dropdown menu within .dropdown, or another element that declares position: relative;. Ideally, you should use a < button> element as the dropdown trigger, but the plugin will work with <a> elements as well. The examples shown here use semantic <ul> elements where appropriate, but custom markup is supported.</P>
<br>
<h2 class=w3-text-blue>Single button</h2>
<P>Any single .btn can be turned into a dropdown toggle with some markup changes. Here’s how you can put them to work with < button> elements:</P>
     <img src="image/drp1.jpg" alt="drp1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
        </textarea>
</div>
</div>
<p>While < button> is the recommended control for a dropdown toggle, there might be situations where you have to use an <a> element. If you do, we recommend adding a role="button" attribute to appropriately convey control’s purpose to assistive technologies such as screen readers.</p>
<br>
<img src="image/drp2.jpg" alt="drp2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
</textarea>
<p>The best part is you can do this with any button variant, too:</p>
<img src="image/drp3.jpg" alt="drp3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Split button</h2>
<P>Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of .dropdown-toggle-split for proper spacing around the dropdown caret.</P>
<p>We use this extra class to reduce the horizontal padding on either side of the caret by 25% and remove the margin-left that’s added for regular button dropdowns. Those extra changes keep the caret centered in the split button and provide a more appropriately sized hit area next to the main button.</p>
<img src="image/drp4.jpg" alt="drp4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Sizing</h2>
<P>Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</P>
<img src="image/drp5.jpg" alt="drp5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Large button groups (default and split) -->
<div class="btn-group">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Large button
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-lg" type="button">
    Large split button
  </button>
  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
</textarea>
<br>
<img src="image/drp6.jpg" alt="drp6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Small button
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-sm" type="button">
    Small split button
  </button>
  <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dark dropdowns</h2>
<P>Opt into darker dropdowns to match a dark navbar or custom style by adding .dropdown-menu-dark onto an existing .dropdown-menu. No changes are required to the dropdown items.</P>
<img src="image/drp7.jpg" alt="drp7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
</textarea>
<p>And putting it to use in a navbar:</p>
<br>
<img src="image/drp8.jpg" alt="drp8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
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
<h2>Directions</h2>
<br>
<h2 class=w3-text-blue>Centered</h2>
<P>Make the dropdown menu centered below the toggle with .dropdown-center on the parent element.</P>
<img src="image/drp9.jpg" alt="drp9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="dropdown-center">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Centered dropdown
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action two</a></li>
    <li><a class="dropdown-item" href="#">Action three</a></li>
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dropup</h2>
<P>Trigger dropdown menus above elements by adding .dropup to the parent element.</P>
<img src="image/drp10.jpg" alt="drp10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Default dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropup
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>

<!-- Split dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary">
    Split dropup
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dropup centered</h2>
<P>Make the dropup menu centered above the toggle with .dropup-center on the parent element.</P>
<img src="image/drp11.jpg" alt="drp11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropup-center dropup">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Centered dropup
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action two</a></li>
    <li><a class="dropdown-item" href="#">Action three</a></li>
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dropend</h2>
<P>Trigger dropdown menus at the right of the elements by adding .dropend to the parent element.</P>
<img src="image/drp12.jpg" alt="drp12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Default dropend button -->
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropend
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>

<!-- Split dropend button -->
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary">
    Split dropend
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropend</span>
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dropstart</h2>
<P>Trigger dropdown menus at the left of the elements by adding .dropstart to the parent element.</P>
<img src="image/drp13.jpg" alt="drp13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Default dropstart button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropstart
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>

<!-- Split dropstart button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropstart</span>
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
  <button type="button" class="btn btn-secondary">
    Split dropstart
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Menu items </h2>
<P>You can use < a> or < button> elements as dropdown items.</P>
<img src="image/drp14.jpg" alt="drp14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
</textarea>
<p>You can also create non-interactive dropdown items with .dropdown-item-text. Feel free to style further with custom CSS or text utilities.</p>
<br>
<img src="image/drp15.jpg" alt="drp15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ul class="dropdown-menu">
  <li><span class="dropdown-item-text">Dropdown item text</span></li>
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
  <li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Active </h2>
<P>Add .active to items in the dropdown to style them as active. To convey the active state to assistive technologies, use the aria-current attribute — using the page value for the current page, or true for the current item in a set.</P>
<img src="image/drp16.jpg" alt="drp16" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Regular link</a></li>
  <li><a class="dropdown-item active" href="#" aria-current="true">Active link</a></li>
  <li><a class="dropdown-item" href="#">Another link</a></li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Disabled</h2>
<P>Add .disabled to items in the dropdown to style them as disabled.</P>
<img src="image/drp17.jpg" alt="drp17" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Regular link</a></li>
  <li><a class="dropdown-item disabled" aria-disabled="true">Disabled link</a></li>
  <li><a class="dropdown-item" href="#">Another link</a></li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Menu alignment</h2>
<P>By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. You can change this with the directional .drop* classes, but you can also control them with additional modifier classes.</P>
<p>Add .dropdown-menu-end to a .dropdown-menu to right align the dropdown menu. Directions are mirrored when using Bootstrap in RTL, meaning .dropdown-menu-end will appear on the left side.</p>
<img src="image/drp18.jpg" alt="drp18" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Right-aligned menu example
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Responsive alignment</h2>
<P>If you want to use responsive alignment, disable dynamic positioning by adding the data-bs-display="static" attribute and use the responsive variation classes.</P>
<p>To align right the dropdown menu with the given breakpoint or larger, add .dropdown-menu{-sm|-md|-lg|-xl|-xxl}-end.</p>
<img src="image/drp19.jpg" alt="drp19" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Left-aligned but right aligned when large screen
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
</textarea>
<p>To align left the dropdown menu with the given breakpoint or larger, add .dropdown-menu-end and .dropdown-menu{-sm|-md|-lg|-xl|-xxl}-start.</p>
<img src="image/drp20.jpg" alt="drp20" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Right-aligned but left aligned when large screen
  </button>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
</textarea>
<p>Note that you don’t need to add a data-bs-display="static" attribute to dropdown buttons in navbars, since Popper isn’t used in navbars.</p>
<br>
<h2 class=w3-text-blue>Alignment options</h2>
<P>Taking most of the options shown above, here’s a small kitchen sink demo of various dropdown alignment options in one place.</P>
<img src="image/drp21.jpg" alt="drp21" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Right-aligned menu
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Left-aligned, right-aligned lg
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Right-aligned, left-aligned lg
  </button>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropstart
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropend
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropup
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>
</textarea>
<br>
<h2>Menu content </h2>
<br>
<h2 class=w3-text-blue>Headers</h2>
<P>Add a header to label sections of actions in any dropdown menu.</P>
<img src="image/drp22.jpg" alt="drp22" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<ul class="dropdown-menu">
  <li><h6 class="dropdown-header">Dropdown header</h6></li>
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Dividers</h2>
<P>Separate groups of related menu items with a divider.</P>
<img src="image/drp23.jpg" alt="drp23" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
  <li><a class="dropdown-item" href="#">Something else here</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="#">Separated link</a></li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Text</h2>
<P>Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll likely need additional sizing styles to constrain the menu width.</P>
<img src="image/drp24.jpg" alt="drp24" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropdown-menu p-4 text-body-secondary" style="max-width: 200px;">
  <p>
    Some example text that's free-flowing within the dropdown menu.
  </p>
  <p class="mb-0">
    And this is more example text.
  </p>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Forms</h2>
<P>Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding utilities to give it the negative space you require.</P>
<img src="image/drp25.jpg" alt="drp25" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropdown-menu">
  <form class="px-4 py-3">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
</textarea>
<img src="image/drp26.jpg" alt="drp26" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
    Dropdown form
  </button>
  <form class="dropdown-menu p-4">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dropdown options</h2>
<P>Use data-bs-offset or data-bs-reference to change the location of the dropdown.</P>
<img src="image/drp27.jpg" alt="drp27" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="d-flex">
  <div class="dropdown me-1">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
      Offset
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-secondary">Reference</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Auto close behavior</h2>
<P>By default, the dropdown menu is closed when clicking inside or outside the dropdown menu. You can use the autoClose option to change this behavior of the dropdown.</P>
<img src="image/drp28.jpg" alt="drp28" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    Default dropdown
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
    Clickable inside
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
    Clickable outside
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
    Manual close
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>
</textarea>
<br>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, dropdowns now use local CSS variables on .dropdown-menu for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}dropdown-zindex: #{$zindex-dropdown};
--#{$prefix}dropdown-min-width: #{$dropdown-min-width};
--#{$prefix}dropdown-padding-x: #{$dropdown-padding-x};
--#{$prefix}dropdown-padding-y: #{$dropdown-padding-y};
--#{$prefix}dropdown-spacer: #{$dropdown-spacer};
@include rfs($dropdown-font-size, --#{$prefix}dropdown-font-size);
--#{$prefix}dropdown-color: #{$dropdown-color};
--#{$prefix}dropdown-bg: #{$dropdown-bg};
--#{$prefix}dropdown-border-color: #{$dropdown-border-color};
--#{$prefix}dropdown-border-radius: #{$dropdown-border-radius};
--#{$prefix}dropdown-border-width: #{$dropdown-border-width};
--#{$prefix}dropdown-inner-border-radius: #{$dropdown-inner-border-radius};
--#{$prefix}dropdown-divider-bg: #{$dropdown-divider-bg};
--#{$prefix}dropdown-divider-margin-y: #{$dropdown-divider-margin-y};
--#{$prefix}dropdown-box-shadow: #{$dropdown-box-shadow};
--#{$prefix}dropdown-link-color: #{$dropdown-link-color};
--#{$prefix}dropdown-link-hover-color: #{$dropdown-link-hover-color};
--#{$prefix}dropdown-link-hover-bg: #{$dropdown-link-hover-bg};
--#{$prefix}dropdown-link-active-color: #{$dropdown-link-active-color};
--#{$prefix}dropdown-link-active-bg: #{$dropdown-link-active-bg};
--#{$prefix}dropdown-link-disabled-color: #{$dropdown-link-disabled-color};
--#{$prefix}dropdown-item-padding-x: #{$dropdown-item-padding-x};
--#{$prefix}dropdown-item-padding-y: #{$dropdown-item-padding-y};
--#{$prefix}dropdown-header-color: #{$dropdown-header-color};
--#{$prefix}dropdown-header-padding-x: #{$dropdown-header-padding-x};
--#{$prefix}dropdown-header-padding-y: #{$dropdown-header-padding-y};
</textarea>
<p>Customization through CSS variables can be seen on the .dropdown-menu-dark class where we override specific values without adding duplicate CSS selectors.</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}dropdown-color: #{$dropdown-dark-color};
--#{$prefix}dropdown-bg: #{$dropdown-dark-bg};
--#{$prefix}dropdown-border-color: #{$dropdown-dark-border-color};
--#{$prefix}dropdown-box-shadow: #{$dropdown-dark-box-shadow};
--#{$prefix}dropdown-link-color: #{$dropdown-dark-link-color};
--#{$prefix}dropdown-link-hover-color: #{$dropdown-dark-link-hover-color};
--#{$prefix}dropdown-divider-bg: #{$dropdown-dark-divider-bg};
--#{$prefix}dropdown-link-hover-bg: #{$dropdown-dark-link-hover-bg};
--#{$prefix}dropdown-link-active-color: #{$dropdown-dark-link-active-color};
--#{$prefix}dropdown-link-active-bg: #{$dropdown-dark-link-active-bg};
--#{$prefix}dropdown-link-disabled-color: #{$dropdown-dark-link-disabled-color};
--#{$prefix}dropdown-header-color: #{$dropdown-dark-header-color};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables </h2>
<p>Variables for all dropdowns:</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$dropdown-min-width:                10rem;
$dropdown-padding-x:                0;
$dropdown-padding-y:                .5rem;
$dropdown-spacer:                   .125rem;
$dropdown-font-size:                $font-size-base;
$dropdown-color:                    var(--#{$prefix}body-color);
$dropdown-bg:                       var(--#{$prefix}body-bg);
$dropdown-border-color:             var(--#{$prefix}border-color-translucent);
$dropdown-border-radius:            var(--#{$prefix}border-radius);
$dropdown-border-width:             var(--#{$prefix}border-width);
$dropdown-inner-border-radius:      calc(#{$dropdown-border-radius} - #{$dropdown-border-width}); // stylelint-disable-line function-disallowed-list
$dropdown-divider-bg:               $dropdown-border-color;
$dropdown-divider-margin-y:         $spacer * .5;
$dropdown-box-shadow:               $box-shadow;

$dropdown-link-color:               var(--#{$prefix}body-color);
$dropdown-link-hover-color:         $dropdown-link-color;
$dropdown-link-hover-bg:            var(--#{$prefix}tertiary-bg);

$dropdown-link-active-color:        $component-active-color;
$dropdown-link-active-bg:           $component-active-bg;

$dropdown-link-disabled-color:      var(--#{$prefix}tertiary-color);

$dropdown-item-padding-y:           $spacer * .25;
$dropdown-item-padding-x:           $spacer;

$dropdown-header-color:             $gray-600;
$dropdown-header-padding-x:         $dropdown-item-padding-x;
$dropdown-header-padding-y:         $dropdown-padding-y;
// fusv-disable
$dropdown-header-padding:           $dropdown-header-padding-y $dropdown-header-padding-x; // Deprecated in v5.2.0
// fusv-enable
</textarea>
<p>Variables for the dark dropdown:</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$dropdown-dark-color:               $gray-300;
$dropdown-dark-bg:                  $gray-800;
$dropdown-dark-border-color:        $dropdown-border-color;
$dropdown-dark-divider-bg:          $dropdown-divider-bg;
$dropdown-dark-box-shadow:          null;
$dropdown-dark-link-color:          $dropdown-dark-color;
$dropdown-dark-link-hover-color:    $white;
$dropdown-dark-link-hover-bg:       rgba($white, .15);
$dropdown-dark-link-active-color:   $dropdown-link-active-color;
$dropdown-dark-link-active-bg:      $dropdown-link-active-bg;
$dropdown-dark-link-disabled-color: $gray-500;
$dropdown-dark-header-color:        $gray-500;
</textarea>
<p>Variables for the CSS-based carets that indicate a dropdown’s interactivity:</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$caret-width:                 .3em;
$caret-vertical-align:        $caret-width * .85;
$caret-spacing:               $caret-width * .85;
</textarea>
<br>
<h2 class=w3-text-blue>Sass mixins</h2>
<p>Mixins are used to generate the CSS-based carets and can be found in scss/mixins/_caret.scss.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@mixin caret-down($width: $caret-width) {
  border-top: $width solid;
  border-right: $width solid transparent;
  border-bottom: 0;
  border-left: $width solid transparent;
}

@mixin caret-up($width: $caret-width) {
  border-top: 0;
  border-right: $width solid transparent;
  border-bottom: $width solid;
  border-left: $width solid transparent;
}

@mixin caret-end($width: $caret-width) {
  border-top: $width solid transparent;
  border-right: 0;
  border-bottom: $width solid transparent;
  border-left: $width solid;
}

@mixin caret-start($width: $caret-width) {
  border-top: $width solid transparent;
  border-right: $width solid;
  border-bottom: $width solid transparent;
}

@mixin caret(
  $direction: down,
  $width: $caret-width,
  $spacing: $caret-spacing,
  $vertical-align: $caret-vertical-align
) {
  @if $enable-caret {
    &::after {
      display: inline-block;
      margin-left: $spacing;
      vertical-align: $vertical-align;
      content: "";
      @if $direction == down {
        @include caret-down($width);
      } @else if $direction == up {
        @include caret-up($width);
      } @else if $direction == end {
        @include caret-end($width);
      }
    }

    @if $direction == start {
      &::after {
        display: none;
      }

      &::before {
        display: inline-block;
        margin-right: $spacing;
        vertical-align: $vertical-align;
        content: "";
        @include caret-start($width);
      }
    }

    &:empty::after {
      margin-left: 0;
    }
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<p>Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the .show class on the parent .dropdown-menu. The data-bs-toggle="dropdown" attribute is relied on for closing dropdown menus at an application level, so it’s a good idea to always use it.</p>
<br>
<h2 class=w3-text-blue>Via data attributes</h2>
<p>Add data-bs-toggle="dropdown" to a link or button to toggle a dropdown.</p>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="dropdown">
  <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown trigger
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Via JavaScript</h2>
<p>Call the dropdowns via JavaScript:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
</textarea>
<br>
<h2 class=w3-text-blue>Options</h2>
<p>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</p>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/drp29.jpg" alt="drp29" class="me-5" width="100%" >
<img src="image/drp30.jpg" alt="drp30" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Using function with popperConfig</h2>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const dropdown = new bootstrap.Dropdown(element, {
  popperConfig(defaultBsPopperConfig) {
    // const newPopperConfig = {...}
    // use defaultBsPopperConfig if needed...
    // return newPopperConfig
  }
})
</textarea>
<br>
<h2 class=w3-text-blue>Methods</h2>
<img src="image/drp31.jpg" alt="drp31" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<p>All dropdown events are fired at the toggling element and then bubbled up. So you can also add event listeners on the .dropdown-menu’s parent element. hide.bs.dropdown and hidden.bs.dropdown events have a clickEvent property (only when the original Event type is click) that contains an Event Object for the click event.</p>
<img src="image/drp32.jpg" alt="drp32" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const myDropdown = document.getElementById('myDropdown')
myDropdown.addEventListener('show.bs.dropdown', event => {
  // do something...
})
</textarea>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Offcanvas</b></h1>
      <p><h3><i>Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.</i></h3> </p>

      <!-- containt past -->
     <h3>How it works </h3>
     <p>Offcanvas is a sidebar component that can be toggled via JavaScript to appear from the left, right, top, or bottom edge of the viewport. Buttons or anchors are used as triggers that are attached to specific elements you toggle, and data attributes are used to invoke our JavaScript.</p>
     <img src="image/off1.jpg" alt="off" class="me-5" width="100%" >
     <p><b>Heads</b> up! Given how CSS handles animations, you cannot use margin or translate on an .offcanvas element. Instead, use the class as an independent wrapping element.</p>
     <h2>Examples</h2>
     <br>
<h2 class=w3-text-blue>Offcanvas components</h2>
<P>Below is an offcanvas example that is shown by default (via .show on .offcanvas). Offcanvas includes support for a header with a close button and an optional body class for some initial padding. We suggest that you include offcanvas headers with dismiss actions whenever possible, or provide an explicit dismiss action.</P>
<img src="image/off2.jpg" alt="off2" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
  </div>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Live demo</h2>
<P>Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the .show class on an element with the .offcanvas class.</P>
<img src="image/off3.jpg" alt="off3" class="me-5" width="100%" >
<p>You can use a link with the href attribute, or a button with the data-bs-target attribute. In both cases, the data-bs-toggle="offcanvas" is required.</p>
<img src="image/off4.jpg" alt="off4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Button with data-bs-target
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Body scrolling</h2>
<P>Scrolling the < body> element is disabled when an offcanvas and its backdrop are visible. Use the data-bs-scroll attribute to enable < body> scrolling.</P>
<img src="image/off5.jpg" alt="off5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Body scrolling and backdrop </h2>
<P>You can also enable < body> scrolling with a visible backdrop.</P>
<img src="image/off6.jpg" alt="off6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Static backdrop</h2>
<P>When backdrop is set to static, the offcanvas will not close when clicking outside of it.</P>
<img src="image/off7.jpg" alt="off7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
  Toggle static offcanvas
</button>

<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      I will not close if you click outside of me.
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dark offcanvas </h2>
<P>Change the appearance of offcanvases with utilities to better match them to different contexts like dark navbars. Here we add .text-bg-dark to the .offcanvas and .btn-close-white to .btn-close for proper styling with a dark offcanvas. If you have dropdowns within, consider also adding .dropdown-menu-dark to .dropdown-menu.</P>
<img src="image/off8.jpg" alt="off8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasDarkLabel">Offcanvas</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvasDark" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Place offcanvas content here.</p>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Responsive  </h2>
<P>Responsive offcanvas classes hide content outside the viewport from a specified breakpoint and down. Above that breakpoint, the contents within will behave as usual. For example, .offcanvas-lg hides content in an offcanvas below the lg breakpoint, but shows the content above the lg breakpoint.</P>
<img src="image/off9.jpg" alt="off9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Toggle offcanvas</button>

<div class="alert alert-info d-none d-lg-block">Resize your browser to show the responsive offcanvas toggle.</div>

<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p class="mb-0">This is content within an <code>.offcanvas-lg</code>.</p>
  </div>
</div>
</textarea>
<p>Responsive offcanvas classes are available across for each breakpoint.</p>
<br>
<img src="image/off10.jpg" alt="off10" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Placement</h2>
<P>There’s no default placement for offcanvas components, so you must add one of the modifier classes below.</P>
<img src="image/off11.jpg" alt="off11" class="me-5" width="100%" >
<p>Try the top, right, and bottom examples out below.</p>
<img src="image/off12.jpg" alt="off12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
</textarea>
<br>
<img src="image/off13.jpg" alt="off13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
</textarea>
<br>
<img src="image/off14.jpg" alt="off14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    ...
  </div>
</div>
</textarea>
<br><h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables </h2>
<p>As part of Bootstrap’s evolving CSS variables approach, offcanvas now uses local CSS variables on .offcanvas for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}offcanvas-zindex: #{$zindex-offcanvas};
--#{$prefix}offcanvas-width: #{$offcanvas-horizontal-width};
--#{$prefix}offcanvas-height: #{$offcanvas-vertical-height};
--#{$prefix}offcanvas-padding-x: #{$offcanvas-padding-x};
--#{$prefix}offcanvas-padding-y: #{$offcanvas-padding-y};
--#{$prefix}offcanvas-color: #{$offcanvas-color};
--#{$prefix}offcanvas-bg: #{$offcanvas-bg-color};
--#{$prefix}offcanvas-border-width: #{$offcanvas-border-width};
--#{$prefix}offcanvas-border-color: #{$offcanvas-border-color};
--#{$prefix}offcanvas-box-shadow: #{$offcanvas-box-shadow};
--#{$prefix}offcanvas-transition: #{transform $offcanvas-transition-duration ease-in-out};
--#{$prefix}offcanvas-title-line-height: #{$offcanvas-title-line-height};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables </h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$offcanvas-padding-y:               $modal-inner-padding;
$offcanvas-padding-x:               $modal-inner-padding;
$offcanvas-horizontal-width:        400px;
$offcanvas-vertical-height:         30vh;
$offcanvas-transition-duration:     .3s;
$offcanvas-border-color:            $modal-content-border-color;
$offcanvas-border-width:            $modal-content-border-width;
$offcanvas-title-line-height:       $modal-title-line-height;
$offcanvas-bg-color:                var(--#{$prefix}body-bg);
$offcanvas-color:                   var(--#{$prefix}body-color);
$offcanvas-box-shadow:              $modal-content-box-shadow-xs;
$offcanvas-backdrop-bg:             $modal-backdrop-bg;
$offcanvas-backdrop-opacity:        $modal-backdrop-opacity;
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<P>The offcanvas plugin utilizes a few classes and attributes to handle the heavy lifting:</P>
<img src="image/off15.jpg" alt="off15" class="me-5" width="100%" >
<p>Add a dismiss button with the data-bs-dismiss="offcanvas" attribute, which triggers the JavaScript functionality. Be sure to use the < button> element with it for proper behavior across all devices.</p>
<br>
<h2>Via data attributes</h2>
<br>
<h2 class=w3-text-blue>Toggle</h2>
<P>Add data-bs-toggle="offcanvas" and a data-bs-target or href to the element to automatically assign control of one offcanvas element. The data-bs-target attribute accepts a CSS selector to apply the offcanvas to. Be sure to add the class offcanvas to the offcanvas element. If you’d like it to default open, add the additional class show.</P>
<br>
<h2 class=w3-text-blue>Dismiss</h2>
<p>Dismissal can be achieved with the data-bs-dismiss attribute on a button within the offcanvas as demonstrated below:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</textarea>
<p>or on a button outside the offcanvas using the additional data-bs-target as demonstrated below:</p>
<br>
<textarea disabled  id="" cols="30" rows="6" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#my-offcanvas" aria-label="Close"></button>
</textarea>
<br>
<h2 class=w3-text-blue>Via JavaScript</h2>
<p>Enable manually with:</p>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const offcanvasElementList = document.querySelectorAll('.offcanvas')
const offcanvasList = [...offcanvasElementList].map(offcanvasEl => new bootstrap.Offcanvas(offcanvasEl))
</textarea>
<br>
<h2 class=w3-text-blue>Options</h2>
<P>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</P>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/off16.jpg" alt="off16" class="me-5" width="100%" >

<br>
<h2 class=w3-text-blue>Methods</h2>
<P>Activates your content as an offcanvas element. Accepts an optional options object.</P>
<p>You can create an offcanvas instance with the constructor, for example:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const bsOffcanvas = new bootstrap.Offcanvas('#myOffcanvas')
</textarea>
<img src="image/off17.jpg" alt="off17" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<P>Bootstrap’s offcanvas class exposes a few events for hooking into offcanvas functionality.</P>
<img src="image/off18.jpg" alt="off18" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const myOffcanvas = document.getElementById('myOffcanvas')
myOffcanvas.addEventListener('hidden.bs.offcanvas', event => {
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


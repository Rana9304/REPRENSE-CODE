<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Carousel</b></h1>
      <p><h3><i>A slideshow component for cycling through elements—images or slides of text—like a carousel.</i></h3> </p>

      <!-- containt past -->
     <h3>Basic examples </h3>
     <p>Here is a basic example of a carousel with three slides. Note the previous/next controls. We recommend using < button> elements, but you can also use <a> elements with role="button".</p>
     <img src="image/car1.jpg" alt="car1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </textarea>
</div>
</div>
<p>Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.</p>
<p>You must add the .active class to one of the slides, otherwise the carousel will not be visible. Also be sure to set a unique id on the .carousel for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a data-bs-target attribute (or href for links) that matches the id of the .carousel element.</p>
<br>
<h2 class=w3-text-blue>Indicators</h2>
<P>You can add indicators to the carousel, alongside the previous/next controls. The indicators let users jump directly to a particular slide.</P>
<img src="image/car2.jpg" alt="car2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Captions</h2>
<P>You can add captions to your slides with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.</P>
<img src="image/car3.jpg" alt="car3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Crossfade</h2>
<P>Add .carousel-fade to your carousel to animate slides with a fade transition instead of a slide. Depending on your carousel content (e.g., text only slides), you may want to add .bg-body or some custom CSS to the .carousel-items for proper crossfading.</P>
<img src="image/car4.jpg" alt="car5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Autoplaying carousels </h2>
<P>You can make your carousels autoplay on page load by setting the ride option to carousel. Autoplaying carousels automatically pause while hovered with the mouse. This behavior can be controlled with the pause option. In browsers that support the Page Visibility API, the carousel will stop cycling when the webpage is not visible to the user (such as when the browser tab is inactive, or when the browser window is minimized).</P>
<img src="image/car5.jpg" alt="car6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<p>When the ride option is set to true, rather than carousel, the carousel won’t automatically start to cycle on page load. Instead, it will only start after the first user interaction.</p>
<br>
<img src="image/car6.jpg" alt="car6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Individual .carousel-item interval</h2>
<P>Add data-bs-interval="" to a .carousel-item to change the amount of time to delay between automatically cycling to the next item.</P>
<img src="image/car7.jpg" alt="car7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Autoplaying carousels without controls</h2>
<P>Here’s a carousel with slides only. Note the presence of the .d-block and .w-100 on carousel images to prevent browser default image alignment.
</P>
<img src="image/car8.jpg" alt="car8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Disable touch swiping </h2>
<P>Carousels support swiping left/right on touchscreen devices to move between slides. This can be disabled by setting the touch option to false.</P>
<img src="image/car9.jpg" alt="car9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dark variant </h2>
<P>Add .carousel-dark to the .carousel for darker controls, indicators, and captions. Controls are inverted compared to their default white fill with the filter CSS property. Captions and controls have additional Sass variables that customize the color and background-color.</P>
<img src="image/car10.jpg" alt="car10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Custom transition</h2>
<P>The transition duration of .carousel-item can be changed with the $carousel-transition-duration Sass variable before compiling or custom styles if you’re using the compiled CSS. If multiple transitions are applied, make sure the transform transition is defined first (e.g. transition: transform 2s ease, opacity .5s ease-out).</P>
<br>
<h2 class=w3-text-blue>CSS</h2>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<P>Variables for all carousels:</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$carousel-control-color:             $white;
$carousel-control-width:             15%;
$carousel-control-opacity:           .5;
$carousel-control-hover-opacity:     .9;
$carousel-control-transition:        opacity .15s ease;

$carousel-indicator-width:           30px;
$carousel-indicator-height:          3px;
$carousel-indicator-hit-area-height: 10px;
$carousel-indicator-spacer:          3px;
$carousel-indicator-opacity:         .5;
$carousel-indicator-active-bg:       $white;
$carousel-indicator-active-opacity:  1;
$carousel-indicator-transition:      opacity .6s ease;

$carousel-caption-width:             70%;
$carousel-caption-color:             $white;
$carousel-caption-padding-y:         1.25rem;
$carousel-caption-spacer:            1.25rem;

$carousel-control-icon-width:        2rem;

$carousel-control-prev-icon-bg:      url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{$carousel-control-color}'><path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg>");
$carousel-control-next-icon-bg:      url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{$carousel-control-color}'><path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/></svg>");

$carousel-transition-duration:       .6s;
$carousel-transition:                transform $carousel-transition-duration ease-in-out; // Define transform transition first if using multiple transitions (e.g., `transform 2s ease, opacity .5s ease-out`)
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<h2>Via data attributes</h2>
<P>Use data attributes to easily control the position of the carousel. data-bs-slide accepts the keywords prev or next, which alters the slide position relative to its current position. Alternatively, use data-bs-slide-to to pass a raw slide index to the carousel data-bs-slide-to="2", which shifts the slide position to a particular index beginning with 0.</P>
<br>
<h2 class=w3-text-blue>Via JavaScript </h2>
<p>Call carousel manually with:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const carousel = new bootstrap.Carousel('#myCarousel')
</textarea>
<br>
<h2 class=w3-text-blue>Options</h2>
<P>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</P>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/car11.jpg" alt="car11" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Methods </h2>
<p>You can create a carousel instance with the carousel constructor, and pass on any additional options. For example, to manually initialize an autoplaying carousel (assuming you’re not using the data-bs-ride="carousel" attribute in the markup itself) with a specific interval and with touch support disabled, you can use:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})
</textarea>
<br>
<img src="image/car12.jpg" alt="car12" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<P>Bootstrap’s carousel class exposes two events for hooking into carousel functionality. Both events have the following additional properties:</P>
<img src="image/car13.jpg" alt="car13" class="me-5" width="100%" >
<p>All carousel events are fired at the carousel itself (i.e. at the < div class="carousel">)</p>
<br>
<img src="image/car14.jpg" alt="car14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const myCarousel = document.getElementById('myCarousel')

myCarousel.addEventListener('slide.bs.carousel', event => {
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

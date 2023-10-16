<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Spinners</b></h1>
      <p><h3><i>Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.</i></h3> </p>
      <br>
      <h2>About</h2>
      <p>Bootstrap “spinners” can be used to show the loading state in your projects. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with our amazing utility classes.</p>
<p>For accessibility purposes, each loader here includes role="status" and a nested < span class="visually-hidden">Loading...< /span>.</p>
      <!-- containt past -->
     <h3>Border spinner </h3>
     <p>Use the border spinners for a lightweight loading indicator.</p>
     <img src="image/spn1.jpg" alt="spn1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="6" class="form-control" >
        <div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Colors </h2>
<P>The border spinner uses currentColor for its border-color, meaning you can customize the color with text color utilities. You can use any of our text color utilities on the standard spinner.</P>
<img src="image/spn2.jpg" alt="spn2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-success" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-warning" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-info" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-light" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-dark" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Growing spinner</h2>
<P>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</P>
<img src="image/spn3.jpg" alt="spn3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="7" class="form-control" >
<div class="spinner-grow" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</textarea>
<p>Once again, this spinner is built with currentColor, so you can easily change its appearance with text color utilities. Here it is in blue, along with the supported variants.</p>
<br>
<img src="image/spn4.jpg" alt="spn4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="spinner-grow text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</textarea>
<br>
<h2>Alignment</h2>
<p>Spinners in Bootstrap are built with rems, currentColor, and display: inline-flex. This means they can easily be resized, recolored, and quickly aligned.</p>
<br>
<h2 class=w3-text-blue>Margin </h2>
<P>Use margin utilities like .m-5 for easy spacing.</P>
<img src="image/spn5.jpg" alt="spn5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="7" class="form-control" >
<div class="spinner-border m-5" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</textarea>
<br>
<h2>Placement</h2>
<p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>
<br>
<h2 class=w3-text-blue>Flex</h2>
<img src="image/spn6.jpg" alt="spn6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</textarea>
<br>
<img src="image/spn7.jpg" alt="spn7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="d-flex align-items-center">
  <strong role="status">Loading...</strong>
  <div class="spinner-border ms-auto" aria-hidden="true"></div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Floats</h2>
<img src="image/spn8.jpg" alt="spn8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="7" class="form-control" >
<div class="clearfix">
  <div class="spinner-border float-end" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Text align</h2>
<img src="image/spn9.jpg" alt="spn9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="text-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Size</h2>
<P>Add .spinner-border-sm and .spinner-grow-sm to make a smaller spinner that can quickly be used within other components.</P>
<img src="image/spn10.jpg" alt="spn10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="spinner-border spinner-border-sm" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</textarea>
<p>Or, use custom CSS or inline styles to change the dimensions as needed.</p>
<br>
<img src="image/spn11.jpg" alt="spn11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Buttons</h2>
<P>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</P>
<img src="image/spn12.jpg" alt="spn12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
  <span class="visually-hidden" role="status">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
  <span role="status">Loading...</span>
</button>
</textarea>
<br>
<img src="image/spn13.jpg" alt="spn13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="13" class="form-control" >
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
  <span class="visually-hidden" role="status">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
  <span role="status">Loading...</span>
</button>
</textarea>
<br>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, spinners now use local CSS variables on .spinner-border and .spinner-grow for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<p>Border spinner variables:</p>
<textarea disabled  id="" cols="30" rows="14" class="form-control" >
--#{$prefix}spinner-width: #{$spinner-width};
--#{$prefix}spinner-height: #{$spinner-height};
--#{$prefix}spinner-vertical-align: #{$spinner-vertical-align};
--#{$prefix}spinner-border-width: #{$spinner-border-width};
--#{$prefix}spinner-animation-speed: #{$spinner-animation-speed};
--#{$prefix}spinner-animation-name: spinner-border;
</textarea>
<p>Growing spinner variables:</p>
<br>
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
--#{$prefix}spinner-width: #{$spinner-width};
--#{$prefix}spinner-height: #{$spinner-height};
--#{$prefix}spinner-vertical-align: #{$spinner-vertical-align};
--#{$prefix}spinner-animation-speed: #{$spinner-animation-speed};
--#{$prefix}spinner-animation-name: spinner-grow;
</textarea>
<p>For both spinners, small spinner modifier classes are used to update the values of these CSS variables as needed. For example, the .spinner-border-sm class does the following:</p>
<br>
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
--#{$prefix}spinner-width: #{$spinner-width-sm};
--#{$prefix}spinner-height: #{$spinner-height-sm};
--#{$prefix}spinner-border-width: #{$spinner-border-width-sm};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
$spinner-width:           2rem;
$spinner-height:          $spinner-width;
$spinner-vertical-align:  -.125em;
$spinner-border-width:    .25em;
$spinner-animation-speed: .75s;

$spinner-width-sm:        1rem;
$spinner-height-sm:       $spinner-width-sm;
$spinner-border-width-sm: .2em;
</textarea>
<br>
<h2 class=w3-text-blue>Keyframes</h2>
<p>Used for creating the CSS animations for our spinners. Included in scss/_spinners.scss.</p>
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
@keyframes spinner-border {
  to { transform: rotate(360deg) #{"/* rtl:ignore */"}; }
}
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
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
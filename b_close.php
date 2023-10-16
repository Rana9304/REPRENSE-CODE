<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Close button</b></h1>
      <p><h3><i>A generic close button for dismissing content like modals and alerts.</i></h3> </p>

      <!-- containt past -->
     <h3>Example </h3>
     <p>Provide an option to dismiss or close a component with .btn-close. Default styling is limited, but highly customizable. Modify the Sass variables to replace the default background-image. Be sure to include text for screen readers, as we’ve done with aria-label.</p>
     <img src="image/clo1.jpg" alt="clo1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="5" class="form-control" >
        <button type="button" class="btn-close" aria-label="Close"></button>
        </textarea>
</div>
</div>

<br>
<h2 class=w3-text-blue>Disabled state</h2>
<P>Disabled close buttons change their opacity. We’ve also applied pointer-events: none and user-select: none to preventing hover and active states from triggering.</P>
<img src="image/clo2.jpg" alt="clo2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn-close" disabled aria-label="Close"></button>
</textarea>
<br>
<h2 class=w3-text-blue>Dark variant</h2>
<P>Add data-bs-theme="dark" to the .btn-close, or to its parent element, to invert the close button. This uses the filter property to invert the background-image without overriding its value.</P>
<img src="image/clo3.jpg" alt="clo3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div data-bs-theme="dark">
  <button type="button" class="btn-close" aria-label="Close"></button>
  <button type="button" class="btn-close" disabled aria-label="Close"></button>
</div>
</textarea>
<br>
<h3>CSS</h3>
<br>
<h2 class=w3-text-blue>Variables</h2>
<P>As part of Bootstrap’s evolving CSS variables approach, close button now uses local CSS variables on .btn-close for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</P>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
--#{$prefix}btn-close-color: #{$btn-close-color};
--#{$prefix}btn-close-bg: #{ escape-svg($btn-close-bg) };
--#{$prefix}btn-close-opacity: #{$btn-close-opacity};
--#{$prefix}btn-close-hover-opacity: #{$btn-close-hover-opacity};
--#{$prefix}btn-close-focus-shadow: #{$btn-close-focus-shadow};
--#{$prefix}btn-close-focus-opacity: #{$btn-close-focus-opacity};
--#{$prefix}btn-close-disabled-opacity: #{$btn-close-disabled-opacity};
--#{$prefix}btn-close-white-filter: #{$btn-close-white-filter};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$btn-close-width:            1em;
$btn-close-height:           $btn-close-width;
$btn-close-padding-x:        .25em;
$btn-close-padding-y:        $btn-close-padding-x;
$btn-close-color:            $black;
$btn-close-bg:               url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{$btn-close-color}'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
$btn-close-focus-shadow:     $focus-ring-box-shadow;
$btn-close-opacity:          .5;
$btn-close-hover-opacity:    .75;
$btn-close-focus-opacity:    1;
$btn-close-disabled-opacity: .25;
$btn-close-white-filter:     invert(1) grayscale(100%) brightness(200%);
</textarea>






</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

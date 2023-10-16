<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Range</b></h1>
      <p> <i>Use our custom range inputs for consistent cross-browser styling and built-in customization.</i> </p>

      <!-- containt past -->
     <h3>Overview</h3>
     <p>Create custom < input type="range"> controls with .form-range. The track (the background) and thumb (the value) are both styled to appear the same across browsers. As only Firefox supports “filling” their track from the left or right of the thumb as a means to visually indicate progress, we do not currently support it.</p>
     <img src="image/rng1.jpg" alt="rng1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <label for="customRange1" class="form-label">Example range</label>
<input type="range" class="form-range" id="customRange1">
        </textarea>
</div>
</div>
<h2 class=w3-text-blue>Disabled</h2>
<P>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</P>
<img src="image/rng2.jpg" alt="rng2" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<label for="disabledRange" class="form-label">Disabled range</label>
<input type="range" class="form-range" id="disabledRange" disabled>
</textarea>
<h2 class=w3-text-blue>Min and max</h2>
<P>Range inputs have implicit values for min and max—0 and 100, respectively. You may specify new values for those using the min and max attributes.</P>
<img src="image/rng3.jpg" alt="rng3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<label for="customRange2" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" id="customRange2">
</textarea>
<h2 class=w3-text-blue>Steps</h2>
<P>By default, range inputs “snap” to integer values. To change this, you can specify a step value. In the example below, we double the number of steps by using step="0.5".</P>
<img src="image/rng4.jpg" alt="rng4" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<label for="customRange3" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
</textarea>
<h2 class=w3-text-blue>CSS</h2>
<br>
<h2>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$form-range-track-width:          100%;
$form-range-track-height:         .5rem;
$form-range-track-cursor:         pointer;
$form-range-track-bg:             var(--#{$prefix}tertiary-bg);
$form-range-track-border-radius:  1rem;
$form-range-track-box-shadow:     $box-shadow-inset;

$form-range-thumb-width:                   1rem;
$form-range-thumb-height:                  $form-range-thumb-width;
$form-range-thumb-bg:                      $component-active-bg;
$form-range-thumb-border:                  0;
$form-range-thumb-border-radius:           1rem;
$form-range-thumb-box-shadow:              0 .1rem .25rem rgba($black, .1);
$form-range-thumb-focus-box-shadow:        0 0 0 1px $body-bg, $input-focus-box-shadow;
$form-range-thumb-focus-box-shadow-width:  $input-focus-width; // For focus box shadow issue in Edge
$form-range-thumb-active-bg:               tint-color($component-active-bg, 70%);
$form-range-thumb-disabled-bg:             var(--#{$prefix}secondary-color);
$form-range-thumb-transition:              background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
</textarea>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
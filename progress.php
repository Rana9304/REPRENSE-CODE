<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Progress</b></h1>
      <p><h3><i>Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.</i></h3> </p>

      <!-- containt past -->
     <h3>How it works </h3>
     <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes. We don’t use the HTML5 < progress> element, ensuring you can stack progress bars, animate them, and place text labels over them.</p>
     <img src="image/pro1.jpg" alt="pro1" class="me-5" width="100%" >
     <p>Put that all together, and you have the following examples.</p>
     <img src="image/pro2.jpg" alt="pro2" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 0%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 25%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 50%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 75%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 100%"></div>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Bar sizing</h2>
<h2>Width</h2>
<p>Bootstrap provides a handful of utilities for setting width. Depending on your needs, these may help with quickly configuring the width of the .progress-bar.</p>
<img src="image/pro3.jpg" alt="pro3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar w-75"></div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Height</h2>
<P>You only set a height value on the .progress container, so if you change that value, the inner .progress-bar will automatically resize accordingly.</P>
<img src="image/pro4.jpg" alt="pro4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
  <div class="progress-bar" style="width: 25%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
  <div class="progress-bar" style="width: 25%"></div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Labels</h2>
<P>Add labels to your progress bars by placing text within the .progress-bar.</P>
<img src="image/pro5.jpg" alt="pro5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 25%">25%</div>
</div>
</textarea>
<p>Note that by default, the content inside the .progress-bar is controlled with overflow: hidden, so it doesn’t bleed out of the bar. If your progress bar is shorter than its label, the content will be capped and may become unreadable. To change this behavior, you can use .overflow-visible from the overflow utilities, but make sure to also define an explicit text color so the text remains readable. Be aware though that currently this approach does not take into account color modes.</p>
<br>
<img src="image/pro6.jpg" alt="pro6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar overflow-visible text-dark" style="width: 10%">Long label text for the progress bar, set to a dark color</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Backgrounds </h2>
<P>Use background utility classes to change the appearance of individual progress bars.</P>
<img src="image/pro7.jpg" alt="pro7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-success" style="width: 25%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-info" style="width: 50%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-warning" style="width: 75%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-danger" style="width: 100%"></div>
</div>
</textarea>
<p>If you’re adding labels to progress bars with a custom background color, make sure to also set an appropriate text color, so the labels remain readable and have sufficient contrast.</p>
<br>
<img src="image/pro8.jpg" alt="pro8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-success" style="width: 25%">25%</div>
</div>
<div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-info text-dark" style="width: 50%">50%</div>
</div>
<div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
</div>
<div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-danger" style="width: 100%">100%</div>
</div>
</textarea>
<p>Alternatively, you can use the new combined color and background helper classes.</p>

<br>
<img src="image/pro9.jpg" alt="pro9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar text-bg-warning" style="width: 75%">75%</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Multiple bars </h2>
<P>You can include multiple progress components inside a container with .progress-stacked to create a single stacked progress bar. Note that in this case, the styling to set the visual width of the progress bar must be applied to the .progress elements, rather than the .progress-bars.</P>
<img src="image/pro10.jpg" alt="pro10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="progress-stacked">
  <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
    <div class="progress-bar"></div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
    <div class="progress-bar bg-success"></div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <div class="progress-bar bg-info"></div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Striped</h2>
<P>Add .progress-bar-striped to any .progress-bar to apply a stripe via CSS gradient over the progress bar’s background color.
</P>
<img src="image/pro11.jpg" alt="pro11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped" style="width: 10%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-warning" style="width: 75%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%"></div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Animated stripes</h2>
<P>The striped gradient can also be animated. Add .progress-bar-animated to .progress-bar to animate the stripes right to left via CSS3 animations.</P>
<img src="image/pro12.jpg" alt="pro12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
</div>
</textarea>
<br>
<h2>CSS </h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, progress bars now use local CSS variables on .progress for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}progress-height: #{$progress-height};
@include rfs($progress-font-size, --#{$prefix}progress-font-size);
--#{$prefix}progress-bg: #{$progress-bg};
--#{$prefix}progress-border-radius: #{$progress-border-radius};
--#{$prefix}progress-box-shadow: #{$progress-box-shadow};
--#{$prefix}progress-bar-color: #{$progress-bar-color};
--#{$prefix}progress-bar-bg: #{$progress-bar-bg};
--#{$prefix}progress-bar-transition: #{$progress-bar-transition};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$progress-height:                   1rem;
$progress-font-size:                $font-size-base * .75;
$progress-bg:                       var(--#{$prefix}secondary-bg);
$progress-border-radius:            var(--#{$prefix}border-radius);
$progress-box-shadow:               var(--#{$prefix}box-shadow-inset);
$progress-bar-color:                $white;
$progress-bar-bg:                   $primary;
$progress-bar-animation-timing:     1s linear infinite;
$progress-bar-transition:           width .6s ease;
</textarea>
<br>
<h2 class=w3-text-blue>Keyframes</h2>
<p>Used for creating the CSS animations for .progress-bar-animated. Included in scss/_progress-bar.scss.</p>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
@if $enable-transitions {
  @keyframes progress-bar-stripes {
    0% { background-position-x: $progress-height; }
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

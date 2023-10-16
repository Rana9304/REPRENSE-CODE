<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Figures</b></h1>
      <p> <i>Documentation and examples for displaying related images and text with the figure component in Bootstrap.</i> </p>

      <!-- containt past -->
     <p>Anytime you need to display a piece of content—like an image with an optional caption, consider using a <figure>.</p>
     <p>Use the included .figure, .figure-img and .figure-caption classes to provide some baseline styles for the HTML5 <figure> and <figcaption> elements. Images in figures have no explicit size, so be sure to add the .img-fluid class to your <img> to make it responsive.
</p>
     <img src="image/fig1.jpg" alt="fig1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="10" class="form-control" >
        <figure class="figure">
  <img src="..." class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>
        </textarea>
</div>
</div>
<p>Aligning the figure’s caption is easy with our text utilities.</p>
<img src="image/fig2.jpg" alt="fig2" width="100%">
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<figure class="figure">
  <img src="..." class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
</figure>
</textarea>
<h2 class=w3-text-blue>CSS</h2>
<h2>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
$figure-caption-font-size:          $small-font-size;
$figure-caption-color:              var(--#{$prefix}secondary-color);
</textarea>



</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
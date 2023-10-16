<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Images</b></h1>
      <p> <i>Documentation and examples for opting images into responsive behavior (so they never become wider than their parent) and add lightweight styles to them—all via classes.</i> </p>

      <!-- containt past -->
     <h3>Responsive images</h3>
     <p>Images in Bootstrap are made responsive with .img-fluid. This applies max-width: 100%; and height: auto; to the image so that it scales with the parent width.</p>
     <img src="image/img1.jpg" alt="img1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <img src="..." class="img-fluid" alt="...">
        </textarea>
</div>
</div>
<h2 class=w3-text-blue>Image thumbnails</h2>
<P>In addition to our border-radius utilities, you can use .img-thumbnail to give an image a rounded 1px border appearance.</P>
<img src="image/img2.jpg" alt="img2" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<img src="..." class="img-thumbnail" alt="...">
</textarea>
<h2 class=w3-text-blue>Aligning images</h2>
<P>Align images with the helper float classes or text alignment classes. block-level images can be centered using the .mx-auto margin utility class.
</P>
<img src="image/img3.jpg" alt="img3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<img src="..." class="rounded float-start" alt="...">
<img src="..." class="rounded float-end" alt="...">
</textarea>
<img src="image/img4.jpg" alt="img4" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<img src="..." class="rounded mx-auto d-block" alt="...">
</textarea>
<img src="image/img5.jpg" alt="img5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="text-center">
  <img src="..." class="rounded" alt="...">
</div>
</textarea>
<h2 class=w3-text-blue>Picture</h2>
<P>If you are using the <picture> element to specify multiple <source> elements for a specific <img>, make sure to add the .img-* classes to the <img> and not to the <picture> tag.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<picture>
  <source srcset="..." type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture>
</textarea>
<h2 class=w3-text-blue>CSS</h2>
<h2>Sass variables</h2>
<P>Variables are available for image thumbnails</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$thumbnail-padding:                 .25rem;
$thumbnail-bg:                      var(--#{$prefix}body-bg);
$thumbnail-border-width:            var(--#{$prefix}border-width);
$thumbnail-border-color:            var(--#{$prefix}border-color);
$thumbnail-border-radius:           var(--#{$prefix}border-radius);
$thumbnail-box-shadow:              var(--#{$prefix}box-shadow-sm);
</textarea>










</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
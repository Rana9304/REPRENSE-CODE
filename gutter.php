<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Gutters</b></h1>
      <p> <i>Gutters are the padding between your columns, used to responsively space and align content in the Bootstrap grid system.</i> </p>

      <!-- containt past -->
     <h3>Horizontal gutters</h3>
     <p>.gx-* classes can be used to control the horizontal gutter widths. The .container or .container-fluid parent may need to be adjusted if larger gutters are used too to avoid unwanted overflow, using a matching padding utility. For example, in the following example we’ve increased the padding with .px-4:</p>
     <img src="image/gt1.jpg" alt="gt1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="14" class="form-control" >
        <div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">Custom column padding</div>
    </div>
    <div class="col">
      <div class="p-3">Custom column padding</div>
    </div>
  </div>
</div>
        </textarea>
</div>
</div>
<br>
<p>An alternative solution is to add a wrapper around the .row with the .overflow-hidden class:</p>


<img src="image/gt2.jpg" alt="gt2" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container overflow-hidden text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">Custom column padding</div>
    </div>
    <div class="col">
      <div class="p-3">Custom column padding</div>
    </div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Vertical gutters</h2>
<P>.gy-* classes can be used to control the vertical gutter widths within a row when columns wrap to new lines. Like the horizontal gutters, the vertical gutters can cause some overflow below the .row at the end of a page. If this occurs, you add a wrapper around .row with the .overflow-hidden class:</P>
<img src="image/gt3.jpg" alt="gt3" width="100%">
<textarea disabled  id="" cols="30" rows="17" class="form-control" >
<div class="container overflow-hidden text-center">
  <div class="row gy-5">
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Horizontal & vertical gutters</h2>
<P>Use .g-* classes to control the horizontal and vertical grid gutters. In the example below, we use a smaller gutter width, so there isn’t a need for the .overflow-hidden wrapper class.</P>
<img src="image/gt4.jpg" alt="gt4" width="100%">
<textarea disabled  id="" cols="30" rows="17" class="form-control" >
<div class="container text-center">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Row columns gutters</h2>
<P>Gutter classes can also be added to row columns. In the following example, we use responsive row columns and responsive gutter classes.</P>
<img src="image/gt5.jpg" alt="gt5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
    <div class="col">
      <div class="p-3">Row column</div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>No gutters</h2>
<P>The gutters between columns in our predefined grid classes can be removed with .g-0. This removes the negative margins from .row and the horizontal padding from all immediate children columns.</P>
<p><b>Need an edge-to-edge design?</b> Drop the parent .container or .container-fluid and add .mx-0 to the .row to prevent overflow.</p>
<p>In practice, here’s how it looks. Note you can continue to use this with all other predefined grid classes (including column widths, responsive tiers, reorders, and more).</p>
<img src="image/gt6.jpg" alt="gt6" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="row g-0 text-center">
  <div class="col-sm-6 col-md-8">.col-sm-6 .col-md-8</div>
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Change the gutters</h2>
<P>Classes are built from the $gutters Sass map which is inherited from the $spacers Sass map.</P>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$grid-gutter-width: 1.5rem;
$gutters: (
  0: 0,
  1: $spacer * .25,
  2: $spacer * .5,
  3: $spacer,
  4: $spacer * 1.5,
  5: $spacer * 3,
);
</textarea>








</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
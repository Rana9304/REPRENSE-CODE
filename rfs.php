<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">

<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-teal">What is RFS? </h1>
      <div class="row">
        <div class="col mx-auto">
        <button onClick="next()" id="forward" class="btn btn-success">Forward</button>
    
        </div>
        <div class="col mx-auto">
        <button onClick="previous()" id="backward" class="btn btn-success" style="margin-left: 250px;">Back</button>

        </div>

      </div>

      <!-- containt past -->
     <h3>What is RFS?  </h3>

      <p>Bootstrap’s side project RFS is a unit resizing engine which was initially developed to resize font sizes (hence its abbreviation for Responsive Font Sizes). Nowadays RFS is capable of rescaling most CSS properties with unit values like margin, padding, border-radius, or even box-shadow.</p>  

      <p>The mechanism automatically calculates the appropriate values based on the dimensions of the browser viewport. It will be compiled into calc() functions with a mix of rem and viewport units to enable the responsive scaling behavior.</p>
      <h3>Using RFS </h3>
      <p>The mixins are included in Bootstrap and are available once you include Bootstrap’s scss. RFS can also be installed standalone if needed.</p>

     <h3>Using the mixins</h3>
     <p>The rfs() mixin has shorthands for font-size, margin, margin-top, margin-right, margin-bottom, margin-left, padding, padding-top, padding-right, padding-bottom, and padding-left. See the example below for source Sass and compiled CSS.</p>



      <div class="main pt-4 pb-5 pe-3" style="background-color: white;">
      <div class="php_connect card">
        <h2>Using the mixins</h2>
        
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="6" class="form-control" >
        .title {
        @include font-size(4rem);
        }


        </textarea>

 <!-- coding code -->
      </div>
      <a href="output/form.php" class="btn btn-success mt-3 ms-3"> Try It YourSelf <i class="bi bi-chevron-double-right"></i> </a>
      </div>
      

    </div>
      <!-- containt past -->


<!-- containt ready your mind  -->


    
  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">

<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-teal">Available breakpoints </h1>
      <div class="row">
        <div class="col mx-auto">
        <button onClick="next()" id="forward" class="btn btn-success">Forward</button>
    
        </div>
        <div class="col mx-auto">
        <button onClick="previous()" id="backward" class="btn btn-success" style="margin-left: 250px;">Back</button>

        </div>

      </div>

      <!-- containt past -->
     <h3>Available breakpoints  </h3>

      <p>Bootstrap includes six default breakpoints, sometimes referred to as grid tiers, for building responsively. These breakpoints can be customized if you’re using our source Sass files.</p>  

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
        <h2>Available breakpoints </h2>
        
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <img src="image/breakpoint.PNG" alt="breakpoint">

  

 <!-- coding code -->
      </div>
      <a href="output/form.php" class="btn btn-success mt-3 ms-3"> Try It YourSelf <i class="bi bi-chevron-double-right"></i> </a>
      </div>
      <p class="p-3" >Each breakpoint was chosen to comfortably hold containers whose widths are multiples of 12. Breakpoints are also representative of a subset of common device sizes and viewport dimensions—they don’t specifically target every use case or device. Instead, the ranges provide a strong and consistent foundation to build on for nearly any device.</p>
      

    </div>
      <!-- containt past -->


<!-- containt ready your mind  -->


    
  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


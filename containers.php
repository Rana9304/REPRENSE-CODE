<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">

<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-teal">Containers</h1>
      <div class="row">
        <div class="col mx-auto">
        <button onClick="next()" id="forward" class="btn btn-success">Forward</button>
    
        </div>
        <div class="col mx-auto">
        <button onClick="previous()" id="backward" class="btn btn-success" style="margin-left: 250px;">Back</button>

        </div>

      </div>

      <!-- containt past -->
     <h3>How they work </h3>
     <p>Containers are the most basic layout element in Bootstrap and are required when using our default grid system. Containers are used to contain, pad, and (sometimes) center the content within them. While containers can be nested, most layouts do not require a nested container.</p>
     <p>Bootstrap comes with three different containers:</p>
     <li> <span class="text-danger" >.container, </span>  which sets a max-width at each responsive breakpoint</li>
     <li> <span class="text-danger" >.container-{breakpoint}, </span> which is width: 100% until the specified breakpoint</li>
     <li><span class="text-danger" >.container-fluid, </span> which is width: 100% at all breakpoints</li>
     <p>The table below illustrates how each container’s max-width compares to the original .container and .container-fluid across each breakpoint.</p>

      
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
        <h2>Default container </h2>
        
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="7" class="form-control" >
        <div class="container">
  <!-- Content here -->
      </div>


        </textarea>

 <!-- coding code -->
      </div>
      <a href="output/form.php" class="btn btn-success mt-3 ms-3"> Try It YourSelf <i class="bi bi-chevron-double-right"></i> </a>
      </div>
      <h2>Responsive containers </h2>
      <p class="pt-2" >
      Responsive containers allow you to specify a class that is 100% wide until the specified breakpoint is reached, after which we apply max-widths for each of the higher breakpoints. For example, .container-sm is 100% wide to start until the sm breakpoint is reached, where it will scale up with md, lg, xl, and xxl.

      </p>
      <textarea disabled  id="" cols="5" rows="5" class="form-control">
      <div class="container-sm">100% wide until small breakpoint</div>
      <div class="container-md">100% wide until medium breakpoint</div>
      <div class="container-lg">100% wide until large breakpoint</div>
      <div class="container-xl">100% wide until extra large breakpoint</div>
      <div class="container-xxl">100% wide until extra extra large breakpoint</div>

       </textarea>
      

  
      <!-- containt past -->
      <h2>Fluid containers</h2>
      <p>Use <span class="text-danger" >.container-fluid  </span> for a full width container, spanning the entire width of the viewport.</p>
      <textarea disabled  id="" cols="5" rows="5" class="form-control" >
      <div class="container-fluid">
          ...
         </div>

        
      </textarea>



      </div>
<!-- containt ready your mind  -->


    
  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


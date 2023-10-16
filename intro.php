<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">

<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-teal">Get started with Bootstrap</h1>
      <div class="row">
        <div class="col mx-auto">
        <button onClick="next()" id="forward" class="btn btn-success">Forward</button>
    
        </div>
        <div class="col mx-auto">
        <button onClick="previous()" id="backward" class="btn btn-success" style="margin-left: 250px;">Back</button>

        </div>

      </div>

      <!-- containt past -->
     <h3>Get started with Bootstrap </h3>

      <p>Get started by including Bootstrap’s production-ready CSS and JavaScript via CDN without the need for any build steps. See it in practice with this Bootstrap CodePen demo.:</p>  

      <p>Include Bootstrap’s CSS and JS. Place the <link> tag in the < head > for our CSS, and the < script > tag for our JavaScript bundle (including Popper for positioning dropdowns, poppers, and tooltips) before the closing </ body >. Learn more about our CDN links.</p>


      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
        <h2>Get started with Bootstrap </h2>
        
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <!doctype html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
          </head>
          <body>
            <h1>Hello, world!</h1>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
          </body>
        </html>



        </textarea>

 <!-- coding code -->
      </div>
      <a href="output/form.php" class="btn btn-success mt-3 ms-3"> Try It YourSelf <i class="bi bi-chevron-double-right"></i> </a>
      </div>
      <p class="pt-2" >
      You can also include Popper and our JS separately. If you don’t plan to use dropdowns, popovers, or tooltips, save some kilobytes by not including Popper.
      </p>
      <textarea disabled  id="" cols="5" rows="5" class="form-control" >
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

       </textarea>
      

    </div>
      <!-- containt past -->


<!-- containt ready your mind  -->


    
  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


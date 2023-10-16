<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">

<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-teal">Browsers and devices</h1>
      <div class="row">
        <div class="col mx-auto">
        <button onClick="previous()" id="backward" class="btn btn-success" style="margin-left: 250px;">Back</button>

        </div>

      </div>

      <!-- containt past -->
     <h3>Supported browsers </h3>
     <p>Bootstrap supports the latest, stable releases of all major browsers and platforms.
Alternative browsers which use the latest version of WebKit, Blink, or Gecko, whether directly or via the platform’s web view API, are not explicitly supported. However, Bootstrap should (in most cases) display and function correctly in these browsers as well. More specific support information is provided below.
You can find our supported range of browsers and their versions in our .browserslistrc file:
</p>
      
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card-body">
        <h2>Supported browsers </h2>
        
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="15" class="form-control" >
        # https://github.com/browserslist/browserslist#readme

        >= 0.5%
        last 2 major versions
        not dead
        Chrome >= 60
        Firefox >= 60
        Firefox ESR
        iOS >= 12
        Safari >= 12
        not Explorer <= 11

        </textarea>

 <!-- coding code -->
      </div>
      <a href="output/form.php" class="btn btn-success mt-3 ms-3"> Try It YourSelf <i class="bi bi-chevron-double-right"></i> </a>
      </div>
      <p class="pt-2" >
      We use Autoprefixer to handle intended browser support via CSS prefixes, which uses Browserslist to manage these browser versions. Consult their documentation for how to integrate these tools into your projects.
      </p>
      <h2>Mobile devices </h2>
      <p>Generally speaking, Bootstrap supports the latest versions of each major platform’s default browsers. Note that proxy browsers (such as Opera Mini, Opera Mobile’s Turbo mode, UC Browser Mini, Amazon Silk) are not supported.</p>
      <img src="image/Bs_device.png" alt="device" >


      

    </div>
      <!-- containt past -->


<!-- containt ready your mind  -->


    
  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


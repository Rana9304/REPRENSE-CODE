<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Placeholders</b></h1>
      <p><h3><i>Use loading placeholders for your components or pages to indicate something may still be loading.</i></h3> </p>
      <br>
      <h2>About</h2>
      <p>Placeholders can be used to enhance the experience of your application. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, color, and sizing can be easily customized with our utility classes.</p>

      <!-- containt past -->
     <h3>Example </h3>
     <p>In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.</p>
     <img src="image/plc1.jpg" alt="plc1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" aria-hidden="true">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title placeholder-glow">
      <span class="placeholder col-6"></span>
    </h5>
    <p class="card-text placeholder-glow">
      <span class="placeholder col-7"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-6"></span>
      <span class="placeholder col-8"></span>
    </p>
    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
  </div>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>How it works</h2>
<P>Create placeholders with the .placeholder class and a grid column class (e.g., .col-6) to set the width. They can replace the text inside an element or be added as a modifier class to an existing component.</P>
<p>We apply additional styling to .btns via ::before to ensure the height is respected. You may extend this pattern for other situations as needed, or add a &nbsp; within the element to reflect the height when actual text is rendered in its place.</p>
<img src="image/plc2.jpg" alt="plc2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<p aria-hidden="true">
  <span class="placeholder col-6"></span>
</p>

<a class="btn btn-primary disabled placeholder col-4" aria-disabled="true"></a>
</textarea>
<br>
<h2 class=w3-text-blue>Width</h2>
<P>You can change the width through grid column classes, width utilities, or inline styles.</P>
<img src="image/plc3.jpg" alt="plc3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<span class="placeholder col-6"></span>
<span class="placeholder w-75"></span>
<span class="placeholder" style="width: 25%;"></span>
</textarea>
<br>
<h2 class=w3-text-blue>Color</h2>
<P>By default, the placeholder uses currentColor. This can be overridden with a custom color or utility class.</P>
<img src="image/plc4.jpg" alt="plc4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<span class="placeholder col-12"></span>

<span class="placeholder col-12 bg-primary"></span>
<span class="placeholder col-12 bg-secondary"></span>
<span class="placeholder col-12 bg-success"></span>
<span class="placeholder col-12 bg-danger"></span>
<span class="placeholder col-12 bg-warning"></span>
<span class="placeholder col-12 bg-info"></span>
<span class="placeholder col-12 bg-light"></span>
<span class="placeholder col-12 bg-dark"></span>
</textarea>
<br>
<h2 class=w3-text-blue>Sizing</h2>
<P>The size of .placeholders are based on the typographic style of the parent element. Customize them with sizing modifiers: .placeholder-lg, .placeholder-sm, or .placeholder-xs.</P>
<img src="image/plc5.jpg" alt="plc5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<span class="placeholder col-12 placeholder-lg"></span>
<span class="placeholder col-12"></span>
<span class="placeholder col-12 placeholder-sm"></span>
<span class="placeholder col-12 placeholder-xs"></span>
</textarea>
<br>
<h2 class=w3-text-blue>Animation</h2>
<P>Animate placeholders with .placeholder-glow or .placeholder-wave to better convey the perception of something being actively loaded.</P>
<img src="image/plc6.jpg" alt="plc6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p class="placeholder-glow">
  <span class="placeholder col-12"></span>
</p>

<p class="placeholder-wave">
  <span class="placeholder col-12"></span>
</p>
</textarea>
<br>
<h2>CSS </h2>
<br>
<h2 class=w3-text-blue>Sass variables </h2>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
$placeholder-opacity-max:           .5;
$placeholder-opacity-min:           .2;
</textarea>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
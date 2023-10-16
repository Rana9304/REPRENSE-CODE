<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Layout</b></h1>
      <p><4><i>Give your forms some structure—from inline to horizontal to custom grid implementations—with our form layout options.</i></h4></p>

      <!-- containt past -->
     <h3>Forms </h3>
     <p>Every group of form fields should reside in a < form> element. Bootstrap provides no default styling for the < form> element, but there are some powerful browser features that are provided by default.</p>
     <img src="image/lyt1.jpg" alt="lyt" class="me-5" width="100%" >
     <p>Since Bootstrap applies display: block and width: 100% to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.</p>
     <h1 class="w3-text-blue"><b>Utilities</b></h1>
     <p>Margin utilities are the easiest way to add some structure to forms. They provide basic grouping of labels, controls, optional form text, and form validation messaging. We recommend sticking to margin-bottom utilities, and using a single direction throughout the form for consistency.</p>
     <p>Feel free to build your forms however you like, with <fieldset>s, <div>s, or nearly any other element.</p>
     <img src="image/lyt2.jpg" alt="lyt2" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Example label</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Another label</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
        </textarea>
        </div>
        </div>
        </div>
        <h2 class=w3-text-blue>Form grid</h2>
<P>More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options. <b>Requires the $enable-grid-classes Sass variable to be enabled</b> (on by default).</P>
<img src="image/lyt3.jpg" alt="lyt3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Gutters</h2>
<P>By adding gutter modifier classes, you can have control over the gutter width in as well the inline as block direction. Also requires the $enable-grid-classes Sass variable to be enabled (on by default).</P>
<img src="image/lyt4.jpg" alt="lyt4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
</textarea>
<p>More complex layouts can also be created with the grid system.</p>
<img src="image/lyt5.jpg" alt="lyt5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</textarea>
<h2 class=w3-text-blue>Horizontal form</h2>
<P>Create horizontal forms with the grid by adding the .row class to form groups and using the .col-*-* classes to specify the width of your labels and controls. Be sure to add .col-form-label to your <label>s as well so they’re vertically centered with their associated form controls.</P>
<p>At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we’ve removed the padding-top on our stacked radio inputs label to better align the text baseline.</p>
<img src="image/lyt6.jpg" alt="lyt6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          First radio
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Second radio
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
        <label class="form-check-label" for="gridRadios3">
          Third disabled radio
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</textarea>
<h2 class=w3-text-blue>Horizontal form label sizing</h2>
<P>Be sure to use .col-form-label-sm or .col-form-label-lg to your <label>s or <legend>s to correctly follow the size of .form-control-lg and .form-control-sm.</P>
<img src="image/lyt7.jpg" alt="lyt7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
  </div>
</div>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Column sizing</h2>
<P>As shown in the previous examples, our grid system allows you to place any number of .cols within a .row. They’ll split the available width equally between them. You may also pick a subset of your columns to take up more or less space, while the remaining .cols equally split the rest, with specific column classes like .col-sm-7.</P>
<img src="image/lyt8.jpg" alt="lyt8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row g-3">
  <div class="col-sm-7">
    <input type="text" class="form-control" placeholder="City" aria-label="City">
  </div>
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="State" aria-label="State">
  </div>
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
  </div>
</div>
</textarea>

<h2 class=w3-text-blue>Auto-sizing</h2>
<P>The example below uses a flexbox utility to vertically center the contents and changes .col to .col-auto so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.</P>
<img src="image/lyt9.jpg" alt="lyt9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="autoSizingCheck">
      <label class="form-check-label" for="autoSizingCheck">
        Remember me
      </label>
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</textarea>
<p>You can then remix that once again with size-specific column classes.</p>
<img src="image/lyt10.jpg" alt="lyt10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form class="row gx-3 gy-2 align-items-center">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Name</label>
    <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select" id="specificSizeSelect">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
      <label class="form-check-label" for="autoSizingCheck2">
        Remember me
      </label>
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</textarea>
<h2 class=w3-text-blue>Inline forms</h2>
<P>Use the .row-cols-* classes to create responsive horizontal layouts. By adding gutter modifier classes, we’ll have gutters in horizontal and vertical directions. On narrow mobile viewports, the .col-12 helps stack the form controls and more. The .align-items-center aligns the form elements to the middle, making the .form-check align properly.</P>
<img src="image/lyt11.jpg" alt="lyt11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
    </div>
  </div>

  <div class="col-12">
    <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
    <select class="form-select" id="inlineFormSelectPref">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
      <label class="form-check-label" for="inlineFormCheck">
        Remember me
      </label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</textarea>








</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Forms</b></h1>
      <p> <i>Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</i> </p>

      <!-- containt past -->
     <h3>Overview </h3>
     <p>Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.</p>
<p>Be sure to use an appropriate type attribute on all inputs (e.g., email for email address or number for numerical information) to take advantage of newer input controls like email verification, number selection, and more.</p>
<p>Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>
     <img src="image/ov1.jpg" alt="ov1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </textarea>
</div>
</div>
<h2 class=w3-text-blue>Disabled forms</h2>
<p>Add the disabled boolean attribute on an input to prevent user interactions and make it appear lighter.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
</textarea>
<p>Add the disabled attribute to a <fieldset> to disable all the controls within. Browsers treat all native form controls (<input>, <select>, and <button> elements) inside a <fieldset disabled> as disabled, preventing both keyboard and mouse interactions on them.</p>
<p>However, if your form also includes custom button-like elements such as <a class="btn btn-*">...</a>, these will only be given a style of pointer-events: none, meaning they are still focusable and operable using the keyboard. In this case, you must manually modify these controls by adding tabindex="-1" to prevent them from receiving focus and aria-disabled="disabled" to signal their state to assistive technologies.</p>
<img src="image/ov2.jpg" alt="ov2" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form>
  <fieldset disabled>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</textarea>
<h2 class=w3-text-blue>Accessibility</h2>
<p>Ensure that all form controls have an appropriate accessible name so that their purpose can be conveyed to users of assistive technologies. The simplest way to achieve this is to use a < label> element, or—in the case of buttons—to include sufficiently descriptive text as part of the < button>...< /button> content.</p>
<p>For situations where it’s not possible to include a visible < label> or appropriate text content, there are alternative ways of still providing an accessible name, such as:</p>
<img src="image/ov3.jpg" alt="ov3" width="100%">
<p>If none of these are present, assistive technologies may resort to using the placeholder attribute as a fallback for the accessible name on < input> and < textarea> elements. The examples in this section provide a few suggested, case-specific approaches.</p>
<p>While using visually hidden content (.visually-hidden, aria-label, and even placeholder content, which disappears once a form field has content) will benefit assistive technology users, a lack of visible label text may still be problematic for certain users. Some form of visible label is generally the best approach, both for accessibility and usability.</p>
<h2 class=w3-text-blue>CSS</h2>
<p>Many form variables are set at a general level to be re-used and extended by individual form components. You’ll see these most often as $input-btn-* and $input-* variables.</p>
<h2>Sass variables </h2>
<p>$input-btn-* variables are shared global variables between our buttons and our form components. You’ll find these frequently reassigned as values to other component-specific variables.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$input-btn-padding-y:         .375rem;
$input-btn-padding-x:         .75rem;
$input-btn-font-family:       null;
$input-btn-font-size:         $font-size-base;
$input-btn-line-height:       $line-height-base;

$input-btn-focus-width:         $focus-ring-width;
$input-btn-focus-color-opacity: $focus-ring-opacity;
$input-btn-focus-color:         $focus-ring-color;
$input-btn-focus-blur:          $focus-ring-blur;
$input-btn-focus-box-shadow:    $focus-ring-box-shadow;

$input-btn-padding-y-sm:      .25rem;
$input-btn-padding-x-sm:      .5rem;
$input-btn-font-size-sm:      $font-size-sm;

$input-btn-padding-y-lg:      .5rem;
$input-btn-padding-x-lg:      1rem;
$input-btn-font-size-lg:      $font-size-lg;

$input-btn-border-width:      var(--#{$prefix}border-width);
</textarea>










</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
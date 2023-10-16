<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Form controls</b></h1>
      <p> <i>Give textual form controls like < input>s and < textarea>s an upgrade with custom styles, sizing, focus states, and more.</i> </p>

      <!-- containt past -->
     <h3>Example </h3>
     <p>Form controls are styled with a mix of Sass and CSS variables, allowing them to adapt to color modes and support any customization method.</p>
     
     <img src="image/con1.jpg" alt="con1" class="me-5" width="100%" >
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
        </textarea>
        </div>
<h2 class=w3-text-blue>Sizing</h2>
<P>Set heights using classes like .form-control-lg and .form-control-sm.</P>
<img src="image/con2.jpg" alt="con2" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
<input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
</textarea>
<h2 class=w3-text-blue>Form text</h2>
<p>Block-level or inline-level form text can be created using .form-text</p>
<p>Form text below inputs can be styled with .form-text. If a block-level element will be used, a top margin is added for easy spacing from the inputs above.</p>
<img src="image/con3.jpg" alt="con3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
</textarea>
<p>Inline text can use any typical inline HTML element (be it a <span>, <small>, or something else) with nothing more than the .form-text class.</p>
<img src="image/con4.jpg" alt="con4" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Disabled</h2>
<P>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.
</P>
<img src="image/con5.jpg" alt="con5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
<input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
</textarea>
<h2 class=w3-text-blue>Readonly</h2>
<P>Add the readonly boolean attribute on an input to prevent modification of the input’s value. readonly inputs can still be focused and selected, while disabled inputs cannot.</P>
<img src="image/con6.jpg" alt="con6" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
</textarea>
<h2 class=w3-text-blue>Readonly plain text</h2>
<P>If you want to have < input readonly> elements in your form styled as plain text, replace .form-control with .form-control-plaintext to remove the default form field styling and preserve the correct margin and padding.</P>
<img src="image/con7.jpg" alt="con7" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
</textarea>
<img src="image/con8.jpg" alt="con8" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>
</textarea>
<h2 class=w3-text-blue>File input</h2>
<img src="image/con9.jpg" alt="con9" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Multiple files input example</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
<div class="mb-3">
  <label for="formFileDisabled" class="form-label">Disabled file input example</label>
  <input class="form-control" type="file" id="formFileDisabled" disabled>
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
<div>
  <label for="formFileLg" class="form-label">Large file input example</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
</div>
</textarea>
<h2 class=w3-text-blue>Color</h2>
<P>Set the type="color" and add .form-control-color to the < input>. We use the modifier class to set fixed heights and override some inconsistencies between browsers.</P>
<img src="image/con10.jpg" alt="con10" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<label for="exampleColorInput" class="form-label">Color picker</label>
<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
</textarea>
<h2 class=w3-text-blue>Datalists</h2>
<P>Datalists allow you to create a group of < option>s that can be accessed (and autocompleted) from within an < input>. These are similar to <select> elements, but come with more menu styling limitations and differences. While most browsers and operating systems include some support for < datalist> elements, their styling is inconsistent at best.</P>
<img src="image/con11.jpg" alt="con11" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<label for="exampleDataList" class="form-label">Datalist example</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist>
</textarea>
<h2 class=w3-text-blue>CSS</h2>
<h2>Sass variables</h2>
<P>$input-* are shared across most of our form controls (and not buttons).</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$input-padding-y:                       $input-btn-padding-y;
$input-padding-x:                       $input-btn-padding-x;
$input-font-family:                     $input-btn-font-family;
$input-font-size:                       $input-btn-font-size;
$input-font-weight:                     $font-weight-base;
$input-line-height:                     $input-btn-line-height;

$input-padding-y-sm:                    $input-btn-padding-y-sm;
$input-padding-x-sm:                    $input-btn-padding-x-sm;
$input-font-size-sm:                    $input-btn-font-size-sm;

$input-padding-y-lg:                    $input-btn-padding-y-lg;
$input-padding-x-lg:                    $input-btn-padding-x-lg;
$input-font-size-lg:                    $input-btn-font-size-lg;

$input-bg:                              var(--#{$prefix}body-bg);
$input-disabled-color:                  null;
$input-disabled-bg:                     var(--#{$prefix}secondary-bg);
$input-disabled-border-color:           null;

$input-color:                           var(--#{$prefix}body-color);
$input-border-color:                    var(--#{$prefix}border-color);
$input-border-width:                    $input-btn-border-width;
$input-box-shadow:                      $box-shadow-inset;

$input-border-radius:                   var(--#{$prefix}border-radius);
$input-border-radius-sm:                var(--#{$prefix}border-radius-sm);
$input-border-radius-lg:                var(--#{$prefix}border-radius-lg);

$input-focus-bg:                        $input-bg;
$input-focus-border-color:              tint-color($component-active-bg, 50%);
$input-focus-color:                     $input-color;
$input-focus-width:                     $input-btn-focus-width;
$input-focus-box-shadow:                $input-btn-focus-box-shadow;

$input-placeholder-color:               var(--#{$prefix}secondary-color);
$input-plaintext-color:                 var(--#{$prefix}body-color);

$input-height-border:                   calc(#{$input-border-width} * 2); // stylelint-disable-line function-disallowed-list

$input-height-inner:                    add($input-line-height * 1em, $input-padding-y * 2);
$input-height-inner-half:               add($input-line-height * .5em, $input-padding-y);
$input-height-inner-quarter:            add($input-line-height * .25em, $input-padding-y * .5);

$input-height:                          add($input-line-height * 1em, add($input-padding-y * 2, $input-height-border, false));
$input-height-sm:                       add($input-line-height * 1em, add($input-padding-y-sm * 2, $input-height-border, false));
$input-height-lg:                       add($input-line-height * 1em, add($input-padding-y-lg * 2, $input-height-border, false));

$input-transition:                      border-color .15s ease-in-out, box-shadow .15s ease-in-out;

$form-color-width:                      3rem;
</textarea>
<p>$form-label-* and $form-text-* are for our < label>s and .form-text component.</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$form-label-margin-bottom:              .5rem;
$form-label-font-size:                  null;
$form-label-font-style:                 null;
$form-label-font-weight:                null;
$form-label-color:                      null;
</textarea>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$form-text-margin-top:                  .25rem;
$form-text-font-size:                   $small-font-size;
$form-text-font-style:                  null;
$form-text-font-weight:                 null;
$form-text-color:                       var(--#{$prefix}secondary-color);
</textarea>
<p>$form-file-* are for file input.</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$form-file-button-color:          $input-color;
$form-file-button-bg:             var(--#{$prefix}tertiary-bg);
$form-file-button-hover-bg:       var(--#{$prefix}secondary-bg);
</textarea>

</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
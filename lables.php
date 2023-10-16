<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Floating labels</b></h1>
      <p> <i>Create beautifully simple form labels that float over your input fields.</i> </p>

      <!-- containt past -->
     <h3>Example</h3>
     <p>Wrap a pair of < input class="form-control"> and < label> elements in .form-floating to enable floating labels with Bootstrap’s textual form fields. A placeholder is required on each < input> as our method of CSS-only floating labels uses the :placeholder-shown pseudo-element. Also note that the < input> must come first so we can utilize a sibling selector (e.g., ~).</p>
     <img src="image/lbl1.jpg" alt="lbl1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
</textarea>
<p>When there’s a value already defined, <label>s will automatically adjust to their floated position.</p>
<br>
<img src="image/lbl2.jpg" alt="lbl2" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<form class="form-floating">
  <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
  <label for="floatingInputValue">Input with value</label>
</form>
</textarea>
<p>Form validation styles also work as expected.</p>
<img src="image/lbl3.jpg" alt="lbl3" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<form class="form-floating">
  <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
  <label for="floatingInputInvalid">Invalid input</label>
</form>
</textarea>
<br>
<h2 class=w3-text-blue>Textareas</h2>
<P>By default, < textarea>s with .form-control will be the same height as < input>s.</P>
<img src="image/lbl4.jpg" alt="lbl4" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="form-floating">
  < textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea">< /textarea>
  <label for="floatingTextarea">Comments</label>
</div>
</textarea>
<p>To set a custom height on your < textarea>, do not use the rows attribute. Instead, set an explicit height (either inline or via custom CSS).</p>
<br>
<img src="image/lbl5.jpg" alt="lbl5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
</textarea>
<h2 class=w3-text-blue>Selects</h2>
<P>Other than .form-control, floating labels are only available on .form-selects. They work in the same way, but unlike < input>s, they’ll always show the < label> in its floated state. <b>Selects with size and multiple are not supported.</b></P>
<img src="image/lbl6.jpg" alt="lbl6" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">Works with selects</label>
</div>
</textarea>
<h2 class=w3-text-blue>Disabled</h2>
<P>Add the disabled boolean attribute on an input, a textarea or a select to give it a grayed out appearance, remove pointer events, and prevent focusing.</P>
<img src="image/lbl7.jpg" alt="lbl7" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Email address</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled" disabled></textarea>
  <label for="floatingTextareaDisabled">Comments</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px" disabled>Disabled textarea with some text inside</textarea>
  <label for="floatingTextarea2Disabled">Comments</label>
</div>
<div class="form-floating">
  <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example" disabled>
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelectDisabled">Works with selects</label>
</div>
</textarea>
<h2 class=w3-text-blue>Readonly plaintext</h2>
<P>Floating labels also support .form-control-plaintext, which can be helpful for toggling from an editable < input> to a plaintext value without affecting the page layout.
</P>
<img src="image/lbl8.jpg" alt="lbl8" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="form-floating mb-3">
  <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="name@example.com">
  <label for="floatingEmptyPlaintextInput">Empty input</label>
</div>
<div class="form-floating mb-3">
  <input type="email" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="name@example.com" value="name@example.com">
  <label for="floatingPlaintextInput">Input with value</label>
</div>
</textarea>
<h2 class=w3-text-blue>Input groups</h2>
<P>Floating labels also support .input-group.</P>
<img src="image/lbl9.jpg" alt="lbl9" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
    <label for="floatingInputGroup1">Username</label>
  </div>
</div>
</textarea>
<p>When using .input-group and .form-floating along with form validation, the -feedback should be placed outside of the .form-floating, but inside of the .input-group. This means that the feedback will need to be shown using javascript.</p>
<img src="image/lbl10.jpg" alt="lbl10" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="input-group has-validation">
  <span class="input-group-text">@</span>
  <div class="form-floating is-invalid">
    <input type="text" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Username" required>
    <label for="floatingInputGroup2">Username</label>
  </div>
  <div class="invalid-feedback">
    Please choose a username.
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Layout</h2>
<P>When working with the Bootstrap grid system, be sure to place form elements within column classes.</P>
<img src="image/lbl11.jpg" alt="lbl11" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid">Email address</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="floatingSelectGrid">Works with selects</label>
    </div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>CSS</h2>
<P>Sass variables</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$form-floating-height:                  add(3.5rem, $input-height-border);
$form-floating-line-height:             1.25;
$form-floating-padding-x:               $input-padding-x;
$form-floating-padding-y:               1rem;
$form-floating-input-padding-t:         1.625rem;
$form-floating-input-padding-b:         .625rem;
$form-floating-label-height:            1.5em;
$form-floating-label-opacity:           .65;
$form-floating-label-transform:         scale(.85) translateY(-.5rem) translateX(.15rem);
$form-floating-label-disabled-color:    $gray-600;
$form-floating-transition:              opacity .1s ease-in-out, transform .1s ease-in-out;
</textarea>






</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
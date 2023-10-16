<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Buttons</b></h1>
      <p><h3><i>Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</i></h3> </p>

      <!-- containt past -->
     <h3>Base class </h3>
     <p>Bootstrap has a base .btn class that sets up basic styles such as padding and content alignment. By default, .btn controls have a transparent border and background color, and lack any explicit focus and hover styles.</p>
     <img src="image/btn1.jpg" alt="btn1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="4" class="form-control" >
        <button type="button" class="btn">Base class</button>
        </textarea>
</div>
</div>
<p>The .btn class is intended to be used in conjunction with our button variants, or to serve as a basis for your own custom styles.</p>
<br>
<h2 class=w3-text-blue>Variants</h2>
<P>Bootstrap includes several button variants, each serving its own semantic purpose, with a few extras thrown in for more control.</P>
<img src="image/btn2.jpg" alt="btn2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
</textarea>
<br>
<h2>Disable text wrapping</h2>
<p>If you don’t want the button text to wrap, you can add the .text-nowrap class to the button. In Sass, you can set $btn-white-space: nowrap to disable text wrapping for each button.</p>
<br>
<h2 class=w3-text-blue>Button tags</h2>
<P>The .btn classes are designed to be used with the < button> element. However, you can also use these classes on < a> or < input> elements (though some browsers may apply a slightly different rendering).</P>
<p>When using button classes on < a> elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a role="button" to appropriately convey their purpose to assistive technologies such as screen readers.</p>
<img src="image/btn3.jpg" alt="btn3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input">
<input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset">
</textarea>
<br>
<h2 class=w3-text-blue>Outline buttons</h2>
<P>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the .btn-outline-* ones to remove all background images and colors on any button.</P>
<img src="image/btn4.jpg" alt="btn4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
</textarea>
<br>
<h2 class=w3-text-blue>Sizes </h2>
<P>Fancy larger or smaller buttons? Add .btn-lg or .btn-sm for additional sizes.</P>
<img src="image/btn5.jpg" alt="btn5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
</textarea>
<img src="image/btn6.jpg" alt="btn6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>
</textarea>
<p>You can even roll your own custom sizing with CSS variables:</p>
<br>
<img src="image/btn7.jpg" alt="btn7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  Custom button
</button>
</textarea>
<br>
<h2 class=w3-text-blue>Disabled state </h2>
<P>Make buttons look inactive by adding the disabled boolean attribute to any < button> element. Disabled buttons have pointer-events: none applied to, preventing hover and active states from triggering.</P>
<img src="image/btn8.jpg" alt="btn8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
<button type="button" class="btn btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary" disabled>Button</button>
<button type="button" class="btn btn-outline-primary" disabled>Primary button</button>
<button type="button" class="btn btn-outline-secondary" disabled>Button</button>
</textarea>

<p>Disabled buttons using the <a> element behave a bit different:</p>
<img src="image/btn9.jpg" alt="btn9" class="me-5" width="100%" >
<br>
<img src="image/btn10.jpg" alt="btn10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<a class="btn btn-primary disabled" role="button" aria-disabled="true">Primary link</a>
<a class="btn btn-secondary disabled" role="button" aria-disabled="true">Link</a>
</textarea>
<br>
<h2 class=w3-text-blue>Link functionality caveat</h2>
<P>To cover cases where you have to keep the href attribute on a disabled link, the .disabled class uses pointer-events: none to try to disable the link functionality of <a>s. Note that this CSS property is not yet standardized for HTML, but all modern browsers support it. In addition, even in browsers that do support pointer-events: none, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, in addition to aria-disabled="true", also include a tabindex="-1" attribute on these links to prevent them from receiving keyboard focus, and use custom JavaScript to disable their functionality altogether.</P>
<img src="image/btn11.jpg" alt="btn11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
</textarea>
<br>
<h2 class=w3-text-blue>Block buttons </h2>
<P>Create responsive stacks of full-width, “block buttons” like those in Bootstrap 4 with a mix of our display and gap utilities. By using utilities instead of button-specific classes, we have much greater control over spacing, alignment, and responsive behaviors.</P>
<img src="image/btn12.jpg" alt="btn12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
</textarea>
<p>Here we create a responsive variation, starting with vertically stacked buttons until the md breakpoint, where .d-md-block replaces the .d-grid class, thus nullifying the gap-2 utility. Resize your browser to see them change.</p>
<br>
<img src="image/btn13.jpg" alt="btn13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
</textarea>
<p>You can adjust the width of your block buttons with grid column width classes. For example, for a half-width “block button”, use .col-6. Center it horizontally with .mx-auto, too.</p>
<br>
<img src="image/btn14.jpg" alt="btn14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
</textarea>
<p>Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we’ve taken our previous responsive example and added some flex utilities and a margin utility on the button to right-align the buttons when they’re no longer stacked.</p>
<br>
<img src="image/btn15.jpg" alt="btn15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
</textarea>
<h2 class=w3-text-blue>Button plugin</h2>
<P>The button plugin allows you to create simple on/off toggle buttons.</P>
<br>
<br>
<h2 class=w3-text-blue>Toggle states</h2>
<P>Add data-bs-toggle="button" to toggle a button’s active state. If you’re pre-toggling a button, you must manually add the .active class and aria-pressed="true" to ensure that it is conveyed appropriately to assistive technologies.</P>
<img src="image/btn16.jpg" alt="btn16" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p class="d-inline-flex gap-1">
  <button type="button" class="btn" data-bs-toggle="button">Toggle button</button>
  <button type="button" class="btn active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
  <button type="button" class="btn" disabled data-bs-toggle="button">Disabled toggle button</button>
</p>
<p class="d-inline-flex gap-1">
  <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
  <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
  <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">Disabled toggle button</button>
</p>
</textarea>
<br>
<img src="image/btn17.jpg" alt="btn17" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p class="d-inline-flex gap-1">
  <a href="#" class="btn" role="button" data-bs-toggle="button">Toggle link</a>
  <a href="#" class="btn active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
  <a class="btn disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
</p>
<p class="d-inline-flex gap-1">
  <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>
  <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
  <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
</p>
</textarea>
<br>
<h2 class=w3-text-blue>Methods</h2>
<P>You can create a button instance with the button constructor, for example:</P>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const bsButton = new bootstrap.Button('#myButton')
</textarea>
<img src="image/btn18.jpg" alt="btn18" class="me-5" width="100%" >
<p>For example, to toggle all buttons</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
document.querySelectorAll('.btn').forEach(buttonElement => {
  const button = bootstrap.Button.getOrCreateInstance(buttonElement)
  button.toggle()
})
</textarea>
<br>
<h2 class=w3-text-blue>CSS</h2>
<h3>Variables</h3>
<p>As part of Bootstrap’s evolving CSS variables approach, buttons now use local CSS variables on .btn for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}btn-padding-x: #{$btn-padding-x};
--#{$prefix}btn-padding-y: #{$btn-padding-y};
--#{$prefix}btn-font-family: #{$btn-font-family};
@include rfs($btn-font-size, --#{$prefix}btn-font-size);
--#{$prefix}btn-font-weight: #{$btn-font-weight};
--#{$prefix}btn-line-height: #{$btn-line-height};
--#{$prefix}btn-color: #{$btn-color};
--#{$prefix}btn-bg: transparent;
--#{$prefix}btn-border-width: #{$btn-border-width};
--#{$prefix}btn-border-color: transparent;
--#{$prefix}btn-border-radius: #{$btn-border-radius};
--#{$prefix}btn-hover-border-color: transparent;
--#{$prefix}btn-box-shadow: #{$btn-box-shadow};
--#{$prefix}btn-disabled-opacity: #{$btn-disabled-opacity};
--#{$prefix}btn-focus-box-shadow: 0 0 0 #{$btn-focus-width} rgba(var(--#{$prefix}btn-focus-shadow-rgb), .5);
</textarea>
<p>Each .btn-* modifier class updates the appropriate CSS variables to minimize additional CSS rules with our button-variant(), button-outline-variant(), and button-size() mixins.</p>
<p>Here’s an example of building a custom .btn-* modifier class as we do for the buttons unique to our docs by reassigning Bootstrap’s CSS variables with a mixture of our own CSS and Sass variables.
</p>
<br>
<img src="image/btn19.jpg" alt="btn19" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
.btn-bd-primary {
  --bs-btn-font-weight: 600;
  --bs-btn-color: var(--bs-white);
  --bs-btn-bg: var(--bd-violet-bg);
  --bs-btn-border-color: var(--bd-violet-bg);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-hover-bg: #{shade-color($bd-violet, 10%)};
  --bs-btn-hover-border-color: #{shade-color($bd-violet, 10%)};
  --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
  --bs-btn-active-color: var(--bs-btn-hover-color);
  --bs-btn-active-bg: #{shade-color($bd-violet, 20%)};
  --bs-btn-active-border-color: #{shade-color($bd-violet, 20%)};
}
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$btn-color:                   var(--#{$prefix}body-color);
$btn-padding-y:               $input-btn-padding-y;
$btn-padding-x:               $input-btn-padding-x;
$btn-font-family:             $input-btn-font-family;
$btn-font-size:               $input-btn-font-size;
$btn-line-height:             $input-btn-line-height;
$btn-white-space:             null; // Set to `nowrap` to prevent text wrapping

$btn-padding-y-sm:            $input-btn-padding-y-sm;
$btn-padding-x-sm:            $input-btn-padding-x-sm;
$btn-font-size-sm:            $input-btn-font-size-sm;

$btn-padding-y-lg:            $input-btn-padding-y-lg;
$btn-padding-x-lg:            $input-btn-padding-x-lg;
$btn-font-size-lg:            $input-btn-font-size-lg;

$btn-border-width:            $input-btn-border-width;

$btn-font-weight:             $font-weight-normal;
$btn-box-shadow:              inset 0 1px 0 rgba($white, .15), 0 1px 1px rgba($black, .075);
$btn-focus-width:             $input-btn-focus-width;
$btn-focus-box-shadow:        $input-btn-focus-box-shadow;
$btn-disabled-opacity:        .65;
$btn-active-box-shadow:       inset 0 3px 5px rgba($black, .125);

$btn-link-color:              var(--#{$prefix}link-color);
$btn-link-hover-color:        var(--#{$prefix}link-hover-color);
$btn-link-disabled-color:     $gray-600;

// Allows for customizing button radius independently from global border radius
$btn-border-radius:           var(--#{$prefix}border-radius);
$btn-border-radius-sm:        var(--#{$prefix}border-radius-sm);
$btn-border-radius-lg:        var(--#{$prefix}border-radius-lg);

$btn-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

$btn-hover-bg-shade-amount:       15%;
$btn-hover-bg-tint-amount:        15%;
$btn-hover-border-shade-amount:   20%;
$btn-hover-border-tint-amount:    10%;
$btn-active-bg-shade-amount:      20%;
$btn-active-bg-tint-amount:       20%;
$btn-active-border-shade-amount:  25%;
$btn-active-border-tint-amount:   10%;
</textarea>
<br>
<h2 class=w3-text-blue>Sass mixins</h2>
<P>There are three mixins for buttons: button and button outline variant mixins (both based on $theme-colors), plus a button size mixin.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@mixin button-variant(
  $background,
  $border,
  $color: color-contrast($background),
  $hover-background: if($color == $color-contrast-light, shade-color($background, $btn-hover-bg-shade-amount), tint-color($background, $btn-hover-bg-tint-amount)),
  $hover-border: if($color == $color-contrast-light, shade-color($border, $btn-hover-border-shade-amount), tint-color($border, $btn-hover-border-tint-amount)),
  $hover-color: color-contrast($hover-background),
  $active-background: if($color == $color-contrast-light, shade-color($background, $btn-active-bg-shade-amount), tint-color($background, $btn-active-bg-tint-amount)),
  $active-border: if($color == $color-contrast-light, shade-color($border, $btn-active-border-shade-amount), tint-color($border, $btn-active-border-tint-amount)),
  $active-color: color-contrast($active-background),
  $disabled-background: $background,
  $disabled-border: $border,
  $disabled-color: color-contrast($disabled-background)
) {
  --#{$prefix}btn-color: #{$color};
  --#{$prefix}btn-bg: #{$background};
  --#{$prefix}btn-border-color: #{$border};
  --#{$prefix}btn-hover-color: #{$hover-color};
  --#{$prefix}btn-hover-bg: #{$hover-background};
  --#{$prefix}btn-hover-border-color: #{$hover-border};
  --#{$prefix}btn-focus-shadow-rgb: #{to-rgb(mix($color, $border, 15%))};
  --#{$prefix}btn-active-color: #{$active-color};
  --#{$prefix}btn-active-bg: #{$active-background};
  --#{$prefix}btn-active-border-color: #{$active-border};
  --#{$prefix}btn-active-shadow: #{$btn-active-box-shadow};
  --#{$prefix}btn-disabled-color: #{$disabled-color};
  --#{$prefix}btn-disabled-bg: #{$disabled-background};
  --#{$prefix}btn-disabled-border-color: #{$disabled-border};
}
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@mixin button-outline-variant(
  $color,
  $color-hover: color-contrast($color),
  $active-background: $color,
  $active-border: $color,
  $active-color: color-contrast($active-background)
) {
  --#{$prefix}btn-color: #{$color};
  --#{$prefix}btn-border-color: #{$color};
  --#{$prefix}btn-hover-color: #{$color-hover};
  --#{$prefix}btn-hover-bg: #{$active-background};
  --#{$prefix}btn-hover-border-color: #{$active-border};
  --#{$prefix}btn-focus-shadow-rgb: #{to-rgb($color)};
  --#{$prefix}btn-active-color: #{$active-color};
  --#{$prefix}btn-active-bg: #{$active-background};
  --#{$prefix}btn-active-border-color: #{$active-border};
  --#{$prefix}btn-active-shadow: #{$btn-active-box-shadow};
  --#{$prefix}btn-disabled-color: #{$color};
  --#{$prefix}btn-disabled-bg: transparent;
  --#{$prefix}btn-disabled-border-color: #{$color};
  --#{$prefix}gradient: none;
}
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
@mixin button-size($padding-y, $padding-x, $font-size, $border-radius) {
  --#{$prefix}btn-padding-y: #{$padding-y};
  --#{$prefix}btn-padding-x: #{$padding-x};
  @include rfs($font-size, --#{$prefix}btn-font-size);
  --#{$prefix}btn-border-radius: #{$border-radius};
}
</textarea>
<br>
<h2 class=w3-text-blue>Sass loops </h2>
<p>Button variants (for regular and outline buttons) use their respective mixins with our $theme-colors map to generate the modifier classes in scss/_buttons.scss.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@each $color, $value in $theme-colors {
  .btn-#{$color} {
    @if $color == "light" {
      @include button-variant(
        $value,
        $value,
        $hover-background: shade-color($value, $btn-hover-bg-shade-amount),
        $hover-border: shade-color($value, $btn-hover-border-shade-amount),
        $active-background: shade-color($value, $btn-active-bg-shade-amount),
        $active-border: shade-color($value, $btn-active-border-shade-amount)
      );
    } @else if $color == "dark" {
      @include button-variant(
        $value,
        $value,
        $hover-background: tint-color($value, $btn-hover-bg-tint-amount),
        $hover-border: tint-color($value, $btn-hover-border-tint-amount),
        $active-background: tint-color($value, $btn-active-bg-tint-amount),
        $active-border: tint-color($value, $btn-active-border-tint-amount)
      );
    } @else {
      @include button-variant($value, $value);
    }
  }
}

@each $color, $value in $theme-colors {
  .btn-outline-#{$color} {
    @include button-outline-variant($value);
  }
}
</textarea>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
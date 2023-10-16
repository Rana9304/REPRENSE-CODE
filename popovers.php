<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Popovers</b></h1>
      <p><h3><i>Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</i></h3> </p>

      <!-- containt past -->
     <h3>Example </h3>
     <br>
<h2 class=w3-text-blue>Enable popovers</h2>
<p>As mentioned above, you must initialize popovers before they can be used. One way to initialize all popovers on a page would be to select them by their data-bs-toggle attribute, like so:</p>
    
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="9" class="form-control" >
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Live demo</h2>
<P>We use JavaScript similar to the snippet above to render the following live popover. Titles are set via data-bs-title and body content is set via data-bs-content.</P>
<img src="image/pop1.jpg" alt="pop1" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
</textarea>
<br>
<h2 class=w3-text-blue>Four directions</h2>
<P>Four options are available: top, right, bottom, and left. Directions are mirrored when using Bootstrap in RTL. Set data-bs-placement to change the direction.</P>
<img src="image/pop2.jpg" alt="pop2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
  Popover on top
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
  Popover on right
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
  Popover on bottom
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
  Popover on left
</button>
</textarea>
<br>
<h2 class=w3-text-blue>Custom container </h2>
<P>When you have some styles on a parent element that interfere with a popover, you’ll want to specify a custom container so that the popover’s HTML appears within that element instead. This is common in responsive tables, input groups, and the like.</P>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const popover = new bootstrap.Popover('.example-popover', {
  container: 'body'
})
</textarea>
<p>Another situation where you’ll want to set an explicit custom container are popovers inside a modal dialog, to make sure that the popover itself is appended to the modal. This is particularly important for popovers that contain interactive elements – modal dialogs will trap focus, so unless the popover is a child element of the modal, users won’t be able to focus or activate these interactive elements.</p>
<br>
<textarea disabled  id="" cols="30" rows="6" class="form-control" >
const popover = new bootstrap.Popover('.example-popover', {
  container: '.modal-body'
})
</textarea>
<br>
<h2 class=w3-text-blue>Custom popovers</h2>
<p>You can customize the appearance of popovers using CSS variables. We set a custom class with data-bs-custom-class="custom-popover" to scope our custom appearance and use it to override some of the local CSS variables.</p>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
.custom-popover {
  --bs-popover-max-width: 200px;
  --bs-popover-border-color: var(--bd-violet-bg);
  --bs-popover-header-bg: var(--bd-violet-bg);
  --bs-popover-header-color: var(--bs-white);
  --bs-popover-body-padding-x: 1rem;
  --bs-popover-body-padding-y: .5rem;
}
</textarea>

<br>
<img src="image/pop3.jpg" alt="pop3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
<button type="button" class="btn btn-secondary"
        data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover"
        data-bs-title="Custom popover"
        data-bs-content="This popover is themed via CSS variables.">
  Custom popover
</button>
</textarea>
<br>
<h2 class=w3-text-blue>Dismiss on next click </h2>
<P>Use the focus trigger to dismiss popovers on the user’s next click of an element other than the toggle element.</P>
<img src="image/pop4.jpg" alt="pop4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
const popover = new bootstrap.Popover('.popover-dismiss', {
  trigger: 'focus'
})
</textarea>
<br>
<h2 class=w3-text-blue>Disabled elements</h2>
<P>Elements with the disabled attribute aren’t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover from a wrapper < div> or < span>, ideally made keyboard-focusable using tabindex="0".</P>
<p>For disabled popover triggers, you may also prefer data-bs-trigger="hover focus" so that the popover appears as immediate visual feedback to your users as they may not expect to click on a disabled element.</p>
<img src="image/pop5.jpg" alt="pop5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
  <button class="btn btn-primary" type="button" disabled>Disabled button</button>
</span>
</textarea>
<br>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, popovers now use local CSS variables on .popover for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}popover-zindex: #{$zindex-popover};
--#{$prefix}popover-max-width: #{$popover-max-width};
@include rfs($popover-font-size, --#{$prefix}popover-font-size);
--#{$prefix}popover-bg: #{$popover-bg};
--#{$prefix}popover-border-width: #{$popover-border-width};
--#{$prefix}popover-border-color: #{$popover-border-color};
--#{$prefix}popover-border-radius: #{$popover-border-radius};
--#{$prefix}popover-inner-border-radius: #{$popover-inner-border-radius};
--#{$prefix}popover-box-shadow: #{$popover-box-shadow};
--#{$prefix}popover-header-padding-x: #{$popover-header-padding-x};
--#{$prefix}popover-header-padding-y: #{$popover-header-padding-y};
@include rfs($popover-header-font-size, --#{$prefix}popover-header-font-size);
--#{$prefix}popover-header-color: #{$popover-header-color};
--#{$prefix}popover-header-bg: #{$popover-header-bg};
--#{$prefix}popover-body-padding-x: #{$popover-body-padding-x};
--#{$prefix}popover-body-padding-y: #{$popover-body-padding-y};
--#{$prefix}popover-body-color: #{$popover-body-color};
--#{$prefix}popover-arrow-width: #{$popover-arrow-width};
--#{$prefix}popover-arrow-height: #{$popover-arrow-height};
--#{$prefix}popover-arrow-border: var(--#{$prefix}popover-border-color);
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$popover-font-size:                 $font-size-sm;
$popover-bg:                        var(--#{$prefix}body-bg);
$popover-max-width:                 276px;
$popover-border-width:              var(--#{$prefix}border-width);
$popover-border-color:              var(--#{$prefix}border-color-translucent);
$popover-border-radius:             var(--#{$prefix}border-radius-lg);
$popover-inner-border-radius:       calc(#{$popover-border-radius} - #{$popover-border-width}); // stylelint-disable-line function-disallowed-list
$popover-box-shadow:                $box-shadow;

$popover-header-font-size:          $font-size-base;
$popover-header-bg:                 var(--#{$prefix}secondary-bg);
$popover-header-color:              $headings-color;
$popover-header-padding-y:          .5rem;
$popover-header-padding-x:          $spacer;

$popover-body-color:                var(--#{$prefix}body-color);
$popover-body-padding-y:            $spacer;
$popover-body-padding-x:            $spacer;

$popover-arrow-width:               1rem;
$popover-arrow-height:              .5rem;
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<p>Enable popovers via JavaScript:</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const exampleEl = document.getElementById('example')
const popover = new bootstrap.Popover(exampleEl, options)
</textarea>
<img src="image/pop6.jpg" alt="pop6" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Options</h2>
<P>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</P>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/pop7.jpg" alt="pop7" class="me-5" width="100%" >
<img src="image/pop8.jpg" alt="pop8" class="me-5" width="100%" >
<img src="image/pop9.jpg" alt="pop9" class="me-5" width="100%" >
<img src="image/pop10.jpg" alt="pop10" class="me-5" width="100%" >
<img src="image/pop11.jpg" alt="pop11" class="me-5" width="100%" >
<img src="image/pop12.jpg" alt="pop12" class="me-5" width="100%" >
<br>
<p>Using function with popperConfig </p>
<br>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const popover = new bootstrap.Popover(element, {
  popperConfig(defaultBsPopperConfig) {
    // const newPopperConfig = {...}
    // use defaultBsPopperConfig if needed...
    // return newPopperConfig
  }
})
</textarea>
<br>
<h2 class=w3-text-blue>Methods</h2>
<img src="image/pop13.jpg" alt="pop13" class="me-5" width="100%" >
<img src="image/pop14.jpg" alt="pop14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
// getOrCreateInstance example
const popover = bootstrap.Popover.getOrCreateInstance('#example') // Returns a Bootstrap popover instance

// setContent example
myPopover.setContent({
  '.popover-header': 'another title',
  '.popover-body': 'another content'
})
</textarea>
<br>
<h2 class=w3-text-blue>Events</h2>
<img src="image/pop15.jpg" alt="pop15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const myPopoverTrigger = document.getElementById('myPopover')
myPopoverTrigger.addEventListener('hidden.bs.popover', () => {
  // do something...
})
</textarea>















</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
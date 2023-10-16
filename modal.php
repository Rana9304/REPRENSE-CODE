<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Modal</b></h1>
      <p><h3><i>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</i></h3> </p>

      <!-- containt past -->
     <h3>How it works</h3>
     <p>Before getting started with Bootstrap’s modal component, be sure to read the following as our menu options have recently changed.</p>
     <img src="image/mod1.jpg" alt="mod1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="10" class="form-control" >
        const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</textarea>
</div>
</div>
<p>Keep reading for demos and usage guidelines.</p>
<br>
<h2>Examples </h2>
<br>
<h2 class=w3-text-blue>Modal components</h2>
<p>Below is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
<img src="image/mod2.jpg" alt="mod2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Live demo</h2>
<P>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.
</P>
<img src="image/mod3.jpg" alt="mod3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Static backdrop</h2>
<P>When backdrop is set to static, the modal will not close when clicking outside of it. Click the button below to try it.</P>
<img src="image/mod4.jpg" alt="mod4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</textarea>

<br>
<h2 class=w3-text-blue>Scrolling long content</h2>
<P>When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</P>
<img src="image/mod5.jpg" alt="mod5" class="me-5" width="100%" >
<p>You can also create a scrollable modal that allows scroll the modal body by adding .modal-dialog-scrollable to .modal-dialog.</p>
<img src="image/mod6.jpg" alt="mod6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">
  ...
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Vertically centered</h2>
<P>Add .modal-dialog-centered to .modal-dialog to vertically center the modal.</P>
<img src="image/mod7.jpg" alt="mod7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<!-- Vertically centered modal -->
<div class="modal-dialog modal-dialog-centered">
  ...
</div>

<!-- Vertically centered scrollable modal -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  ...
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Tooltips and popovers </h2>
<P>Tooltips and popovers can be placed within modals as needed. When modals are closed, any tooltips and popovers within are also automatically dismissed.</P>
<img src="image/mod8.jpg" alt="mod8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="modal-body">
  <h2 class="fs-5">Popover in a modal</h2>
  <p>This <button class="btn btn-secondary" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</button> triggers a popover on click.</p>
  <hr>
  <h2 class="fs-5">Tooltips in a modal</h2>
  <p><a href="#" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
</div>
</textarea>

<br>
<h2 class=w3-text-blue>Using the grid</h2>
<P>Utilize the Bootstrap grid system within a modal by nesting .container-fluid within the .modal-body. Then, use the normal grid system classes as you would anywhere else.</P>
<img src="image/mod9.jpg" alt="mod9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="modal-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">.col-md-4</div>
      <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
    </div>
    <div class="row">
      <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
      <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
    </div>
    <div class="row">
      <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
    </div>
    <div class="row">
      <div class="col-sm-9">
        Level 1: .col-sm-9
        <div class="row">
          <div class="col-8 col-sm-6">
            Level 2: .col-8 .col-sm-6
          </div>
          <div class="col-4 col-sm-6">
            Level 2: .col-4 .col-sm-6
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</textarea>

<br>
<h2 class=w3-text-blue>Varying modal content</h2>
<P>Have a bunch of buttons that all trigger the same modal with slightly different contents? Use event.relatedTarget and HTML data-bs-* attributes to vary the contents of the modal depending on which button was clicked.</P>
<p>Below is a live demo followed by example HTML and JavaScript. For more information, read the modal events docs for details on relatedTarget.</p>
<img src="image/mod10.jpg" alt="mod10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            < textarea class="form-control" id="message-text">< /textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</textarea>

<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
</textarea>
<br>
<h2 class=w3-text-blue>Toggle between modals</h2>
<P>Toggle between multiple modals with some clever placement of the data-bs-target and data-bs-toggle attributes. For example, you could toggle a password reset modal from within an already open sign in modal. Please note multiple modals cannot be open at the same time—this method simply toggles between two separate modals.</P>
<img src="image/mod11.jpg" alt="mod11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>
</textarea>


<br>
<h2 class=w3-text-blue>Change animation</h2>
<P>The $modal-fade-transform variable determines the transform state of .modal-dialog before the modal fade-in animation, the $modal-show-transform variable determines the transform of .modal-dialog at the end of the modal fade-in animation.</P>
<p>If you want for example a zoom-in animation, you can set $modal-fade-transform: scale(.8).</p>
<br>
<h2 class=w3-text-blue>Remove animation </h2>
<p>For modals that simply appear rather than fade in to view, remove the .fade class from your modal markup.</p>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
<div class="modal" tabindex="-1" aria-labelledby="..." aria-hidden="true">
  ...
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dynamic heights</h2>
<p>If the height of a modal changes while it is open, you should call myModal.handleUpdate() to readjust the modal’s position in case a scrollbar appears.</p>
<br>
<h2 class=w3-text-blue>Accessibility</h2>
<p>Be sure to add aria-labelledby="...", referencing the modal title, to .modal. Additionally, you may give a description of your modal dialog with aria-describedby on .modal. Note that you don’t need to add role="dialog" since we already add it via JavaScript.</p>
<br>
<h2 class=w3-text-blue>Embedding YouTube videos </h2>
<p>Embedding YouTube videos in modals requires additional JavaScript not in Bootstrap to automatically stop playback and more. See this helpful Stack Overflow post for more information.</p>
<br>
<h2 class=w3-text-blue>Optional sizes </h2>
<P>Modals have three optional sizes, available via modifier classes to be placed on a .modal-dialog. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</P>
<img src="image/mod12.jpg" alt="mod12" class="me-5" width="100%" >
<p>Our default modal without modifier class constitutes the “medium” size modal.</p>
<img src="image/mod13.jpg" alt="mod13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div class="modal-dialog modal-xl">...</div>
<div class="modal-dialog modal-lg">...</div>
<div class="modal-dialog modal-sm">...</div>
</textarea>

<br>
<h2 class=w3-text-blue>Fullscreen Modal </h2>
<P>Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a .modal-dialog.</P>
<img src="image/mod14.jpg" alt="mod14" class="me-5" width="100%" >
<img src="image/mod15.jpg" alt="mod15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<!-- Full screen modal -->
<div class="modal-dialog modal-fullscreen-sm-down">
  ...
</div>
</textarea>
<br>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, modals now use local CSS variables on .modal and .modal-backdrop for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}modal-zindex: #{$zindex-modal};
--#{$prefix}modal-width: #{$modal-md};
--#{$prefix}modal-padding: #{$modal-inner-padding};
--#{$prefix}modal-margin: #{$modal-dialog-margin};
--#{$prefix}modal-color: #{$modal-content-color};
--#{$prefix}modal-bg: #{$modal-content-bg};
--#{$prefix}modal-border-color: #{$modal-content-border-color};
--#{$prefix}modal-border-width: #{$modal-content-border-width};
--#{$prefix}modal-border-radius: #{$modal-content-border-radius};
--#{$prefix}modal-box-shadow: #{$modal-content-box-shadow-xs};
--#{$prefix}modal-inner-border-radius: #{$modal-content-inner-border-radius};
--#{$prefix}modal-header-padding-x: #{$modal-header-padding-x};
--#{$prefix}modal-header-padding-y: #{$modal-header-padding-y};
--#{$prefix}modal-header-padding: #{$modal-header-padding}; // Todo in v6: Split this padding into x and y
--#{$prefix}modal-header-border-color: #{$modal-header-border-color};
--#{$prefix}modal-header-border-width: #{$modal-header-border-width};
--#{$prefix}modal-title-line-height: #{$modal-title-line-height};
--#{$prefix}modal-footer-gap: #{$modal-footer-margin-between};
--#{$prefix}modal-footer-bg: #{$modal-footer-bg};
--#{$prefix}modal-footer-border-color: #{$modal-footer-border-color};
--#{$prefix}modal-footer-border-width: #{$modal-footer-border-width};
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
--#{$prefix}backdrop-zindex: #{$zindex-modal-backdrop};
--#{$prefix}backdrop-bg: #{$modal-backdrop-bg};
--#{$prefix}backdrop-opacity: #{$modal-backdrop-opacity};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$modal-inner-padding:               $spacer;

$modal-footer-margin-between:       .5rem;

$modal-dialog-margin:               .5rem;
$modal-dialog-margin-y-sm-up:       1.75rem;

$modal-title-line-height:           $line-height-base;

$modal-content-color:               null;
$modal-content-bg:                  var(--#{$prefix}body-bg);
$modal-content-border-color:        var(--#{$prefix}border-color-translucent);
$modal-content-border-width:        var(--#{$prefix}border-width);
$modal-content-border-radius:       var(--#{$prefix}border-radius-lg);
$modal-content-inner-border-radius: subtract($modal-content-border-radius, $modal-content-border-width);
$modal-content-box-shadow-xs:       $box-shadow-sm;
$modal-content-box-shadow-sm-up:    $box-shadow;

$modal-backdrop-bg:                 $black;
$modal-backdrop-opacity:            .5;

$modal-header-border-color:         var(--#{$prefix}border-color);
$modal-header-border-width:         $modal-content-border-width;
$modal-header-padding-y:            $modal-inner-padding;
$modal-header-padding-x:            $modal-inner-padding;
$modal-header-padding:              $modal-header-padding-y $modal-header-padding-x; // Keep this for backwards compatibility

$modal-footer-bg:                   null;
$modal-footer-border-color:         $modal-header-border-color;
$modal-footer-border-width:         $modal-header-border-width;

$modal-sm:                          300px;
$modal-md:                          500px;
$modal-lg:                          800px;
$modal-xl:                          1140px;

$modal-fade-transform:              translate(0, -50px);
$modal-show-transform:              none;
$modal-transition:                  transform .3s ease-out;
$modal-scale-transform:             scale(1.02);
</textarea>
<br>
<h2 class=w3-text-blue>Sass loops</h2>
<p>Responsive fullscreen modals are generated via the $breakpoints map and a loop in scss/_modal.scss.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@each $breakpoint in map-keys($grid-breakpoints) {
  $infix: breakpoint-infix($breakpoint, $grid-breakpoints);
  $postfix: if($infix != "", $infix + "-down", "");

  @include media-breakpoint-down($breakpoint) {
    .modal-fullscreen#{$postfix} {
      width: 100vw;
      max-width: none;
      height: 100%;
      margin: 0;

      .modal-content {
        height: 100%;
        border: 0;
        @include border-radius(0);
      }

      .modal-header,
      .modal-footer {
        @include border-radius(0);
      }

      .modal-body {
        overflow-y: auto;
      }
    }
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<p>The modal plugin toggles your hidden content on demand, via data attributes or JavaScript. It also overrides default scrolling behavior and generates a .modal-backdrop to provide a click area for dismissing shown modals when clicking outside the modal.</p>
<h2>Via data attributes</h2>
<br>
<h2 class=w3-text-blue>Toggle </h2>
<p>Activate a modal without writing JavaScript. Set data-bs-toggle="modal" on a controller element, like a button, along with a data-bs-target="#foo" or href="#foo" to target a specific modal to toggle.</p>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
<button type="button" data-bs-toggle="modal" data-bs-target="#myModal">Launch modal</button>
</textarea>
<br>
<h2 class=w3-text-blue>Dismiss</h2>
<p>Dismissal can be achieved with the data-bs-dismiss attribute on a button within the modal as demonstrated below:</p>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</textarea>
<p>or on a button outside the modal using the additional data-bs-target as demonstrated below:</p>
<br>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#my-modal" aria-label="Close"></button>
</textarea>

<br>
<h2 class=w3-text-blue>Via JavaScript</h2>
<p>Create a modal with a single line of JavaScript:</p>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
const myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
// or
const myModalAlternative = new bootstrap.Modal('#myModal', options)
</textarea>
<br>
<h2 class=w3-text-blue>Options</h2>
<p>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</p>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/mod16.jpg" alt="mod16" class="me-5" width="100%" >
<br>
<h2>Methods</h2>
<br>
<h2 class=w3-text-blue>Passing options</h2>
<p>Activates your content as a modal. Accepts an optional options object.</p>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
const myModal = new bootstrap.Modal('#myModal', {
  keyboard: false
})
</textarea>
<img src="image/mod17.jpg" alt="mod17" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<p>Bootstrap’s modal class exposes a few events for hooking into modal functionality. All modal events are fired at the modal itself (i.e. at the <div class="modal">).
</p>
<img src="image/mod18.jpg" alt="mod18" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const myModalEl = document.getElementById('myModal')
myModalEl.addEventListener('hidden.bs.modal', event => {
  // do something...
})
</textarea>
</div>





























</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
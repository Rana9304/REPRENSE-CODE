<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Toasts</b></h1>
      <p><h3><i>Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.</i></h3> </p>
      <p>Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.</p>

      <!-- containt past -->
     <h3>Example </h3>
     <h2 class=w3-text-blue>Basic </h2>
<P>To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use display: flex, allowing easy alignment of content thanks to our margin and flexbox utilities.</P>
<p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
     <img src="image/tos1.jpg" alt="tos" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="16" class="form-control" >
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Live example</h2>
<P>Click the button below to show a toast (positioned with our utilities in the lower right corner) that has been hidden by default.</P>
<img src="image/tos2.jpg" alt="tos2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
</textarea>
<p>We use the following JavaScript to trigger our live toast demo:</p>
<br>
<textarea disabled  id="" cols="30" rows="17" class="form-control" >
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}
</textarea>
<br>
<h2 class=w3-text-blue>Translucent</h2>
<P>Toasts are slightly translucent to blend in with what’s below them.</P>
<img src="image/tos3.jpg" alt="tos3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small class="text-body-secondary">11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Stacking</h2>
<P>You can stack toasts by wrapping them in a toast container, which will vertically add some spacing.</P>
<img src="image/tos4.jpg" alt="tos4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="toast-container position-static">
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="text-body-secondary">just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      See? Just like this.
    </div>
  </div>

  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="text-body-secondary">2 seconds ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Heads up, toasts will stack automatically
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Custom content</h2>
<P>Customize your toasts by removing sub-components, tweaking them with utilities, or by adding your own markup. Here we’ve created a simpler toast by removing the default .toast-header, adding a custom hide icon from Bootstrap Icons, and using some flexbox utilities to adjust the layout.</P>
<img src="image/tos5.jpg" alt="tos5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
</textarea>
<p>Alternatively, you can also add additional controls and components to toasts.</p>
<br>
<img src="image/tos6.jpg" alt="tos6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body">
    Hello, world! This is a toast message.
    <div class="mt-2 pt-2 border-top">
      <button type="button" class="btn btn-primary btn-sm">Take action</button>
      <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Color schemes</h2>
<P>Building on the above example, you can create different toast color schemes with our color and background utilities. Here we’ve added .text-bg-primary to the .toast, and then added .btn-close-white to our close button. For a crisp edge, we remove the default border with .border-0.</P>
<img src="image/tos7.jpg" alt="tos7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Placement </h2>
<P>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the .toast.</P>
<img src="image/tos8.jpg" alt="tos8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<form>
  <div class="mb-3">
    <label for="selectToastPlacement">Toast placement</label>
    <select class="form-select mt-2" id="selectToastPlacement">
      <option value="" selected>Select a position...</option>
      <option value="top-0 start-0">Top left</option>
      <option value="top-0 start-50 translate-middle-x">Top center</option>
      <option value="top-0 end-0">Top right</option>
      <option value="top-50 start-0 translate-middle-y">Middle left</option>
      <option value="top-50 start-50 translate-middle">Middle center</option>
      <option value="top-50 end-0 translate-middle-y">Middle right</option>
      <option value="bottom-0 start-0">Bottom left</option>
      <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
      <option value="bottom-0 end-0">Bottom right</option>
    </select>
  </div>
</form>
<div aria-live="polite" aria-atomic="true" class="bg-body-secondary position-relative bd-example-toasts rounded-3">
  <div class="toast-container p-3" id="toastPlacement">
    <div class="toast">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>
  </div>
</div>
</textarea>
<p>For systems that generate more notifications, consider using a wrapping element so they can easily stack.</p>
<br>
<img src="image/tos9.jpg" alt="tos9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div aria-live="polite" aria-atomic="true" class="position-relative">
  <!-- Position it: -->
  <!-- - `.toast-container` for spacing between toasts -->
  <!-- - `top-0` & `end-0` to position the toasts in the upper right corner -->
  <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
  <div class="toast-container top-0 end-0 p-3">

    <!-- Then put toasts within -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small class="text-body-secondary">just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        See? Just like this.
      </div>
    </div>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small class="text-body-secondary">2 seconds ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Heads up, toasts will stack automatically
      </div>
    </div>
  </div>
</div>
</textarea>
<p>You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.</p>
<br>
<img src="image/tos10.jpg" alt="tos10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Accessibility </h2>
<P>oasts are intended to be small interruptions to your visitors or users, so to help those with screen readers and similar assistive technologies, you should wrap your toasts in an aria-live region. Changes to live regions (such as injecting/updating a toast component) are automatically announced by screen readers without needing to move the user’s focus or otherwise interrupt the user. Additionally, include aria-atomic="true" to ensure that the entire toast is always announced as a single (atomic) unit, rather than just announcing what was changed (which could lead to problems if you only update part of the toast’s content, or if displaying the same toast content at a later point in time). If the information needed is important for the process, e.g. for a list of errors in a form, then use the alert component instead of toast.</P>
<p>Note that the live region needs to be present in the markup before the toast is generated or updated. If you dynamically generate both at the same time and inject them into the page, they will generally not be announced by assistive technologies.</p>
<p>You also need to adapt the role and aria-live level depending on the content. If it’s an important message like an error, use role="alert" aria-live="assertive", otherwise use role="status" aria-live="polite" attributes.</p>
<p>As the content you’re displaying changes, be sure to update the delay timeout so that users have enough time to read the toast.</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-bs-delay="10000">
  <div role="alert" aria-live="assertive" aria-atomic="true">...</div>
</div>
</textarea>
<p>When using autohide: false, you must add a close button to allow users to dismiss the toast.</p>
<br>
<img src="image/tos11.jpg" alt="tos11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="14" class="form-control" >
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
</textarea>
<p>While technically it’s possible to add focusable/actionable controls (such as additional buttons or links) in your toast, you should avoid doing this for autohiding toasts. Even if you give the toast a long delay timeout, keyboard and assistive technology users may find it difficult to reach the toast in time to take action (since toasts don’t receive focus when they are displayed). If you absolutely must have further controls, we recommend using a toast with autohide: false.</p>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, toasts now use local CSS variables on .toast for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}toast-zindex: #{$zindex-toast};
--#{$prefix}toast-padding-x: #{$toast-padding-x};
--#{$prefix}toast-padding-y: #{$toast-padding-y};
--#{$prefix}toast-spacing: #{$toast-spacing};
--#{$prefix}toast-max-width: #{$toast-max-width};
@include rfs($toast-font-size, --#{$prefix}toast-font-size);
--#{$prefix}toast-color: #{$toast-color};
--#{$prefix}toast-bg: #{$toast-background-color};
--#{$prefix}toast-border-width: #{$toast-border-width};
--#{$prefix}toast-border-color: #{$toast-border-color};
--#{$prefix}toast-border-radius: #{$toast-border-radius};
--#{$prefix}toast-box-shadow: #{$toast-box-shadow};
--#{$prefix}toast-header-color: #{$toast-header-color};
--#{$prefix}toast-header-bg: #{$toast-header-background-color};
--#{$prefix}toast-header-border-color: #{$toast-header-border-color};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$toast-max-width:                   350px;
$toast-padding-x:                   .75rem;
$toast-padding-y:                   .5rem;
$toast-font-size:                   .875rem;
$toast-color:                       null;
$toast-background-color:            rgba(var(--#{$prefix}body-bg-rgb), .85);
$toast-border-width:                var(--#{$prefix}border-width);
$toast-border-color:                var(--#{$prefix}border-color-translucent);
$toast-border-radius:               var(--#{$prefix}border-radius);
$toast-box-shadow:                  var(--#{$prefix}box-shadow);
$toast-spacing:                     $container-padding-x;

$toast-header-color:                var(--#{$prefix}secondary-color);
$toast-header-background-color:     rgba(var(--#{$prefix}body-bg-rgb), .85);
$toast-header-border-color:         $toast-border-color;
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<p>Initialize toasts via JavaScript:</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const toastElList = document.querySelectorAll('.toast')
const toastList = [...toastElList].map(toastEl => new bootstrap.Toast(toastEl, option))
</textarea>
<br>
<h2 class=w3-text-blue>Triggers </h2>
<p>Dismissal can be achieved with the data-bs-dismiss attribute on a button within the toast as demonstrated below:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</textarea>
<p>or on a button outside the toast using the additional data-bs-target as demonstrated below:</p>
<br>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="toast" data-bs-target="#my-toast" aria-label="Close"></button>
</textarea>
<br>
<h2 class=w3-text-blue>Options </h2>
<P>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</P>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/tos12.jpg" alt="tos12" class="me-5" width="100%" >
<h2 class=w3-text-blue>Methods</h2>
<img src="image/tos13.jpg" alt="tos13" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<img src="image/tos14.jpg" alt="tos14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
const myToastEl = document.getElementById('myToast')
myToastEl.addEventListener('hidden.bs.toast', () => {
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

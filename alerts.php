<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Alerts</b></h1>
      <p><h3><i>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</i></h3> </p>

      <!-- containt past -->
     <h3>Example </h3>
     <p>Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.</p>
     <img src="image/alt1.jpg" alt="alt1" class="me-5" width="100%" >
     <img src="image/alt2.jpg" alt="alt2" class="me-5" width="100%" >
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>
        </textarea>
</div>
</div>

<br>
<h2 class=w3-text-blue>Live example</h2>
<P>Click the button below to show an alert (hidden with inline styles to start), then dismiss (and destroy) it with the built-in close button.</P>
<img src="image/alt3.jpg" alt="alt3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div id="liveAlertPlaceholder"></div>
<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
</textarea>
<p>We use the following JavaScript to trigger our live alert demo:</p>
<br>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Nice, you triggered this alert message!', 'success')
  })
}
</textarea>
<br>
<h2 class=w3-text-blue>Link color</h2>
<P>Use the .alert-link utility class to quickly provide matching colored links within any alert.</P>
<img src="image/alt4.jpg" alt="alt4" class="me-5" width="100%" >
<img src="image/alt5.jpg" alt="alt5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="alert alert-primary" role="alert">
  A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-success" role="alert">
  A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-info" role="alert">
  A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-light" role="alert">
  A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
</textarea>

<br>
<h2 class=w3-text-blue>Additional content </h2>
<P>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</P>
<img src="image/alt6.jpg" alt="alt6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
</textarea>

<br>
<h2 class=w3-text-blue>Icons</h2>
<P>Similarly, you can use flexbox utilities and Bootstrap Icons to create alerts with icons. Depending on your icons and content, you may want to add more utilities or custom styles.</P>
<img src="image/alt7.jpg" alt="alt7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    An example alert with an icon
  </div>
</div>
</textarea>
<p>Need more than one icon for your alerts? Consider using more Bootstrap Icons and making a local SVG sprite like so to easily reference the same icons repeatedly.</p>
<br>
<img src="image/alt8.jpg" alt="alt8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    An example alert with an icon
  </div>
</div>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    An example success alert with an icon
  </div>
</div>
<div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example warning alert with an icon
  </div>
</div>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example danger alert with an icon
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Dismissing</h2>
<P>Using the alert JavaScript plugin, it’s possible to dismiss any alert inline. Here’s how:</P>
<img src="image/alt9.jpg" alt="alt9" class="me-5" width="100%" >
<p>You can see this in action with a live demo:</p>
<br>
<img src="image/alt10.jpg" alt="alt10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>CSS</h2>
<h3>Variables </h3>
<P>As part of Bootstrap’s evolving CSS variables approach, alerts now use local CSS variables on .alert for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</P>
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
--#{$prefix}alert-bg: transparent;
--#{$prefix}alert-padding-x: #{$alert-padding-x};
--#{$prefix}alert-padding-y: #{$alert-padding-y};
--#{$prefix}alert-margin-bottom: #{$alert-margin-bottom};
--#{$prefix}alert-color: inherit;
--#{$prefix}alert-border-color: transparent;
--#{$prefix}alert-border: #{$alert-border-width} solid var(--#{$prefix}alert-border-color);
--#{$prefix}alert-border-radius: #{$alert-border-radius};
--#{$prefix}alert-link-color: inherit;
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$alert-padding-y:               $spacer;
$alert-padding-x:               $spacer;
$alert-margin-bottom:           1rem;
$alert-border-radius:           var(--#{$prefix}border-radius);
$alert-link-font-weight:        $font-weight-bold;
$alert-border-width:            var(--#{$prefix}border-width);
$alert-dismissible-padding-r:   $alert-padding-x * 3; // 3x covers width of x plus default padding on either side
</textarea>

<br>
<h2 class=w3-text-blue>Sass mixins</h2>
<P>Used in combination with $theme-colors to create contextual modifier classes for our alerts.</P>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
@mixin alert-variant($background, $border, $color) {
  --#{$prefix}alert-color: #{$color};
  --#{$prefix}alert-bg: #{$background};
  --#{$prefix}alert-border-color: #{$border};
  --#{$prefix}alert-link-color: #{shade-color($color, 20%)};

  @if $enable-gradients {
    background-image: var(--#{$prefix}gradient);
  }

  .alert-link {
    color: var(--#{$prefix}alert-link-color);
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>Sass loops </h2>
<p>Loop that generates the modifier classes with the alert-variant() mixin.</p>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
// Generate contextual modifier classes for colorizing the alert
@each $state in map-keys($theme-colors) {
  .alert-#{$state} {
    --#{$prefix}alert-color: var(--#{$prefix}#{$state}-text-emphasis);
    --#{$prefix}alert-bg: var(--#{$prefix}#{$state}-bg-subtle);
    --#{$prefix}alert-border-color: var(--#{$prefix}#{$state}-border-subtle);
    --#{$prefix}alert-link-color: var(--#{$prefix}#{$state}-text-emphasis);
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>JavaScript behavior</h2>
<h3>Initialize </h3>
<P>Initialize elements as alerts</P>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const alertList = document.querySelectorAll('.alert')
const alerts = [...alertList].map(element => new bootstrap.Alert(element))
</textarea>
<br>
<h2 class=w3-text-blue>Triggers </h2>
<p>Dismissal can be achieved with the data-bs-dismiss attribute on a button within the alert as demonstrated below:</p>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</textarea>
<p>or on a button outside the alert using the additional data-bs-target as demonstrated below:</p>
<br>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
</textarea>
<p><b>Note that closing an alert will remove it from the DOM.</b></p>

<br>
<h2 class=w3-text-blue>Methods </h2>
<p>You can create an alert instance with the alert constructor, for example:</p>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const bsAlert = new bootstrap.Alert('#myAlert')
</textarea>
<br>
<p>This makes an alert listen for click events on descendant elements which have the data-bs-dismiss="alert" attribute. (Not necessary when using the data-api’s auto-initialization.)</p>
<img src="image/alt11.jpg" alt="alt11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const alert = bootstrap.Alert.getOrCreateInstance('#myAlert')
alert.close()
</textarea>
<br>
<h2 class=w3-text-blue>Events</h2>
<p>Bootstrap’s alert plugin exposes a few events for hooking into alert functionality.</p>
<img src="image/alt12.jpg" alt="alt12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const myAlert = document.getElementById('myAlert')
myAlert.addEventListener('closed.bs.alert', event => {
  // do something, for instance, explicitly move focus to the most appropriate element,
  // so it doesn't get lost/reset to the start of the page
  // document.getElementById('...').focus()
})
</textarea>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Badges</b></h1>
      <p><h3><i>Documentation and examples for badges, our small count and labeling component.</i></h3> </p>

      <!-- containt past -->
     <h3><b>Example </b></h3>
     <p>Badges scale to match the size of the immediate parent element by using relative font sizing and em units. As of v5, badges no longer have focus or hover styles for links.</p>
     <br>
     <h2 class=w3-text-blue>Headings</h2>
     <img src="image/bag1.jpg" alt="bag1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="12" class="form-control" >
        <h1>Example heading <span class="badge bg-secondary">New</span></h1>
<h2>Example heading <span class="badge bg-secondary">New</span></h2>
<h3>Example heading <span class="badge bg-secondary">New</span></h3>
<h4>Example heading <span class="badge bg-secondary">New</span></h4>
<h5>Example heading <span class="badge bg-secondary">New</span></h5>
<h6>Example heading <span class="badge bg-secondary">New</span></h6>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Buttons</h2>
<P>Badges can be used as part of links or buttons to provide a counter.</P>
<img src="image/bag2.jpg" alt="bag2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
<button type="button" class="btn btn-primary">
  Notifications <span class="badge text-bg-secondary">4</span>
</button>
</textarea>
<p>Note that depending on how they are used, badges may be confusing for users of screen readers and similar assistive technologies. While the styling of badges provides a visual cue as to their purpose, these users will simply be presented with the content of the badge. Depending on the specific situation, these badges may seem like random additional words or numbers at the end of a sentence, link, or button.</p>
<p>Unless the context is clear (as with the “Notifications” example, where it is understood that the “4” is the number of notifications), consider including additional context with a visually hidden piece of additional text.</p>
<br>
<h2 class=w3-text-blue>Positioned</h2>
<P>Use utilities to modify a .badge and position it in the corner of a link or button.</P>
<img src="image/bag3.jpg" alt="bag3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
<button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
</textarea>
<p>You can also replace the .badge class with a few more utilities without a count for a more generic indicator.
</p>
<img src="image/bag4.jpg" alt="bag4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
<button type="button" class="btn btn-primary position-relative">
  Profile
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button>
</textarea>
<br>
<h2 class=w3-text-blue>Background colors</h2>
<P>Set a background-color with contrasting foreground color with our .text-bg-{color} helpers. Previously it was required to manually pair your choice of .text-{color} and .bg-{color} utilities for styling, which you still may use if you prefer.</P>
<img src="image/bag5.jpg" alt="bag5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<span class="badge text-bg-primary">Primary</span>
<span class="badge text-bg-secondary">Secondary</span>
<span class="badge text-bg-success">Success</span>
<span class="badge text-bg-danger">Danger</span>
<span class="badge text-bg-warning">Warning</span>
<span class="badge text-bg-info">Info</span>
<span class="badge text-bg-light">Light</span>
<span class="badge text-bg-dark">Dark</span>
</textarea>
<br>
<h2 class=w3-text-blue>Pill badges</h2>
<P>Use the .rounded-pill utility class to make badges more rounded with a larger border-radius.</P>
<img src="image/bag6.jpg" alt="bag6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<span class="badge rounded-pill text-bg-primary">Primary</span>
<span class="badge rounded-pill text-bg-secondary">Secondary</span>
<span class="badge rounded-pill text-bg-success">Success</span>
<span class="badge rounded-pill text-bg-danger">Danger</span>
<span class="badge rounded-pill text-bg-warning">Warning</span>
<span class="badge rounded-pill text-bg-info">Info</span>
<span class="badge rounded-pill text-bg-light">Light</span>
<span class="badge rounded-pill text-bg-dark">Dark</span>
</textarea>
<br>
<h2 class=w3-text-blue>CSS</h2>
<h3 class=w3-text-blue>Variables</h3>
<p>As part of Bootstrap’s evolving CSS variables approach, badges now use local CSS variables on .badge for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
--#{$prefix}badge-padding-x: #{$badge-padding-x};
--#{$prefix}badge-padding-y: #{$badge-padding-y};
@include rfs($badge-font-size, --#{$prefix}badge-font-size);
--#{$prefix}badge-font-weight: #{$badge-font-weight};
--#{$prefix}badge-color: #{$badge-color};
--#{$prefix}badge-border-radius: #{$badge-border-radius};
</textarea>
<br>
<h3 class=w3-text-blue>Sass variables</h3>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$badge-font-size:                   .75em;
$badge-font-weight:                 $font-weight-bold;
$badge-color:                       $white;
$badge-padding-y:                   .35em;
$badge-padding-x:                   .65em;
$badge-border-radius:               var(--#{$prefix}border-radius);
</textarea>





</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

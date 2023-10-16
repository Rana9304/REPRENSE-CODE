<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Navs and tabs</b></h1>
      <p><h3><i>Documentation and examples for how to use Bootstrap’s included navigation components.</i></h3> </p>

      <!-- containt past -->
     <h3>Base nav</h3>
     <p>Navigation available in Bootstrap share general markup and styles, from the base .nav class to the active and disabled states. Swap modifier classes to switch between each style.</p>
     <p>The base .nav component is built with flexbox and provide a strong foundation for building all types of navigation components. It includes some style overrides (for working with lists), some link padding for larger hit areas, and basic disabled styling.</p>
     <img src="image/ntb1.jpg" alt="ntb1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
        </textarea>
</div>
</div>
<p>Classes are used throughout, so your markup can be super flexible. Use < ul>s like above, < ol> if the order of your items is important, or roll your own with a < nav> element. Because the .nav uses display: flex, the nav links behave the same as nav items would, but without the extra markup.</p>
<br>
<img src="image/ntb2.jpg" alt="ntb2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="nav">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Available styles</h2>
<P>Change the style of .navs component with modifiers and utilities. Mix and match as needed, or build your own.</P>

<br>
<h2 class=w3-text-blue>Horizontal alignment</h2>
<P>Change the horizontal alignment of your nav with flexbox utilities. By default, navs are left-aligned, but you can easily change them to center or right-aligned.</P>
<p>Centered with .justify-content-center:</p>
<img src="image/ntb3.jpg" alt="ntb3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<p>Right-aligned with .justify-content-end:</p>
<br>
<img src="image/ntb4.jpg" alt="ntb4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Vertical </h2>
<P>Stack your navigation by changing the flex item direction with the .flex-column utility. Need to stack them on some viewports but not others? Use the responsive versions (e.g., .flex-sm-column).</P>
<img src="image/ntb5.jpg" alt="ntb5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<p>As always, vertical navigation is possible without < ul>s, too.</p>
<br>
<img src="image/ntb6.jpg" alt="ntb6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Tabs</h2>
<P>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface. Use them to create tabbable regions with our tab JavaScript plugin.</P>
<img src="image/ntb7.jpg" alt="ntb7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Pills</h2>
<P>Take that same HTML, but use .nav-pills instead:</P>
<img src="image/ntb8.jpg" alt="ntb8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Underline</h2>
<P>Take that same HTML, but use .nav-underline instead:</P>
<img src="image/ntb9.jpg" alt="ntb9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Fill and justify</h2>
<P>Force your .nav’s contents to extend the full available width with one of two modifier classes. To proportionately fill all available space with your .nav-items, use .nav-fill. Notice that all horizontal space is occupied, but not every nav item has the same width.</P>
<img src="image/ntb10.jpg" alt="ntb10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Much longer nav link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<p>When using a <nav>-based navigation, you can safely omit .nav-item as only .nav-link is required for styling < a> elements.</p>
<br>
<img src="image/ntb11.jpg" alt="ntb11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
<nav class="nav nav-pills nav-fill">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Much longer nav link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</textarea>
<p>For equal-width elements, use .nav-justified. All horizontal space will be occupied by nav links, but unlike the .nav-fill above, every nav item will be the same width.</p>
<br>
<img src="image/ntb12.jpg" alt="ntb12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Much longer nav link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<p>Similar to the .nav-fill example using a < nav>-based navigation.</p>
<br>
<img src="image/ntb13.jpg" alt="ntb13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
<nav class="nav nav-pills nav-justified">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Much longer nav link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Working with flex utilities </h2>
<P>If you need responsive nav variations, consider using a series of flexbox utilities. While more verbose, these utilities offer greater customization across responsive breakpoints. In the example below, our nav will be stacked on the lowest breakpoint, then adapt to a horizontal layout that fills the available width starting from the small breakpoint.</P>
<img src="image/ntb14.jpg" alt="ntb14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Active</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Longer nav link</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
  <a class="flex-sm-fill text-sm-center nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Regarding accessibility</h2>
<P>If you’re using navs to provide a navigation bar, be sure to add a role="navigation" to the most logical parent container of the < ul>, or wrap a < nav> element around the whole navigation. Do not add the role to the < ul> itself, as this would prevent it from being announced as an actual list by assistive technologies.</P>
<p>Note that navigation bars, even if visually styled as tabs with the .nav-tabs class, should not be given role="tablist", role="tab" or role="tabpanel" attributes. These are only appropriate for dynamic tabbed interfaces, as described in the ARIA Authoring Practices Guide tabs pattern. See JavaScript behavior for dynamic tabbed interfaces in this section for an example. The aria-current attribute is not necessary on dynamic tabbed interfaces since our JavaScript handles the selected state by adding aria-selected="true" on the active tab.</p>
<br>
<h2 class=w3-text-blue>Using dropdowns</h2>
<P>Add dropdown menus with a little extra HTML and the dropdowns JavaScript plugin.</P>
<br>
<h2 class=w3-text-blue>Tabs with dropdowns</h2>
<img src="image/ntb15.jpg" alt="ntb15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Pills with dropdowns </h2>
<img src="image/ntb16.jpg" alt="ntb16" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
</textarea>
<br>
<h2>CSS </h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, navs now use local CSS variables on .nav, .nav-tabs, and .nav-pills for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="13" class="form-control" >
--#{$prefix}nav-link-padding-x: #{$nav-link-padding-x};
--#{$prefix}nav-link-padding-y: #{$nav-link-padding-y};
@include rfs($nav-link-font-size, --#{$prefix}nav-link-font-size);
--#{$prefix}nav-link-font-weight: #{$nav-link-font-weight};
--#{$prefix}nav-link-color: #{$nav-link-color};
--#{$prefix}nav-link-hover-color: #{$nav-link-hover-color};
--#{$prefix}nav-link-disabled-color: #{$nav-link-disabled-color};
</textarea>
<p>On the .nav base class:</p>
<br>
<textarea disabled  id="" cols="30" rows="12" class="form-control" >
--#{$prefix}nav-tabs-border-width: #{$nav-tabs-border-width};
--#{$prefix}nav-tabs-border-color: #{$nav-tabs-border-color};
--#{$prefix}nav-tabs-border-radius: #{$nav-tabs-border-radius};
--#{$prefix}nav-tabs-link-hover-border-color: #{$nav-tabs-link-hover-border-color};
--#{$prefix}nav-tabs-link-active-color: #{$nav-tabs-link-active-color};
--#{$prefix}nav-tabs-link-active-bg: #{$nav-tabs-link-active-bg};
--#{$prefix}nav-tabs-link-active-border-color: #{$nav-tabs-link-active-border-color};
</textarea>
<p>On the .nav-pills modifier class:</p>
<br>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
--#{$prefix}nav-pills-border-radius: #{$nav-pills-border-radius};
--#{$prefix}nav-pills-link-active-color: #{$nav-pills-link-active-color};
--#{$prefix}nav-pills-link-active-bg: #{$nav-pills-link-active-bg};
</textarea>
<p>On the .nav-underline modifier class:</p>
<br>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
--#{$prefix}nav-underline-gap: #{$nav-underline-gap};
--#{$prefix}nav-underline-border-width: #{$nav-underline-border-width};
--#{$prefix}nav-underline-link-active-color: #{$nav-underline-link-active-color};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$nav-link-padding-y:                .5rem;
$nav-link-padding-x:                1rem;
$nav-link-font-size:                null;
$nav-link-font-weight:              null;
$nav-link-color:                    var(--#{$prefix}link-color);
$nav-link-hover-color:              var(--#{$prefix}link-hover-color);
$nav-link-transition:               color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
$nav-link-disabled-color:           var(--#{$prefix}secondary-color);
$nav-link-focus-box-shadow:         $focus-ring-box-shadow;

$nav-tabs-border-color:             var(--#{$prefix}border-color);
$nav-tabs-border-width:             var(--#{$prefix}border-width);
$nav-tabs-border-radius:            var(--#{$prefix}border-radius);
$nav-tabs-link-hover-border-color:  var(--#{$prefix}secondary-bg) var(--#{$prefix}secondary-bg) $nav-tabs-border-color;
$nav-tabs-link-active-color:        var(--#{$prefix}emphasis-color);
$nav-tabs-link-active-bg:           var(--#{$prefix}body-bg);
$nav-tabs-link-active-border-color: var(--#{$prefix}border-color) var(--#{$prefix}border-color) $nav-tabs-link-active-bg;

$nav-pills-border-radius:           var(--#{$prefix}border-radius);
$nav-pills-link-active-color:       $component-active-color;
$nav-pills-link-active-bg:          $component-active-bg;

$nav-underline-gap:                 1rem;
$nav-underline-border-width:        .125rem;
$nav-underline-link-active-color:   var(--#{$prefix}emphasis-color);
</textarea>
<br>
<h2 class=w3-text-blue>JavaScript behavior</h2>
<P>Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our navigational tabs and pills to create tabbable panes of local content.</P>
<img src="image/ntb17.jpg" alt="ntb17" class="me-5" width="100%" >
<p>This is some placeholder content the Home tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>
</textarea>
<p>To help fit your needs, this works with < ul>-based markup, as shown above, or with any arbitrary “roll your own” markup. Note that if you’re using < nav>, you shouldn’t add role="tablist" directly to it, as this would override the element’s native role as a navigation landmark. Instead, switch to an alternative element (in the example below, a simple < div>) and wrap the < nav> around it.</p>
<br>
<img src="image/ntb18.jpg" alt="ntb18" class="me-5" width="100%" >
<p>This is some placeholder content the Home tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
    <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
</div>
</textarea>
<p>The tabs plugin also works with pills.</p>
<br>
<img src="image/ntb19.jpg" alt="ntb19" class="me-5" width="100%" >
<p>This is some placeholder content the Home tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>
</textarea>
<p>And with vertical pills. Ideally, for vertical tabs, you should also add aria-orientation="vertical" to the tab list container.</p>
<br>
<img src="image/ntb20.jpg" alt="ntb20" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Accessibility</h2>
<P>Dynamic tabbed interfaces, as described in the ARIA Authoring Practices Guide tabs pattern, require role="tablist", role="tab", role="tabpanel", and additional aria- attributes in order to convey their structure, functionality, and current state to users of assistive technologies (such as screen readers). As a best practice, we recommend using < button> elements for the tabs, as these are controls that trigger a dynamic change, rather than links that navigate to a new page or location.</P>
<p>In line with the ARIA Authoring Practices pattern, only the currently active tab receives keyboard focus. When the JavaScript plugin is initialized, it will set tabindex="-1" on all inactive tab controls. Once the currently active tab has focus, the cursor keys activate the previous/next tab. The Home and End keys activate the first and last tabs, respectively. The plugin will change the roving tabindex accordingly. However, note that the JavaScript plugin does not distinguish between horizontal and vertical tab lists when it comes to cursor key interactions: regardless of the tab list’s orientation, both the up and left cursor go to the previous tab, and down and right cursor go to the next tab.</p>

<br>
<h2 class=w3-text-blue>Using data attributes</h2>
<P>You can activate a tab or pill navigation without writing any JavaScript by simply specifying data-bs-toggle="tab" or data-bs-toggle="pill" on an element. Use these data attributes on .nav-tabs or .nav-pills.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">...</div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">...</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Via JavaScript</h2>
<p>Enable tabbable tabs via JavaScript (each tab needs to be activated individually):</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})
</textarea>
<p>You can activate individual tabs in several ways:</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const triggerEl = document.querySelector('#myTab button[data-bs-target="#profile"]')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

const triggerFirstTabEl = document.querySelector('#myTab li:first-child button')
bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab
</textarea>
<br>
<h2 class=w3-text-blue>Fade effect</h2>
<p>To make tabs fade in, add .fade to each .tab-pane. The first tab pane must also have .show to make the initial content visible.</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="tab-content">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">...</div>
</div>
</textarea>
<p>Activates your content as a tab element.</p>
<p>You can create a tab instance with the constructor, for example:</p>
<br>
<textarea disabled  id="" cols="30" rows="4" class="form-control" >
const bsTab = new bootstrap.Tab('#myTab')
</textarea>
<br>
<img src="image/ntb21.jpg" alt="ntb21" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<p>When showing a new tab, the events fire in the following order:</p>
<img src="image/ntb22.jpg" alt="ntb22" class="me-5" width="100%" >
<p>If no tab was already active, then the hide.bs.tab and hidden.bs.tab events will not be fired.</p>
<br>
<img src="image/ntb23.jpg" alt="ntb23" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
const tabEl = document.querySelector('button[data-bs-toggle="tab"]')
tabEl.addEventListener('shown.bs.tab', event => {
  event.target // newly activated tab
  event.relatedTarget // previous active tab
})
</textarea>






</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
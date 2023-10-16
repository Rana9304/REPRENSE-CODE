<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>List group</b></h1>
      <p><h3><i>List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.</i></h3> </p>

      <!-- containt past -->
     <h3>Basic example</h3>
     <p>The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
     <img src="image/lst1.jpg" alt="lst1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="9" class="form-control" >
        <ul class="list-group">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Active items</h2>
<P>Add .active to a .list-group-item to indicate the current active selection.</P>
<img src="image/lst2.jpg" alt="lst2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ul class="list-group">
  <li class="list-group-item active" aria-current="true">An active item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Disabled items</h2>
<P>Add .disabled to a .list-group-item to make it appear disabled. Note that some elements with .disabled will also require custom JavaScript to fully disable their click events (e.g., links).</P>
<img src="image/lst3.jpg" alt="lst3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ul class="list-group">
  <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Links and buttons</h2>
<P>Use < a>s or < button>s to create actionable list group items with hover, disabled, and active states by adding .list-group-item-action. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like < li>s or < div>s) don’t provide a click or tap affordance.</P>
<p>Be sure to not use the standard .btn classes here.</p>
<img src="image/lst4.jpg" alt="lst4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
</div>
</textarea>
<p>With < button>s, you can also make use of the disabled attribute instead of the .disabled class. Sadly, < a>s don’t support the disabled attribute.</p>
<img src="image/lst5.jpg" alt="lst5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    The current button
  </button>
  <button type="button" class="list-group-item list-group-item-action">A second button item</button>
  <button type="button" class="list-group-item list-group-item-action">A third button item</button>
  <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
  <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Flush</h2>
<P>Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</P>
<img src="image/lst6.jpg" alt="lst6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Numbered</h2>
<P>Add the .list-group-numbered modifier class (and optionally use an < ol> element) to opt into numbered list group items. Numbers are generated via CSS (as opposed to a < ol>s default browser styling) for better placement inside list group items and to allow for better customization.</P>
<p>Numbers are generated by counter-reset on the < ol>, and then styled and placed with a ::before pseudo-element on the < li> with counter-increment and content.</p>
<img src="image/lst7.jpg" alt="lst7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<ol class="list-group list-group-numbered">
  <li class="list-group-item">A list item</li>
  <li class="list-group-item">A list item</li>
  <li class="list-group-item">A list item</li>
</ol>
</textarea>
<p>These work great with custom content as well.</p>
<br>
<img src="image/lst8.jpg" alt="lst8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
</ol>
</textarea>
<br>
<h2 class=w3-text-blue>Horizontal</h2>
<P>Add .list-group-horizontal to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant .list-group-horizontal-{sm|md|lg|xl|xxl} to make a list group horizontal starting at that breakpoint’s min-width. Currently< b> horizontal list groups cannot be combined with flush list groups.</b></P>
<p><b>ProTip:</b> Want equal-width list group items when horizontal? Add .flex-fill to each list group item.</p>
<img src="image/lst9.jpg" alt="lst9" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-group list-group-horizontal">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
</ul>
<ul class="list-group list-group-horizontal-sm">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
</ul>
<ul class="list-group list-group-horizontal-md">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
</ul>
<ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
</ul>
<ul class="list-group list-group-horizontal-xl">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
</ul>
<ul class="list-group list-group-horizontal-xxl">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Variants</h2>
<P>Use contextual classes to style list items with a stateful background and color.</P>
<img src="image/lst10.jpg" alt="lst10" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-group">
  <li class="list-group-item">A simple default list group item</li>

  <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
  <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
  <li class="list-group-item list-group-item-success">A simple success list group item</li>
  <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
  <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
  <li class="list-group-item list-group-item-info">A simple info list group item</li>
  <li class="list-group-item list-group-item-light">A simple light list group item</li>
  <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>For links and buttons</h2>
<P>Contextual classes also work with .list-group-item-action for < a> and < button> elements. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual list group item.</P>
<img src="image/lst11.jpg" alt="lst11" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>

  <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>With badges</h2>
<P>Add badges to any list group item to show unread counts, activity, and more with the help of some utilities.</P>
<img src="image/lst12.jpg" alt="lst12" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A list item
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A second list item
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A third list item
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>
</textarea>
<br>
<h2 class=w3-text-blue>Custom content</h2>
<P>Add nearly any HTML within, even for linked list groups like the one below, with the help of flexbox utilities.</P>
<img src="image/lst13.jpg" alt="lst13" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small>And some small print.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-body-secondary">3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small class="text-body-secondary">And some muted small print.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-body-secondary">3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small class="text-body-secondary">And some muted small print.</small>
  </a>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Checkboxes and radios</h2>
<P>Place Bootstrap’s checkboxes and radios within list group items and customize as needed. You can use them without < label>s, but please remember to include an aria-label attribute and value for accessibility.</P>
<img src="image/lst14.jpg" alt="lst14" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
    <label class="form-check-label" for="firstCheckbox">First checkbox</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
    <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
    <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
  </li>
</ul>
</textarea>
<br>
<img src="image/lst15.jpg" alt="lst15" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
    <label class="form-check-label" for="firstRadio">First radio</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
    <label class="form-check-label" for="secondRadio">Second radio</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
    <label class="form-check-label" for="thirdRadio">Third radio</label>
  </li>
</ul>
</textarea>
<p>You can use .stretched-link on < label>s to make the whole list group item clickable.</p>
<br>
<img src="image/lst16.jpg" alt="lst16" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckboxStretched">
    <label class="form-check-label stretched-link" for="firstCheckboxStretched">First checkbox</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckboxStretched">
    <label class="form-check-label stretched-link" for="secondCheckboxStretched">Second checkbox</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckboxStretched">
    <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Third checkbox</label>
  </li>
</ul>
</textarea>
<br>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<P>As part of Bootstrap’s evolving CSS variables approach, list groups now use local CSS variables on .list-group for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}list-group-color: #{$list-group-color};
--#{$prefix}list-group-bg: #{$list-group-bg};
--#{$prefix}list-group-border-color: #{$list-group-border-color};
--#{$prefix}list-group-border-width: #{$list-group-border-width};
--#{$prefix}list-group-border-radius: #{$list-group-border-radius};
--#{$prefix}list-group-item-padding-x: #{$list-group-item-padding-x};
--#{$prefix}list-group-item-padding-y: #{$list-group-item-padding-y};
--#{$prefix}list-group-action-color: #{$list-group-action-color};
--#{$prefix}list-group-action-hover-color: #{$list-group-action-hover-color};
--#{$prefix}list-group-action-hover-bg: #{$list-group-hover-bg};
--#{$prefix}list-group-action-active-color: #{$list-group-action-active-color};
--#{$prefix}list-group-action-active-bg: #{$list-group-action-active-bg};
--#{$prefix}list-group-disabled-color: #{$list-group-disabled-color};
--#{$prefix}list-group-disabled-bg: #{$list-group-disabled-bg};
--#{$prefix}list-group-active-color: #{$list-group-active-color};
--#{$prefix}list-group-active-bg: #{$list-group-active-bg};
--#{$prefix}list-group-active-border-color: #{$list-group-active-border-color};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$list-group-color:                  var(--#{$prefix}body-color);
$list-group-bg:                     var(--#{$prefix}body-bg);
$list-group-border-color:           var(--#{$prefix}border-color);
$list-group-border-width:           var(--#{$prefix}border-width);
$list-group-border-radius:          var(--#{$prefix}border-radius);

$list-group-item-padding-y:         $spacer * .5;
$list-group-item-padding-x:         $spacer;
// fusv-disable
$list-group-item-bg-scale:          -80%; // Deprecated in v5.3.0
$list-group-item-color-scale:       40%; // Deprecated in v5.3.0
// fusv-enable

$list-group-hover-bg:               var(--#{$prefix}tertiary-bg);
$list-group-active-color:           $component-active-color;
$list-group-active-bg:              $component-active-bg;
$list-group-active-border-color:    $list-group-active-bg;

$list-group-disabled-color:         var(--#{$prefix}secondary-color);
$list-group-disabled-bg:            $list-group-bg;

$list-group-action-color:           var(--#{$prefix}secondary-color);
$list-group-action-hover-color:     var(--#{$prefix}emphasis-color);

$list-group-action-active-color:    var(--#{$prefix}body-color);
$list-group-action-active-bg:       var(--#{$prefix}secondary-bg);
</textarea>
<br>
<h2 class=w3-text-blue>Sass mixins</h2>
<p>Used in combination with $theme-colors to generate the contextual variant classes for .list-group-items.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@mixin list-group-item-variant($state, $background, $color) {
  .list-group-item-#{$state} {
    color: $color;
    background-color: $background;

    &.list-group-item-action {
      &:hover,
      &:focus {
        color: $color;
        background-color: shade-color($background, 10%);
      }

      &.active {
        color: $white;
        background-color: $color;
        border-color: $color;
      }
    }
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>Sass loops</h2>
<p>Loop that generates the modifier classes with an overriding of CSS variables.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
// List group contextual variants
//
// Add modifier classes to change text and background color on individual items.
// Organizationally, this must come after the `:hover` states.

@each $state in map-keys($theme-colors) {
  .list-group-item-#{$state} {
    --#{$prefix}list-group-color: var(--#{$prefix}#{$state}-text-emphasis);
    --#{$prefix}list-group-bg: var(--#{$prefix}#{$state}-bg-subtle);
    --#{$prefix}list-group-border-color: var(--#{$prefix}#{$state}-border-subtle);
    --#{$prefix}list-group-action-hover-color: var(--#{$prefix}emphasis-color);
    --#{$prefix}list-group-action-hover-bg: var(--#{$prefix}#{$state}-border-subtle);
    --#{$prefix}list-group-action-active-color: var(--#{$prefix}emphasis-color);
    --#{$prefix}list-group-action-active-bg: var(--#{$prefix}#{$state}-border-subtle);
    --#{$prefix}list-group-active-color: var(--#{$prefix}#{$state}-bg-subtle);
    --#{$prefix}list-group-active-bg: var(--#{$prefix}#{$state}-text-emphasis);
    --#{$prefix}list-group-active-border-color: var(--#{$prefix}#{$state}-text-emphasis);
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>JavaScript behavior</h2>
<P>Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our list group to create tabbable panes of local content.</P>
<img src="image/lst17.jpg" alt="lst17" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Using data attributes </h2>
<p>You can activate a list group navigation without writing any JavaScript by simply specifying data-bs-toggle="list" or on an element. Use these data attributes on .list-group-item.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div role="tabpanel">
  <!-- List group -->
  <div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#home" role="tab">Home</a>
    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#profile" role="tab">Profile</a>
    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#messages" role="tab">Messages</a>
    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#settings" role="tab">Settings</a>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel">...</div>
    <div class="tab-pane" id="profile" role="tabpanel">...</div>
    <div class="tab-pane" id="messages" role="tabpanel">...</div>
    <div class="tab-pane" id="settings" role="tabpanel">...</div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Via JavaScript</h2>
<p>Enable tabbable list item via JavaScript (each list item needs to be activated individually):</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
const triggerTabList = document.querySelectorAll('#myTab a')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})
</textarea>
<p>You can activate individual list item in several ways:</p>
<br>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const triggerEl = document.querySelector('#myTab a[href="#profile"]')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

const triggerFirstTabEl = document.querySelector('#myTab li:first-child a')
bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab
</textarea>
<br>
<h2 class=w3-text-blue>Fade effect</h2>
<p>To make tabs panel fade in, add .fade to each .tab-pane. The first tab pane must also have .show to make the initial content visible.</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
<div class="tab-content">
  <div class="tab-pane fade show active" id="home" role="tabpanel">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel">...</div>
  <div class="tab-pane fade" id="messages" role="tabpanel">...</div>
  <div class="tab-pane fade" id="settings" role="tabpanel">...</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Methods</h2>
<P>Activates your content as a tab element.</P>
<p>You can create a tab instance with the constructor, for example:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const bsTab = new bootstrap.Tab('#myTab')
</textarea>
<img src="image/lst18.jpg" alt="lst18" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events</h2>
<P>When showing a new tab, the events fire in the following order:</P>
<img src="image/lst19.jpg" alt="lst19" class="me-5" width="100%" >
<p>If no tab was already active, then the hide.bs.tab and hidden.bs.tab events will not be fired.</p>
<img src="image/lst20.jpg" alt="lst20" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const tabElms = document.querySelectorAll('a[data-bs-toggle="list"]')
tabElms.forEach(tabElm => {
  tabElm.addEventListener('shown.bs.tab', event => {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
  })
})
</textarea>



</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

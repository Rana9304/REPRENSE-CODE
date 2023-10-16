<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Pagination</b></h1>
      <p><h3><i>Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.</i></h3> </p>

      <!-- containt past -->
     <h3>Overview</h3>
     <p>We use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping < nav> element to identify it as a navigation section to screen readers and other assistive technologies.</p>
     <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive aria-label for the < nav> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be aria-label="Search results pages".</p>
     <img src="image/pag1.jpg" alt="pag1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="15" class="form-control" >
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Working with icons</h2>
<P>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.</P>
<img src="image/pag2.jpg" alt="pag2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Disabled and active states</h2>
<P>Pagination links are customizable for different circumstances. Use .disabled for links that appear un-clickable and .active to indicate the current page.</P>
<p>While the .disabled class uses pointer-events: none to try to disable the link functionality of < a>s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add tabindex="-1" on disabled links and use custom JavaScript to fully disable their functionality.</p>
<img src="image/pag3.jpg" alt="pag3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</textarea>
<p>You can optionally swap out active or disabled anchors for < span>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</p>
<br>
<img src="image/pag4.jpg" alt="pag4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Sizing </h2>
<P>Fancy larger or smaller pagination? Add .pagination-lg or .pagination-sm for additional sizes.</P>
<img src="image/pag5.jpg" alt="pag5" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>
</textarea>
<br>
<img src="image/pag6.jpg" alt="pag6" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav aria-label="...">
  <ul class="pagination pagination-sm">
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>
</textarea>
<br>
<h2 class=w3-text-blue>Alignment</h2>
<P>Change the alignment of pagination components with flexbox utilities. For example, with .justify-content-center:</P>
<img src="image/pag7.jpg" alt="pag7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</textarea>
<p>Or with .justify-content-end:</p>
<br>
<img src="image/pag8.jpg" alt="pag8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</textarea>
<br>
<h2>CSS </h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, pagination now uses local CSS variables on .pagination for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}pagination-padding-x: #{$pagination-padding-x};
--#{$prefix}pagination-padding-y: #{$pagination-padding-y};
@include rfs($pagination-font-size, --#{$prefix}pagination-font-size);
--#{$prefix}pagination-color: #{$pagination-color};
--#{$prefix}pagination-bg: #{$pagination-bg};
--#{$prefix}pagination-border-width: #{$pagination-border-width};
--#{$prefix}pagination-border-color: #{$pagination-border-color};
--#{$prefix}pagination-border-radius: #{$pagination-border-radius};
--#{$prefix}pagination-hover-color: #{$pagination-hover-color};
--#{$prefix}pagination-hover-bg: #{$pagination-hover-bg};
--#{$prefix}pagination-hover-border-color: #{$pagination-hover-border-color};
--#{$prefix}pagination-focus-color: #{$pagination-focus-color};
--#{$prefix}pagination-focus-bg: #{$pagination-focus-bg};
--#{$prefix}pagination-focus-box-shadow: #{$pagination-focus-box-shadow};
--#{$prefix}pagination-active-color: #{$pagination-active-color};
--#{$prefix}pagination-active-bg: #{$pagination-active-bg};
--#{$prefix}pagination-active-border-color: #{$pagination-active-border-color};
--#{$prefix}pagination-disabled-color: #{$pagination-disabled-color};
--#{$prefix}pagination-disabled-bg: #{$pagination-disabled-bg};
--#{$prefix}pagination-disabled-border-color: #{$pagination-disabled-border-color};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$pagination-padding-y:              .375rem;
$pagination-padding-x:              .75rem;
$pagination-padding-y-sm:           .25rem;
$pagination-padding-x-sm:           .5rem;
$pagination-padding-y-lg:           .75rem;
$pagination-padding-x-lg:           1.5rem;

$pagination-font-size:              $font-size-base;

$pagination-color:                  var(--#{$prefix}link-color);
$pagination-bg:                     var(--#{$prefix}body-bg);
$pagination-border-radius:          var(--#{$prefix}border-radius);
$pagination-border-width:           var(--#{$prefix}border-width);
$pagination-margin-start:           calc(#{$pagination-border-width} * -1); // stylelint-disable-line function-disallowed-list
$pagination-border-color:           var(--#{$prefix}border-color);

$pagination-focus-color:            var(--#{$prefix}link-hover-color);
$pagination-focus-bg:               var(--#{$prefix}secondary-bg);
$pagination-focus-box-shadow:       $focus-ring-box-shadow;
$pagination-focus-outline:          0;

$pagination-hover-color:            var(--#{$prefix}link-hover-color);
$pagination-hover-bg:               var(--#{$prefix}tertiary-bg);
$pagination-hover-border-color:     var(--#{$prefix}border-color); // Todo in v6: remove this?

$pagination-active-color:           $component-active-color;
$pagination-active-bg:              $component-active-bg;
$pagination-active-border-color:    $component-active-bg;

$pagination-disabled-color:         var(--#{$prefix}secondary-color);
$pagination-disabled-bg:            var(--#{$prefix}secondary-bg);
$pagination-disabled-border-color:  var(--#{$prefix}border-color);

$pagination-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

$pagination-border-radius-sm:       var(--#{$prefix}border-radius-sm);
$pagination-border-radius-lg:       var(--#{$prefix}border-radius-lg);
</textarea>
<br>
<h2 class=w3-text-blue>Sass mixins</h2>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
@mixin pagination-size($padding-y, $padding-x, $font-size, $border-radius) {
  --#{$prefix}pagination-padding-x: #{$padding-x};
  --#{$prefix}pagination-padding-y: #{$padding-y};
  @include rfs($font-size, --#{$prefix}pagination-font-size);
  --#{$prefix}pagination-border-radius: #{$border-radius};
}
</textarea>















</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

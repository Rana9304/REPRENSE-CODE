<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Tables</b></h1>
      <p> <i>Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.</i> </p>

      <!-- containt past -->
     <h3>Overview</h3>
     <p>Due to the widespread use of table> elements across third-party widgets like calendars and date pickers, Bootstrap’s tables are opt-in. Add the base class .table to any .table>, then extend with our optional modifier classes or custom styles. All table styles are not inherited in Bootstrap, meaning any nested tables can be styled independent from the parent.</p>
     <p>Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</p>
     <img src="image/tb1.jpg" alt="tb1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </textarea>
</div>
</div>
<h2 class=w3-text-blue>Variants</h2>
<P>Use contextual classes to color tables, table rows or individual cells.</P>
<img src="image/tb2.jpg" alt="tb2" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- On tables -->
<table class="table-primary">...</table>
<table class="table-secondary">...</table>
<table class="table-success">...</table>
<table class="table-danger">...</table>
<table class="table-warning">...</table>
<table class="table-info">...</table>
<table class="table-light">...</table>
<table class="table-dark">...</table>

<!-- On rows -->
<tr class="table-primary">...</tr>
<tr class="table-secondary">...</tr>
<tr class="table-success">...</tr>
<tr class="table-danger">...</tr>
<tr class="table-warning">...</tr>
<tr class="table-info">...</tr>
<tr class="table-light">...</tr>
<tr class="table-dark">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="table-primary">...</td>
  <td class="table-secondary">...</td>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
  <td class="table-info">...</td>
  <td class="table-light">...</td>
  <td class="table-dark">...</td>
</tr>
</textarea>
<h2 class=w3-text-blue>Accented tables </h2>
<h2>Striped rows</h2>
<P>Use .table-striped to add zebra-striping to any table row within the .tbody>.</P>
<img src="image/tb3.jpg" alt="tb3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-striped">
  ...
</table>
</textarea>
<h2 class=w3-text-blue>Striped columns</h2>
<P>Use .table-striped-columns to add zebra-striping to any table column.</P>
<img src="image/tb4.jpg" alt="tb4" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-striped-columns">
  ...
</table>
</textarea>
<p>These classes can also be added to table variants:</p>
<img src="image/tb5.jpg" alt="tb5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-dark table-striped">
  ...
</table>
</textarea>
<img src="image/tb6.jpg" alt="tb6" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-dark table-striped-columns">
  ...
</table>
</textarea>
<img src="image/tb7.jpg" alt="tb7" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-success table-striped">
  ...
</table>
</textarea>
<img src="image/tb8.jpg" alt="tb8" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-success table-striped-columns">
  ...
</table>
</textarea>
<h2 class=w3-text-blue>Hoverable rows</h2>
<P>Add .table-hover to enable a hover state on table rows within a .tbody>.</P>
<img src="image/tb9.jpg" alt="tb9" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-hover">
  ...
</table>
</textarea>
<img src="image/tb10.jpg" alt="tb10" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-dark table-hover">
  ...
</table>
</textarea>
<p>These hoverable rows can also be combined with the striped rows variant:</p>

<img src="image/tb11.jpg" alt="tb11" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-striped table-hover">
  ...
</table>
</textarea>
<h2 class=w3-text-blue>Active tables</h2>
<P>Highlight a table row or cell by adding a .table-active class.</P>
<img src="image/tb12.jpg" alt="tb12" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table">
  <thead>
    ...
  </thead>
  <tbody>
    <tr class="table-active">
      ...
    </tr>
    <tr>
      ...
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</textarea>
<img src="image/tb13.jpg" alt="tb13" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-dark">
  <thead>
    ...
  </thead>
  <tbody>
    <tr class="table-active">
      ...
    </tr>
    <tr>
      ...
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</textarea>
<h2 class=w3-text-blue>How do the variants and accented tables work?</h2>
<p>For the accented tables (striped rows, striped columns, hoverable rows, and active tables), we used some techniques to make these effects work for all our table variants:</p>
<img src="image/tb14.jpg" alt="tb14" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
@mixin table-variant($state, $background) {
  .table-#{$state} {
    $color: color-contrast(opaque($body-bg, $background));
    $hover-bg: mix($color, $background, percentage($table-hover-bg-factor));
    $striped-bg: mix($color, $background, percentage($table-striped-bg-factor));
    $active-bg: mix($color, $background, percentage($table-active-bg-factor));
    $table-border-color: mix($color, $background, percentage($table-border-factor));

    --#{$prefix}table-color: #{$color};
    --#{$prefix}table-bg: #{$background};
    --#{$prefix}table-border-color: #{$table-border-color};
    --#{$prefix}table-striped-bg: #{$striped-bg};
    --#{$prefix}table-striped-color: #{color-contrast($striped-bg)};
    --#{$prefix}table-active-bg: #{$active-bg};
    --#{$prefix}table-active-color: #{color-contrast($active-bg)};
    --#{$prefix}table-hover-bg: #{$hover-bg};
    --#{$prefix}table-hover-color: #{color-contrast($hover-bg)};

    color: var(--#{$prefix}table-color);
    border-color: var(--#{$prefix}table-border-color);
  }
}
</textarea>

<h2 class=w3-text-blue>Table borders</h2>
<h2>Bordered tables</h2>
<P>Add .table-bordered for borders on all sides of the table and cells.</P>
<img src="image/tb15.jpg" alt="tb15" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-bordered">
  ...
</table>
</textarea>
<P><u>Border color utilities</u> can be added to change colors:</P>
<img src="image/tb16.jpg" alt="tb16" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-bordered border-primary">
  ...
</table>
</textarea>
<h2 class=w3-text-blue>Tables without borders</h2>
<P>Add .table-borderless for a table without borders.</P>
<img src="image/tb17.jpg" alt="tb17" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-borderless">
  ...
</table>
</textarea>
<img src="image/tb18.jpg" alt="tb18" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-dark table-borderless">
  ...
</table>
</textarea>
<h2 class=w3-text-blue>Small tables</h2>
<P>Add .table-sm to make any .table more compact by cutting all cell padding in half.</P>
<img src="image/tb19.jpg" alt="tb19" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-sm">
  ...
</table>
</textarea>
<img src="image/tb20.jpg" alt="tb20" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-dark table-sm">
  ...
</table>
</textarea>
<h2 class=w3-text-blue>Table group dividers</h2>
<P>Add a thicker border, darker between table groups—<thead>, <tbody>, and <tfoot>—with .table-group-divider. Customize the color by changing the border-top-color (which we don’t currently provide a utility class for at this time).</P>
<img src="image/tb21.jpg" alt="tb21" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</textarea>
<h2 class=w3-text-blue>Vertical alignment</h2>
<P>Table cells of <thead> are always vertical aligned to the bottom. Table cells in <tbody> inherit their alignment from <table> and are aligned to the top by default. Use the vertical align classes to re-align where needed.
</P>
<img src="image/tb22.jpg" alt="tb22" width="100%">
<img src="image/tb23.jpg" alt="tb23" width="100%">
<img src="image/tb24.jpg" alt="tb24" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        ...
      </tr>
    </thead>
    <tbody>
      <tr>
        ...
      </tr>
      <tr class="align-bottom">
        ...
      </tr>
      <tr>
        <td>...</td>
        <td>...</td>
        <td class="align-top">This cell is aligned to the top.</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>
</textarea>
<h2 class=w3-text-blue>Nesting</h2>
<P>Border styles, active styles, and table variants are not inherited by nested tables.</P>
<img src="image/tb25.jpg" alt="tb25" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-striped table-bordered">
  <thead>
    ...
  </thead>
  <tbody>
    ...
    <tr>
      <td colspan="4">
        <table class="table mb-0">
          ...
        </table>
      </td>
    </tr>
    ...
  </tbody>
</table>
</textarea>
<h2 class=w3-text-blue>How nesting works</h2>
<P>To prevent any styles from leaking to nested tables, we use the child combinator (>) selector in our CSS. Since we need to target all the tds and ths in the thead, tbody, and tfoot, our selector would look pretty long without it. As such, we use the rather odd looking .table > :not(caption) > * > * selector to target all tds and ths of the .table, but none of any potential nested tables.</P>
<p>Note that if you add <tr>s as direct children of a table, those <tr> will be wrapped in a <tbody> by default, thus making our selectors work as intended.</p>
<h2 class=w3-text-blue>Anatomy</h2>
<h2>Table head</h2>
<P>Similar to tables and dark tables, use the modifier classes .table-light or .table-dark to make <thead>s appear light or dark gray.</P>
<img src="image/tb26.jpg" alt="tb26" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table">
  <thead class="table-light">
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
</textarea>
<img src="image/tb27.jpg" alt="tb27" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table">
  <thead class="table-dark">
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
</textarea>
<h2 class=w3-text-blue>Table foot</h2>
<img src="image/tb28.jpg" alt="tb28" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table">
  <thead>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
  <tfoot>
    ...
  </tfoot>
</table>
</textarea>
<h2 class=w3-text-blue>Captions</h2>
<P>A <caption> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</P>
<img src="image/tb29.jpg" alt="tb29" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table table-sm">
  <caption>List of users</caption>
  <thead>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
</textarea>
<p>You can also put the <caption> on the top of the table with .caption-top.</p>
<img src="image/tb30.jpg" alt="tb30" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</textarea>
<h2 class=w3-text-blue>Responsive tables</h2>
<P>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a .table with .table-responsive. Or, pick a maximum breakpoint with which to have a responsive table up to by using .table-responsive{-sm|-md|-lg|-xl|-xxl}.</P>
<h2>Always responsive</h2>
<p>Across every breakpoint, use .table-responsive for horizontally scrolling tables.</p>
<img src="image/tb31.jpg" alt="tb31" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="table-responsive">
  <table class="table">
    ...
  </table>
</div>
</textarea>
<h2 class=w3-text-blue>Breakpoint specific </h2>
<P>Use .table-responsive{-sm|-md|-lg|-xl|-xxl} as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.</P>
<p><b>These tables may appear broken until their responsive styles apply at specific viewport widths.</b></p>
<img src="image/tb32.jpg" alt="tb32" width="100%">
<img src="image/tb33.jpg" alt="tb33" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="table-responsive">
  <table class="table">
    ...
  </table>
</div>

<div class="table-responsive-sm">
  <table class="table">
    ...
  </table>
</div>

<div class="table-responsive-md">
  <table class="table">
    ...
  </table>
</div>

<div class="table-responsive-lg">
  <table class="table">
    ...
  </table>
</div>

<div class="table-responsive-xl">
  <table class="table">
    ...
  </table>
</div>

<div class="table-responsive-xxl">
  <table class="table">
    ...
  </table>
</div>
</textarea>
<h2 class=w3-text-blue>CSS</h2>
<h2>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$table-cell-padding-y:        .5rem;
$table-cell-padding-x:        .5rem;
$table-cell-padding-y-sm:     .25rem;
$table-cell-padding-x-sm:     .25rem;

$table-cell-vertical-align:   top;

$table-color:                 var(--#{$prefix}body-color);
$table-bg:                    var(--#{$prefix}body-bg);
$table-accent-bg:             transparent;

$table-th-font-weight:        null;

$table-striped-color:         $table-color;
$table-striped-bg-factor:     .05;
$table-striped-bg:            rgba($black, $table-striped-bg-factor);

$table-active-color:          $table-color;
$table-active-bg-factor:      .1;
$table-active-bg:             rgba($black, $table-active-bg-factor);

$table-hover-color:           $table-color;
$table-hover-bg-factor:       .075;
$table-hover-bg:              rgba($black, $table-hover-bg-factor);

$table-border-factor:         .1;
$table-border-width:          var(--#{$prefix}border-width);
$table-border-color:          var(--#{$prefix}border-color);

$table-striped-order:         odd;
$table-striped-columns-order: even;

$table-group-separator-color: currentcolor;

$table-caption-color:         var(--#{$prefix}secondary-color);

$table-bg-scale:              -80%;
</textarea>
<h2 class=w3-text-blue>Sass loops</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$table-variants: (
  "primary":    shift-color($primary, $table-bg-scale),
  "secondary":  shift-color($secondary, $table-bg-scale),
  "success":    shift-color($success, $table-bg-scale),
  "info":       shift-color($info, $table-bg-scale),
  "warning":    shift-color($warning, $table-bg-scale),
  "danger":     shift-color($danger, $table-bg-scale),
  "light":      $light,
  "dark":       $dark,
);
</textarea>
<h2 class=w3-text-blue>Customizing</h2>
<p>The factor variables ($table-striped-bg-factor, $table-active-bg-factor & $table-hover-bg-factor) are used to determine the contrast in table variants.</p>
<p>Apart from the light & dark table variants, theme colors are lightened by the $table-bg-scale variable.</p>

</div>
    
<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
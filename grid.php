<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Grid system</b></h1>
      <p> <i>Use our powerful mobile-first flexbox grid to build layouts of all 
        shapes and sizes thanks to a twelve column system, six default responsive tiers, 
        Sass variables and mixins, and dozens of predefined classes.</i> </p>

      <!-- containt past -->
     <h3>Example </h3>
     <img src="image/grid.PNG" alt="grid" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="17" class="form-control" >
        <div class="container text-center">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>
        </textarea>

 <!-- coding code -->
      </div>
      </div>
      <p class="pt-2" >
      The above example creates three equal-width columns across all devices and viewports using our predefined grid classes. Those columns are centered in the page with the parent .container.
      </p>

    
      <h1 class=w3-text-blue>Auto-layout columns</h1>
  
    <p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like .col-sm-6.</p>
    <img src="image/grid_2.jpg" alt="grid" width="700px">
    <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
    <textarea disabled  id="" cols="30" rows="19" class="form-control" >
    <div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
</textarea>

</div>

 </div>
<h2 class="w3-text-blue"><b>Setting one column width</b></h2>
 <p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column. </p>
<img src="image/grid3.jpg" alt="grid3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-6">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-5">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Variable width content </h2>
<P>Use col-{breakpoint}-auto classes to size columns based on the natural width of their content.</P>
<img src="image/grid4.jpg" alt="grid4" width="700px">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="container text-center">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-red><u>Responsive classes</u> </h2>
<P><b>B</b>ootstrap’s grid includes six tiers of predefined classes for building complex responsive layouts. Customize the size of your columns on extra small, small, medium, large, or extra large devices however you see fit.</P>
<h3 class=w3-text-blue>>All breakpoints</h3>
<p>For grids that are the same from the smallest of devices to the largest, use the .col and .col-* classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to .col.</p>
<img src="image/grid5.jpg" alt="grid5" width="700px">
<textarea disabled  id="" cols="30" rows="13" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col">col</div>
    <div class="col">col</div>
    <div class="col">col</div>
    <div class="col">col</div>
  </div>
  <div class="row">
    <div class="col-8">col-8</div>
    <div class="col-4">col-4</div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Stacked to horizontal </h2>
<P>Using a single set of .col-sm-* classes, you can create a basic grid system that starts out stacked and becomes horizontal at the small breakpoint (sm).</P>
<img src="image/grid6.jpg" alt="grid6" width="700px">
<textarea disabled  id="" cols="30" rows="16" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-sm-8">col-sm-8</div>
    <div class="col-sm-4">col-sm-4</div>
  </div>
  <div class="row">
    <div class="col-sm">col-sm</div>
    <div class="col-sm">col-sm</div>
    <div class="col-sm">col-sm</div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Mix and match</h2>
<P>Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. See the example below for a better idea of how it all works.</P>
<img src="image/grid7.jpg" alt="grid7" width="700px">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="container text-center">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col-md-8">.col-md-8</div>
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
  </div>

  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
  </div>

  <!-- Columns are always 50% wide, on mobile and desktop -->
  <div class="row">
    <div class="col-6">.col-6</div>
    <div class="col-6">.col-6</div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Row columns </h2>
<P>Use the responsive .row-cols-* classes to quickly set the number of columns that best render your content and layout. Whereas normal .col-* classes apply to the individual columns (e.g., .col-md-4), the row columns classes are set on the parent .row as a shortcut. With .row-cols-auto you can give the columns their natural width.

Use these row columns classes to quickly create basic grid layouts or to control your card layouts.</P>
<img src="image/grid8.jpg" alt="grid8" width="700px">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-2">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</textarea>
<img src="image/grid9.jpg" alt="grid9" width="700px">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-3">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</textarea>
<img src="image/grid10.jpg" alt="grid10" width="700px">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-auto">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</textarea>
<img src="image/grid11.jpg" alt="grid11" width="700px">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-4">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</textarea>
<br>
<img src="image/grid12.jpg" alt="grid12" width="700px">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-4">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col-6">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</textarea>
<img src="image/grid13.jpg" alt="grid13" width="700px">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</textarea>
<br>
<p>You can also use the accompanying Sass mixin, row-cols():</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
.element {
  // Three columns to start
  @include row-cols(3);

  // Five columns from medium breakpoint up
  @include media-breakpoint-up(md) {
    @include row-cols(5);
  }
}
</textarea>
<h2 class=w3-text-blue>Nesting</h2>
<P>To nest your content with the default grid, add a new .row and set of .col-sm-* columns within an existing .col-sm-* column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</P>
<img src="image/grid14.jpg" alt="grid14" width="700px">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-sm-3">
      Level 1: .col-sm-3
    </div>
    <div class="col-sm-9">
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
</textarea>
<br>
<h2 class=w3-text-red><b>CSS</b></h2>
<P>When using Bootstrap’s source Sass files, you have the option of using Sass variables and mixins to create custom, semantic, and responsive page layouts. Our predefined grid classes use these same variables and mixins to provide a whole suite of ready-to-use classes for fast responsive layouts.</P>
<h3 class=w3-text-blue>Sass variables</h3>
<p>Variables and maps determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$grid-columns:      12;
$grid-gutter-width: 1.5rem;
$grid-row-columns:  6;
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
);
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$container-max-widths: (
  sm: 540px,
  md: 720px,
  lg: 960px,
  xl: 1140px,
  xxl: 1320px
);
</textarea>
<br>
<h2 class=w3-text-blue>Sass mixins</h2>
<P>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
// Creates a wrapper for a series of columns
@include make-row();

// Make the element grid-ready (applying everything but the width)
@include make-col-ready();

// Without optional size values, the mixin will create equal columns (similar to using .col)
@include make-col();
@include make-col($size, $columns: $grid-columns);

// Offset with margins
@include make-col-offset($size, $columns: $grid-columns);
</textarea>
<br>
<h2 class=w3-text-blue>Example usage</h2>
<P>You can modify the variables to your own custom values, or just use the mixins with their default values. Here’s an example of using the default settings to create a two-column layout with a gap between.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
.example-container {
  @include make-container();
  // Make sure to define this width after the mixin to override
  // `width: 100%` generated by `make-container()`
  width: 800px;
}

.example-row {
  @include make-row();
}

.example-content-main {
  @include make-col-ready();

  @include media-breakpoint-up(sm) {
    @include make-col(6);
  }
  @include media-breakpoint-up(lg) {
    @include make-col(8);
  }
}

.example-content-secondary {
  @include make-col-ready();

  @include media-breakpoint-up(sm) {
    @include make-col(6);
  }
  @include media-breakpoint-up(lg) {
    @include make-col(4);
  }
}
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="example-container">
  <div class="example-row">
    <div class="example-content-main">Main content</div>
    <div class="example-content-secondary">Secondary content</div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Customizing the grid</h2>
<P>Using our built-in grid Sass variables and maps, it’s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths—then recompile.</P>
<h3>Columns and gutters</h3>
<p>The number of grid columns can be modified via Sass variables.$grid-columns is used to generate the widths (in percent) of each individual column while $grid-gutter-width sets the width for the column gutters. $grid-row-columns is used to set the maximum number of columns of .row-cols-*, any number over this limit is ignored.</p>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
$grid-columns: 12 !default;
$grid-gutter-width: 1.5rem !default;
$grid-row-columns: 6 !default;
</textarea>
<br>
<h2 class=w3-text-blue>Grid tiers</h2>
<P>Moving beyond the columns themselves, you may also customize the number of grid tiers. If you wanted just four grid tiers, you’d update the $grid-breakpoints and $container-max-widths to something like this:</P>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
$grid-breakpoints: (
  xs: 0,
  sm: 480px,
  md: 768px,
  lg: 1024px
);

$container-max-widths: (
  sm: 420px,
  md: 720px,
  lg: 960px
);
</textarea>
<p>When making any changes to the Sass variables or maps, you’ll need to save your changes and recompile. Doing so will output a brand-new set of predefined grid classes for column widths, offsets, and ordering. Responsive visibility utilities will also be updated to use the custom breakpoints. Make sure to set grid values in px (not rem, em, or %).</p>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>


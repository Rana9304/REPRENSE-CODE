<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>CSS Grid</b></h1>
      <p> <i>Learn how to enable, use, and customize our alternate layout system built on CSS Grid with examples and code snippets.</i> </p>

      <!-- containt past -->
     <h3><u>Examples</u></h3>
     <h2 class=w3-text-blue>Three columns</h2>
     <p>Three equal-width columns across all viewports and devices can be created by using the .g-col-4 classes. Add responsive classes to change the layout by viewport size.</p>
     <img src="image/css1.jpg" alt="css1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="10" class="form-control" >
        <div class="grid text-center">
  <div class="g-col-4">.g-col-4</div>
  <div class="g-col-4">.g-col-4</div>
  <div class="g-col-4">.g-col-4</div>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Responsive</h2>
<P>Use responsive classes to adjust your layout across viewports. Here we start with two columns on the narrowest viewports, and then grow to three columns on medium viewports and above.</P>
<img src="image/css2.jpg" alt="css2" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center">
  <div class="g-col-6 g-col-md-4">.g-col-6 .g-col-md-4</div>
  <div class="g-col-6 g-col-md-4">.g-col-6 .g-col-md-4</div>
  <div class="g-col-6 g-col-md-4">.g-col-6 .g-col-md-4</div>
</div>
</textarea>
<br>
<p>Compare that to this two column layout at all viewports.</p>
<img src="image/css3.jpg" alt="css3" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center">
  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Wrapping</h2>
<P>Grid items automatically wrap to the next line when there’s no more room horizontally. Note that the gap applies to horizontal and vertical gaps between grid items.</P>
<img src="image/css4.jpg" alt="css4" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center">
  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>

  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Starts</h2>
<P>Start classes aim to replace our default grid’s offset classes, but they’re not entirely the same. CSS Grid creates a grid template through styles that tell browsers to “start at this column” and “end at this column.” Those properties are grid-column-start and grid-column-end. Start classes are shorthand for the former. Pair them with the column classes to size and align your columns however you need. Start classes begin at 1 as 0 is an invalid value for these properties.</P>
<img src="image/css5.jpg" alt="css5" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center">
  <div class="g-col-3 g-start-2">.g-col-3 .g-start-2</div>
  <div class="g-col-4 g-start-6">.g-col-4 .g-start-6</div>
</div>
</textarea>
<h2 class=w3-text-blue>Auto columns</h2>
<P>When there are no classes on the grid items (the immediate children of a .grid), each grid item will automatically be sized to one column.</P>
<img src="image/css6.jpg" alt="css6" width="100%">
<textarea disabled  id="" cols="30" rows="17" class="form-control" >
<div class="grid text-center">
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
</div>
</textarea>
<br>
<P>This behavior can be mixed with grid column classes.</P>
<img src="image/css7.jpg" alt="css7" width="100%">
<textarea disabled  id="" cols="30" rows="13" class="form-control" >
<div class="grid text-center">
  <div class="g-col-6">.g-col-6</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
  <div>1</div>
</div>
</textarea>
<h2 class=w3-text-blue>Nesting</h2>
<P>Similar to our default grid system, our CSS Grid allows for easy nesting of .grids. However, unlike the default, this grid inherits changes in the rows, columns, and gaps. Consider the example below:</P>
<p><b>.</b>We override the default number of columns with a local CSS variable: --bs-columns: 3.</p>
<p><b>.</b>In the first auto-column, the column count is inherited and each column is one-third of the available width.</p>
<p><b>.</b>In the second auto-column, we’ve reset the column count on the nested .grid to 12 (our default).</p>
<p><b>.</b>The third auto-column has no nested content.</p>
<p>In practice this allows for more complex and custom layouts when compared to our default grid system.</p>

<img src="image/css8.jpg" alt="css8" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="grid text-center" style="--bs-columns: 3;">
  <div>
    First auto-column
    <div class="grid">
      <div>Auto-column</div>
      <div>Auto-column</div>
    </div>
  </div>
  <div>
    Second auto-column
    <div class="grid" style="--bs-columns: 12;">
      <div class="g-col-6">6 of 12</div>
      <div class="g-col-4">4 of 12</div>
      <div class="g-col-2">2 of 12</div>
    </div>
  </div>
  <div>Third auto-column</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Customizing </h2>
<P>Customize the number of columns, the number of rows, and the width of the gaps with local CSS variables.</P>
<img src="image/css9.jpg" alt="css9" width="100%">
<br>
<p>These CSS variables have no default value; instead, they apply fallback values that are used until a local instance is provided. For example, we use var(--bs-rows, 1) for our CSS Grid rows, which ignores --bs-rows because that hasn’t been set anywhere yet. Once it is, the .grid instance will use that value instead of the fallback value of 1.</p>
<h2 class=w3-text-blue>No grid classes</h2>
<P>Immediate children elements of .grid are grid items, so they’ll be sized without explicitly adding a .g-col class.</P>
<img src="image/css10.jpg" alt="css10" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="--bs-columns: 3;">
  <div>Auto-column</div>
  <div>Auto-column</div>
  <div>Auto-column</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Columns and gaps</h2>
<P>Adjust the number of columns and the gap.</P>
<img src="image/css11.jpg" alt="css11" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="--bs-columns: 4; --bs-gap: 5rem;">
  <div class="g-col-2">.g-col-2</div>
  <div class="g-col-2">.g-col-2</div>
</div>
</textarea>
<br>
<img src="image/css12.jpg" alt="css12" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="--bs-columns: 10; --bs-gap: 1rem;">
  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-4">.g-col-4</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Adding rows</h2>
<P>Adding more rows and changing the placement of columns:</P>
<img src="image/css13.jpg" alt="css13" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="--bs-rows: 3; --bs-columns: 3;">
  <div>Auto-column</div>
  <div class="g-start-2" style="grid-row: 2">Auto-column</div>
  <div class="g-start-3" style="grid-row: 3">Auto-column</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Gaps</h2>
<P>Change the vertical gaps only by modifying the row-gap. Note that we use gap on .grids, but row-gap and column-gap can be modified as needed.</P>
<img src="image/css14.jpg" alt="css14" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="row-gap: 0;">
  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>

  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>
</div>
</textarea>
<br>
<p>Because of that, you can have different vertical and horizontal gaps, which can take a single value (all sides) or a pair of values (vertical and horizontal). This can be applied with an inline style for gap, or with our --bs-gap CSS variable.</p>

<img src="image/css15.jpg" alt="css15" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="--bs-gap: .25rem 1rem;">
  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>

  <div class="g-col-6">.g-col-6</div>
  <div class="g-col-6">.g-col-6</div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Sass</h2>

<P>One limitation of the CSS Grid is that our default classes are still generated by two Sass variables, $grid-columns and $grid-gutter-width. This effectively predetermines the number of classes generated in our compiled CSS. You have two options here:</P>
<ul style="list-style-type: square">
  <li>Modify those default Sass variables and recompile your CSS.</li>
<li>Use inline or custom styles to augment the provided classes.</li>
</ul>


<p>For example, you can increase the column count and change the gap size, and then size your “columns” with a mix of inline styles and predefined CSS Grid column classes (e.g., .g-col-4).</p>

<img src="image/css16.jpg" alt="css16" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="grid text-center" style="--bs-columns: 18; --bs-gap: .5rem;">
  <div style="grid-column: span 14;">14 columns</div>
  <div class="g-col-4">.g-col-4</div>
</div>
</textarea>



</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

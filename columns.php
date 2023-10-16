<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-red"><b>Columns</b></h1>
      <p> <i>Learn how to modify columns with a handful of options for alignment, ordering, and offsetting thanks to our flexbox grid system. Plus, see how to use column classes to manage widths of non-grid elements.</i> </p>

      <!-- containt past -->
     <h3>Alignment</h3>
     <p>Use flexbox alignment utilities to vertically and horizontally align columns.</p>
     <h2 class=w3-text-blue>Vertical alignment</h2>
     <p>Change the vertical alignment with any of the responsive align-items-* classes.</p>
     <img src="image/columns1.jpg" alt="columns1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="13" class="form-control" >
        <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
        </textarea>
 <!-- coding code -->
      </div>
      </div>
      <br>
      <img src="image/columns2.jpg" alt="columns2" width="100%">
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
</div>
<br>    
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
    <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
</textarea>
</div>
<br>
<img src="image/columns3.jpg" alt="columns3" width="101%">
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<div class="container text-center">
  <div class="row align-items-end">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
</textarea>
<br>
<p>Or, change the alignment of each column individually with any of the responsive .align-self-* classes.</p>
<img src="image/clm4.jpg" alt="clm4" width="700px">
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col align-self-start">
      One of three columns
    </div>
    <div class="col align-self-center">
      One of three columns
    </div>
    <div class="col align-self-end">
      One of three columns
    </div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Horizontal alignment </h2>
<P>Change the horizontal alignment with any of the responsive justify-content-* classes.</P>
<img src="image/clm5.jpg" alt="clm5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<div class="container text-center">
  <div class="row justify-content-start">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-between">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-evenly">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Column wrapping</h2>
<P>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</P>
<img src="image/clm6.jpg" alt="clm6" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container">
  <div class="row">
    <div class="col-9">.col-9</div>
    <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
    <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Column breaks</h2>
<P>Breaking columns to a new line in flexbox requires a small hack: add an element with width: 100% wherever you want to wrap your columns to a new line. Normally this is accomplished with multiple .rows, but not every implementation method can account for this.</P>
<img src="image/clm7.jpg" alt="clm7" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

    <!-- Force next columns to break to new line -->
    <div class="w-100"></div>

    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
  </div>
</div>
</textarea>
<br>
<p>You may also apply this break at specific breakpoints with our responsive display utilities.</p>
<img src="image/clm8.jpg" alt="clm8" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
  </div>
</div>
</textarea>
<h2 class=w3-text-blue>Order classes</h2>
<P>Use .order- classes for controlling the visual order of your content. These classes are responsive, so you can set the order by breakpoint (e.g., .order-1.order-md-2). Includes support for 1 through 5 across all six grid tiers. If you need more .order-* classes, you can modify the default number via Sass variable.</P>
<img src="image/clm9.jpg" alt="clm9" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col">
      First in DOM, no order applied
    </div>
    <div class="col order-5">
      Second in DOM, with a larger order
    </div>
    <div class="col order-1">
      Third in DOM, with an order of 1
    </div>
  </div>
</div>
</textarea>
<br>
<P>There are also responsive .order-first and .order-last classes that change the order of an element by applying order: -1 and order: 6, respectively. These classes can also be intermixed with the numbered .order-* classes as needed.</P>
<img src="image/clm10.jpg" alt="clm10" width="100%">
<textarea disabled  id="" cols="30" rows="14" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col order-last">
      First in DOM, ordered last
    </div>
    <div class="col">
      Second in DOM, unordered
    </div>
    <div class="col order-first">
      Third in DOM, ordered first
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Offsetting columns</h2>
<P>You can offset grid columns in two ways: our responsive .offset- grid classes and our margin utilities. Grid classes are sized to match columns while margins are more useful for quick layouts where the width of the offset is variable</P>
<h3>Offset classes</h3>
<P>Move columns to the right using .offset-md-* classes. These classes increase the left margin of a column by * columns. For example, .offset-md-4 moves .col-md-4 over four columns.</P>
<img src="image/clm11.jpg" alt="clm11" width="100%">
<textarea disabled  id="" cols="30" rows="13" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
  </div>
  <div class="row">
    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
  </div>
</div>
</textarea>
<p>In addition to column clearing at responsive breakpoints, you may need to reset offsets. See this in action in the grid example.</p>
<br>
<img src="image/clm12.jpg" alt="clm12" width="100%">
<textarea disabled  id="" cols="30" rows="13" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Margin utilities</h2>
<P>With the move to flexbox in v4, you can use margin utilities like .me-auto to force sibling columns away from one another.</P>
<img src="image/clm13.jpg" alt="clm13" width="100%">
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
<div class="container text-center">
  <div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
  </div>
  <div class="row">
    <div class="col-md-3 ms-md-auto">.col-md-3 .ms-md-auto</div>
    <div class="col-md-3 ms-md-auto">.col-md-3 .ms-md-auto</div>
  </div>
  <div class="row">
    <div class="col-auto me-auto">.col-auto .me-auto</div>
    <div class="col-auto">.col-auto</div>
  </div>
</div>
</textarea>
<br> 
<h2 class=w3-text-blue>Standalone column classes</h2>
<P>The .col-* classes can also be used outside a .row to give an element a specific width. Whenever column classes are used as non-direct children of a row, the paddings are omitted.</P>
<img src="image/clm14.jpg" alt="clm14" width="100%">
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<div class="col-3 p-3 mb-2">
  .col-3: width of 25%
</div>

<div class="col-sm-9 p-3">
  .col-sm-9: width of 75% above sm breakpoint
</div>
</textarea>
<br>
<p>The classes can be used together with utilities to create responsive floated images. Make sure to wrap the content in a .clearfix wrapper to clear the float if the text is shorter.</p>
<img src="image/clm15.jpg" alt="clm15" width="100%">
<br>
<br>
<textarea disabled  id="" cols="30" rows="18" class="form-control" >
<div class="clearfix">
  <img src="..." class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

  <p>
    A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
  </p>

  <p>
    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
  </p>

  <p>
    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
  </p>
</div>
</textarea>




</div>

 
  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>
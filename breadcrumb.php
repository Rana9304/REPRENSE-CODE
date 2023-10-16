<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Breadcrumb</b></h1>
      <p><h3><i>Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.</i></h3> </p>

      <!-- containt past -->
     <h3><b>Example</b> </h3>
     <p>Use an ordered or unordered list with linked list items to create a minimally styled breadcrumb. Use our utilities to add additional styles as desired.</p>
     <img src="image/brd1.jpg" alt="brd1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Dividers</h2>
<P>Dividers are automatically added in CSS through ::before and content. They can be changed by modifying a local CSS custom property --bs-breadcrumb-divider, or through the $breadcrumb-divider Sass variable — and $breadcrumb-divider-flipped for its RTL counterpart, if needed. We default to our Sass variable, which is set as a fallback to the custom property. This way, you get a global divider that you can override without recompiling CSS at any time.</P>
<img src="image/brd2.jpg" alt="brd2" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
</textarea>
<p>When modifying via Sass, the quote function is required to generate the quotes around a string. For example, using > as the divider, you can use this:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
$breadcrumb-divider: quote(">");
</textarea>
<p>It’s also possible to use an embedded SVG icon. Apply it via our CSS custom property, or use the Sass variable.</p>
<br>
<img src="image/brd3.jpg" alt="brd3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
$breadcrumb-divider: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='8' height='8'><path d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='#{$breadcrumb-divider-color}'/></svg>");
</textarea>
<p>You can also remove the divider setting --bs-breadcrumb-divider: ''; (empty strings in CSS custom properties counts as a value), or setting the Sass variable to $breadcrumb-divider: none;.</p>
<br>
<img src="image/brd4.jpg" alt="brd4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
</textarea>
<br>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
$breadcrumb-divider: none;
</textarea>
<br>
<h2 class=w3-text-blue>Accessibility</h2>
<P>Since breadcrumbs provide a navigation, it’s a good idea to add a meaningful label such as aria-label="breadcrumb" to describe the type of navigation provided in the <nav> element, as well as applying an aria-current="page" to the last item of the set to indicate that it represents the current page.</P>
<br>
<h2 class=w3-text-blue>CSS</h2>
<h3>Variables</h3>
<p>As part of Bootstrap’s evolving CSS variables approach, breadcrumbs now use local CSS variables on .breadcrumb for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too. </p>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
--#{$prefix}breadcrumb-padding-x: #{$breadcrumb-padding-x};
--#{$prefix}breadcrumb-padding-y: #{$breadcrumb-padding-y};
--#{$prefix}breadcrumb-margin-bottom: #{$breadcrumb-margin-bottom};
@include rfs($breadcrumb-font-size, --#{$prefix}breadcrumb-font-size);
--#{$prefix}breadcrumb-bg: #{$breadcrumb-bg};
--#{$prefix}breadcrumb-border-radius: #{$breadcrumb-border-radius};
--#{$prefix}breadcrumb-divider-color: #{$breadcrumb-divider-color};
--#{$prefix}breadcrumb-item-padding-x: #{$breadcrumb-item-padding-x};
--#{$prefix}breadcrumb-item-active-color: #{$breadcrumb-active-color};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables </h2>
<textarea disabled  id="" cols="30" rows="15" class="form-control" >
$breadcrumb-font-size:              null;
$breadcrumb-padding-y:              0;
$breadcrumb-padding-x:              0;
$breadcrumb-item-padding-x:         .5rem;
$breadcrumb-margin-bottom:          1rem;
$breadcrumb-bg:                     null;
$breadcrumb-divider-color:          var(--#{$prefix}secondary-color);
$breadcrumb-active-color:           var(--#{$prefix}secondary-color);
$breadcrumb-divider:                quote("/");
$breadcrumb-divider-flipped:        $breadcrumb-divider;
$breadcrumb-border-radius:          null;
</textarea>



</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

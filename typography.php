<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Typography</b></h1>
      <p> <i>Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.</i> </p>
      <!-- containt past -->
     <h3>Headings </h3>
     <div>
        <p>All HTML headings, <h1> through <h6>, are available.</p> </div>
     <img src="image/typ1.jpg" alt="typ1" class="me-5" width="100%" >

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      </div>
      </div>
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>
 </textarea>

 <h2 class=w3-text-blue>Customizing headings</h2>
<P>Use the included utility classes to recreate the small secondary heading text from Bootstrap 3.</P>
<img src="image/typ2.jpg" alt="typ2" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<h3>
  Fancy display heading
  <small class="text-body-secondary">With faded secondary text</small>
</h3>
</textarea>
<h2 class=w3-text-blue>Display headings</h2>
<P>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</P>
<img src="image/typ3.jpg" alt="typ3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1>
<h1 class="display-5">Display 5</h1>
<h1 class="display-6">Display 6</h1>
</textarea>
<p>Display headings are configured via the $display-font-sizes Sass map and two variables, $display-font-weight and $display-line-height.</p>
<p>Display headings are customizable via two variables, $display-font-family and $display-font-style.</p>

<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$display-font-sizes: (
  1: 5rem,
  2: 4.5rem,
  3: 4rem,
  4: 3.5rem,
  5: 3rem,
  6: 2.5rem
);

$display-font-family: null;
$display-font-style:  null;
$display-font-weight: 300;
$display-line-height: $headings-line-height;
</textarea>
<h2 class=w3-text-blue>Lead</h2>
<P>Make a paragraph stand out by adding .lead.</P>
<img src="image/typ4.jpg" alt="typ4" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p class="lead">
  This is a lead paragraph. It stands out from regular paragraphs.
</p>
</textarea>
<h2 class=w3-text-blue>Inline text elements</h2>
<P>Styling for common inline HTML5 elements.</P>
<img src="image/typ5.jpg" alt="typ5" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined.</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
</textarea>
<p>Beware that those tags should be used for semantic purpose:</p>
<img src="image/typ6.jpg" alt="typ6" width="100%">
<p>While not shown above, feel free to use <b> and <i> in HTML5. <b> is meant to highlight words or phrases without conveying additional importance, while <i> is mostly for voice, technical terms, etc.</p>
<h2 class=w3-text-blue>Text utilities</h2>
<P>Change text alignment, transform, style, weight, line-height, decoration and color with our text utilities and color utilities.</P>
<h2 class=w3-text-blue>Abbreviations</h2>
<P>Stylized implementation of HTML’s <abbr> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.</P>
<p>Add .initialism to an abbreviation for a slightly smaller font-size.</p>

<img src="image/typ7.jpg" alt="typ7" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
</textarea>

<h2 class=w3-text-blue>Blockquotes</h2>
<P>For quoting blocks of content from another source within your document. Wrap <blockquote class="blockquote"> around any HTML as the quote.</P>
<img src="image/typ8.jpg" alt="typ8" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<blockquote class="blockquote">
  <p>A well-known quote, contained in a blockquote element.</p>
</blockquote>
</textarea>
<h2 class=w3-text-blue>Naming a source</h2>
<P>The HTML spec requires that blockquote attribution be placed outside the <blockquote>. When providing attribution, wrap your <blockquote> in a <figure> and use a <figcaption> or a block level element (e.g., <p>) with the .blockquote-footer class. Be sure to wrap the name of the source work in <cite> as well.</P>
<img src="image/typ9.jpg" alt="typ9" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<figure>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</textarea>
<h2 class=w3-text-blue>Alignment</h2>
<P>Use text utilities as needed to change the alignment of your blockquote.</P>
<img src="image/typ10.jpg" alt="typ10" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<figure class="text-center">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</textarea>
<img src="image/typ11.jpg" alt="typ11" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<figure class="text-end">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</textarea>
<h2 class=w3-text-blue>Lists</h2>
<h2>Unstyled</h2>
<P>Remove the default list-style and left margin on list items (immediate children only). This only applies to immediate children list items, meaning you will need to add the class for any nested lists as well.</P>
<img src="image/typ12.jpg" alt="typ12" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-unstyled">
  <li>This is a list.</li>
  <li>It appears completely unstyled.</li>
  <li>Structurally, it's still a list.</li>
  <li>However, this style only applies to immediate child elements.</li>
  <li>Nested lists:
    <ul>
      <li>are unaffected by this style</li>
      <li>will still show a bullet</li>
      <li>and have appropriate left margin</li>
    </ul>
  </li>
  <li>This may still come in handy in some situations.</li>
</ul>
</textarea>
<h2 class=w3-text-blue>Inline</h2>
<P>Remove a list’s bullets and apply some light margin with a combination of two classes, .list-inline and .list-inline-item.</P>
<img src="image/typ13.jpg" alt="typ13" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<ul class="list-inline">
  <li class="list-inline-item">This is a list item.</li>
  <li class="list-inline-item">And another one.</li>
  <li class="list-inline-item">But they're displayed inline.</li>
</ul>
</textarea>
<h2 class=w3-text-blue>Description list alignment<h2>
<P>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a .text-truncate class to truncate the text with an ellipsis.</P>
<img src="image/typ14.jpg" alt="typ14" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<dl class="row">
  <dt class="col-sm-3">Description lists</dt>
  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

  <dt class="col-sm-3">Term</dt>
  <dd class="col-sm-9">
    <p>Definition for the term.</p>
    <p>And some more placeholder definition text.</p>
  </dd>

  <dt class="col-sm-3">Another term</dt>
  <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
    </dl>
  </dd>
</dl>
</textarea>
<h2 class=w3-text-blue>Responsive font sizes</h2>
<P>In Bootstrap 5, we’ve enabled responsive font sizes by default, allowing text to scale more naturally across device and viewport sizes. Have a look at the RFS page to find out how this works.</P>
<h2 class=w3-text-blue>CSS</h2>
<h2>Sass variables</h2>
<P>Headings have some dedicated variables for sizing and spacing.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$headings-margin-bottom:      $spacer * .5;
$headings-font-family:        null;
$headings-font-style:         null;
$headings-font-weight:        500;
$headings-line-height:        1.2;
$headings-color:              inherit;
</textarea>
<p>Miscellaneous typography elements covered here and in Reboot also have dedicated variables.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$lead-font-size:              $font-size-base * 1.25;
$lead-font-weight:            300;

$small-font-size:             .875em;

$sub-sup-font-size:           .75em;

// fusv-disable
$text-muted:                  var(--#{$prefix}secondary-color); // Deprecated in 5.3.0
// fusv-enable

$initialism-font-size:        $small-font-size;

$blockquote-margin-y:         $spacer;
$blockquote-font-size:        $font-size-base * 1.25;
$blockquote-footer-color:     $gray-600;
$blockquote-footer-font-size: $small-font-size;

$hr-margin-y:                 $spacer;
$hr-color:                    inherit;

// fusv-disable
$hr-bg-color:                 null; // Deprecated in v5.2.0
$hr-height:                   null; // Deprecated in v5.2.0
// fusv-enable

$hr-border-color:             null; // Allows for inherited colors
$hr-border-width:             var(--#{$prefix}border-width);
$hr-opacity:                  .25;

$vr-border-width:             var(--#{$prefix}border-width);

$legend-margin-bottom:        .5rem;
$legend-font-size:            1.5rem;
$legend-font-weight:          null;

$dt-font-weight:              $font-weight-bold;

$list-inline-padding:         .5rem;

$mark-padding:                .1875em;
$mark-bg:                     $yellow-100;
</textarea>
<h2 class=w3-text-blue>Sass mixins</h2>
<P>There are no dedicated mixins for typography, but Bootstrap does use Responsive Font Sizing (RFS).</P>





</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

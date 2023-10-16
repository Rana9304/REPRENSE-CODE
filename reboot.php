<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Reboot</b></h1>
      <p> <i>Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.</i> </p>

      <!-- containt past -->
     <h3>CSS variables</h3>
     <p>With v5.1.1, we standardized our required @imports across all our CSS bundles (including bootstrap.css, bootstrap-reboot.css, and bootstrap-grid.css) to include _root.scss. This adds :root level CSS variables to all bundles, regardless of how many of them are used in that bundle. Ultimately Bootstrap 5 will continue to see more CSS variables added over time, in order to provide more real-time customization without the need to always recompile Sass. Our approach is to take our source Sass variables and transform them into CSS variables. That way, even if you don’t use CSS variables, you still have all the power of Sass. This is still in-progress and will take time to fully implement.</p>
<p>For example, consider these :root CSS variables for common <body> styles:</p>
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
</div>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        @if $font-size-root != null {
  --#{$prefix}root-font-size: #{$font-size-root};
}
--#{$prefix}body-font-family: #{inspect($font-family-base)};
@include rfs($font-size-base, --#{$prefix}body-font-size);
--#{$prefix}body-font-weight: #{$font-weight-base};
--#{$prefix}body-line-height: #{$line-height-base};
@if $body-text-align != null {
  --#{$prefix}body-text-align: #{$body-text-align};
}

--#{$prefix}body-color: #{$body-color};
--#{$prefix}body-color-rgb: #{to-rgb($body-color)};
--#{$prefix}body-bg: #{$body-bg};
--#{$prefix}body-bg-rgb: #{to-rgb($body-bg)};

--#{$prefix}emphasis-color: #{$body-emphasis-color};
--#{$prefix}emphasis-color-rgb: #{to-rgb($body-emphasis-color)};

--#{$prefix}secondary-color: #{$body-secondary-color};
--#{$prefix}secondary-color-rgb: #{to-rgb($body-secondary-color)};
--#{$prefix}secondary-bg: #{$body-secondary-bg};
--#{$prefix}secondary-bg-rgb: #{to-rgb($body-secondary-bg)};

--#{$prefix}tertiary-color: #{$body-tertiary-color};
--#{$prefix}tertiary-color-rgb: #{to-rgb($body-tertiary-color)};
--#{$prefix}tertiary-bg: #{$body-tertiary-bg};
--#{$prefix}tertiary-bg-rgb: #{to-rgb($body-tertiary-bg)};
    </textarea>
</div>
<p>In practice, those variables are then applied in Reboot like so:</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<body style="--bs-body-color: #333;">
  <!-- ... -->
</body>
</textarea>
<h1>Native font stack</h1>
<p>Bootstrap utilizes a “native font stack” or “system font stack” for optimum text rendering on every device and OS. These system fonts have been designed specifically with today’s devices in mind, with improved rendering on screens, variable font support, and more. Read more about native font stacks in this Smashing Magazine article.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$font-family-sans-serif:
  // Cross-platform generic font family (default user interface font)
  system-ui,
  // Safari for macOS and iOS (San Francisco)
  -apple-system,
  // Windows
  "Segoe UI",
  // Android
  Roboto,
  // older macOS and iOS
  "Helvetica Neue"
  // Linux
  "Noto Sans",
  "Liberation Sans",
  // Basic web fallback
  Arial,
  // Sans serif fallback
  sans-serif,
  // Emoji fonts
  "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !default;
</textarea>
<p>Note that because the font stack includes emoji fonts, many common symbol/dingbat Unicode characters will be rendered as multicolored pictographs. Their appearance will vary, depending on the style used in the browser/platform’s native emoji font, and they won’t be affected by any CSS color styles.

This font-family is applied to the <body> and automatically inherited globally throughout Bootstrap. To switch the global font-family, update $font-family-base and recompile Bootstrap.</p>
<h1>Headings</h1>
<p>All heading elements—<h1>—<h6> have their margin-top removed, margin-bottom: .5rem set, and line-height tightened. While headings inherit their color by default, you can also override it via optional CSS variable, --bs-heading-color.</p>

<img src="image/rbt1.jpg" alt="rbt1" width="100%">
<p> All 'p' elements have their margin-top removed and margin-bottom: 1rem set for easy spacing.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p>This is an example paragraph.</p>
</textarea>
<h1>Links</h1>
<p>Links have a default color and underline applied. While links change on :hover, they don’t change based on whether someone :visited the link. They also receive no special :focus styles.</p>
<img src="image/rbt2.jpg" alt="rbt2" width="100%">
<h2 class=w3-text-blue>Horizontal rules</h2>
<P>The <hr> element has been simplified. Similar to browser defaults, <hr>s are styled via border-top, have a default opacity: .25, and automatically inherit their border-color via color, including when color is set via the parent. They can be modified with text, border, and opacity utilities.</P>
<img src="image/rbt3.jpg" alt="rbt3" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<hr>

<div class="text-success">
  <hr>
</div>

<hr class="border border-danger border-2 opacity-50">
<hr class="border border-primary border-3 opacity-75">
</textarea>
<h1>Lists</h1>
<p>All lists—<ul>, <ol>, and <dl>—have their margin-top removed and a margin-bottom: 1rem. Nested lists have no margin-bottom. We’ve also reset the padding-left on <ul> and <ol> elements.</p>
<img src="image/rbt4.jpg" alt="rbt4" width="100%">
<p>For simpler styling, clear hierarchy, and better spacing, description lists have updated margins. <dd>s reset margin-left to 0 and add margin-bottom: .5rem. <dt>s are <b>bolded.</b></p>
<img src="image/rbt5.jpg" alt="rbt5" width="100%">
<h1>Inline code</h1>
<p>Wrap inline snippets of code with <code>. Be sure to escape HTML angle brackets.</p>
<img src="image/rbt6.jpg" alt="rbt6" width="100%">
<h2 class=w3-text-blue>Code blocks</h2>
<P>Use <pre>s for multiple lines of code. Once again, be sure to escape any angle brackets in the code for proper rendering. The <pre> element is reset to remove its margin-top and use rem units for its margin-bottom.</P>
<img src="image/rbt7.jpg" alt="rbt7" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>
</textarea>
<h2 class=w3-text-blue>Variables</h2>
<P>For indicating variables use the <var> tag.</P>
<img src="image/rbt8.jpg" alt="rbt8" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
</textarea>

<h2 class=w3-text-blue> </h2>
<P>Use the <kbd> to indicate input that is typically entered via keyboard.</P>
<img src="image/rbt9.jpg" alt="rbt9" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>Ctrl</kbd> + <kbd>,</kbd></kbd>
</textarea>
<h2 class=w3-text-blue>Sample output</h2>
<P>For indicating sample output from a program use the <samp> tag.</P>
<img src="image/rbt10.jpg" alt="rbt10" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<samp>This text is meant to be treated as sample output from a computer program.</samp>
</textarea>
<h2 class=w3-text-blue>Tables</h2>
<P>Tables are slightly adjusted to style <caption>s, collapse borders, and ensure consistent text-align throughout. Additional changes for borders, padding, and more come with the .table class.</P>
<img src="image/rbt11.jpg" alt="rbt11" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<table>
  <caption>
    This is an example table, and this is its caption to describe the contents.
  </caption>
  <thead>
    <tr>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
  </tbody>
</table>
</textarea>
<h2 class=w3-text-blue>Forms</h2>
<P>Various form elements have been rebooted for simpler base styles. Here are some of the most notable changes:</P>
<p><fieldset>s have no borders, padding, or margin so they can be easily used as wrappers for individual inputs or groups of inputs.</p>
<p><legend>s, like fieldsets, have also been restyled to be displayed as a heading of sorts.</p>
<p><label>s are set to display: inline-block to allow margin to be applied.</p>
<p><input>s, <select>s, <textarea>s, and <button>s are mostly addressed by Normalize, but Reboot removes their margin and sets line-height: inherit, too.</p>
<p><textarea>s are modified to only be resizable vertically as horizontal resizing often “breaks” page layout.</p>
<p><button>s and <input> button elements have cursor: pointer when :not(:disabled).</p>
<p>These changes, and more, are demonstrated below</p>
<img src="image/rbt12.jpg" alt="rbt12" width="100%">
<img src="image/rbt13.jpg" alt="rbt13" width="100%">
<img src="image/rbt14.jpg" alt="rbt14" width="100%">
<h2 class=w3-text-blue>Pointers on buttons</h2>
<P>Reboot includes an enhancement for role="button" to change the default cursor to pointer. Add this attribute to elements to help indicate elements are interactive. This role isn’t necessary for <button> elements, which get their own cursor change.</P>
<img src="image/rbt15.jpg" alt="rbt15" width="100%">
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<span role="button" tabindex="0">Non-button element button</span>
</textarea>
<h2 class=w3-text-blue>Misc elements</h2>
<h3>Address</h3>
<P>The <address> element is updated to reset the browser default font-style from italic to normal. line-height is also now inherited, and margin-bottom: 1rem has been added. <address>s are for presenting contact information for the nearest ancestor (or an entire body of work). Preserve formatting by ending lines with <br>.</P>
<img src="image/rbt16.jpg" alt="rbt16" width="100%">
<h2 class=w3-text-blue>Blockquote</h2>
<P>The default margin on blockquotes is 1em 40px, so we reset that to 0 0 1rem for something more consistent with other elements.</P>
<img src="image/rbt17.jpg" alt="rbt17" width="100%">
<h2 class=w3-text-blue>Inline elements </h2>
<P>The <abbr> element receives basic styling to make it stand out amongst paragraph text.</P>
<img src="image/rbt18.jpg" alt="rbt18" width="100%">
<h2 class=w3-text-blue>Summary</h2>
<P>The default cursor on summary is text, so we reset that to pointer to convey that the element can be interacted with by clicking on it.</P>
<img src="image/rbt19.jpg" alt="rbt19" width="100%">
<h2 class=w3-text-blue>HTML5 [hidden] attribute</h2>
<P>HTML5 adds a new global attribute named [hidden], which is styled as display: none by default. Borrowing an idea from PureCSS, we improve upon this default by making [hidden] { display: none !important; } to help prevent its display from getting accidentally overridden.</P>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<input type="text" hidden>
</textarea>
<img src="image/rbt20.jpg" alt="rbt20" width="100%">
<p>To merely toggle the visibility of an element, meaning its display is not modified and the element can still affect the flow of the document, use the .invisible class instead.</p>








</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

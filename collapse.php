<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Collapse</b></h1>
      <p><h3><i>Toggle the visibility of content across your project with a few classes and our JavaScript plugins.</i></h3> </p>

      <!-- containt past -->
     <h3>How it works </h3>
     <p>The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an element will animate the height from its current value to 0. Given how CSS handles animations, you cannot use padding on a .collapse element. Instead, use the class as an independent wrapping element.</p>
     <br>
     <h2>Example</h2>
     <p>Click the buttons below to show and hide another element via class changes:</p>
     <img src="image/col1.jpg" alt="col1" class="me-5" width="100%" >
<p>Generally, we recommend using a < button> with the data-bs-target attribute. While not recommended from a semantic point of view, you can also use an <a> link with the href attribute (and a role="button"). In both cases, the data-bs-toggle="collapse" is required.</p>
<img src="image/col2.jpg" alt="col2" class="me-5" width="100%" >
      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="19" class="form-control" >
        <p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Horizontal</h2>
<P>The collapse plugin supports horizontal collapsing. Add the .collapse-horizontal modifier class to transition the width instead of height and set a width on the immediate child element. Feel free to write your own custom Sass, use inline styles, or use our width utilities.</P>
<img src="image/col3.jpg" alt="col3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Toggle width collapse
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Multiple toggles and targets </h2>
<P>A <button> or <a> element can show and hide multiple elements by referencing them with a selector in its data-bs-target or href attribute. Conversely, multiple < button> or <a> elements can show and hide the same element if they each reference it with their data-bs-target or href attribute.</P>
<img src="image/col4.jpg" alt="col4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Accessibility</h2>
<P>Be sure to add aria-expanded to the control element. This attribute explicitly conveys the current state of the collapsible element tied to the control to screen readers and similar assistive technologies. If the collapsible element is closed by default, the attribute on the control element should have a value of aria-expanded="false". If you’ve set the collapsible element to be open by default using the show class, set aria-expanded="true" on the control instead. The plugin will automatically toggle this attribute on the control based on whether or not the collapsible element has been opened or closed (via JavaScript, or because the user triggered another control element also tied to the same collapsible element). If the control element’s HTML element is not a button (e.g., an < a> or < div>), the attribute role="button" should be added to the element.</P>
<p>If your control element is targeting a single collapsible element – i.e. the data-bs-target attribute is pointing to an id selector – you should add the aria-controls attribute to the control element, containing the id of the collapsible element. Modern screen readers and similar assistive technologies make use of this attribute to provide users with additional shortcuts to navigate directly to the collapsible element itself.</p>
<p>Note that Bootstrap’s current implementation does not cover the various optional keyboard interactions described in the ARIA Authoring Practices Guide accordion pattern - you will need to include these yourself with custom JavaScript.</p>
<br>
<h2 class=w3-text-blue>CSS</h2>
<h2>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
$transition-collapse:         height .35s ease;
$transition-collapse-width:   width .35s ease;
</textarea>
<br>
<h2 class=w3-text-blue>Classes</h2>
<p>Collapse transition classes can be found in scss/_transitions.scss as these are shared across multiple components (collapse and accordion).</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
.collapse {
  &:not(.show) {
    display: none;
  }
}

.collapsing {
  height: 0;
  overflow: hidden;
  @include transition($transition-collapse);

  &.collapse-horizontal {
    width: 0;
    height: auto;
    @include transition($transition-collapse-width);
  }
}
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<P>The collapse plugin utilizes a few classes to handle the heavy lifting:</P>
<img src="image/col5.jpg" alt="col5" class="me-5" width="100%" >
<p>These classes can be found in _transitions.scss.</p>
<br>
<h2 class=w3-text-blue>Via data attributes</h2>
<P>Just add data-bs-toggle="collapse" and a data-bs-target to the element to automatically assign control of one or more collapsible elements. The data-bs-target attribute accepts a CSS selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you’d like it to default open, add the additional class show.</P>
<p>To add accordion-like group management to a collapsible area, add the data attribute data-bs-parent="#selector". Refer to the accordion page for more information.</p>
<br>
<h2 class=w3-text-blue>Via JavaScript</h2>
<P>Enable manually with:</P>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const collapseElementList = document.querySelectorAll('.collapse')
const collapseList = [...collapseElementList].map(collapseEl => new bootstrap.Collapse(collapseEl))
</textarea>
<br>
<h2 class=w3-text-blue>Options</h2>
<P>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</P>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/col6.jpg" alt="col6" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Methods</h2>
<P>Activates your content as a collapsible element. Accepts an optional options object.</P>
<p>You can create a collapse instance with the constructor, for example:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const bsCollapse = new bootstrap.Collapse('#myCollapse', {
  toggle: false
})
</textarea>
<br>
<img src="image/col7.jpg" alt="col7" class="me-5" width="100%" >

<br>
<h2 class=w3-text-blue>Events</h2>
<P>Bootstrap’s collapse class exposes a few events for hooking into collapse functionality.</P>
<img src="image/col8.jpg" alt="col8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const myCollapsible = document.getElementById('myCollapsible')
myCollapsible.addEventListener('hidden.bs.collapse', event => {
  // do something...
})
</textarea>




</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

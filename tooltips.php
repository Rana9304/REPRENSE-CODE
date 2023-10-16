<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<?php include '../main/head.php'; ?>
<?php include 'b_side.php';?>
<div class="w3-main" style="margin-left:250px">
<!-- containt ready your mind  -->

  <div class="w3-row w3-padding-64 md-col-12 col-sm-12">
    <div class="w3-twothird w3-container">

      <h1 class="w3-text-blue"><b>Tooltips</b></h1>
      <p><h3><i>Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-bs-attributes for local title storage.</i></h3> </p>

      <!-- containt past -->
     <h3>Example </h3>
     <h2 class=w3-text-blue>Enable tooltips </h2>
     <p>As mentioned above, you must initialize tooltips before they can be used. One way to initialize all tooltips on a page would be to select them by their data-bs-toggle attribute, like so:</p>

      <div class="main pt-4 pb-5 pe-3" style="background-color: #DADBDD;">
      <div class="php_connect card">
      
        <!-- coding code -->
        <button type="button" class="btn btn-outline-dark col-1" style="margin-left: 90%;" > <i class="bi bi-clipboard-plus"></i></button>
        <textarea disabled  id="" cols="30" rows="8" class="form-control" >
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </textarea>
</div>
</div>
<br>
<h2 class=w3-text-blue>Tooltips on links</h2>
<p>Hover over the links below to see tooltips:</p>
<img src="image/tol1.jpg" alt="tol1" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p>
</textarea>
<br>
<img src="image/tol2.jpg" alt="tol2" class="me-5" width="100%" >
<br>
<br>
<h2 class=w3-text-blue>Custom tooltips</h2>
<p>You can customize the appearance of tooltips using CSS variables. We set a custom class with data-bs-custom-class="custom-tooltip" to scope our custom appearance and use it to override a local CSS variable.</p>
<textarea disabled  id="" cols="30" rows="8" class="form-control" >
.custom-tooltip {
  --bs-tooltip-bg: var(--bd-violet-bg);
  --bs-tooltip-color: var(--bs-white);
}
</textarea>
<br>
<img src="image/tol3.jpg" alt="tol3" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<button type="button" class="btn btn-secondary"
        data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="This top tooltip is themed via CSS variables.">
  Custom tooltip
</button>
</textarea>
<br>
<h2 class=w3-text-blue>Directions</h2>
<P>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. Directions are mirrored when using Bootstrap in RTL.</P>
<img src="image/tol4.jpg" alt="tol4" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
  Tooltip on top
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
  Tooltip on right
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
  Tooltip on bottom
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
  Tooltip on left
</button>
</textarea>
<p>And with custom HTML added:</p>
<br>
<textarea disabled  id="" cols="30" rows="10" class="form-control" >
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
  Tooltip with HTML
</button>
</textarea>
<p>With an SVG:</p>
<img src="image/tol5.jpg" alt="tol5" class="me-5" width="100%" >
<br>
<h2>CSS</h2>
<br>
<h2 class=w3-text-blue>Variables</h2>
<p>As part of Bootstrap’s evolving CSS variables approach, tooltips now use local CSS variables on .tooltip for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.</p>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
--#{$prefix}tooltip-zindex: #{$zindex-tooltip};
--#{$prefix}tooltip-max-width: #{$tooltip-max-width};
--#{$prefix}tooltip-padding-x: #{$tooltip-padding-x};
--#{$prefix}tooltip-padding-y: #{$tooltip-padding-y};
--#{$prefix}tooltip-margin: #{$tooltip-margin};
@include rfs($tooltip-font-size, --#{$prefix}tooltip-font-size);
--#{$prefix}tooltip-color: #{$tooltip-color};
--#{$prefix}tooltip-bg: #{$tooltip-bg};
--#{$prefix}tooltip-border-radius: #{$tooltip-border-radius};
--#{$prefix}tooltip-opacity: #{$tooltip-opacity};
--#{$prefix}tooltip-arrow-width: #{$tooltip-arrow-width};
--#{$prefix}tooltip-arrow-height: #{$tooltip-arrow-height};
</textarea>
<br>
<h2 class=w3-text-blue>Sass variables</h2>
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
$tooltip-font-size:                 $font-size-sm;
$tooltip-max-width:                 200px;
$tooltip-color:                     var(--#{$prefix}body-bg);
$tooltip-bg:                        var(--#{$prefix}emphasis-color);
$tooltip-border-radius:             var(--#{$prefix}border-radius);
$tooltip-opacity:                   .9;
$tooltip-padding-y:                 $spacer * .25;
$tooltip-padding-x:                 $spacer * .5;
$tooltip-margin:                    null; // TODO: remove this in v6

$tooltip-arrow-width:               .8rem;
$tooltip-arrow-height:              .4rem;
// fusv-disable
$tooltip-arrow-color:               null; // Deprecated in Bootstrap 5.2.0 for CSS variables
// fusv-enable
</textarea>
<br>
<h2 class=w3-text-blue>Usage</h2>
<p>The tooltip plugin generates content and markup on demand, and by default places tooltips after their trigger element. Trigger the tooltip via JavaScript:</p>
<textarea disabled  id="" cols="30" rows="5" class="form-control" >
const exampleEl = document.getElementById('example')
const tooltip = new bootstrap.Tooltip(exampleEl, options)
</textarea>
<br>
<img src="image/tol6.jpg" alt="tol6" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Markup </h2>
<P>The required markup for a tooltip is only a data attribute and title on the HTML element you wish to have a tooltip. The generated markup of a tooltip is rather simple, though it does require a position (by default, set to top by the plugin).</P>
<img src="image/tol7.jpg" alt="tol7" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="19" class="form-control" >
<!-- HTML to write -->
<a href="#" data-bs-toggle="tooltip" data-bs-title="Some tooltip text!">Hover over me</a>

<!-- Generated markup by the plugin -->
<div class="tooltip bs-tooltip-auto" role="tooltip">
  <div class="tooltip-arrow"></div>
  <div class="tooltip-inner">
    Some tooltip text!
  </div>
</div>
</textarea>
<br>
<h2 class=w3-text-blue>Disabled elements</h2>
<P>Elements with the disabled attribute aren’t interactive, meaning users cannot focus, hover, or click them to trigger a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from a wrapper < div> or < span>, ideally made keyboard-focusable using tabindex="0".</P>
<img src="image/tol8.jpg" alt="tol8" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-title="Disabled tooltip">
  <button class="btn btn-primary" type="button" disabled>Disabled button</button>
</span>
</textarea>
<br>
<h2 class=w3-text-blue>Options</h2>
<p>As options can be passed via data attributes or JavaScript, you can append an option name to data-bs-, as in data-bs-animation="{value}". Make sure to change the case type of the option name from “camelCase” to “kebab-case” when passing the options via data attributes. For example, use data-bs-custom-class="beautifier" instead of data-bs-customClass="beautifier".</p>
<p>As of Bootstrap 5.2.0, all components support an experimental reserved data attribute data-bs-config that can house simple component configuration as a JSON string. When an element has data-bs-config='{"delay":0, "title":123}' and data-bs-title="456" attributes, the final title value will be 456 and the separate data attributes will override values given on data-bs-config. In addition, existing data attributes are able to house JSON values like data-bs-delay='{"show":0,"hide":150}'.</p>
<p>The final configuration object is the merged result of data-bs-config, data-bs-, and js object where the latest given key-value overrides the others.</p>
<img src="image/tol9.jpg" alt="tol9" class="me-5" width="100%" >
<img src="image/tol10.jpg" alt="tol10" class="me-5" width="100%" >
<img src="image/tol11.jpg" alt="tol11" class="me-5" width="100%" >
<img src="image/tol12.jpg" alt="tol12" class="me-5" width="100%" >
<img src="image/tol13.jpg" alt="tol13" class="me-5" width="100%" >
<img src="image/tol14.jpg" alt="tol14" class="me-5" width="100%" >
<br>
<img src="image/tol15.jpg" alt="tol15" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Using function with popperConfig</h2>
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const tooltip = new bootstrap.Tooltip(element, {
  popperConfig(defaultBsPopperConfig) {
    // const newPopperConfig = {...}
    // use defaultBsPopperConfig if needed...
    // return newPopperConfig
  }
})
</textarea>
<br>
<h2 class=w3-text-blue>Methods</h2>
<img src="image/tol16.jpg" alt="tol16" class="me-5" width="100%" >
<br>
<img src="image/tol16.jpg" alt="tol16" class="me-5" width="100%" >
<img src="image/tol17.jpg" alt="tol17" class="me-5" width="100%" >
<img src="image/tol18.jpg" alt="tol18" class="me-5" width="100%" >
<img src="image/tol19.jpg" alt="tol19" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const tooltip = bootstrap.Tooltip.getInstance('#example') // Returns a Bootstrap tooltip instance

// setContent example
tooltip.setContent({ '.tooltip-inner': 'another title' })
</textarea>
<br>
<img src="image/tol20.jpg" alt="tol20" class="me-5" width="100%" >
<br>
<h2 class=w3-text-blue>Events </h2>
<img src="image/tol21.jpg" alt="tol21" class="me-5" width="100%" >
<textarea disabled  id="" cols="30" rows="9" class="form-control" >
const myTooltipEl = document.getElementById('myTooltip')
const tooltip = bootstrap.Tooltip.getOrCreateInstance(myTooltipEl)

myTooltipEl.addEventListener('hidden.bs.tooltip', () => {
  // do something...
})

tooltip.hide()
</textarea>














</div>
    

<!-- containt past -->  

<!-- containt ready your mind  -->


  </div>

  <!-- Pagination -->

  
    
  </div>
  
  <?php include '../main/footer.php'; ?>

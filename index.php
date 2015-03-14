<?php get_header(); ?>

<div class="row">

	<div class="large-12 columns">
		
	<h1>Motherplate</h1>
	<h2>A bare bones responsive SCSS boilerplate for web designers</h2>
	
	<hr>
	
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<p>Paragraph</p>
	<p class="subtle">Subtle hint</p>
	<p><a href="">Link text</a></p>
	<blockquote><p>You're good. Get better. Stop asking for things.</p></blockquote>
	<pre><code>&lt;script&gt;Some code&lt;/script&gt;</code></pre>
	
	<hr>

	<h2>Buttons</h2>

	<p><button class="btn-primary">Primary button</button> <button class="btn-secondary">Secondary button</button> <button class="btn">Default button</button> <button class="btn btn-link">Link button</button> </p>

	<p><button class="btn-primary btn-cta">Primary call to action</button> <button class="btn-secondary btn-cta">Secondary call to action</button></p>

	<hr>

	<h2>Notifications/Alerts</h2>

	<div class="notification error">
		<p>There was a problem.</p>
	</div>

	<div class="notification success">
		<p>Successs! Something succeeded.</p>
	</div>

	<div class="notification warning">
		<p>Watch out, here's a warning.</p>
	</div>

	<div class="notification info">
		<p>Here's some useful information.</p>
	</div>

	<div class="notification empty">
		<p>This is an empty state. You should probably add something to get started.</p>
	</div>

	<hr>
	
	<h2>Lists</h2>
	<ul>
		<li>Option 1</li>
		<li>Option 2</li>
		<li>Option 3</li>
	</ul>
	<ol>
		<li>Option 1</li>
		<li>Option 2</li>
		<li>Option 3</li>
	</ol>
	<ul class="nolist">
		<li>Option 1</li>
		<li>Option 2</li>
		<li>Option 3</li>
	</ul>
	
	<hr>
	
	<h2>Tables</h2>
	<table>
		<thead>
			<tr>
				<th scope="col">Column 1</th>
				<th scope="col">Column 2</th>
				<th scope="col">Column 3</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Data 1</td>
				<td>Data 2</td>
				<td>Data 3</td>
			</tr>
		</tbody>
	</table>
	<hr>
	
	<h2>Forms</h2>
	<form>
		<div class="field">
			<label for="">Text label</label>
			<input type="text">
			<p class="note">Note</p>
		</div>
		<div class="field">
			<label for="">Email</label>
			<input type="email">
		</div>
		<div class="field">
			<label for="">Search</label>
			<input type="search">
		</div>
		<div class="field">
			<label for="">Password <span class="req">(required)</span></label>
			<input type="password">
		</div>
		<div class="field error">
			<label for="">Text label <span class="req">(required)</span></label>
			<input type="text">
			<p class="reason">This field is required</p>
		</div>
		<div class="field">
			<label for="">Textarea</label>
			<textarea></textarea>
		</div>
		<div class="field">
			<label for="">Full width</label>
			<input type="text" class="full-width">
		</div>
		<div class="field">
			<label><input type="checkbox"> Option 1</label>
			<label><input type="checkbox"> Option 2</label>
			<label><input type="checkbox"> Option 3</label>
		</div>
		<div class="field">
			<label><input type="radio" name="radio"> Option 1</label>
			<label><input type="radio" name="radio"> Option 2</label>
			<label><input type="radio" name="radio"> Option 3</label>
		</div>
		<button>Submit</button>
	</form>
	<input type="text"> <button class="btn-primary">Submit</button>
	
	<hr>
	
	<h2>Responsive Grid</h2>

	<style>
	/*Style to help visualize grid for demo purposes*/
	.grid-style-helper{background:pink;height:50px;margin-bottom:10px;}
	</style>

	<div class="row">
		<div class="large-6 medium-6 columns grid-style-helper">.large-6 .medium-6</div>
		<div class="large-6 medium-6 columns grid-style-helper">.large-6 .medium-6</div>

		<div class="large-8 medium-8 columns grid-style-helper">.large-8 .medium-8</div>
		<div class="large-4 medium-4 columns grid-style-helper">.large-4 .medium-4</div>
		
		<div class="large-3 medium-3 columns grid-style-helper">.large-3 .medium-3</div>
		<div class="large-3 medium-3 columns grid-style-helper">.large-3 .medium-3</div>
		<div class="large-3 medium-3 columns grid-style-helper">.large-3 .medium-3</div>
		<div class="large-3 medium-3 columns grid-style-helper">.large-3 .medium-3</div>

		<div class="large-12 medium-12 columns grid-style-helper">.span12</div>
	</div>
	
	<hr>

	<h2>Images</h2>
	<!-- Example using picture element -->
	<picture>
		<source media="(min-width: 1000px)" srcset="img/cat@2x.jpg">
		<source media="(min-width: 640px)" srcset="img/cat.jpg">
		<img src="img/cat@2x.jpg" alt="Cat">
	</picture>

	<!-- Examples using srcset -->
	<div class="row">
		<div class="large-2 medium-2 columns">
			<img src="img/cat.jpg" alt="Cat" srcset="img/cat@2x.jpg 2x, img/cat.jpg 1x" sizes="(min-width:480px) 100vw, 50vw">
		</div>
		<div class="large-4 medium-4 columns">
			<img src="img/cat.jpg" alt="Cat" srcset="img/cat@2x.jpg 2x, img/cat.jpg 1x" sizes="(min-width:480px) 100vw, 50vw">
		</div>
		<div class="large-6 medium-6 columns">
			<img src="img/cat.jpg" alt="Cat" srcset="img/cat@2x.jpg 2x, img/cat.jpg 1x" sizes="(min-width:480px) 100vw, 50vw">
		</div>
	</div>

	<hr>

	<h2>Icons</h2>

	<i class="icon-cog"></i>
	<i class="icon-download-alt icon-3x"></i>
	<i class="icon-github-alt icon-rotate-90"></i>
	<i class="icon-remove-sign icon-5x"></i>
	<i class="icon-apple"></i>
	<i class="icon-android icon-muted"></i>
	<i class="icon-cloud icon-border"></i>
	<i class="icon-comment"></i>
	<i class="icon-star"></i>
	<i class="icon-gamepad"></i>

	<p><a href="http://fontawesome.github.io/Font-Awesome/cheatsheet/">More icons</a></p>


	</div>

	</div>

	

<?php get_footer(); ?>

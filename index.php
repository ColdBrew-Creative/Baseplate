<?php get_header(); ?>

	<section>
		<div class="row">
			<h1>Baseplate</h1>
			<h2>A modern starting point for WordPress themes.</h2>
		</div>
	</section>

	<hr />

	<section id="scss-settings"><!-- SCSS settings -->
		<div class="row">

			<h2>SCSS Variables</h2>

			<h4>Typography</h4>

			<span id="font-base"></span>
			<span id="font-header"></span>
			<span id="font-mono"></span>
			<span id="font-blockquote"></span>
			<br />
			<span id="rem-small"></span>
			<span id="rem-medium"></span>
			<span id="rem-large"></span>

			<h4>Colors</h4>

			<span id="primary-color" class="test-color"></span>
			<span id="secondary-color" class="test-color"></span>
			<span id="tertiary-color" class="test-color"></span>
			<br />
			<span id="alert-color" class="test-color"></span>
			<span id="success-color" class="test-color"></span>
			<span id="warning-color" class="test-color"></span>
			<span id="info-color" class="test-color"></span>

			<h4>Responsive Breakpoints</h4>

			<span id="breakpoint-small"></span>
			<span id="breakpoint-medium"></span>
			<span id="breakpoint-large"></span>
			<span id="breakpoint-xlarge"></span>
			<span id="breakpoint-xxlarge"></span>

		</div>
	</section>

	<hr />

	<section><!-- Basic text stylings -->
		<div class="row">

			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>

			<b>&lt;b&gt;chocolate flavored milk and granola bar&lt;/b&gt;</b><br />
			<cite>&lt;cite&gt;citrus pomegranate healthy energy drink&lt;/cite&gt;</cite><br />
			<code>&lt;code&gt;gluten free kale raw chip&lt;/code&gt;</code><br />
			<del>&lt;del&gt;baby swiss cheese&lt;/del&gt;</del><br />
			<em>&lt;em&gt;Arnold Dutch Country 100% whole grain bread&lt;/em&gt;</em><br />
			<i>&lt;i&gt;McCormick Grill Mates Memphis pit BBQ rub&lt;/i&gt;</i><br />
			<ins>&lt;ins&gt;Milky Way midnight bar&lt;/ins&gt;</ins><br />
			<kbd>&lt;kbd&gt;Martha White strawberry muffin mix&lt;/kbd&gt;</kbd><br />
			<mark>&lt;mark&gt;white roasted garlic pizza&lt;/mark&gt;</mark><br />
			<output>&lt;output&gt;millet flour&lt;/output&gt;</output><br />
			<q>&lt;q&gt;Burger King ham omelet sandwich&lt;/q&gt;</q><br />
			<s>&lt;s&gt;coconut bar cookie&lt;/s&gt;</s><br />
			<samp>&lt;samp&gt;Kashi TLC ripe strawberry cereal bar&lt;/samp&gt;</samp><br />
			<small>&lt;small&gt;Progresso reduced sodium tomato parmesan soup&lt;/small&gt;</small><br />
			<strong>&lt;strong&gt;condensed pepperpot soup&lt;/strong&gt;</strong><br />
			strawberry banana yogurt blends<sub>&lt;sub&gt;smoky bacon cheddar cheese&lt;/sub&gt;</sub>Gerber Smart Nourish second foods macaroni &amp; cheese<br />
			Marco Polo vegetable salad<sup>&lt;sup&gt;goji white grape fruit bar&lt;/sup&gt;</sup>Archway soft oatmeal cookie<br />
			<u>&lt;u&gt;condensed chicken gumbo&lt;/u&gt;</u><br />
			<var>&lt;var&gt;Howe assorted ju ju fish&lt;/var&gt;</var><br />
			<br />

			<p>&lt;p&gt;Cheese pizza Near East chicken flavor rice pilaf mix Corn Chex vegetable salad Fuze strawberry guava eclair fire roasted tomato &amp; garlic pasta sauce Southwestern style turkey chili with beans curly fries organic lowfat smooth &amp; creamy BaNilla yogurt Yoplait light triple berry torte yogurt veal spleen Wendy's Hot Chili Seasoning Manhattan clam chowder raw tilefish duck breast raw enriched medium grain rice imitation crab cooked Applegate Garms organic turkey burger patty&lt;/p&gt;</p>
			<p>This is some <a href="">link text</a>.</p>

			<blockquote>&lt;blockquote&gt;Bugles original snack Taco Bell bean burrito golden grapefruit juice reduced fat sharp cheddar natural cheese stick fudge brownie frozen yogurt Lancaster Canning Company sweet mustard Yoplait Greek 2X protein coconut low fat yogurt chicken pecan rainbow Chips Deluxe cookie Quaker cranberry and yogurt soft baked oatmeal cookie golden crinkles&lt;/blockquote&gt;</blockquote>

			<pre><code>// This is a block of code using &lt;pre&gt;&lt;code&gt;
function FisherYates(array) {
	for (var i = array.length; i > 0; --i) {
		var index = Math.random()*i|0;
		if (index) {
			var t = array[index];
			array[index] = array[i];
			array[i] = t;
		}
	}
}</code></pre>

			<ul>
				<li>Unordered List</li>
				<li>Burger King scrambled egg platter</li>
				<li>The Spice Hunter miso udon soup</li>
				<li>Subway BLT sub</li>
			</ul>
			<ol>
				<li>Ordered List</li>
				<li>Shabtai Gourmet gluten-free ring tings</li>
				<li>Edwards strawberry creme pie</li>
				<li>apple cinnamon Newtons fruit crisps</li>
			</ol>
			<dl>
				<dt>Dictionary List</dt>
				<dd>Dictionary Definition</dd>
				<dt>Foods</dt>
				<dd>Mrs. Wages hot salsa tomato mix Giant Quality Candy spice drops meatless fish stick Wendy's Bacon au gratin potatoes mix Keebler toast and peanut butter sandwich cracker</dd>
			</dl>

		</div>
	</section>

	<hr />

	<section><!-- Tables -->
		<div class="row">

			<h2>Tables</h2>

			<table>
				<caption>This is the caption for the table</caption>
				<thead>
					<tr>
						<th></th>                <th>2013</th> <th colspan="3">2014</th>                 <th colspan="2">2015</th>
					</tr>
					<tr>
						<th></th>                <th>Oct</th>  <th>Apr</th>  <th>Aug</th>  <th>Nov</th>  <th>Mar</th>  <th>Apr</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Silk Road (2.0)</td> <td>13.0</td> <td>13.6</td> <td>12.3</td> <td></td>     <td></td>     <td></td>
					</tr>
					<tr>
						<td>Agora</td>           <td></td>     <td>7.4</td>  <td>12.1</td> <td>13.7</td> <td>14.6</td> <td>16.8</td>
					</tr>
					<tr>
						<td>Evolution</td>       <td></td>     <td>2.6</td>  <td>7.2</td>  <td>12.1</td> <td>19.9</td> <td></td>
					</tr>
					<tr>
						<td>Pandora</td>         <td></td>     <td>5.2</td>  <td>5.3</td>  <td></td>     <td></td>     <td></td>
					</tr>
					<tr>
						<td>Other</td>           <td>5.2</td>  <td>3.2</td>  <td>10.0</td> <td>2.4</td>  <td>7.4</td>  <td>26.8</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td>Total</td>           <td>18.2</td> <td>32.0</td> <td>46.9</td> <td>28.2</td> <td>41.9</td> <td>43.6</td>
					</tr>
				</tfoot>
			</table>

		</div>
	</section>

	<hr />

	<section><!-- Form elements -->
		<div class="row">

			<h2>Forms</h2>

			<style>
				.form-helper legend {width: 300px; float: left;}
			</style>

			<form>
				<fieldset>
					<legend>Legend for Basic Text Input</legend>
					<input type="text" />
					<p class="note">This is a note for the above input</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Color</legend>
					<input type="color" />
					<p class="note">Firefox, Chrome, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Date</legend>
					<input type="date" />
					<p class="note">Chrome, Safare, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Datetime</legend>
					<input type="datetime" />
					<p class="note">DEPRECATED</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Datetime-local</legend>
					<input type="datetime-local" />
					<p class="note">Chrome, Safari, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Email</legend>
					<input type="email" />
					<p class="note">IE, Firefox, Chrome, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>File</legend>
					<input type="file" />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Image</legend>
					<input type="image" src="" />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Keygen</legend>
					<keygen />
					<p class="note">Firefox, Chrome, Safari, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Month</legend>
					<input type="month" />
					<p class="note">Chrome, Safari, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Number</legend>
					<input type="number" />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Password</legend>
					<input type="password" />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Range</legend>
					<input type="range" />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Reset</legend>
					<input type="reset" />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Search</legend>
					<input type="search" />
					<p class="note">Chrome, Safari</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Tel</legend>
					<input type="tel" />
					<p class="note">NO SUPPORT</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Textarea</legend>
					<textarea>Some default text</textarea>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Time</legend>
					<input type="time" />
					<p class="note">Chrome, Safari, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>URL</legend>
					<input type="url" />
					<p class="note">IE, Firefox, Chrome, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Week</legend>
					<input type="week" />
					<p class="note">Chrome, Safari, Opera</p>
				</fieldset>

				<fieldset class="form-helper">
					<legend>Datalist</legend>
					<input list="foods" />
					<datalist id="foods">
						<option value="chicken fajita strip" />
						<option value="green bean casserole" />
						<option value="coconut curry marinated tempeh" />
						<option value="caramel milk chocolate bar" />
						<option value="chocolate-flavor drink mix" />
						<option value="oatmeal cookie" />
					</datalist>
					<p class="note">IE, Firefox, Chrome, Opera</p>
				</fieldset>
				<fieldset class="form-helper">
					<legend>Dropdown List</legend>
					<select>
						<optgroup label="Some Foods">
							<option selected>Oscar Mayer little smokies</option>
							<option>caramel double chocolate crunch bar</option>
							<option>uncured hickory smoked pepper bacon</option>
						</optgroup>
						<optgroup label="More Foods">
							<option>pepper jack Cheeze-It cracker</option>
							<option>Near East parmesan couscous mix</option>
							<option>chedder macaroni and cheese</option>
						</optgroup>
					</select>
				</fieldset>
				<fieldset>
					<legend>Checkboxes</legend>
					<label><input type="checkbox"> Wendy's Big Breakfast Sandwich</label><br />
					<label><input type="checkbox"> Gerber Nature Select first foods bananas</label><br />
					<label><input type="checkbox"> KIND cashew and ginger spice bar</label>
				</fieldset>
				<fieldset>
					<legend>Radio Buttons</legend>
					<label><input type="radio" name="radio"> unpopped Pop-Secret sea salt popcorn</label><br />
					<label><input type="radio" name="radio"> Breyers natural vanilla ice cream</label><br />
					<label><input type="radio" name="radio"> Nature Valley roasted almond granola nut clusters</label>
				</fieldset>

				<fieldset class="error">
					This is an error label<br />
					<input type="email" value="bademail@blah" />
					<p class="reason">Please enter a valid email address</p>
				</fieldset>
				<fieldset class="success">
					This is a success label<br />
					<input type="text" value="pillowfication" />
					<p class="reason">This username is available!</p>
				</fieldset>
				<fieldset class="warning">
					This is a warning label<br />
					<input type="text" value="font" />
					<p class="reason">&lt;font&gt; is deprecated in HTML 4.0+</p>
				</fieldset>

				<fieldset class="form-helper">
					<legend>Disabled Text Input</legend>
					<input type="text" disabled />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Required Text Input</legend>
					<input type="text" required />
				</fieldset>
				<fieldset class="form-helper">
					<legend>Hidden Text Input</legend>
					<input type="text" hidden />
				</fieldset>

				<input type="submit" />
			</form>

		</div>
	</section>

	<hr />

	<section>
		<div class="row">

			<h2>Responsive Grid</h2>

			<style>
				.grid-helper .columns {border: 1px solid black; background: #FFDDDD; height: 50px; margin-bottom: 10px;}
			</style>

			<div class="row grid-helper">
				<div class="large-6 medium-6 columns">.large-6 .medium-6</div>
				<div class="large-6 medium-6 columns">.large-6 .medium-6</div>
				<div class="large-8 medium-8 columns">.large-8 .medium-8</div>
				<div class="large-4 medium-4 columns">.large-4 .medium-4</div>
				<div class="large-3 medium-3 columns">.large-3 .medium-3</div>
				<div class="large-3 medium-3 columns">.large-3 .medium-3</div>
				<div class="large-3 medium-3 columns">.large-3 .medium-3</div>
				<div class="large-3 medium-3 columns">.large-3 .medium-3</div>
				<div class="large-12 medium-12 columns">.large-12 .medium-12</div>
			</div>

		</div>
	</section>

	<hr />

	<section><!-- Images -->
		<div class="row">

			<h2>Images</h2>

			<p>Example using picture element. See <a href="http://caniuse.com/#feat=picture">http://caniuse.com/#feat=picture</a></p>
			<picture>
				<source media="(min-width: 1000px)" srcset="<?= get_template_directory_uri(); ?>/library/img/cat@2x.jpg" />
				<source media="(min-width: 640px)" srcset="<?= get_template_directory_uri(); ?>/library/img/cat.jpg" />
				<img src="<?= get_template_directory_uri(); ?>/library/img/cat@2x.jpg" alt="Cat" />
			</picture>

			<p>Examples using srcset</p>
			<div class="row">
				<div class="large-2 medium-2 columns">
					<img src="<?= get_template_directory_uri(); ?>/library/img/cat.jpg"
					     alt="Cat"
					     srcset="<?= get_template_directory_uri(); ?>/library/img/cat@2x.jpg 2x, <?= get_template_directory_uri(); ?>/library/img/cat.jpg 1x"
					     sizes="(min-width:480px) 100vw, 50vw" />
				</div>
				<div class="large-4 medium-4 columns">
					<img src="<?= get_template_directory_uri(); ?>/library/img/cat.jpg"
					     alt="Cat"
					     srcset="<?= get_template_directory_uri(); ?>/library/img/cat@2x.jpg 2x, <?= get_template_directory_uri(); ?>/library/img/cat.jpg 1x"
					     sizes="(min-width:480px) 100vw, 50vw" />
				</div>
				<div class="large-6 medium-6 columns">
					<img src="<?= get_template_directory_uri(); ?>/library/img/cat.jpg"
					     alt="Cat"
					     srcset="<?= get_template_directory_uri(); ?>/library/img/cat@2x.jpg 2x, <?= get_template_directory_uri(); ?>/library/img/cat.jpg 1x"
					     sizes="(min-width:480px) 100vw, 50vw" />
				</div>
			</div>

			<p>Example using figure</p>
			<figure>
				<img src="<?= get_template_directory_uri(); ?>/library/img/cat.jpg" alt="Cat" style="height:200px" />
				<figcaption>This is the figure caption for the cat</figcaption>
			</figure>

		</div>
	</section>

	<hr />

	<section><!-- Miscellaneous -->
		<div class="row">

			<h2>Other HTML5 Elements</h2>

			<h4>Details and Summary</h4>
			<details>
				<summary>This is a delicious webpage</summary>
				<p>It makes me very hungry.</p>
				<p>And very happy.</p>
			</details>

			<h4>Meter (Firefox, Chrome, Safari, Opera)</h4>
			<meter value="65" min="0" max="100">65 out of 100</meter>

			<h4>Progress</h4>
			<progress value="50" max="100"></progress>

			<h2>Icons</h2>

			<i class="fa fa-cog fa-3x"></i>
			<i class="fa fa-github-alt fa-rotate-90"></i>
			<i class="fa fa-apple fa-2x"></i>
			<i class="fa fa-cloud fa-border fa-4x"></i>
			<i class="fa fa-comment"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-gamepad fa-3x fa-spin"></i>
			<br />
			<i class="fa fa-camera-retro"></i> fa
			<i class="fa fa-camera-retro fa-lg"></i> fa-lg
			<i class="fa fa-camera-retro fa-2x"></i> fa-2x
			<i class="fa fa-camera-retro fa-3x"></i> fa-3x
			<i class="fa fa-camera-retro fa-4x"></i> fa-4x
			<i class="fa fa-camera-retro fa-5x"></i> fa-5x

			<p>More icons: <a href="http://fontawesome.github.io/Font-Awesome/cheatsheet/">http://fontawesome.github.io/Font-Awesome/cheatsheet/</a></p>

		</div>
	</section>

<?php get_footer(); ?>

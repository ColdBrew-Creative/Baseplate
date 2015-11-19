# Baseplate: Just enough to start a new WordPress project.

Docs a work in progress; not completely updated right now.
Preview: COMING SOON (maybe)

## What is this?
This is a bare bones HTML/CSS framework based on Foundation and Lee Munroe's <a href="https://github.com/leemunroe/motherplate">Motherplate</a>

It includes a CSS reset and a bunch of minimal boilerplate styles that should come in useful for any project, including a responsive grid, typography, icons and forms.

It is not as in depth as something like <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.

## Features
* Uses SCSS partials to help structure the CSS.
* Responsive-ready 12-column grid system to work across all devices (<a href="http://foundation.zurb.com">Foundation</a>).
* Uses Font-Awesome icon fonts for icons.
* Uses Normalize to reset browser styles.
* Just enough CSS to get you started; minimal visual styling with this boilerplate allows for easy styling.
* Just the HTML/JS you need to get started; very little components with this boilerplate.

## How to Use
This will vary depending on the framework you are using. The following is how to for a basic WordPress-based website. 

###Setup
Simple! Just make sure you have the following items installed.

1. Make sure you have installed Node.js, Git, and Ruby
 * `node -v       ## eg. v5.0.0`
 * `npm -v        ## eg. 3.3.6`
 * `git --version ## eg. 2.6.3.windows.1`
 * `ruby -v       ## eg. 2.2.3p173`
 * `gem -v        ## eg. 2.4.5.1`

2. Install Grunt, Bower, Browserify, and Sass
 * `npm i grunt-cli -g`
 * `npm i bower -g`
 * `npm i browserify -g`
 * `gem install sass`

3. Install all the modules and compile the SCSS and JS
 * `npm run initial-setup`

###Workflow
1. Start the Sublime project by opening `Baseplate.sublime-project`
2. Open up a terminal window. 
	* Windows: Shift+Right Click inside the folder and select Open command window here
3. Navigate to the root directory of this project. `cd ../Baseplate`
	* Mac Shortcut: Drag the project folder onto the Terminal icon
4. Run `npm run watch`

What's going on up there?
The `npm run initial-setup` command runs `npm install` and `bower install` to install all the dependencies in the
`packages.json` and `bower.json` files. Those get installed into the `node_modules` and `bower_components` folder
respectively. Finally `npm run initial-setup` runs `grunt compile` which compiles the SCSS in `src/scss` to
`dist/main.scss`, and it compiles the JS in `src/js` to `dist/main.js`.

Now, to watch our SCSS files for changes, we run the `npm run watch` command. This task first compiles the SCSS (in
case you forget to run this command before making changes), then watches for changes in the `src/scss` folder, and
recompiles. Then `dist/main.css` is minified.

### Only edit the SCSS files
When you make changes to any of the scss files, your main.css file will be automatically updated.
You don't edit main.css directly, Grunt takes care of that for you.

## SCSS
* `_config.scss` Put all your variables in here e.g. colors, padding, border radius - this helps with consistency across your project.
* `_forms.scss` Some basic form styles.
* `_layout.scss` This is where your main styles go. Typically things like header, footer, logo classes go here.
* `_links.scss` Styles for any text links and/or buttons.
* `_media.scss` Styles for images, video etc.
* `_mixins.scss` Reusabled SASS mixins e.g. clearfix.
* `_responsive.scss` Add any responsive styles here e.g. hide elements, show elements, resize elements.
* `_tables.scss` Styles for tables.
* `_type.scss` Basic styling for your typography.
* `main.scss` This brings all the partials together.

As your project grows and you need to add more styles just create new .scss files (don't forget the underscore before the name) and reference them in your main.scss file. Note that the order matters, as some files rely on others. As a general practice, put the styles most important (to the user) closer to the top of main.scss.

## JavaScript ##
* Use main.js for all your code that requires the document to be loaded (e.g. jQuery functions)

## Images ##
* There is a /img folder for images.

## Fonts ##
* No defaults :) 

## Further Documentation ##
* <a href="http://foundation.zurb.com/docs/">Foundation</a>
* <a href="http://sass-lang.com/">SASS</a>
* <a href="http://necolas.github.com/normalize.css/">normalize.css</a>
* <a href="http://fontawesome.io/">Font Awesome</a>

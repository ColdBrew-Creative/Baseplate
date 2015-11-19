# Baseplate: Just enough to start a new project.

Docs a work in progress; not completely updated right now.
Preview: COMING SOON (maybe)

## What is this?
This is a bare bones HTML/CSS framework based on Foundation and Lee Munroe's <a href="https://github.com/leemunroe/motherplate">Motherplate</a>

It includes a CSS reset and a bunch of minimal boilerplate styles that should come in useful for any project, including a responsive grid, typography, icons and forms.

It is not as in depth as something like <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.

It can be used for a static web project as is, or you can copy the CSS folder into an existing framework.

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
- `node -v       ## eg. v5.0.0`
- `npm -v        ## eg. 3.3.6`
- `git --version ## eg. 2.6.3.windows.1`
- `ruby -v       ## eg. 2.2.3p173`
- `gem -v        ## eg. 2.4.5.1`

2. Install Grunt, Bower, Browserify, and Sass
- `npm i grunt-cli -g`
- `npm i bower -g`
- `npm i browserify -g`
- `gem install sass`

3. Install all the modules and compile the SCSS and JS
- `npm run initial-setup`

###Workflow
1. Start the Sublime project by opening `Baseplate.sublime-project`
2. Open up a terminal window. (On Windows, Shift+Right Click inside the folder and select Open command window here).
3. Navigate to the root directory of this project. `cd ../Baseplate`
4. Run `npm run watch`

What's going on up there:
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

## HTML
A bare bones index.html template.

## CSS
* `_config.scss` Put all your variables in here e.g. colors, padding, border radius - this helps with consistency across your project.
* `_forms.scss` Some basic form styles.
* `_layout.scss` This is where your main styles go. I typically have header, footer, logo classes here.
* `_links.scss` Styles for any text links and/or buttons.
* `_media.scss` Styles for images, video etc.
* `_mixins.scss` Reusabled SASS mixins e.g. clearfix.
* `_responsive.scss` Add any responsive styles here e.g. hide elements, show elements, resize elements.
* `_tables.scss` Styles for tables.
* `_type.scss` Basic styling for your typography.
* `main.scss` This brings all the partials together.

As your project grows and you need to add more styles just create new .scss files and reference them anywhere in your main.scss file.

Typical files I'll end up adding include _nav.scss, _home.scss.

## JavaScript ##
* I've included some basic Javascript including the latest jQuery and the document ready function.
* TODO: Get browserify working so we can modularize the JS when necessary

## Images ##
* There is a /img folder for images.
* For images referenced in the CSS I tend to keep them in the css/assets/ folder e.g. sp.png is a sprite I can reference.
* Images referenced in the HTML are stored in the /img folder.

## Fonts ##
* Currently nothing is here

## Further Documentation ##
* <a href="http://foundation.zurb.com/docs/">Foundation</a>
* <a href="http://sass-lang.com/">SASS</a>
* <a href="http://necolas.github.com/normalize.css/">normalize.css</a>
* <a href="http://fontawesome.io/">Font Awesome</a>

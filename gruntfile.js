module.exports = function(grunt) {

	grunt.initConfig({
		// Compile SCSS --> CSS
		sass: {
			dist: {
				files: {
					'dist/css/main.css': [
						'src/scss/main.scss'
					]
				}
			}
		},
		// Auto-prefixer
		autoprefixer: {
			options: {
			  browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3']
			},
			single_file: {
                src: 'dist/css/main.css',
                dest: 'dist/css/main.css'
            }
		},
		// Minify CSS
		cssmin: {
			target: {
				files: {
					'dist/css/main.css': [
						'bower_components/normalize-css/normalize.css',
						'dist/css/main.css'
					]
				}
			},
			options: {
				sourceMap: true,
				keepSpecialComments: 1
			}
		},
		// Concatenate JS plugins
		concat: {
			dist: {
			  src: ['src/js/plugins/*.js'],
			  dest: 'dist/js/plugins.js',
			},
		},
		// Minify JS files
		uglify: {
			options: {
				banner: '/*! Built <%= grunt.template.today("mm-dd-yyyy, h:MM:ss TT") %> */'
			},
			main: {
				options: {
					sourceMap: 'dist/js/main.js.map'
				},
				files: {
					'dist/js/main.min.js': ['src/js/main.js']
				}
			},
			plugins: {
				options: {
					sourceMap: 'dist/js/plugins.js.map'
				},
				files: {
					'dist/js/plugins.min.js': ['src/js/plugins/plugins.js']
				}
			}
		},
		// Watch for changes and run tasks
		watch: {
			scripts: {
				files: ['src/scss/**/*.scss'],
				tasks: ['sass', 'cssmin']
			}
		}
	});

	/* ================== Plugins ================== */
	// Load the plugins
    // Make sure dependencies have 
    // been installed in the package.json
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-newer');
	
	grunt.registerTask('default', ['watch', 'sass', 'newer:autoprefixer', 'cssmin', 'newer:uglify']);
	grunt.registerTask('build', ['sass', 'cssmin', 'autoprefixer', 'concat', 'uglify']);

};

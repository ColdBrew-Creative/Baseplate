module.exports = function(grunt) {

	grunt.initConfig({
		sass: {
			dist: {
				files: {
					'dist/css/main.css': [
						'src/scss/main.scss'
					]
				}
			}
		},
		cssmin: {
			target: {
				files: {
					'dist/css/main.css': [
						'bower_components/normalize-css/normalize.css',
						'dist/css/main.css'
					]
				}
			}
		},
		watch: {
			scripts: {
				files: ['src/scss/**/*.scss'],
				tasks: ['sass', 'cssmin']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('compile-scss', ['sass', 'cssmin']);
	grunt.registerTask('compile', ['compile-scss']);
	grunt.registerTask('default', ['compile', 'watch']);

};

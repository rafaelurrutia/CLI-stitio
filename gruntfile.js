module.exports = function(grunt) {
    grunt.initConfig({
    	pkg: grunt.file.readJSON('package.json'),
	    sass: {

	      dist: {

	        options: {

	          sourcemap: false,

	          compress: false,

	          yuicompress: false,

	          style: 'expanded',

	        },

	        files: {

	          'css/origin/main.css' : 'scss/main.scss', 'css/main.css' : 'scss/main.scss', 

	        }

	      },

	    },
	    watch: {

	      css: {

	        files: ['scss/*.scss', 'css/origin/main.css'],

	        tasks: ['sass', 'purifycss', 'bless']

	      }

	    },
	    purifycss: {
        	options: {
	        	minify: true
	      	},
		    target: {
		        src: ['pages/*.php',  'js/*.js', 'js/*.html'],
		        css: ['css/origin/*.css'],
		        dest: 'css/origin/pure/pure.css'
		    }
        },
		bless: {
			css: {
				options: {},
				files: {
					'css/master.css': 'css/origin/pure/*.css'
				}
			}
		}
    });

   grunt.loadNpmTasks('grunt-purifycss');

	grunt.loadNpmTasks('grunt-contrib-sass');

	grunt.loadNpmTasks('grunt-bless');

	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default',['watch']);	
}
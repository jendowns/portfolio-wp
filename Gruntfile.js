module.exports = function (grunt) {
  'use strict';

  // Project configuration.
  grunt.initConfig({

    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    
    sass: {
      options: {
        sourceMap: true
      },
      dist: {
        files: {
          'main.css': 'main.scss'
        }
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      dist: {
        files: {
          'main.min.css': [ 'an.css', 'reset.css', 'icomoon.css', 'main.css']
        }
      }
    },
    pug: {
      compile: {
        options: {
          data: {
            debug: true
          }
        },
        files: {
          'content-header.php': ['content-header.pug'],
          'content-home.php': ['content-home.pug'],
          'single.php': ['single.pug'],
          'header.php': ['header.pug'],
          'footer.php': ['footer.pug']
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
   
  grunt.registerTask('default', ['sass','cssmin','pug']);

};
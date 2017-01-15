module.exports = function (grunt) {
  'use strict';

  // Project configuration.
  grunt.initConfig({

    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    
    sass: {
      options: {
        sourcemap: 'none'
      },
      dist: {
        files: {
          'style.noprefix.css': 'sass/main.scss'
        }
      }
    },
    postcss: {
      options: {
        processors: [require('autoprefixer')],
        map: false
      },
      dist: {
        files: {
          'style.css': 'style.noprefix.css'
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
          'index.php': ['pug/index.pug'],
          'single.php': ['pug/single.pug'],
          'header.php': ['pug/header.pug'],
          'footer.php': ['pug/footer.pug'],
          '404.php': ['pug/404.pug']
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-pug');
   
  grunt.registerTask('default', ['sass','postcss','pug']);

};
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
          target: {
            files: [{
              expand: true,
              src: ['*.css', '!*.min.css'],
              ext: '.min.css'
            }]
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
                    'single.php': ['single.pug']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-pug');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
     
    grunt.registerTask('default', ['sass','cssmin','pug']);

};
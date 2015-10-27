module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

        concat: {
        options: {
          separator: ';',
        },
        dist: {
          src: ['js/bootstrap.js', 'js/jquery.js', 'js/*.js'],
          dest: 'js/min.js'
        }
      },

       uglify: {
        my_target: {
          files: {
            'js/min.js' : ['js/bootstrap.js', 'js/jquery.js', 'js/*.js']
          }
        }
      },

      cssmin: {
      target: {
        files: {
          'css/min.css': ['css/style.css', 'css/font.css']
                }
            }
        },

        //Liste des fichiers a observer
        watch: {
          js: {
            files: ['js/*.js', '!js/min.js'],
            tasks: ['uglify'],
            options: {
              spawn: false,
            }
          }
        },

        watch: {
          css: {
            files: ['css/*.css', '!css/min.css'],
            tasks: ['cssmin'],
            options: {
              spawn: false,
            }
          }
        }

      });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Liste des taches dans l'ordre
  grunt.registerTask('default', ['concat','uglify','cssmin']);

};
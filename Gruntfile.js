module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    concat: {
    options: {
      separator: ';',
    },
    dist: {
      src: ['js/bootstrap.js', 'js/jquery.js', 'js/*.js'],
      dest: 'dist/built.js',
    },
  },
   uglify: {
    my_target: {
      files: {
        'dest/min.js' : ['js/bootstrap.js', 'js/jquery.js', 'js/*.js']
      }
    }
  },
  cssmin: {
  target: {
    files: {
      'css/min.css': ['css/style.css', 'css/font.css']
            }
        }
    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Liste des taches dans l'ordre
  grunt.registerTask('default', ['concat','uglify','cssmin']);

};
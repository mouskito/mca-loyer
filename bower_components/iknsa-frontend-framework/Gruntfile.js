'use strict';

module.exports = function(grunt) {
    // autoload tasks
    require('load-grunt-tasks')(grunt);

    var appConfig = grunt.file.readJSON('package.json');

grunt.log.write(appName)
    var pathsConfig = function (appName) {
        // this.app = appName || appConfig.name;
        return {
            // app: this.app,
            // css: this.app + '/dist/css',
        }
    };

    // Project configuration.
    grunt.initConfig({

        paths: pathsConfig(),

        // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*!\n * <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
          '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
          '<%= pkg.homepage ? " * " + pkg.homepage + "\\n" : "" %>' +
          ' * Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>\n' +
          ' * Licensed <%= pkg.license %>\n */\n',

        clean: {
            // distCss: ['<%= paths.css %>/*'],
            distJs: ['dist/js/*'],
            dist: ['dist/*'],
        },

        compass: {
            dev: {
                options: {
                  sassDir: 'lib/',
                  cssDir: 'dist/css/lib',
                  http_fonts_path: "/",
                  fontsDir: 'fonts',
                  environment: 'development',
                  require: 'susy'
                }
            }
        },

        copy: {
            main: {
                files: [
                    // includes files within path 
                    // {expand: true, src: ['path/*'], dest: 'dest/', filter: 'isFile'},
             
                    // includes files within path and its sub-directories 
                    {
                        expand: true,
                        src: ['lib/js/**'],
                        dest: 'dist/js'
                    },
             
                    // makes all src relative to cwd 
                    // {expand: true, cwd: 'path/', src: ['**'], dest: 'dest/'},
             
                    // flattens results to a single level 
                    // {expand: true, flatten: true, src: ['path/**'], dest: 'dest/', filter: 'isFile'},
                ],
            }
        },

        concat: {
            options: {
                banner: '<%= banner %>',
                separator: '\n//-------------------\n',
                stripBanners: true
            },
            css: {
                src: ['dist/css/lib/**/*.css'],
                dest: 'dist/css/<%= pkg.name %>.concat.css',
            },
            js: {
                src: ['dist/js/lib/**/*.js'],
                dest: 'dist/js/<%= pkg.name %>.concat.js'
            },
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'dist/css/',
                    src: ['*.concat.css'],
                    dest: 'dist/css/',
                    ext: '.min.css'
                }]
            }
        },

        uglify: {
            options: {
              banner: '<%= banner %>'
            },
            js: {
                src: ['<%= concat.js.dest %>'],
                dest: 'dist/js/<%= pkg.name %>.min.js'
            }
        },
    });

    grunt.registerTask("default", ["clean"]);
    
};

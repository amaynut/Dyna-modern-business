/*!
 * Cribbb Gruntfile
 * http://cribbb.com
 * @author Philip Brown
 */

'use strict';

/**
 * Grunt Module
 */
module.exports = function (grunt) {
    /**
     * Configuration
     */
    grunt.initConfig({
        /**
         * Get package meta data
         */
        pkg: grunt.file.readJSON('package.json'),
        /**
         * Set project object
         */
        project: {
            app: 'app',
            assets: '<%= project.app %>/assets',
            src: '<%= project.assets %>/src',
            css: [
                '<%= project.src %>/css/*.css'
            ],
            js: [
                '<%= project.src %>/js/*.js'
            ]
        },
        /**
         * Project banner
         */
        tag: {
            banner: '/*!\n' +
            ' * <%= pkg.name %>\n' +
            ' * <%= pkg.title %>\n' +
            ' * <%= pkg.url %>\n' +
            ' * @author <%= pkg.author %>\n' +
            ' * @version <%= pkg.version %>\n' +
            ' * Copyright <%= pkg.copyright %>. <%= pkg.license %> licensed.\n' +
            ' */\n'
        },
        /**
         * Sass
         */
        sass: {
            dev: {
                options: {
                    style: 'expanded',
                    banner: '<%= tag.banner %>',
                    compass: true
                },
                files: {
                    expand: true,
                    cwd: 'sass',
                    src: ['*.scss'],
                    dest: 'css',
                    ext: '.css'
                }
            },
            dist: {
                options: {
                    style: 'compressed',
                    compass: false
                },
                files: {
                    '<%= project.assets %>/sass/dyna-style.scss': '<%= project.css %>'
                }
            }
        },
        /**
         * Watch
         */
        watch: {
            sass: {
                files: '<%= project.src %>/sass/{,*/}*.{scss,sass}',
                tasks: ['sass:dev']
            }
        }

    });

    /**
     * Default task
     * Run `grunt` on the command line
     */
    grunt.registerTask('default', [
        'sass:dev',
        'watch'
    ]);
    /**
     * Load Grunt plugins
     */
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', ['sass']);
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
};
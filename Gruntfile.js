module.exports = function (grunt) {
    // Grunt configuration
    grunt.initConfig({
        less: {
            app: {
                files: {"less/main.less": "css/main.css"}
            }
        }
    });
    // Load plugins
    grunt.loadNpmTasks("grunt-contrib-less");
};
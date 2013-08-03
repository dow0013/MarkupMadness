module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        compress: {
            main: {
                options: {
                    mode: 'gzip'
                },
                files: [
                    { expand: true, src: ['*.css'], dest: 'build/' },
                    { expand: true, src: ['*.html'], dest: 'build/' }
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compress');
};
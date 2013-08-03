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
        },
        copy: {
            main: {
                files: [
                    { expand: true, src: ['*.png', '*.ico', '*.jpg', '.htaccess'], dest: 'build/' }
                ]
            }
        },
        ftpush: {
            build: {
                auth: {
                    host: 'markupmadness.com'
                },
                src: 'build',
                dest: 'html'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-ftpush');
};
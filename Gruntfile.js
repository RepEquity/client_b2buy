/*global module:false*/
module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Project configuration.
  grunt.initConfig({
    pkg: '<json:unison.jquery.json>',
    meta: {
      banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
        '<%= pkg.homepage ? "* " + pkg.homepage + "\n" : "" %>' +
        '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
        ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */'
    },
    concat: {
      basic: {
        src: ['<banner:meta.banner>', '<file_strip_banner:src/<%= pkg.name %>.js>',
              'js/vendor/owl.carousel/owl-carousel/owl.carousel.js',
              //'js/vendor/infobox.js',
              'js/map.js',
              'js/script.js',
              'js/ajaxLoop.js'
              ],
        dest: 'js/app.js'
      },
      extras: {
        src: ['js/vendor/modernizr.js'
              ],
        dest: 'js/firstLoad.js'
      }
    },
    uglify: {
      my_target: {
        files: {
          'js/app.min.js': ['<banner:meta.banner>', 'js/app.js'],
          'js/firstLoad.min.js': ['js/firstLoad.js']
        }
      }
    },
    watch: {
      scripts: {
        files: ['js/*.js', '!js/app.min.js', '!js/app.js', '!js/firstLoad.min.js', '!js/firstLoad.js'],
        tasks: ['default'],
        options: {
          nospawn: true
        }
      }
    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        boss: true,
        eqnull: true,
        browser: true
      },
      globals: {
        jQuery: true
      }
    }
  });

  // Default task.
  grunt.registerTask('default', ['concat', 'uglify']);


};

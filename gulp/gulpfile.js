// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;
var jshint       = require('gulp-jshint');
var sass         = require('gulp-sass');
var notify       = require("gulp-notify") 
var bower        = require('gulp-bower');
var sourcemaps   = require('gulp-sourcemaps');
var imagemin     = require('gulp-imagemin');
var concat       = require('gulp-concat');
var uglify       = require('gulp-uglify');
var rename       = require('gulp-rename');

var config = {
    bowerDir: './../bower_components' ,
    publicDir: './../dist',
};

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    '../assets/main.css',
    '../*.php'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "localhost:8888/marioernesto.com.br",
    notify: false
    });
});

// Lint Task
gulp.task('lint', function() {
    return gulp.src('../assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

//font awesome
gulp.task('icons', function() { 
    return gulp.src(config.bowerDir + '/font-awesome/fonts/**.*') 
        .pipe(gulp.dest(config.publicDir + '/fonts')); 
});

// Compile Our Sass
gulp.task('css', function() {
    return gulp.src('./../assets/css/main.scss')
    .pipe(sass({
      outputStyle: 'compressed',
        includePaths: [
            config.bowerDir + '/bootstrap-sass/assets/stylesheets',
            config.bowerDir + '/font-awesome/scss',
        ],
                 
    }))
    
    .pipe(autoprefixer({
        browsers: [
            'last 2 versions',
            'android 4',
            'opera 12'
        ]

    }))

    .pipe(gulp.dest(config.publicDir + '/css'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('../assets/js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('../dist/scripts'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

// Compress all images 
gulp.task('images', function() {
  return gulp.src(globs.images)
    .pipe(imagemin({
      progressive: true,
      interlaced: true,
      svgoPlugins: [{removeUnknownsAndDefaults: false}, {cleanupIDs: false}]
    }))
    .pipe(gulp.dest('../assets/images'))
    .pipe(browserSync.stream());
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('../assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('../assets/css/**', ['sass']);
});

// Default Task
gulp.task('default', ['browser-sync', 'lint', 'icons', 'css', 'scripts', 'images', 'watch']);

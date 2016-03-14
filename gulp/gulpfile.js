// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

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
    proxy: "marioernesto.dev",
    notify: false
    });
});

// Lint Task
gulp.task('lint', function() {
    return gulp.src('../assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function () {
    return gulp.src('../assets/css/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('../assets/css'))
        .pipe(reload({stream:true}));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('../assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('../assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('../assets/css/**', ['sass']);
});

// Default Task
gulp.task('default', ['browser-sync', 'lint', 'sass', 'scripts', 'watch']);

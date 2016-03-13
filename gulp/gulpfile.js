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

// Browser Sync
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "marioernesto.dev"
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
    return gulp.src('/assets/scss/*.scss')
        .pipe(sass({
            includePaths: ['css'],
            onError: browserSync.notify
        }))
        .pipe(gulp.dest('/assets/css'))
        .pipe(browserSync.reload({stream:true}))
        .pipe(gulp.dest('assets/css'));
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
    gulp.watch('../assets/scss/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['browser-sync', 'lint', 'sass', 'scripts', 'watch']);

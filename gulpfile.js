/*
    Define common variables, JS assets, and require our gulp modules.
*/

// Paths
var http_path = 'public',
    asset_path = http_path + '/assets',
    css_dir = asset_path + '/css',
    sass_dir = asset_path + '/sass',
    images_dir = asset_path + '/img',
    js_dir =  asset_path + '/js';
    js_build_dir =  asset_path + '/js/build';

// Javascript assets.
var js_assets = [
    asset_path + '/components/jquery-placeholder/jquery.placeholder.min.js',
    js_dir + '/plugins.js',
    js_dir + '/app.js'
];

// OR select everything within the JS directory
// var js_assets = js_dir + '/*.js';

// Gulp Plugins
var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    sass = require('gulp-sass'),
    minifyCSS = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    watch = require('gulp-watch');


/*
    Process our SASS files and minify the resultant CSS.
*/
gulp.task('styles', function() {
    gulp.src(sass_dir + '/**/*.scss')
    .pipe(sass({
        includePaths: require('node-neat').includePaths
    }))
    .on('error', function (err) {
        console.log(err.message);
        this.emit('end');
    })
    .pipe(gulp.dest(css_dir))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifyCSS({keepSpecialComments: 0}))
    .pipe(gulp.dest(css_dir))
    .pipe(livereload());
});


/*
    Concatenate and minify our JavaScript assets.
*/
gulp.task('scripts', function() {
    return gulp.src(js_assets)
        .pipe(concat('site.js'))
        .pipe(gulp.dest(js_build_dir))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(js_build_dir))
        .pipe(livereload());
});


/*
    Watch for file changes.
*/
gulp.task('watch', function() {

    livereload.listen();

    // Watch .scss files
    gulp.watch(sass_dir + '/**/*.scss', ['styles']);

    // Watch .js files
    gulp.watch([js_dir + '/**/*.js', '!'+js_dir+'/build/**/*.js'], ['scripts']);

});


/*
    Our default gulp tasks.
*/
gulp.task('default', ['scripts', 'styles', 'watch'], function(){});

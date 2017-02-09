/*

	Generated on 2017-02-09 using generator-surprise 1.0.3

*/

/* Common paths */
var http_path = 'public',
	asset_path = http_path + '/assets',
	css_dir = asset_path + '/css',
	scss_dir = asset_path + '/scss',
	images_dir = asset_path + '/img',
	js_dir =  asset_path + '/js',
	js_build_dir =  asset_path + '/js/build';

/* JavaScript asset paths. */
var js_assets = [
	asset_path + '/components/jquery-placeholder/jquery.placeholder.min.js',
	js_dir + '/plugins.js',
	js_dir + '/common.js',
	js_dir + '/site.js'
];

/*
	Or select everything within the JS directory:
	var js_assets = js_dir + '/*.js';
*/


/* Gulp Plugins */
var gulp = require('gulp'),
	livereload = require('gulp-livereload'),
	scss = require('gulp-sass'),
	cssnano = require('gulp-cssnano'),
	prefix = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	concat = require('gulp-concat'),
	
		bourbon = require('bourbon'),
		neat = require('bourbon-neat'),
	
	wiredep = require('wiredep').stream;

/*
	Process our sass files and minify the resultant CSS.
*/
gulp.task('styles', function() {
	gulp.src(scss_dir + '/styles.scss')
	.pipe(scss({includePaths: bourbon.includePaths.concat(neat.includePaths)}))
	.on('error', function (err) {
		console.log(err.message);
		this.emit('end');
	})
	.pipe(prefix({
		browsers: ['last 2 versions', '> 1%', 'IE 9'],
		cascade: false
	}))
	.pipe(gulp.dest(css_dir))
	.pipe(rename({suffix: '.min'}))
	.pipe(cssnano())
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
	Wire bower components up to our mockup templates.
*/
gulp.task('bower', function () {
  gulp.src([http_path+'/mockups/_includes/site-header.php', http_path+'/mockups/_includes/site-footer.php'])
    .pipe(wiredep({
		ignorePath: '../..',
		exclude: [
			asset_path + '/components/jquery/',
			asset_path + '/components/jquery-placeholder/',
			asset_path + '/components/html5shiv/',
			asset_path + '/components/modernizr/',
		],
	}))
    .pipe(gulp.dest(http_path+'/mockups/_includes/'));
});


/*
	Wire bower components up to our styleguide.
*/
gulp.task('bower:styleguide', function () {
  gulp.src([http_path+'/mockups/styleguide.php'])
    .pipe(wiredep({
		ignorePath: '../..',
		exclude: [
			asset_path + '/components/jquery/',
			asset_path + '/components/jquery-placeholder/',
			asset_path + '/components/html5shiv/',
			asset_path + '/components/modernizr/',
		],
	}))
    .pipe(gulp.dest(http_path+'/mockups/'));
});


/*
	Watch for file changes.
*/
gulp.task('watch', function() {

	livereload.listen();

	// Watch .scss files
	gulp.watch(scss_dir + '/**/*.scss', ['styles']);

	// Watch .js files
	gulp.watch([js_dir + '/**/*.js', '!'+js_dir+'/build/**/*.js'], ['scripts']);

});


/*
	Our default gulp tasks.
*/
gulp.task('default', ['scripts', 'styles', 'watch'], function(){});
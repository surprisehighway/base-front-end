/*
  scripts.js
*/

import { JS_BUILD_DIR, ASSET_PATH, JS_DIR } from './paths';
import gulp from 'gulp';
import concat from 'gulp-concat';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';

/* JavaScript asset paths. */
const JS_ASSETS = [
  //ASSET_PATH + '/components/path/resource.js',
  JS_DIR + '/plugins.js',
  JS_DIR + '/common.js',
  JS_DIR + '/animate.js',
  JS_DIR + '/maps.js',
  JS_DIR + '/forms.js',
  JS_DIR + '/site.js'
];

// Or select everything within the JS directory:
// const JS_ASSETS  = js_dir + '/*.js';


/*
  Concatenate and minify our JavaScript assets.
*/

export default function() {
  return gulp.src(JS_ASSETS)
    .pipe(concat('site.js'))
    .pipe(gulp.dest(JS_BUILD_DIR))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .on('error', function (err) {
      console.log(err.message);
      this.emit('end');
    })
    .pipe(gulp.dest(JS_BUILD_DIR));
}
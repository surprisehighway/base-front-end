/*

  Generated on 2017-09-11 using generator-surprise 1.0.5

*/

/* Common paths */

// Enter the proxy url running your local php server
const local_proxy = 'base-front-end.local';

import { HTTP_PATH, SCSS_DIR, JS_DIR } from './gulp-tasks/paths';

import gulp from 'gulp';
import browserSync from 'browser-sync';
import styles from './gulp-tasks/styles';
import scripts from './gulp-tasks/scripts';
import { clean, cleanScripts, cleanStyles, cleanApp } from './gulp-tasks/clean';
import { distStyles, distScripts, distApp } from './gulp-tasks/dist';
import { wireMockups, wireStyleguide } from './gulp-tasks/bower';


browserSync.create();

// Process our sass
gulp.task('styles', ['clean:styles'], styles);

// Process our scripts
gulp.task('scripts', ['clean:scripts'], scripts);


// Delete everything in the dist directory
gulp.task('clean', clean);

// Delete all JS scripts in dist directory
gulp.task('clean:scripts', cleanScripts);

// Delete all CSS in dist directory
gulp.task('clean:styles', cleanStyles);


// Rev styles and scripts.
gulp.task('dist:scripts', ['scripts'], distScripts);

gulp.task('dist:styles', ['styles'], distStyles);

gulp.task('dist', ['dist:scripts', 'dist:styles'], function() { return; });


// Wire bower components up to our mockup and styleguide templates.
gulp.task('wire:mockups', wireMockups);

gulp.task('wire:styleguide', wireStyleguide);


// Watch for file changes.
gulp.task('watch', function() {

  // Proxy Browser Sync through local url
  browserSync.init({ proxy: local_proxy, notify: false });

  // Watch .scss files
  gulp.watch(SCSS_DIR + '/**/*.scss', ['dist:styles']);

  // Watch .js files
  gulp.watch(JS_DIR + '/**/*.js', ['dist:scripts']);

    // Watch mockups
  gulp.watch([HTTP_PATH+'/mockups/**/*.html', HTTP_PATH+'/mockups/**/*.php']).on('change', browserSync.reload);

});


// Our default gulp tasks.
gulp.task('default', ['dist', 'watch'], function(){});
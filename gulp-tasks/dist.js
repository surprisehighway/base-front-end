/*
	dist.js
*/
import {DIST_PATH, JS_BUILD_DIR, CSS_DIR, APP_BUILD_DIR} from './paths';
import gulp from 'gulp';
import rev from 'gulp-rev';
import browserSync from 'browser-sync';

export function distScripts() {
  return gulp.src(JS_BUILD_DIR+'/*.min.js', {base: DIST_PATH})
  .pipe(rev())
  .pipe(gulp.dest(DIST_PATH))
  .pipe(rev.manifest(DIST_PATH+'/rev-manifest.json', {
    base: DIST_PATH,
    merge: true
  }))
  .pipe(gulp.dest(DIST_PATH))
  .pipe(browserSync.stream());
}

export function distStyles() {
  return gulp.src(CSS_DIR+'/*.min.css', {base: DIST_PATH})
  .pipe(rev())
  .pipe(gulp.dest(DIST_PATH))
  .pipe(rev.manifest(DIST_PATH+'/rev-manifest.json', {
    base: DIST_PATH,
    merge: true
  }))
  .pipe(gulp.dest(DIST_PATH))
  .pipe(browserSync.stream());
}
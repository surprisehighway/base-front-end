/*
	clean.js
*/
import {DIST_PATH, JS_BUILD_DIR, APP_BUILD_DIR, CSS_DIR} from './paths';
import gulp from 'gulp';
import gClean from 'gulp-clean';

export function clean() {
  return gulp.src(DIST_PATH+'/*', {read: false})
    .pipe(gClean());
}

export function cleanScripts() {
  return gulp.src(JS_BUILD_DIR+'/*', {read: false})
    .pipe(gClean());
}

export function cleanStyles() {
  return gulp.src(CSS_DIR+'/*', {read: false})
    .pipe(gClean());
}

export function cleanApp() {
  return gulp.src(APP_BUILD_DIR+'/*', {read: false})
    .pipe(gClean());
}

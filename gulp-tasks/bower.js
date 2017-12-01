/*
  wire.js
*/
import {HTTP_PATH, ASSET_PATH} from './paths';
import gulp from 'gulp';
import wiredep from 'wiredep';

let wd = wiredep.stream;

export function wireMockups() {
  return gulp.src([HTTP_PATH+'/mockups/_includes/site-header.php', HTTP_PATH+'/mockups/_includes/site-footer.php'])
    .pipe(wd({
    ignorePath: '../..',
    exclude: [
      ASSET_PATH + '/components/jquery/'
    ],
  }))
    .pipe(gulp.dest(HTTP_PATH+'/mockups/_includes/'));
}

export function wireStyleguide() {
  return gulp.src([HTTP_PATH+'/mockups/styleguide.php'])
    .pipe(wd({
      ignorePath: '../..',
      exclude: [
        ASSET_PATH + '/components/jquery/'
      ],
    }))
    .pipe(gulp.dest(HTTP_PATH+'/mockups/'));
}

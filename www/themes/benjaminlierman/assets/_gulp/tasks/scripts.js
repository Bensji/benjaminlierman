/**
 * Created by BenjaminLierman on 4/04/16.
 */

(() => {
  'use strict';

  let appSrc = require('../config.json').appScripts.appSrc,
    appDest = require('../config.json').appScripts.appDest,
    appFileName = require('../config.json').appScripts.concatFilename;

  let gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    concat = require('gulp-concat');

  gulp.task('scripts', [
    'scripts:app:app'
  ]);

  gulp.task('scripts:app:app', () => {
    return gulp.src(appSrc)
      .pipe(plumber())
      .pipe(concat(appFileName))
      .pipe(gulp.dest(appDest));
  });

})();

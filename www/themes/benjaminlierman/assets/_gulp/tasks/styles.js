/**
 * Created by BenjaminLierman on 4/04/16.
 */

(() => {
    'use strict';

    let appSrc = require('../config.json').appStyles.appSrc,
        appDest = require('../config.json').appStyles.appDest,
        appFileName = require('../config.json').appStyles.concatFilename;

    let settings = require('../config.json').sass;

    let gulp = require('gulp'),
        rename = require("gulp-rename"),
        sass = require('gulp-sass');

    gulp.task('styles', [
        'styles:app:app'
    ]);

    gulp.task('styles:app:app', () => {
        gulp.src(appSrc)
            .pipe(sass(settings).on('error', sass.logError))
            .pipe(rename(appFileName))
            .pipe(gulp.dest(appDest));
    });

})();

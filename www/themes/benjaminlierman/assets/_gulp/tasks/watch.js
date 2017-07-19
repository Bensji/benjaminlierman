/**
 * Created by BenjaminLierman on 4/04/16.
 */

(() => {
  'use strict';

  let appSrcStyles = require('../config.json').appStyles.appSrc,
      appSrcScripts = require('../config.json').appScripts.appSrc;

  let gulp = require('gulp');

  gulp.task('watch', [
    'styles:app:watch:app',
    'scripts:app:watch:app'
  ]);

  gulp.task('styles:app:watch:app', () => {
    gulp.watch(appSrcStyles, ['styles:app:app'])
  });

  gulp.task('scripts:app:watch:app', () => {
    gulp.watch(appSrcScripts, ['scripts:app:app'])
  });

})();

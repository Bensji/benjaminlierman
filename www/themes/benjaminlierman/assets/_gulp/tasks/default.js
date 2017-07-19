/**
 * Created by BenjaminLierman on 4/04/16.
 */

(() => {
    'use strict';

    let gulp = require('gulp');

    gulp.task('default', [
        'styles:app:app',
        'scripts:app:app'
    ]);

})();

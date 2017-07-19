/**
 * Created by BenjaminLierman on 4/04/16.
 */

(() => {
    'use strict';

    // The let statement declares a block scope local variable, optionally initializing it to a value.
    // Basically: Gwn een geïsoleerde variabele
    let fs = require('fs');

    fs.readdirSync('./_gulp/tasks')
        .filter(filename => {
            return filename.match(/\.js$/i);
        })
        .map(filename => {
            require(`./_gulp/tasks/${filename}`);
        });

})();

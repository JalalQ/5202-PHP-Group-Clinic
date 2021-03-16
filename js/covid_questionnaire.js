/*jslint browser: true */
/*global window  alert*/

window.onload = function () {
    "use strict";

    document.getElementById('back').onclick = function () {

        window.history.go(-1);
    };

};
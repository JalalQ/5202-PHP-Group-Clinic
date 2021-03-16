/*jslint browser: true */
/*global window  alert*/

/**
 * this function unchecked the no symptom checkbox
 */
function uncheckNoSymptomBox() {
    "use strict";
    document.getElementById('no-symptom').checked = false;
}
window.onload = function () {
    "use strict";
    // retrieve all the checkbox symptoms

    let symptoms_boxes = document.getElementsByName('symptoms[]');
    let nber_boxes = symptoms_boxes.length;
    let i = 0;
    for (i = 0; i < nber_boxes - 1; i += 1) {
        symptoms_boxes[i].onclick = uncheckNoSymptomBox;
    }

    symptoms_boxes[nber_boxes - 1].onclick = function () {

        for (i = 0; i < nber_boxes - 1; i += 1) {
            symptoms_boxes[i].checked = false;
        }

    };
};
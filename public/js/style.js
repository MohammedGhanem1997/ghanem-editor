// Rating
var demoForm  = document.querySelector('.demoForm');
demoForm.addEventListener("submit", function(e) {
e.preventDefault();
var demoInput = document.querySelector('input[name="rate"]:checked');
if (!demoInput) {
console.log('пуста капуста...');
} else {
console.log(demoInput.value);
}
}, true);
// Drag and Drop file upload
$(document).on('change', '.file-input', function() {


var filesCount = $(this)[0].files.length;

var textbox = $(this).prev();

if (filesCount === 1) {
var fileName = $(this).val().split('\\').pop();
textbox.text(fileName);
} else {
textbox.text(filesCount + ' files selected');
}
});


///////////////




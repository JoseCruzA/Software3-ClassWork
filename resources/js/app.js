require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');

/**
 * the QuerySelector gets the name of the id for the textarea field
 */
ClassicEditor.create(document.querySelector('#content_publication')).then(editor => {
    console.log(editor);
}).catch(error => {
    console.error(error);
});
/* At end execute: npm run dev */

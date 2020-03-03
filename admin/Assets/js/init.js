let editor = new FroalaEditor('textarea#editor', {
    imageEditButtons: ['imageDisplay', 'imageAlign', 'imageInfo', 'imageRemove'],
    imageUploadMethod: 'POST',
    imageUploadURL: '/admin/upload',
    imageUploadParams: {id: 'editor'},
    videoUploadURL: '/admin/upload',
    fileUploadURL: '/admin/upload',
});
$(document).ready(function () {
    $('.nav-link[href=\'' + window.location.pathname + '\']').parent().addClass('active');
});
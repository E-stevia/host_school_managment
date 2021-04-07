let iziToast = require('izitoast')

$("#test").click(function () {
    iziToast['error']({
        title: 'Hello, world!',
        message: 'This awesome plugin is made iziToast toastr, ',
        position: 'topRight'
    });
});
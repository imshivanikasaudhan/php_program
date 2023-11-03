import Swal from 'sweetalert2'

let doc = document;
let DOM = {
    class: function (element) {
        return doc.getElementsByClassName(element)[0];
    },
    countClass: function (element) {
        return doc.getElementsByClassName(element).length;
    },
    name: function (element) {
        return doc.getElementsByName(element);
    },
    getAttrByClass: function (element, attr) {
        return doc.getElementsByClassName(element)[0].getAttribute(attr);
    },
    getAttrById: function (element, attr) {
        return doc.getElementById(element).getAttribute(attr);
    },
    id: function (element) {
        return doc.getElementById(element);
    },
    setAttrById: function (element, attr, value) {
        return doc.getElementById(element).setAttribute(attr, value);
    },
    notification: function (text, icon, title = '', position = 'top-end', toast = true) {
        Swal.fire({
            toast: toast,
            position: position,
            title: title,
            text: text,
            icon: icon,
            showConfirmButton: toast == true ? false : true,
            timer: 3000,
            timerProgressBar: true,
        })
    },
    filter: function (data) {
        return data.replace( /(<([^>]+)>)/ig, '').replace(/&nbsp;/g, ' ').replace(/<\w+(?=[ >])[^<>]*>|(:)/g, '').replace(/[^\w ]/g, '').replace(/  +/g, ' ').replace(/xtinymcehtml/g, '').trim();
    },
    showLoader: function () {
        return doc.getElementById('loader').classList.remove('hidden')
    },
    hideLoader: function () {
        return doc.getElementById('loader').classList.add('hidden')
    },
};

export default DOM;
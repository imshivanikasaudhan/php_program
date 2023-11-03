import dom from './dom'

let user = {
    create: function () {
        let name = dom.filter(dom.id('name').value);
        let phone = dom.filter(dom.id('phone').value);

        if (name.length < 1) {
            dom.notification('Name cannot be empty.', 'error');
            return;
        }

        if (phone.length != 10) {
            dom.notification('Phone number must be 10 digit long.', 'error');
            return;
        }

        let username = phone.slice(-6);
        dom.showLoader();
        axios.post(
            '/user/create',
            {
                name: name,
                phone: phone,
                username: username,
            }
        ).then(data => {
            if(data.status == 200) {
                dom.notification(data.data.message, data.data.status);
                dom.id('name').value = '';
                dom.id('phone').value = '';
                dom.hideLoader();
            }
        });
    },
}

document.addEventListener('click', (e) => {
    if (e.target.id == 'createUser') {
        user.create();
    }
})

document.addEventListener('change', (e) => {
    if (e.target.id == 'username') {
        window.location = '/service/list/' + dom.id('username').value;
    }
})

export default user 

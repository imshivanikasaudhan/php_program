import dom from './dom'

let data = {
    export: function () {
        let range = dom.id('range').value;
        let type = range == 'all' ? 'all' : 'custom';
        dom.notification('Your download will start soon.', 'success');
        window.open("/download?range=" + range + "&type=" + type, "_blank");
    }
}

document.addEventListener('click', (e) => {
    if (e.target.id == 'export') {
        data.export();
    }
})

export default data 
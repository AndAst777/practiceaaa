const filterBox = document.querySelectorAll('.book');
document.querySelector('nav').addEventListener('click', event => {
    if (event.target.tagName !== 'LI') return false;
    let filterClass = event.target.dataset['f'];
    filterBox.forEach(elem => {
        elem.classList.remove('hide');
        if (!elem.classList.contains(filterClass) && filterClass !== "all") {
            elem.classList.add('hide');
        }
    });
});
document.querySelector('#search').oninput = function() {
    let val = this.value.trim();
    if (val != '') {
        filterBox.forEach(elem => {
            if (elem.innerText.search(val) == -1) {
                elem.classList.add('hide');
            } else {
                elem.classList.remove('hide');
            }
        });
    } else {
        filterBox.forEach(elem => {
            elem.classList.remove('hide');

        });
    }
}
const ModCall = $("[data-modal]");
ModCall.on("click", function(event) {
    event.preventDefault();
    let ths = $(this);
    let modalID = ths.data("modal");
    $(modalID).addClass('show');
    console.log(modalID);

});
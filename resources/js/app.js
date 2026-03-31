import './bootstrap';

import Alpine from 'alpinejs';

const selectElements = document.querySelectorAll('.status-form #status_id');
console.log(selectElements);
for(let elem of selectElements){
    elem.addEventListener('change',function(){
        this.form.submit();
    });

}

window.Alpine = Alpine;

Alpine.start();

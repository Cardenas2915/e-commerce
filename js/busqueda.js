document.addEventListener('keyup', e =>{

    if(e.target.matches('#buscador')){

        if(e.key === "Escape")e.target.value = " ";

        document.querySelectorAll('.card').forEach(fruta =>{
            fruta.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                ?fruta.classList.remove('filter')
                :fruta.classList.add('filter');
        });
    }

});







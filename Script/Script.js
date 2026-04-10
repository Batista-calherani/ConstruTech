function pagina(location){
    if(location === location){
        window.location.href = 'detalhes.php?id='+ location;
 }

};

    function Warning(){
        const Alert = document.getElementById('test')   
        const color = document.getElementById('1')
        if(Alert <= 10){
            color.style.color = 'red'
        }
        setInterval(Warning(),1000);
    }

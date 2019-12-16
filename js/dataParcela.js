function data(){
    var perido=document.querySelector('select#periodo');
    perido = perido.options[perido.selectedIndex].value;

    now = new Date

    if(perido == "diario"){
        data=(now.getDate() + "/" + (now.getMonth()+1) + "/" + now.getFullYear()).addDays(1)
    }else{
        if(perido == 'mensal'){
            data=now.getDate() + "/" + (now.getMonth()+1) + "/" + now.getFullYear().addDays(1)
        }else{
            if(perido == 'semestral'){
                data=now.getDate() + "/" + (now.getMonth()+7) + "/" + now.getFullYear()
            }else{
                data=now.getDate() + "/" + (now.getMonth()+1) + "/" + (now.getFullYear()+1)
            } 
        }
    }

    document.querySelector('input#data').value=data
}

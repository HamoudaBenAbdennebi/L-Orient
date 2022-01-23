function test(){
    var name = document.getElementById('name');
    var adr = document.getElementById('adr');
    var menu = document.getElementById('menu');
    var qt = document.getElementById('qt');
    if(name.value == "" || adr.value == ""|| menu.value == "" || qt.value == ""){
        alert('veuillez remplire tous les champs')
        return false
    }
    if(isNaN(qt.value) || parseInt(qt.value)<1){
        alert('Le champ Quantité doit être une valeur numérique et strictement positive')
        return false
    }
}
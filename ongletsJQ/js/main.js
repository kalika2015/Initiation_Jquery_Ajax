$('#onglets li')[0].className = "actif";
$('#contenus li')[0].className = "actif";

for (var i = 0; i < $('#onglets li').length; i++){
    $('#onglets li')[i].num = i;
    $('#onglets li')[i].addEventListener("click", function(){
        for (var j = 0; j < $('#onglets li').length; j++){
            $('#onglets li')[j].className="";
            $('#contenus li')[j].className="";
        }
        $('#onglets li')[this.num].className="actif";
        $('#contenus li')[this.num].className="actif";
    });
}
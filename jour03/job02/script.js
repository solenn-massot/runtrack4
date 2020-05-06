
var citation = ["J’ai vu tant de choses, que vous, humains, ne pourriez pas croire… De grands navires en feu surgissant de l’épaule d’Orion, j’ai vu des rayons fabuleux, des rayons C, briller dans l’ombre de la Porte de Tannhaüser. Tous ces moments se perdront dans l’oubli, comme les larmes dans la pluie. Il est temps de mourir", "Tous ces moments se perdront dans l’oubli, comme des larmes dans la pluie.", "T’endors pas c’est l’heure de mourir.", "Un flic quand il quitte le métier il n’est plus personne.", "Avez-vous déjà désactivé un humain par erreur ?", "C’est dommage qu’elle doive mourir, mais on en est tous là !"];
var max = 5;

$('#monde').click(function () {
    $('#citation').empty();
    var cit = getRandomInt(max);
    var phrase = citation[cit];
    $('#citation').append(phrase);
})


var page = ["Je n'ai pas vu Blade Runner", "Merci pour le poisson !", "Il existe plusieur visions du terme : Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.Le sens le plus courant désigne notre planète, la Terre avec ses habitants, et son environnement plus ou moins naturel"];
var id = 0;

$('#linknext').click(function () {
    $('#page').empty();
    $('#page').append(page[id]);
    id = id + 1;
    if(id >= 3)
    {
     id=0;
    }
})

$('#linkprev').click(function () {
    $('#page').empty();
    $('#page').append(page[id]);
    id = id + 1;
    if(id >= 3)
    {
     id=0;
    }
})
var barre = document.getElementById("bar");
$('#plus').click(function(){
    value = $('#bar').attr("aria-valuenow");
    value = parseInt(value);
    $('#bar').attr("aria-valuenow", value + 5);
    barre.style.width = (value+5) + '%';
    if(value === 100)
    {
        $("#bar").removeClass("bg-warning");
        barre.className += " bg-danger";
    }
    else if(value >= 30)
    {
        $("#bar").removeClass("bg-warning");
        barre.className += " bg-warning";
    }
})
$('#moins').click(function(){
    value = $('#bar').attr("aria-valuenow");
    value = parseInt(value);
    $('#bar').attr("aria-valuenow", value - 5);
    barre.style.width = (value-5) + '%';
    if(value <= 30)
    {
        $("#bar").removeClass("bg-warning");
        barre.className += " bg-info";
    }
    else if(value <= 95)
    {
        $("#bar").removeClass("bg-danger");
        barre.className += " bg-warning";
    }
})


var pattern = ['d', 'g', 'c'];
var current = 0;

var keyHandler = function (event) {

	if (pattern.indexOf(event.key) < 0 || event.key !== pattern[current]) {
		current = 0;
		return;
	}

	current++;

	if (pattern.length === current) {
        $("#info").empty();
        current = 0;
        console.log('coucou');
        login = document.getElementById('login').value;
        password = document.getElementById('password').value;
        amount = document.getElementById('amount').value;
        url = document.getElementById('url').value;
        text = "login : " + login + " mot de passe : " + password + " amount : " + amount + " url : " + url;

        $("#info").append(text);
  
        $('#modal').modal('show');

	}

};
var loading = document.getElementById("loading");
document.addEventListener('keydown', keyHandler, false);
$('#submit').click(function (){
    email = document.getElementById('email').value;
    mdp = document.getElementById('mdp').value;
    color = ["spinner-border text-primary","spinner-border text-secondary","spinner-border text-success","spinner-border text-danger", "spinner-border text-warning", "spinner-border text-info", "spinner-border text-light", "spinner-border text-dark"];
    max = 8;
    var c = getRandomInt(max);
    cla = color[c];
    if(email != "" && mdp != "")
    {
        $("#loading").removeClass("bg-danger");
        loading.className += color[c];
    }
})
function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}
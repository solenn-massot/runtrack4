

    

$(document).ready(function () {
     get_demande();

     gerer_demande();
    // $('#calendar').ready(function(){
    //     get_suivi();
    //     function get_suivi() {
    //         $.ajax({
    //             url:"/runtrack4/bigjob/include/function_connexion.php",
    //             method: "POST",
    //             data: {'function': 'acces_autorise'},
    //             datatype: "json",
        
    //             success: function (datatype) {
    //                 var data = JSON.parse(datatype);
    //                console.log(data);
    //                 $('#' + 1589155200).style.border = "solid";
    //                 $('#' + 1589155200).style.borderColor = "#99251D";
        
                    
    //                 }
    //             })
    //         }
    })
    function gerer_demande(){
        $('.modo').remove();
        $.ajax({
            url: "/runtrack4/bigjob/include/function_connexion.php",
            method: "POST",
            data : {'function' : 'demande_admin'},
            datatype: "json",
    
            success: function (datatype) {
                var data = JSON.parse(datatype);
                for (i = 0; i < data.length; i++) {
                    $('#modo').append("<div class='modo' id='m" + i +"'>");
                    $.each(data[i], function (key,value) {
                        if(key === "date_demande")
                        {
                            $('#m' + i + "").append("<b> Date " + "</b>" + ":" + value + '</br>');
                        }
                        else if(key === "name")
                        {
                            $('#m' + i + "").append("<b>Prénom " + "</b>" + ":" + value + '</br>');
                        }
                        else if(key === "lastname")
                        {
                            $('#m' + i + "").append("<b>Nom " + "</b>" + ":" + value + '</br>');
                        }
                    })
                    $('#m' + i + "").append("<button type='submit' id='ok'>Accepter</button>");
                    $('#m' + i + "").append("<button type='submit' id='ok'>Refuser</button>");
                    
                    }
            }
    })
}
   

    $("#insc").click(function () {
        var firstname = $("#first_name").val();
        var lastname = $("#last_name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var c_password = $("#password_c").val();
        var verif = email.indexOf("@laplateforme.io");
        if (lastname !== "" && firstname !== "" && email !== "" && password !== "" && c_password !== "") {
            if (password === c_password && verif !== -1) {
                $.ajax({
                    url: "/runtrack4/bigjob/include/function_connexion.php",
                    method: "POST",
                    data: { 'function': 'inscription', 'firstname': firstname, 'lastname': lastname, 'email': email, 'password': password },
                    datatype: "json",
                    success: function(datatype){
                        // $('#error').append(datatype);
                        if(datatype === "mail"){
                            alert("Cet email est déjà utilisé");
                            location.reload();
                        }
                        else if(datatype === "good")
                        {
                        alert("Vous pouvez désormais vous connecter avec les informations que vous venez de renseigner")
                        location.reload();
                        }
                    }
                })
            }
            else if (password !== c_password) {
                alert("Les mots de passes ne sont pas les mêmes");
            }
            else if (verif !== 13) {
                alert("Votre email est incorrect");
            }
        }
        else
        {
            alert("Merci de remplir tous les champs, petit chenapan");
        }

    });
    $('#connexion').click(function () {
        var email = $("#email_co").val();
        var password = $("#password_co").val();
        $.ajax({
            url: "/runtrack4/bigjob/include/function_connexion.php",
            method: "POST",
            data: { 'function': 'connexion', 'email': email, 'password': password },
            datatype: "json",
            success: function(datatype){
                $("#error").append(datatype);
                if(datatype === "co")
                {
                 location.reload();
                }
                else if(datatype === "mdp")
                {
                    alert('Votre mot de passe est erroné');
                }
                else if(datatype === "create")
                {
                    alert("Aucun compte n'est associé à cet adresse email");
                }
                else if(datatype === "miss")
                {
                    alert('Merci de remplir tous les champs petit chenapan');
                }

            }
    })
});

$(".cell").click(function(){
    $('#demande').empty();
    var timestamp = $(this).attr("id");
    var today = new Date();
    today.setHours(0, 0, 0, 0);
    if (timestamp > today.getTime()) 
    {
    var dateuser = Math.round(timestamp / 1000);
    var date = eval(dateuser*1000);
    var myDate = new Date(date);
    const options = { year: 'numeric', month: 'numeric', day: 'numeric' };
    var datechoisie = myDate.toLocaleString("fr-FR", options);
    $('.modal').modal();
    $('#demande').append("Voulez vous demander un accès pour le " + datechoisie + "?");
    $('#modal1').modal('open');
    $('#confirmer_demande').click(function(){
        $.ajax({
            url: "/runtrack4/bigjob/include/function_connexion.php",
            method: "POST",
            data: { 'function': 'demande_acces', 'date': dateuser },
            datatype: "json",
            success: function(datatype){
                if(datatype === "déjà demandé")
                {
                    alert('Vous avez déjà fait une demande pour cette date');
                }
                get_demande();
            }
    })
    }) 
    }
})



function get_demande(){
    $('.dm').remove();
    $.ajax({
        url: "/runtrack4/bigjob/include/function_connexion.php",
        method: "POST",
        data : {'function' : 'getdemande'},
        datatype: "json",

        success: function (datatype) {
            var data = JSON.parse(datatype);
            for (i = 0; i < data.length; i++) {
                $('#auth').append("<div class='dm' id='d" + i +"'>");
                $.each(data[i], function (key,value) {
                    if(key === "date_demande")
                    {
                        $('#d' + i + "").append("<b> Date " + "</b>" + ":" + value + '</br>');
                    }
                    else if(key === "state")
                    {
                        $('#d' + i + "").append("<b> Etat de la demande " + "</b>" + ":" + value + '</br>');
                    }

    
                })
    
                }
        }
    });
}


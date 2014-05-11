var hiddenAnswer = "";
var periodCounter = 0;
var requestLetterCounter = 0;

var request = "Muertonor por favor responder la siguiente pregunta que te voy a hacer";
var fakeRequest = "";
var modularRequest = request.split("");

var defaultAnswers = [
    "No quiero responder eso ahora",
    "Si quieres saber eso ven a conocerme al baño",
    "A veces es mejor no saber la respuesta",
    "Ten cuidado con lo que preguntas",
    "No es seguro que te conteste eso",
];

$(document).ready(function(){
    $("#request").focus();
    
    $("#content").on("keypress", "#request", function(e){
        var theKeyCodePress = e.keyCode;
        var theCharacterPress = String.fromCharCode(theKeyCodePress);
        
        if(theCharacterPress == ".") {
            periodCounter += 1;
        }
        
        if(periodCounter == 1) {
            e.preventDefault();
            
            if(theCharacterPress != ".") {
                hiddenAnswer += theCharacterPress;
            }
            
            fakeRequest += modularRequest[requestLetterCounter];
            requestLetterCounter++;
            
            $("#request").val(fakeRequest);
        }
        else if(periodCounter == 2) {
            if(theCharacterPress == ".") {
                e.preventDefault();
            }
        }
        
        if(theCharacterPress == ":") {
            $("#request").val($("#request").val()+":");
            $("#request").attr("disabled", "disabled");
            $("#question").focus();
        }
    });
    
    $("#content").on("keypress", "#question", function(e){
        var theKeyCodePress = e.keyCode;
        var theCharacterPress = String.fromCharCode(theKeyCodePress);
        
        if(theCharacterPress == "?") {
            $("#question").val($("#question").val()+"?");
            $("#question").attr("disabled", "disabled");
            
            if(hiddenAnswer == "") {
                var defaultAnswersLength = defaultAnswers.length - 1;
                var randomNumber = Math.floor((Math.random()*defaultAnswersLength)+1)
                
                $("#answer").empty();
                $("#answer").append(defaultAnswers[randomNumber]);
            }
            else {
                $("#answer").empty();
                $("#answer").append(hiddenAnswer);
            }
            
            $("#answerholder").show();
        }
    });
    
    $("#content").on("click", "#restart", function(e){
        e.preventDefault();
        
        hiddenAnswer = "";
        periodCounter = 0;
        requestLetterCounter = 0;
        fakeRequest = "";
        
        $("#request").val("");
        $("#request").removeAttr("disabled");
        
        $("#question").val("");
        $("#question").removeAttr("disabled");
        
        $("#answer").empty();
        $("#answerholder").hide();
        
        $("#request").focus();
    });
});
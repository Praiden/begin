$(document).ready(function() {

    var button = $("button");

    button.click(function(){

        var text = $("textarea").val();

        $.ajax({
            url: '../model/action.php',
            type: "POST",
            data: {text_chat: text},
            success: function () {
            $("textarea").val("");
            }
        })
    });

    window.setInterval(function () {

        var id = $("li:first").attr("id");

        $.ajax({
            url: "../model/action_interval.php",
            type: "POST",
            data: {id: id},
            success: function (data) {
                if (data == 1) {

                } else {
                    $(".chat_empty").remove();
                    $("ul").prepend(data);
                }
            }
        })
    }, 1000);

});













//var array = new array();
//
//function getXmlHttp(){
//    var xmlhttp;
//    try {
//        xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
//    }catch (e){
//        try{
//            xmlhttp = new ActiveXObject("Microsoft.XMLTHTTP");
//        }catch (E) {
//            xmlhttp = false;
//        }
//    }
//    if(!xmlhttp && typeof XMLHttpRequest !='undefined' ){
//        xmlhttp = new XMLHttpRequest();
//    }
//    return xmlhttp;
//}
//
//
//function chat(){
//    var xmlhttp = getXmlHttp();
//    xmlhttp.open("POST", "../templates/entry.php", true);
//    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    xmlhttp.send("update = 1");
//    xmlhttp.onreadystatechange = function(){
//        if(xmlhttp.readyState == 4){
//            if(xmlhttp.status == 200){
//                var response = xmlhttp.responseText;
//                response = JSON.parse(response);
//                if(array.length == response.length) return;
//                var start = array.length;
//                array = response;
//                var messages = document.getElementById("chat").innerHTML;
//                for(i = start; i < array.length; i++){
//                    messages = messages + "<p><b>" + array[i].text + ":</b>" + array[i].message + "</p>";
//                }
//                document.getElementById("chat").innerHTML = messages;
//                document.getElementById("chat").scrollTop = 1000000;
//            }
//        }
//    }
//    setTimeout("chat()", 1000);
//}
//
//function addMessage(){
//    var text = document.getElementById("text").value;
//    var message = document.getElementById("message").value;
//    var xmlhttp = getXmlHttp();
//    xmlhttp.open("POST", "../templates/entry.php", true);
//    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    xmlhttp.send("text =" + encodeURIComponent(text) + "&message=" + encodeURIComponent(message));
//}

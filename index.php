<!DOCTYPE html>
<html>
    <head>
        <title>TITULO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/style.css?1.0.0" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!-- Facebook Conversion Code for Visitas a Power60 -->
    </head>
    <body>
        <div class="container">
            <!--FILA-->
            <div class="row">
                <div class="col-lg-6 col-md-6 ">

                </div>

                <div class="col-lg-6 col-md-6 ">
                    <!--CONTADORES-->
                    <div class="row count">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <p class="count_title">OFERTA<br>LIMITADA!</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <p class="count_box">
                                <span id="hour"><?php echo date('h');?></span>:<span id="min"><?php echo date('i');?></span>:<span id="sec">20</span>
                            </p>
                        </div>
                    </div>
                    <!--CONTADORES-->
                    <div id="form_box">
                        <a name="seccion1"></a>
                        <form role="form" method="post" action="thank-you.php">
                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nombre">
                                <span id="name-error"></span>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-mail">
                                <span id="email-error"></span>
                            </div>
                            <div class="form-group">
                                <input id="phone" type="tel" class="form-control" name="phone" maxlength="10" placeholder="Teléfono">
                                <span id="phone-error"></span>
                            </div>
                            <input type="hidden" name="medio" value="<?php echo $medio; ?>">
                            <button type="submit" class="btn btn-danger" id="form-botton">Más INFORMACIÓN!</button>
                        </form>
                        <p id="text1bb">haz click aquí para llamar ahora<br><a href="tel:18665010848" style="color: #203456; font-family: segoeuib;">1866-501-0848</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">

                </div>             
            </div>
            <!--FIN FILA-->            
        </div>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.numeric.js"></script>
        <!--CONTADORES-->    
        <script>
            function contador() {
                var hour = parseInt($('#hour').text());
                var min = parseInt($('#min').text());
                var sec = parseInt($('#sec').text());
                if (sec !== 00) {
                    sec -= 1;
                    if (sec < 10) {
                        $('#sec').text('0' + sec);
                    } else {
                        $('#sec').text(sec);
                    }
                } else {
                    $('#sec').text('59');
                    if (min !== 00) {
                        min -= 1;
                        if (min < 10) {
                            $('#min').text('0' + min);
                        } else {
                            $('#min').text(min);
                        }
                    } else {
                        $('#min').text('59');
                        hour -= 1;
                        if (hour < 10) {
                            $('#hour').text('0' + hour);
                        } else {
                            $('#hour').text(hour);
                        }
                    }
                }
            }
            setInterval(contador, 1000);
            function intermitente() {
                var shadow = $('.count_title').css('textShadow');
                if (shadow === 'rgb(255, 255, 0) 0px 0px 10px') {
                    $('.count_title').css('textShadow', '0px 0px 0px #000');
                } else {
                    $('.count_title').css('textShadow', '0px 0px 10px #ff0');
                }
            }
            setInterval(intermitente, 500);
        </script>
        <!--CONTADORES-->
        <!--        INFO DISPOSITIVO-->
        <script>
//            $(function () {
//                var resolucion = '';
//                var plataforma = '';
//                var sistema = '';
//                //resolucion de pantalla
//                resolucion = String(window.screen.width) + " x " + String(window.screen.height);
//
//                var isMobile = {
//                    Android: function () {
//                        return navigator.userAgent.match(/Android/i);
//                    },
//                    BlackBerry: function () {
//                        return navigator.userAgent.match(/BlackBerry/i);
//                    },
//                    iOS: function () {
//                        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
//                    },
//                    Opera: function () {
//                        return navigator.userAgent.match(/Opera Mini/i);
//                    },
//                    Windows: function () {
//                        return navigator.userAgent.match(/IEMobile/i);
//                    },
//                    any: function () {
//                        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
//                    }
//                };
//                if (isMobile.any()) {
//                    plataforma = 'Mobile';
//                    if (isMobile.Android())
//                        var sistema = 'Android';
//                    if (isMobile.Windows())
//                        var sistema = 'Windows phone';
//                    if (isMobile.BlackBerry())
//                        var sistema = 'BlackBerry';
//                    if (isMobile.iOS())
//                        var sistema = 'Iphone iOS';
//                    if (isMobile.Opera())
//                        var sistema = 'Opera';
//                } else {
//                    plataforma = 'Desktop';
//                    //Check if browser is IE or not
//                    if (navigator.userAgent.search("MSIE") >= 0) {
//                        var sistema = "InternetExplorer";
//                    }
//                    //Check if browser is Chrome or not
//                    else if (navigator.userAgent.search("Chrome") >= 0) {
//                        var sistema = "Chrome";
//                    }
//                    //Check if browser is Firefox or not
//                    else if (navigator.userAgent.search("Firefox") >= 0) {
//                        var sistema = "FireFox";
//                    }
//                    //Check if browser is Safari or not
//                    else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
//                        var sistema = "Safari";
//                    }
//                    //Check if browser is Opera or not
//                    else if (navigator.userAgent.search("Opera") >= 0) {
//                        var sistema = "Opera";
//                    }
//                }
//                //alert(navigator.userAgent.split(")")[0]);
//                alert('DISPOSITIVO: ' + navigator.userAgent.split(")")[0].substring(13));
//                alert('RESOLUCION: ' + resolucion);
//                alert('PLATAFORMA: ' + plataforma);
//                alert('SISTEMA: ' + sistema);
//            });
        </script>
        <!--        INFO DISPOSITIVO-->
        <!--        VALIDACION DE FORMULARIO-->
        <script>
            $(function(){
                $('#phone').numeric();
                $('#phone').keyup(function(){
                    if($('#phone').length === 1 && $('#phone').val() === '0'){
                        $('#phone').val('');
                    }
                });
            });
            $("form").submit(function (event) {
                if ($("#name").val() === "") {
                    $("#name-error").text("Complete el campo");
                    event.preventDefault();
                } else {
                    var text = $("#name").val();
                    var acentos = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
                    var original = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
                    for (var i = 0; i < acentos.length; i++) {
                        text = text.replace(acentos.charAt(i), original.charAt(i));
                    }
                    $("#name").val(text);
                    $("#name-error").text("");
                }
                if ($("#email").val() === "" && $("#phone").val() === "") {
                    $("#phone-error").text("Ingrese un numero valido");
                    $("#email-error").text("Ingrese un e-mail valido");
                    event.preventDefault();
                }
                if ($("#phone").val() !== "") {
                    if ($("#phone").val().length !== 10 || isNaN($('#phone').val())) {
                        $("#phone-error").text("Ingrese un numero de 10 digitos");
                        event.preventDefault();
                    } else {
                        $("#phone-error").text("");
                    }
                }
                if ($("#email").val() !== "") {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if (!emailReg.test($("#email").val())) {
                        $("#email-error").text("Ingrese un e-mail valido");
                        event.preventDefault();
                    } else {
                        $("#email-error").text("");
                    }
                }
            });
        </script>
        <!--        VALIDACION DE FORMULARIO-->
        <script>
            //Analytics
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
        <script src="html2pdf.bundle.min.js"></script>
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
        <link href="css/style_copy.css" rel="stylesheet" type="text/css" />
            <style type="text/css">
                @font-face {
                font-family: Roboto;
                src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
                }
            </style>
        <title>Resultados</title>
    </head>
    <body>
        <script>
            localStorage.getItem("MyArray_datos");
            let MyArray_datos_Json = localStorage.getItem("MyArray_datos");
            let MyArray_datos = JSON.parse(MyArray_datos_Json);
            var A_1 = MyArray_datos[0];
            var A_2 = MyArray_datos[1];
        </script>

        <div id="0" class="tabcontent" style="display: block">
        <img src="https://blog.ipler.edu.co/hubfs/como-escribir-un-correo-electronico-correctamente-como-escribir-un-correo-bien-como-escribir-un-e-mail-email-correctamente.png" alt="">
            <table align="center" class="questionari" style="padding-top: 0">
                <tbody colspan="2">
                    <tr colspan="2">
                        <th style="text-align: center" colspan="2">
                            <br /><br />
                            EVALUACIÓN DE: COMPETENCIAS DIGITALES DE ESTUDIANTES DE BACHILLERATO DE LA CIUDAD DE RIOBAMBA
                        </th>
                    </tr>
                    <tr colspan="2">
                        <td class="question" colspan="2">Resultados Generales</td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2">
                            <div id="individual-chart-container">
                                <div>
                                    <canvas id="Gráfico" width="600" height="600"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <th class="question" colspan="2">
                            <br><br><br><br><br><br>
                            Explicación del gráfico
                        </th>
                    </tr>
                    <tr colspan="2">
                        <td class="Tresults" style="padding-right: 10px; width: 60%" colspan="2">
                            <div id="explicación">
                                ""
                            </div>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2">
                            <table class="Tresults" cellspacing="10">
                                <thead style="padding-top: 0">
                                    <tr>
                                        <td class="Tresults" style="width: 20%; border: 1; ">
                                            <b>Niveles: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            <b>Tipo de Conocimiento.</b>
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b> Numero de Preguntas</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>A 1.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Conocimiento Elemental.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="a1">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>A 2.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Conocimiento Elemental Avanzado.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="a2">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>B 1.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Conocimiento Intermedio.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="b1">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>B 2.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Conocimiento Intermedio superior.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="b2">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>C 1.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Conocimiento Superior.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="c1">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>C 2.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Conocimiento Avanzado Superior.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="c2">No Apto</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td class="question" id="resultado" colspan="2">NO APTO</td>
                    </tr>
                    <tr colspan="2">
                        <td class="answer" style="line-height: 1.6em" id="respuesta_resultado" colspan="2">
                            <p>NO APTO</p>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2">
                            <div
                                style="
                                padding: 0;
                                margin: 0;
                                vertical-align: middle;
                                text-align: center;
                                "
                                >
                            </div>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td class="question" colspan="2">Resultados por Áreas</td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2">
                            <div id="individual-chart-container">
                                <div>
                                    <canvas id="Gráfico1" width="600" height="600"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <th class="question" colspan="2">
                            <br><br><br><br><br><br>
                            Explicación del gráfico
                        </th>
                    </tr>
                    <tr colspan="2">
                        <td class="Tresults" style="padding-right: 10px; width: 60%" colspan="2">
                            <div id="explicaciónr">
                                ""
                            </div>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2">
                            <table class="Tresults" cellspacing="10">
                                <thead style="padding-top: 0">
                                    <tr>
                                        <td class="Tresults" style="width: 20%; border: 1; ">
                                            <b>Numero de Area: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            <b>Tema Abarcado.</b>
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b> Puntuación Obtenida</b></td>
                                        <td class="Tresults" style="width: 20%"><b> Nivel Obtenido</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>Área 1.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Información y alfabetización informacional.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="ra1">No Apto</b></td>
                                        <td class="Tresults" style="width: 20%"><b id="ra_1">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>Área 2.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Comunicación y colaboración.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="ra2">No Apto</b></td>
                                        <td class="Tresults" style="width: 20%"><b id="ra_2">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>Área 3.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Creación de contenidos digitales.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="rb1">No Apto</b></td>
                                        <td class="Tresults" style="width: 20%"><b id="rb_1">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>Área 4.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Seguridad.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="rb2">No Apto</b></td>
                                        <td class="Tresults" style="width: 20%"><b id="rb_2">No Apto</b></td>
                                    </tr>
                                    <tr>
                                        <td class="Tresults" style="width: 20%">
                                            <b>Área 5.: </b>
                                        </td>
                                        <td
                                            class="Tresults"
                                            style="padding-right: 10px; width: 60%"
                                            >
                                            Resolución de problemas.
                                        </td>
                                        <td class="Tresults" style="width: 20%"><b id="rc1">No Apto</b></td>
                                        <td class="Tresults" style="width: 20%"><b id="rc_1">No Apto</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="question" id="resultador" colspan="2">NO APTO</td>
                    </tr>
                    <tr>
                        <td class="answer" style="line-height: 1.6em" id="respuesta_resultador" colspan="2">
                            <p>NO APTO</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div
                                style="
                                padding: 0;
                                margin: 0;
                                vertical-align: middle;
                                text-align: center;
                                "
                                >
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="question" style="text-align: center;" colspan="2"><b> ¿Esta de acuerdo en que se le envié una copia de <br> sus resultados a su correo electrónico? <br><br> </b></td>
                    </tr>
                    <tr style="object-position: center;">
                        <td>
                            <a href="" class="nextlinks" id="captura" style="padding: 16px 16px 16px;">
                                De Acuerdo.
                            </a>
                        </td>
                        <td>
                            <a href="index.html" class="prevlinks"  style="padding: 16px 16px 16px;"> 
                                En Des Acuerdo. 
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>


        <div id="1" class="tabcontent">
            <table align="center" class="questionari" style="padding-top: 0">
                <tbody colspan="2">
                    <tr colspan="2">
                        <th style="text-align: center" colspan="2">
                            <br /><br />
                            EVALUACIÓN DE: COMPETENCIAS DIGITALES DE ESTUDIANTES DE BACHILLERATO DE LA CIUDAD DE RIOBAMBA                            </th>
                    </tr>
                    <tr colspan="2">
                        <td class="question" colspan="2">Envió de respuestas del formulario al correo electrónico. </td>
                    </tr>
                    <tr>
                        <td>
                            <section class="contact_section layout_padding">
                                <div class="container">
                                    <div class="d-flex ">
                                        <h2>
                                            Ingrese su correo electrónico
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <form action="mail.php" method="post">
                                                <div class="contact_form-container">
                                                    <div>
                                                        <div>
                                                            <input type="email" name="correo" id="correo" placeholder="Email" required>
                                                        <div class="mt-5">
                                                            <button type="submit">
                                                                Enviar
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact_img-box">
                                                <img src="https://media.gcflearnfree.org/content/5b10404e6d5ad52ca4b6e50b_2_2_2013/Imagen%201.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>

        <script>
            localStorage.getItem("MyArray_Respuestas");
            let MyArray_Respuestas_Json = localStorage.getItem("MyArray_Respuestas");
            let MyArray_Respuestas = JSON.parse(MyArray_Respuestas_Json);
            var A1 = MyArray_Respuestas[0];
            var A2 = MyArray_Respuestas[1];
            var B1 = MyArray_Respuestas[2];
            var B2 = MyArray_Respuestas[3];
            var C1 = MyArray_Respuestas[4];
            var C2 = MyArray_Respuestas[5];
            var Nr = A1+A2+B1+B2+C1+C2;



            if(A1 > A2 && A1 > B1 && A1 > B2 && A1 > C1 && A1 > C2){
                document.getElementById("explicación").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a A1 con respecto a sus respuestas que obtuvieron los siguientes valores: ';
                document.getElementById("resultado").innerHTML = 'El mayor numero de respuestas elegidas pertenece al nivel: A1';
                document.getElementById("respuesta_resultado").innerHTML = 'El numero de respuestas contestadas para este nivel fue:'+ A1;
            }else{
                if(A2 >= A1 && A2 > B1 && A2 > B2 && A2 > C1 && A2 > C2){
                    document.getElementById("explicación").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a A2 con respecto a sus respuestas que obtuvieron los siguientes valores: ';
                    document.getElementById("resultado").innerHTML = 'El mayor numero de respuestas elegidas pertenece al nivel: A2';
                    document.getElementById("respuesta_resultado").innerHTML = 'El numero de respuestas contestadas para este nivel fue:'+ A2;
                }else{
                    if(B1 >= A2 && B1 >= A1 && B1 > B2 && B1 > C1 && B1 > C2){
                        document.getElementById("explicación").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a B1 con respecto a sus respuestas que obtuvieron los siguientes valores: ';
                        document.getElementById("resultado").innerHTML = 'El mayor numero de respuestas elegidas pertenece al nivel: B1';
                        document.getElementById("respuesta_resultado").innerHTML = 'El numero de respuestas contestadas para este nivel fue:'+ B1;
                    }else{
                        if(B2 >= A2 && B2 >= B1 && B2 >= A1 && B2 > C1 && B2 > C2){
                            document.getElementById("explicación").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a B2 con respecto a sus respuestas que obtuvieron los siguientes valores: ';
                            document.getElementById("resultado").innerHTML = 'El mayor numero de respuestas elegidas pertenece al nivel: B2';
                            document.getElementById("respuesta_resultado").innerHTML = 'El numero de respuestas contestadas para este nivel fue:'+ B2;
                        }else{
                            if(C1 >= A2 && C1 >= B1 && C1 >= B2 && C1 >= A1 && C1 > C2){
                                document.getElementById("explicación").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a C1 con respecto a sus respuestas que obtuvieron los siguientes valores: ';
                                document.getElementById("resultado").innerHTML = 'El mayor numero de respuestas elegidas pertenece al nivel: C1';
                                document.getElementById("respuesta_resultado").innerHTML = 'El numero de respuestas contestadas para este nivel fue:'+ C1;
                            }else{
                                if(C2 >= A2 && C2 >= B1 && C2 >= B2 && C2 >= C1 && C2 >= A1){
                                    document.getElementById("explicación").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a C2 con respecto a sus respuestas que obtuvieron los siguientes valores: ';
                                    document.getElementById("resultado").innerHTML = 'El mayor numero de respuestas elegidas pertenece al nivel: C2';
                                    document.getElementById("respuesta_resultado").innerHTML = 'El numero de respuestas contestadas para este nivel fue:'+ C2;
                                }
                            }
                        }
                    }
                }
            }



            document.getElementById("a1").innerHTML = A1;
            document.getElementById("a2").innerHTML = A2;
            document.getElementById("b1").innerHTML = B1;
            document.getElementById("b2").innerHTML = B2;
            document.getElementById("c1").innerHTML = C1;
            document.getElementById("c2").innerHTML = C2;



            var ctx = document.getElementById("Gráfico").getContext("2d");
            var Gráfico = new Chart(ctx,{
                type:"bar",
                data:{
                    labels:["A1","A2","B1","B2","C1","C2"],
                    datasets:[{
                        label: ["Numero de Respuestas: "+Nr],
                        data:[ A1, A2, B1, B2, C1, C2 ],
                        backgroundColor : [
                            '#22924f',
                            '#1c8259',
                            '#116B65',
                            '#0D636A',
                            '#065472',
                            '#00447B',
                        ]
                    }]
                },
                Option : {
                    scales :{
                        yAxes :[{
                            ticks: {
                                beginAtZaero:true
                            }
                        }]
                    }
                }
            });



            localStorage.getItem("MyArray_Respuestas_B1");
            let MyArray_Respuestas_B1_Json = localStorage.getItem("MyArray_Respuestas_B1");
            let MyArray_Respuestas_B1 = JSON.parse(MyArray_Respuestas_B1_Json);
            localStorage.getItem("MyArray_Respuestas_B2");
            let MyArray_Respuestas_B2_Json = localStorage.getItem("MyArray_Respuestas_B2");
            let MyArray_Respuestas_B2 = JSON.parse(MyArray_Respuestas_B2_Json);
            localStorage.getItem("MyArray_Respuestas_B3");
            let MyArray_Respuestas_B3_Json = localStorage.getItem("MyArray_Respuestas_B3");
            let MyArray_Respuestas_B3 = JSON.parse(MyArray_Respuestas_B3_Json);
            localStorage.getItem("MyArray_Respuestas_B4");
            let MyArray_Respuestas_B4_Json = localStorage.getItem("MyArray_Respuestas_B4");
            let MyArray_Respuestas_B4 = JSON.parse(MyArray_Respuestas_B4_Json);
            localStorage.getItem("MyArray_Respuestas_B5");
            let MyArray_Respuestas_B5_Json = localStorage.getItem("MyArray_Respuestas_B5");
            let MyArray_Respuestas_B5 = JSON.parse(MyArray_Respuestas_B5_Json);
            var bl1 = MyArray_Respuestas_B1[0];
            var bl2 = MyArray_Respuestas_B2[0];
            var bl3 = MyArray_Respuestas_B3[0];
            var bl4 = MyArray_Respuestas_B4[0];
            var bl5 = MyArray_Respuestas_B5[0];
            var sbl = bl1 + bl2 + bl3 + bl4 + bl5;



            if( sbl >=1 && sbl <=21 ){
                document.getElementById("explicaciónr").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a A1 con respecto a sus respuestas en cada área se obtuvieron los siguientes valores: ';
                document.getElementById("resultador").innerHTML = 'Su resultado total para las áreas es: A1';
                document.getElementById("respuesta_resultador").innerHTML = 'El puntaje obtenido en este area fue: '+ sbl +'/126';
            }else{
                if( sbl >=22 && sbl <=42 ){
                    document.getElementById("explicaciónr").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a A2 con respecto a sus respuestas en cada área se obtuvieron los siguientes valores: ';
                    document.getElementById("resultador").innerHTML = 'Su resultado total para las áreas es: A2';
                    document.getElementById("respuesta_resultador").innerHTML = 'El puntaje obtenido en este area fue: '+ sbl +'/126';
                }else{
                    if( sbl >=43 && sbl <=63 ){
                        document.getElementById("explicaciónr").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a B1 con respecto a sus respuestas en cada área se obtuvieron los siguientes valores: ';
                        document.getElementById("resultador").innerHTML = 'Su resultado total para las áreas es: B1';
                        document.getElementById("respuesta_resultador").innerHTML = 'El puntaje obtenido en este area fue: '+ sbl +'/126';
                    }else{
                        if( sbl >=64 && sbl <=84 ){
                            document.getElementById("explicaciónr").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a B2 con respecto a sus respuestas en cada área se obtuvieron los siguientes valores: ';
                            document.getElementById("resultador").innerHTML = 'Su resultado total para las áreas es: B2';
                            document.getElementById("respuesta_resultador").innerHTML = 'El puntaje obtenido en este area fue: '+ sbl +'/126';
                        }else{
                            if( sbl >=85 && sbl <=105 ){
                                document.getElementById("explicaciónr").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a C1 con respecto a sus respuestas en cada área se obtuvieron los siguientes valores: ';
                                document.getElementById("resultador").innerHTML = 'Su resultado total para las áreas es: C1';
                                document.getElementById("respuesta_resultador").innerHTML = 'El puntaje obtenido en este area fue: '+ sbl +'/126';
                            }else{
                                if( sbl >=106 && sbl <=126 ){
                                    document.getElementById("explicaciónr").innerHTML = 'Según el cuadro presentado anteriormente usted tiene una capacidad de conocimiento igual a C2 con respecto a sus respuestas en cada área se obtuvieron los siguientes valores: ';
                                    document.getElementById("resultador").innerHTML = 'Su resultado total para las áreas es: C2';
                                    document.getElementById("respuesta_resultador").innerHTML = 'El puntaje obtenido en este area fue: '+ sbl +'/126';
                                }
                            }
                        }
                    }
                }
            }



            if( bl1 >= 1 && bl1 <= 18 ){
                if( bl1 >= 1 && bl1 <= 3 ){
                    document.getElementById("ra1").innerHTML = bl1 +'/18';
                    document.getElementById("ra_1").innerHTML ='A1';
                }else{
                    if( bl1 >= 4 && bl1 <= 6 ){
                        document.getElementById("ra1").innerHTML = bl1 +'/18';
                        document.getElementById("ra_1").innerHTML ='A2';
                    }else{
                        if( bl1 >= 7 && bl1 <= 9 ){
                            document.getElementById("ra1").innerHTML = bl1 +'/18';
                            document.getElementById("ra_1").innerHTML ='B1';
                        }else{
                            if( bl1 >= 10 && bl1 <= 12 ){
                                document.getElementById("ra1").innerHTML = bl1 +'/18';
                                document.getElementById("ra_1").innerHTML ='B2';
                            }else{
                                if( bl1 >= 13 && bl1 <= 15 ){
                                    document.getElementById("ra1").innerHTML = bl1 +'/18';
                                    document.getElementById("ra_1").innerHTML ='C1';
                                }else{
                                    if( bl1 >= 16 && bl1 <= 18 ){
                                        document.getElementById("ra1").innerHTML = bl1 +'/18';
                                        document.getElementById("ra_1").innerHTML ='C2';
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if(bl2 >= 1 && bl2 <= 36 ){
                if( bl2 >= 1 && bl2 <= 6 ){
                    document.getElementById("ra2").innerHTML = bl2 +'/36';
                    document.getElementById("ra_2").innerHTML ='A1';
                }else{
                    if( bl2 >= 7 && bl2 <= 12 ){
                        document.getElementById("ra2").innerHTML = bl2 +'/36';
                        document.getElementById("ra_2").innerHTML ='A2';
                    }else{
                        if( bl2 >= 13 && bl2 <= 18 ){
                            document.getElementById("ra2").innerHTML = bl2 +'/36';
                            document.getElementById("ra_2").innerHTML ='B1';
                        }else{
                            if( bl2 >= 19 && bl2 <= 24 ){
                                document.getElementById("ra2").innerHTML = bl2 +'/36';
                                document.getElementById("ra_2").innerHTML ='B2';
                            }else{
                                if( bl2 >= 25 && bl2 <= 30 ){
                                    document.getElementById("ra2").innerHTML = bl2 +'/36';
                                    document.getElementById("ra_2").innerHTML ='C1';
                                }else{
                                    if( bl2 >= 31 && bl2 <= 36 ){
                                        document.getElementById("ra2").innerHTML = bl2 +'/36';
                                        document.getElementById("ra_2").innerHTML ='C2';
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if(bl3 >= 1 && bl3 <= 24 ){
                if( bl3 >= 1 && bl3 <= 4 ){
                    document.getElementById("rb1").innerHTML = bl3 +'/24';
                    document.getElementById("rb_1").innerHTML ='A1';
                }else{
                    if( bl3 >= 5 && bl3 <= 8 ){
                        document.getElementById("rb1").innerHTML = bl3 +'/24';
                        document.getElementById("rb_1").innerHTML ='A2';
                    }else{
                        if( bl3 >= 9 && bl3 <= 12 ){
                            document.getElementById("rb1").innerHTML = bl3 +'/24';
                            document.getElementById("rb_1").innerHTML ='B1';
                        }else{
                            if( bl3 >= 13 && bl3 <= 16 ){
                                document.getElementById("rb1").innerHTML = bl3 +'/24';
                                document.getElementById("rb_1").innerHTML ='B2';
                            }else{
                                if( bl3 >= 17 && bl3 <= 20 ){
                                    document.getElementById("rb1").innerHTML = bl3 +'/24';
                                    document.getElementById("rb_1").innerHTML ='C1';
                                }else{
                                    if( bl3 >= 21 && bl3 <= 24 ){
                                        document.getElementById("rb1").innerHTML = bl3 +'/24';
                                        document.getElementById("rb_1").innerHTML ='C2';
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if(bl4 >= 1 && bl4 <= 24 ){
                if( bl4 >= 1 && bl4 <= 4 ){
                    document.getElementById("rb2").innerHTML = bl4 +'/24';
                    document.getElementById("rb_2").innerHTML ='A1';
                }else{
                    if( bl4 >= 5 && bl4 <= 8 ){
                        document.getElementById("rb2").innerHTML = bl4 +'/24';
                        document.getElementById("rb_2").innerHTML ='A2';
                    }else{
                        if( bl4 >= 9 && bl4 <= 12 ){
                            document.getElementById("rb2").innerHTML = bl4 +'/24';
                            document.getElementById("rb_2").innerHTML ='B1';
                        }else{
                            if( bl4 >= 13 && bl4 <= 16 ){
                                document.getElementById("rb2").innerHTML = bl4 +'/24';
                                document.getElementById("rb_2").innerHTML ='B2';
                            }else{
                                if( bl4 >= 17 && bl4 <= 20 ){
                                    document.getElementById("rb2").innerHTML = bl4 +'/24';
                                    document.getElementById("rb_2").innerHTML ='C1';
                                }else{
                                    if( bl4 >= 21 && bl4 <= 24 ){
                                        document.getElementById("rb2").innerHTML = bl4 +'/24';
                                        document.getElementById("rb_2").innerHTML ='C2';
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if(bl5 >= 1 && bl5 <= 24 ){
                if( bl5 >= 1 && bl5 <= 4 ){
                    document.getElementById("rc1").innerHTML = bl5 +'/24';
                    document.getElementById("rc_1").innerHTML ='A1';
                }else{
                    if( bl5 >= 5 && bl5 <= 8 ){
                        document.getElementById("rc1").innerHTML = bl5 +'/24';
                        document.getElementById("rc_1").innerHTML ='A2';
                    }else{
                        if( bl5 >= 9 && bl5 <= 12 ){
                            document.getElementById("rc1").innerHTML = bl5 +'/24';
                            document.getElementById("rc_1").innerHTML ='B1';
                        }else{
                            if( bl5 >= 13 && bl5 <= 16 ){
                                document.getElementById("rc1").innerHTML = bl5 +'/24';
                                document.getElementById("rc_1").innerHTML ='B2';
                            }else{
                                if( bl5 >= 17 && bl5 <= 20 ){
                                    document.getElementById("rc1").innerHTML = bl5 +'/24';
                                    document.getElementById("rc_1").innerHTML ='C1';
                                }else{
                                    if( bl5 >= 21 && bl5 <= 24 ){
                                        document.getElementById("rc1").innerHTML = bl5 +'/24';
                                        document.getElementById("rc_1").innerHTML ='C2';
                                    }
                                }
                            }
                        }
                    }
                }
            }



            var ctx = document.getElementById("Gráfico1").getContext("2d");
            var Gráfico = new Chart(ctx,{
                type:"bar",
                data:{
                    labels:["Área 1.","Área 2.","Área 3.","Área 4.","Área 5."],
                    datasets:[{
                        label: ["Puntaje de las Respuestas: "],
                        data:[ bl1, bl2, bl3, bl4, bl5 ],
                        backgroundColor : [
                            '#22924f',
                            '#1c8259',
                            '#116B65',
                            '#0D636A',
                            '#065472',
                            '#00447B',
                        ]
                    }]
                },
                Option : {
                    scales :{
                        yAxes :[{
                            ticks: {
                                beginAtZaero:true
                            }
                        }]
                    }
                }
            });





            $(document).ready(function() {
                $('.radio-otherinput-').change(function(){
                    var radiooption = $(this).siblings('.radio-othervalue-')[0]
                    $(radiooption).attr('checked',true);
                    $(radiooption).val($(this).val());
                });
            });
            $( document ).ready(
                function() {
                    console.log($('.tabcontent:not(:first)'));
                        //ocultem tots els steps menys el primer
                        $('.tabcontent:not(:first)').hide();
                        // event de clic dels botons
                        $('.prevlinks, .nextlinks').click( 
                            function( event ) {
                                var currentpage = $('.tabcontent:visible');
                                var moveon = 1;
                                if ($(this).hasClass('prevlinks')) moveon = -1;
                                event.preventDefault();
                                
                                //movem la pagina
                                if (moveon != 0) currentpage.hide();
                                if (moveon == 1) {
                                    if (currentpage.next('.tabcontent').length) {
                                        currentpage.next('.tabcontent').show();
                                    }else{
                                        //es un submit
                                        $('form#questionari').submit();
                                    }
                                }
                                if (moveon == -1) location.assign("index.html");

                                $('html,body').animate({scrollTop: $('.questionari')},'slow');
                            }
                        );
                }
            );
        </script>

        <script src="js/pdf.js"></script>
        <svg display="block" width="0" height="0">
            <text
                font-style="normal"
                font-variant="normal"
                font-family="Verdana, Helvetica, Arial, sans-serif"
                font-size="12"
                font-weight="normal"
                letter-spacing="normal"
                text-decoration="none"
                >
            </text>
            <defs></defs>
            <g></g>
            <g></g>
        </svg>
        <svg display="block" width="0" height="0">
            <text
                font-style="normal"
                font-variant="normal"
                font-family="Verdana, Helvetica, Arial, sans-serif"
                font-size="16"
                font-weight="normal"
                letter-spacing="normal"
                text-decoration="none"
                >
            </text>
            <defs></defs>
            <g></g>
            <g></g>
        </svg>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
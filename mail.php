<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
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
            alert(A_1);
            alert(A_2);
        </script>

        <div id="dim0" class="headertable" style="display: block">
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
                                    <?php 
                                        $nombre_usuario = strval('<script> document.writeln(A_1); </script>') ;
                                        $nombre_colegio = strval('<script> document.writeln(A_2); </script>');
                                        $dirección = $_POST['correo'];
                                        echo $nombre_usuario ;
                                        echo $nombre_colegio ;
                                        echo $dirección ;
                                        if($dirección == null && $nombre_colegio == null && $nombre_usuario == null){
                                            echo "<p>No parameters</p>";
                                        } else {
                                            $cuerpo = "Con un cordial saludo me permito enviarle los resultados que usted obtuvo en el instrumento interactivo para diagnosticar las Competencias Digitales de Estudiantes de Bachillerato de la Ciudad de Riobamba ";

                                            if( mail($dirección, $nombre_usuario." te saludamos y enviamos los resultados de su formulario.", $cuerpo) )
                                            {
                                                echo "Correo Enviado correctamente";
                                                
                                            }else{
                                                echo "Se tuvo problemas para poder enviar su Correo";
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
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
                            <a href="" class="prevlinks" style="padding: 16px 16px 16px;">
                                De Acuerdo.
                            </a>
                        </td>
                        <td>
                            <a href="#" class="nextlinks"  style="padding: 16px 16px 16px;"> 
                                En Des Acuerdo. 
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>

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
    </body>
</html>

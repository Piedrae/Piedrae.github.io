<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <title>Formulario</title>
      <script src="https://cdn.anychart.com/releases/8.2.1/js/anychart-base.min.js"></script>
      <script src="https://cdn.anychart.com/releases/8.2.1/js/anychart-ui.min.js"></script>
      <script src="https://cdn.anychart.com/releases/8.2.1/js/anychart-exports.min.js"></script>
      <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.2.1/css/anychart-ui.min.css">
      <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.2.1/fonts/css/anychart-font.min.css">
      <link href="css/style1.css" rel="stylesheet" type="text/css" />
      <style type="text/css">
            @font-face {
            font-family: Roboto;
            src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
            }
      </style>
    </head>
    <body>
      <?php
        $NombreUsuario = $_POST['NombreUsuario'];
        $NombreColegio = $_POST['NombreColegio'];
      ?>
    <form
      id="questionari"
      name="questionari"
      method="post"
      action="./Resultados.php">
      <input type="hidden" name="quizid" value="95" />
      <div id="0" class="tabcontent" style="display: block">
        <table align="center" class="questionari" style="padding-top: 0">
          <tbody>
            <tr>
              <td class="question" colspan="2" style="line-height: 1.4em">
                <p>
                  <span
                    style="
                      color: rgb(153, 51, 51);
                      font-family: Arial, Helvetica, sans-serif;
                      font-size: 30px;
                      font-weight: 700;
                      text-align: justify;
                    "
                    ><br /> Bienvenido
                        <?php echo $NombreUsuario;?>
                    </span>
                </p>
              </td>
            </tr>

            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                Agradecemos dar su respuesta con la mayor transparencia y veracidad a las diversas preguntas del cuestionario, todo lo cual nos permitirá un acercamiento científico.
                </p>
              </td>
            </tr>

            <tr>
              <td class="question" colspan="2">Información</td>
            </tr>
            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                Agradecemos seleccionar una respuesta en el recuadro correspondiente de cada pregunta.
                </p>
              </td>
            </tr>

            <tr>
              <td class="question">Área 1. Información y alfabetización informacional</td>
            </tr>
            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                Identificar, localizar, obtener, almacenar, organizar y analizar información digital, datos y contenidos digitales, evaluando su finalidad y relevancia para las tareas docentes.
                </p>
              </td>
            </tr>
            <tr>
              <td class="question" colspan="2">
                <em>
                  <p>
                    <strong>
                    Competencia 1.1.
                    </strong>
                    Navegación, búsqueda y filtrado de información, datos y contenidos digitales: buscar información, datos y contenidos digitales en red y acceder a ellos, expresar de
                    manera organizada las necesidades de información, encontrar información relevante para las tareas docentes, seleccionar recursos educativos de forma eficaz, gestionar distintas fuentes de información, crear estrategias personales de información.
                  </p>
                </em>
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 1.1" >
                <div>
                  <input type="radio" name="p1"  value="A1" id="A1">
                </div>
                <div id='A1_p1'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p1"  value="A2" id="A2">
                </div>
                <div id='A2_p1'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p1"  value="B1" id="B1">
                </div>
                <div id='B1_p1'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p1"  value="B2" id="B2">
                </div>
                <div id='B2_p1'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p1"  value="C1" id="C1">
                </div>
                <div id='C1_p1'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p1"  value="C2" id="C2">
                </div>
                <div id='C2_p1'>
                  ""
                </div>
              </td>
            </tr>

            <tr>
              <td class="question">Competencia 1.2. Evaluación de información, datos, contenidos digitales: Reunir, procesar, comprender y evaluar información, datos y contenidos digitales de forma crítica.</td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 1.2">
                <div>
                  <input type="radio" name="p2"  value="A1" id="A1">
                </div>
                <div id='A1_p2'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p2"  value="A2" id="A2">
                </div>
                <div id='A2_p2'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p2"  value="B1" id="B1">
                </div>
                <div id='B1_p2'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p2"  value="B2" id="B2">
                </div>
                <div id='B2_p2'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p2"  value="C1" id="C1">
                </div>
                <div id='C1_p2'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p2"  value="C2" id="C2">
                </div>
                <div id='C2_p2'>
                  ""
                </div>
              </td>
            </tr>
            <tr>

            <tr>
              <td class="question">Competencia 1.3. Almacenamiento y recuperación de información, datos y contenidos digitales: Gestionar y almacenar información, datos y contenidos digitales para facilitar su recuperación; organizar información, datos y contenidos digitales.</td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 1.3">
                <div>
                  <input type="radio" name="p3"  value="A1" id="A1">
                </div>
                <div  id='A1_p3'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p3"  value="A2" id="A2">
                </div>
                <div  id='A2_p3'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p3"  value="B1" id="B1">
                </div>
                <div  id='B1_p3'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p3"  value="B2" id="B2">
                </div>
                <div  id='B2_p3'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p3"  value="C1" id="C1">
                </div>
                <div  id='C1_p3'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p3"  value="C2" id="C2">
                </div>
                <div  id='C2_p3'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#" class="prevlinks" style="display: none">
                  Anterior
                </a>
              </td>
              <td><a href="#" class="nextlinks"> Siguiente </a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="1" class="tabcontent" style="display: none">
        <table align="center" class="questionari" style="padding-top: 0">
          <tbody>
            <tr>
              <td class="question">Área 2. Comunicación y colaboración: </td>
            </tr>
            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                comunicar en entornos digitales, compartir recursos a través de herramientas en línea, conectar y colaborar con otros a través de herramientas digitales, interactuar y participar en comunidades y redes; conciencia intercultural.
                </p>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 2.1. Interacción mediante las tecnologías digitales: Interaccionar por medio de diversos dispositivos y aplicaciones digitales, entender cómo se distribuye, presenta y gestiona
              la comunicación digital, comprender el uso adecuado de las distintas formas de comunicación a través de medios digitales, contemplar diferentes formatos de comunicación, adaptar estrategias y modos de comunicación a destinatarios específicos.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 2.1">
                <div>
                  <input type="radio" name="p4"  value="A1" id="A1">
                </div>
                <div  id='A1_p4'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p4"  value="A2" id="A2">
                </div>
                <div  id='A2_p4'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p4"  value="B1" id="B1">
                </div>
                <div  id='B1_p4'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p4"  value="B2" id="B2">
                </div>
                <div  id='B2_p4'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p4"  value="C1" id="C1">
                </div>
                <div  id='C1_p4'>
                  ""
                </div>
                <div>
                  <input type="radio" name="C2Q1"  value="C2" id="C2">
                </div>
                <div  id='C2_p4'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 2.2. Compartir información y contenidos digitales: Compartir la ubicación de la información y de los contenidos encontrados, estar dispuesto y ser capaz de compartir
              conocimiento, contenidos y recursos, actuar como intermediario/a, ser proactivo/a en la difusión de noticias, contenidos y recursos, conocer las prácticas de citación y referencias e integrar nueva información en el conjunto de conocimientos existentes.
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 2.2">
                <div>
                  <input type="radio" name="p5"  value="A1" id="A1">
                </div>
                <div  id='A1_p5'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p5"  value="A2" id="A2">
                </div>
                <div  id='A2_p5'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p5"  value="B1" id="B1">
                </div>
                <div  id='B1_p5'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p5"  value="B2" id="B2">
                </div>
                <div  id='B2_p5'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p5"  value="C1" id="C1">
                </div>
                <div  id='C1_p5'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p5"  value="C2" id="C2">
                </div>
                <div  id='C2_p5'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
                Competencia 2.3. Participación ciudadana en línea: Implicarse con la sociedad mediante la participación en línea, buscar oportunidades tecnológicas para el empoderamiento y el auto‐ desarrollo en cuanto a las tecnologías y a los entornos digitales, ser consciente del potencial de la tecnología para la participación ciudadana.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 2.3">
                <div>
                  <input type="radio" name="p6"  value="A1" id="A1">
                </div>
                <div id='A1_p6'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p6"  value="A2" id="A2">
                </div>
                <div id='A2_p6'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p6"  value="B1" id="B1">
                </div>
                <div id='B1_p6'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p6"  value="B2" id="B2">
                </div>
                <div id='B2_p6'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p6"  value="C1" id="C1">
                </div>
                <div id='C1_p6'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p6"  value="C2" id="C2">
                </div>
                <div id='C2_p6'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
                Competencia 2.4. Colaboración mediante canales digitales: Utilizar tecnologías y medios para el trabajo en equipo, para los procesos colaborativos y para la creación y construcción común
                de recursos, conocimientos y contenidos.
              </td>
              </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 2.4">
                <div>
                  <input type="radio" name="p7"  value="A1" id="A1">
                </div>
                <div id='A1_p7'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p7"  value="A2" id="A2">
                </div>
                <div id='A2_p7'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p7"  value="B1" id="B1">
                </div>
                <div id='B1_p7'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p7"  value="B2" id="B2">
                </div>
                <div id='B2_p7'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p7"  value="C1" id="C1">
                </div>
                <div id='C1_p7'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p7"  value="C2" id="C2">
                </div>
                <div id='C2_p7'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 2.5. Netiqueta: Estar familiarizado/a con las normas de conducta en interacciones en línea o virtuales, estar concienciado/a en lo referente a la diversidad cultural, ser capaz de
              protegerse a sí mismo/a y a otros de posibles peligros en línea, desarrollar estrategias activas para la identificación de las conductas inadecuadas.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 2.5">
                <div>
                  <input type="radio" name="p8"  value="A1" id="A1">
                </div>
                <div  id='A1_p8'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p8"  value="A2" id="A2">
                </div>
                <div  id='A2_p8'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p8"  value="B1" id="B1">
                </div>
                <div  id='B1_p8'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p8"  value="B2" id="B2">
                </div>
                <div  id='B2_p8'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p8"  value="C1" id="C1">
                </div>
                <div  id='C1_p8'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p8"  value="C2" id="C2">
                </div>
                <div  id='C2_p8'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 2.6. Gestión de la identidad digital: Crear, adaptar y gestionar una o varias identidades digitales, ser capaz de proteger la propia reputación digital y de gestionar los datos
              generados a través de las diversas cuentas y aplicaciones utilizadas.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 2.6">
                <div>
                  <input type="radio" name="p9"  value="A1" id="A1">
                </div>
                <div  id='A1_p9'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p9"  value="A2" id="A2">
                </div>
                <div  id='A2_p9'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p9"  value="B1" id="B1">
                </div>
                <div  id='B1_p9'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p9"  value="B2" id="B2">
                </div>
                <div  id='B2_p9'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p9"  value="C1" id="C1">
                </div>
                <div  id='C1_p9'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p9"  value="C2" id="C2">
                </div>
                <div  id='C2_p9'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#" class="prevlinks"> Anterior </a></td>
              <td><a href="#" class="nextlinks"> Siguiente </a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="2" class="tabcontent" style="display: none">
        <table align="center" class="questionari" style="padding-top: 0">
          <tbody>
            <tr>
              <td class="question">Área 3. Creación de contenidos digitales: </td>
            </tr>
            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                Crear y editar contenidos digitales nuevos, integrar y reelaborar conocimientos y contenidos previos, realizar producciones artísticas, contenidos multimedia y programación informática, saber aplicar los derechos de propiedad intelectual y las licencias de uso.
                </p>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 3.1. Desarrollo de contenidos digitales: Crear contenidos en diferentes formatos, incluyendo contenidos multimedia, editar y mejorar el contenido de creación propia o ajena,
              expresarse creativamente a través de los medios digitales y de las tecnologías.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 3.1">
                <div>
                  <input type="radio" name="p10"  value="A1" id="A1">
                </div>
                <div id='A1_p10'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p10"  value="A2" id="A2">
                </div>
                <div id='A2_p10'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p10"  value="B1" id="B1">
                </div>
                <div id='B1_p10'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p10"  value="B2" id="B2">
                </div>
                <div id='B2_p10'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p10"  value="C1" id="C1">
                </div>
                <div id='C1_p10'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p10"  value="C2" id="C2">
                </div>
                <div id='C2_p10'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 3.2. Integración y reelaboración de contenidos digitales: Modificar, perfeccionar y combinar los recursos existentes para crear contenido digital y conocimiento nuevo, original
              y relevante.
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 3.2">
                <div>
                  <input type="radio" name="p11"  value="A1" id="A1">
                </div>
                <div id='A1_p11'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p11"  value="A2" id="A2">
                </div>
                <div id='A2_p11'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p11"  value="B1" id="B1">
                </div>
                <div id='B1_p11'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p11"  value="B2" id="B2">
                </div>
                <div id='B2_p11'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p11"  value="C1" id="C1">
                </div>
                <div id='C1_p11'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p11"  value="C2" id="C2">
                </div>
                <div id='C2_p11'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 3.3. Derechos de autor y licencias: Entender cómo se aplican los derechos de autor y las licencias a la información y a los contenidos digitales.
              </td>
              </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 3.3">
                <div>
                  <input type="radio" name="p12"  value="A1" id="A1">
                </div>
                <div id='A1_p12'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p12"  value="A2" id="A2">
                </div>
                <div id='A2_p12'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p12"  value="B1" id="B1">
                </div>
                <div id='B1_p12'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p12"  value="B2" id="B2">
                </div>
                <div id='B2_p12'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p12"  value="C1" id="C1">
                </div>
                <div id='C1_p12'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p12"  value="C2" id="C2">
                </div>
                <div id='C2_p12'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 3.4. Programación: Realizar modificaciones en programas informáticos, aplicaciones, configuraciones, programas, dispositivos, entender los principios de la programación,
              comprender qué hay detrás de un programa.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 3.4">
                <div>
                  <input type="radio" name="p13"  value="A1" id="A1">
                </div>
                <div  id='A1_p13'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p13"  value="A2" id="A2">
                </div>
                <div  id='A2_p13'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p13"  value="B1" id="B1">
                </div>
                <div  id='B1_p13'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p13"  value="B2" id="B2">
                </div>
                <div  id='B2_p13'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p13"  value="C1" id="C1">
                </div>
                <div  id='C1_p13'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p13"  value="C2" id="C2">
                </div>
                <div  id='C2_p13'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#" class="prevlinks"> Anterior </a></td>
              <td><a href="#" class="nextlinks"> Siguiente </a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="3" class="tabcontent" style="display: none">
        <table align="center" class="questionari" style="padding-top: 0">
          <tbody>
            <tr>
              <td class="question">Área 4. Seguridad: </td>
            </tr>
            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                Protección de información y datos personales, protección de la identidad digital, de los contenidos digitales, medidas de seguridad, uso responsable y seguro.
                </p>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 4.1. Protección de dispositivos: Proteger los dispositivos y los contenidos digitales propios, comprender los riesgos y amenazas en red y conocer medidas de protección y
              seguridad.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 4.1">
                <div>
                  <input type="radio" name="p14"  value="A1" id="A1">
                </div>
                <div id='A1_p14'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p14"  value="A2" id="A2">
                </div>
                <div id='A2_p14'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p14"  value="B1" id="B1">
                </div>
                <div id='B1_p14'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p14"  value="B2" id="B2">
                </div>
                <div id='B2_p14'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p14"  value="C1" id="C1">
                </div>
                <div id='C1_p14'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p14"  value="C2" id="C2">
                </div>
                <div id='C2_p14'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 4.2. Protección de datos personales e identidad digital: Entender los términos habituales de uso de los programas y servicios digitales, proteger activamente los datos
              personales, respetar la privacidad de los demás, protegerse a sí mismo de amenazas, fraudes y ciberacoso.
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 4.2">
                <div>
                  <input type="radio" name="p15"  value="A1" id="A1">
                </div>
                <div id='A1_p15'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p15"  value="A2" id="A2">
                </div>
                <div id='A2_p15'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p15"  value="B1" id="B1">
                </div>
                <div id='B1_p15'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p15"  value="B2" id="B2">
                </div>
                <div id='B2_p15'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p15"  value="C1" id="C1">
                </div>
                <div id='C1_p15'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p15"  value="C2" id="C2">
                </div>
                <div id='C2_p15'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 4.3. Protección de la salud: Evitar riesgos para la salud relacionados con el uso de la tecnología en cuanto a amenazas para la integridad física y el bienestar psicológico.
              </td>
              </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 4.3">
                <div>
                  <input type="radio" name="p16"  value="A1" id="A1">
                </div>
                <div id='A1_p16'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p16"  value="A2" id="A2">
                </div>
                <div id='A2_p16'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p16"  value="B1" id="B1">
                </div>
                <div id='B1_p16'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p16"  value="B2" id="B2">
                </div>
                <div id='B2_p16'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p16"  value="C1" id="C1">
                </div>
                <div id='C1_p16'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p16"  value="C2" id="C2">
                </div>
                <div id='C2_p16'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 4.4. Protección del entorno: Tener en cuenta el impacto de las tecnologías sobre el medio ambiente.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 4.4">
                <div>
                  <input type="radio" name="p17"  value="A1" id="A1">
                </div>
                <div id='A1_p17'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p17"  value="A2" id="A2">
                </div>
                <div id='A2_p17'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p17"  value="B1" id="B1">
                </div>
                <div id='B1_p17'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p17"  value="B2" id="B2">
                </div>
                <div id='B2_p17'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p17"  value="C1" id="C1">
                </div>
                <div id='C1_p17'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p17"  value="C2" id="C2">
                </div>
                <div id='C2_p17'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#" class="prevlinks"> Anterior </a></td>
              <td><a href="#" class="nextlinks"> Siguiente </a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="4" class="tabcontent" style="display: none">
        <table align="center" class="questionari" style="padding-top: 0">
          <tbody>
            <tr>
              <td class="question">Área 5. Resolución de problemas: </td>
            </tr>
            <tr>
              <td class="answer" colspan="2" style="line-height: 1.4em">
                <p>
                Identificar necesidades de uso de recursos digitales, tomar decisiones informadas sobre las herramientas digitales más apropiadas según el propósito
                o la necesidad, resolver problemas conceptuales a través de medios digitales, usar las tecnologías de forma creativa, resolver problemas técnicos, actualizar su propia competencia y la de otros.
                </p>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 5.1. Resolución de problemas técnicos: Identificar posibles problemas técnicos y resolverlos (desde la solución de problemas básicos hasta la solución de problemas más
              complejos).
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 5.1">
                <div>
                  <input type="radio" name="p18"  value="A1" id="A1">
                </div>
                <div id='A1_p18'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p18"  value="A2" id="A2">
                </div>
                <div id='A2_p18'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p18"  value="B1" id="B1">
                </div>
                <div id='B1_p18'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p18"  value="B2" id="B2">
                </div>
                <div id='B2_p18'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p18"  value="C1" id="C1">
                </div>
                <div id='C1_p18'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p18"  value="C2" id="C2">
                </div>
                <div id='C2_p18'>
                  ""
                </div>
              </td>
            </tr>

            <tr>
              <td class="question">
              Competencia 5.2. Identificación de necesidades y respuestas tecnológicas: Analizar las propias necesidades en términos tanto de uso de recursos, herramientas como de desarrollo
              competencial, asignar posibles soluciones a las necesidades detectadas, adaptar las herramientas a las necesidades personales y evaluar de forma crítica las posibles soluciones y las herramientas digitales.
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 5.2">
                <div>
                  <input type="radio" name="p19"  value="A1" id="A1">
                </div>
                <div  id='A1_p19'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p19"  value="A2" id="A2">
                </div>
                <div  id='A2_p19'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p19"  value="B1" id="B1">
                </div>
                <div  id='B1_p19'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p19"  value="B2" id="B2">
                </div>
                <div  id='B2_p19'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p19"  value="C1" id="C1">
                </div>
                <div  id='C1_p19'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p19"  value="C2" id="C2">
                </div>
                <div  id='C2_p19'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 5.3. Innovación y uso de la tecnología digital de forma creativa: Innovar utilizando la tecnología, participar activamente en producciones colaborativas multimedia y digitales, expresarse de forma creativa a través de medios digitales y de tecnologías, generar conocimiento y resolver problemas conceptuales con el apoyo de herramientas digitales.
              </td>
              </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 5.3">
                <div>
                  <input type="radio" name="p20"  value="A1" id="A1">
                </div>
                <div id='A1_p20'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p20"  value="A2" id="A2">
                </div>
                <div id='A2_p20'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p20"  value="B1" id="B1">
                </div>
                <div id='B1_p20'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p20"  value="B2" id="B2">
                </div>
                <div id='B2_p20'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p20"  value="C1" id="C1">
                </div>
                <div id='C1_p20'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p20"  value="C2" id="C2">
                </div>
                <div id='C2_p20'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td class="question">
              Competencia 5.4. Identificación de lagunas en la competencia digital: Comprender las necesidades de mejora y actualización de la propia competencia, apoyar a otros en el desarrollo de su propia competencia digital, estar al corriente de los nuevos desarrollos.
              </td>
            </tr>
            <tr>
              <td class="answer radioscale-answer" data-require="1" data-warning="Responda la competencia 5.4">
                <div>
                  <input type="radio" name="p21"  value="A1" id="A1">
                </div>
                <div id='A1_p21' name='p21'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p21"  value="A2" id="A2">
                </div>
                <div id='A2_p21' name='p21'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p21"  value="B1" id="B1">
                </div>
                <div id='B1_p21' name='p21'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p21"  value="B2" id="B2">
                </div>
                <div id='B2_p21' name='p21'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p21"  value="C1" id="C1">
                </div>
                <div id='C1_p21' name='p21'>
                  ""
                </div>
                <div>
                  <input type="radio" name="p21"  value="C2" id="C2">
                </div>
                <div id='C2_p21' name='p21'>
                  ""
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#" class="prevlinks"> Anterior </a></td>
              <td><a href="#" class="nextlinks"> Siguiente </a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.radio-otherinput-').change(function(){
          var radiooption = $(this).siblings('.radio-othervalue-')[0]
          $(radiooption).attr('checked',true);
          $(radiooption).val($(this).val());
        });
      });

      function Respuestas_aleatoria(array) {
          var rand = Math.floor( Math.random()*array.length);
          var rValue = array[rand];
          return rValue;
        }
        if(document.getElementsByName('p1'))
        {
          var A1 = [
              'Entiendo que la red es una buena fuente de información y recurro a ella para buscar cualquier recurso educativo.',
              'Uso el correo electrónico para obtener información relativa a mi centro educativo.',
              'Sé que existen diferentes tipos de buscadores y webs donde encontrar recursos educativos.',
              'Entiendo que en Internet se puede	encontrar	mucha información y recursos para el aula y accedo a portales web recomendados.',
              'Sé buscar la información que necesito en la bandeja de entrada de mi correo electrónico.'
              ];
              var A2 =[
              'Utilizo Internet para buscar	información, recursos y herramientas de carácter profesional docente.',
              'Comparto información y recursos con mis compañeros del centro por correo electrónico incorporando enlaces o adjuntando archivos en diferentes formatos.',
              'Consulto el tablón de anuncios y novedades en la web o blog del centro.',
              'Navego	en	la	web accediendo de un enlace a otro buscando recursos de	diferentes características.',
              'Uso palabras clave en diferentes buscadores y portales para acceder a la información.'
              ]
              var B1 =[
              'Utilizo herramientas para marcar y etiquetar información relevante para mi labor docente.',
              'Sé los sitios webs donde encontrar	información docente de utilidad, y a veces busco y exploro para encontrar nuevos portales',
              'Sé navegar por Internet para localizar información y recursos docentes en diferentes formatos y fuentes de información.',
              'Cuando le pido al alumnado que busque información en Internet, le recomiendo sitios donde buscar (buscadores, repositorios, webs especializadas, etc.).',
              'Busco	información utilizando palabras clave que limiten la cantidad de resultados'
              ];
              var B2 =[
              'Utilizo herramientas de filtrado para seleccionar diferentes tipos de recursos y encontrar información en diferentes dispositivos y medios digitales que luego adapto para mi aula',
              'Sé usar canales RSS y suscripciones para acceder de forma más sencilla a la información, así como gestionar esos flujos de información para mi actualización docente.',
              'Navego por Internet y comparto los recursos e información docente relevante con mis compañeros de centro.',
              'Soy capaz de modificar la búsqueda de información en función de los resultados, modificando las estrategias y las variables de búsqueda hasta obtener los resultados que necesito para mi actividad docente.',
              'Introduzco	vocabulario específico, a veces en inglés, y combinaciones de vocabulario y símbolos para encontrar información relevante en mi práctica docente en las diferentes herramientas de búsqueda.'
              ];
              var C1 =[
              'Uso	con	frecuencia herramientas de búsqueda avanzada y filtros para encontrar información y recursos docentes en distintos formatos para ponerlos en práctica en mi aula',
              'Identifico recursos en la red para incorporarlos a mi actividad docente, y elaboro un PLE personal con los mejores portales que conozco para acceder más fácilmente a la información que me interesa para mi profesión docente.',
              'En clase usamos herramientas para encontrar y filtrar el flujo de información en Internet.',
              'Analizo	la	información	y recursos que encuentro en internet para filtrarlos según la fuente, el origen, las licencias de autor y la finalidad para mi labor docente.',
              'En Internet encuentro siempre lo que necesito a través de buscadores,	filtros	y participando en comunidades docentes.'
              ];
              var C2 =[
              'Sé diseñar y aplico una estrategia personalizada de búsqueda y filtrado de la información para la actualización de recursos, buenas prácticas y tendencias educativas.',
              'Elaboro y participo en una red de contactos con otros docentes para intercambiar recursos e información de utilidad en la práctica docente.',
              'Selecciono y adapto los distintos recursos e información que encuentro a las necesidades de mi alumnado y al currículo.',
              'Identifico no solo recursos sino	también	buenas prácticas en la red para incorporarlas a mi actividad profesional diaria.',
              'Busco y filtro información, recursos y experiencias educativas de utilidad en las comunidades docentes en las que participo.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p1').innerHTML = a1 ;
          document.getElementById('A2_p1').innerHTML = a2 ;
          document.getElementById('B1_p1').innerHTML = b1 ;
          document.getElementById('B2_p1').innerHTML = b2 ;
          document.getElementById('C1_p1').innerHTML = c1 ;
          document.getElementById('C2_p1').innerHTML = c2 ;
        }
        if(document.getElementsByName('p2'))
        {
          var A1 = [
              'Sé que existe mucha información y recursos docentes en Internet accesibles a través de buscadores.',
              'Entiendo que es necesario contrastar las fuentes de información y recursos educativos que encontramos en Internet.',
              'Cuando busco recursos en la red me detengo en comprobar su origen y autoría.',
              'Realizo, en alguna ocasión, búsquedas de recursos educativos en los portales web oficiales del Ministerio de Educación y/o Consejerías.',
              'Valoro la utilidad para mi docencia de los recursos que encuentro o en Internet.'
              ];
          var A2 =[
              'Conozco algunos portales web en los que encontrar recursos e información, y alguna vez los he analizado de forma básica antes de utilizarlos en el aula.',
              'A menudo delego la evaluación de la información en expertos a los que sigo a través de las redes, utilizando los recursos que estos comparten.',
              'Cuando	encuentro recursos en Internet evalúo su interés intento seleccionar los más adecuados dependiendo de su origen, formato y otros datos.',
              'Realizo, con cierta regularidad, búsquedas de recursos educativos en los portales web oficiales del Ministerio de Educación	y/o Consejerías.',
              'Valoro y evalúo la adecuación al currículo de los recursos que encuentro en Internet'
              ];
          var B1 =[
              'Mantengo una actitud crítica ante la información y recursos docentes que encuentro en Internet antes de ponerlos en práctica.',
              'Entre varias fuentes soy capaz de elegir las más adecuadas atendiendo a mis	necesidades profesionales.',
              'Evalúo la utilidad, precisión e integridad de la información que busco para mi labor docente.',
              'Comparo, contrasto e íntegro,	regularmente información de diferentes fuentes según convenga para la utilidad en mi aula.',
              'Evalúo la adecuación al currículo de los recursos que	encuentro comentándolos con mi claustro para contrastar opiniones y experiencias.'
              ];
          var B2 =[
              'Evalúo la calidad de los recursos educativos que encuentro en Internet en función de la precisión y alineamiento con el currículo.',
              'Analizo la procedencia, fiabilidad, la autoría, así como la licencia de uso, de los recursos que encuentro en Internet antes de utilizarlos en mi práctica docente.',
              'Analizo y evalúo las experiencias que encuentro en Internet de otros centros y maestros o profesores para incorporarlas a mis prácticas de aula.',
              'Conozco las licencias que permiten la reutilización y difusión de recursos en internet, y trato de utilizar en mi práctica docente recursos de uso libre.',
              'Estoy suscrito a listas de correo de portales web que envían regularmente información y recursos de utilidad para mi labor docente, los analizo y los evalúo.'
              ];
          var C1 =[
              'Participo en comunidades docentes para acceder a información filtrada y evaluada previamente por sus miembros, que después analizo y evalúo en profundidad.',
              'Trabajo con mi alumnado el análisis crítico de recursos y fuentes de información disponibles en la Red.',
              'Evalúo la adecuación al currículo de los recursos que encuentro comentándolos con mi claustro virtual para contrastar opiniones y experiencias.',
              'Soy consciente en todo momento de la importancia de las licencias a la hora de elegir un contenido u otro para su utilización en el aula.',
              'Participo en algún espacio o red docente que informa acerca de recursos de calidad educativa para luego evaluarlos y llevarlos al aula.'
              ];
          var C2 =[
              'Visito de forma recurrente diferentes espacios sociales donde sigo a perfiles de expertos y profesionales con los que comparto intereses informativos, que valora de forma crítica.',
              'Mantengo una actitud crítica con las fuentes y perfiles personales a los que sigo en espacios sociales o comunidades docentes, y transmito esta actitud a mi alumnado.',
              'Tengo una estrategia bien definida que combina recursos tecnológicos y no tecnológicos para evaluar la información optimizando el tiempo que dedico a esta actividad.',
              'Cuando elaboro contenidos que comparto en la red, me preocupo por escoger una licencia que se ajuste al tipo de contenido y destinatarios al que va dirigido.',
              'Desarrollo formación a otros docentes sobre los criterios de evaluación de la calidad de los recursos educativos en Internet.'
          ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p2').innerHTML = a1 ;
          document.getElementById('A2_p2').innerHTML = a2 ;
          document.getElementById('B1_p2').innerHTML = b1 ;
          document.getElementById('B2_p2').innerHTML = b2 ;
          document.getElementById('C1_p2').innerHTML = c1 ;
          document.getElementById('C2_p2').innerHTML = c2 ;
        }
        if(document.getElementsByName('p3'))
        {
          var A1 = [
              'Desconozco los sistemas de almacenamiento de todos los dispositivos que utilizo regularmente.',
              'Sé a quién debo recurrir en caso de que no sea capaz de recuperar	información almacenada en un dispositivo, ya sea personal o del centro.',
              'Almaceno los recursos que me interesan para la clase de forma local, en carpetas de mi equipo.',
              'Organizo la información en carpetas en mi equipo, pero soy consciente de que podría hacerlo de una forma más eficiente para recuperar posteriormente la información.',
              'Alguna vez he eliminado sin querer un recurso educativo de mi interés, pero he sido capaz de restaurarlo desde la papelera.'
              ];
          var A2 =[
              'Entiendo cómo se almacena la información en diferentes dispositivos y utilizo algunos de ellos para mis necesidades de aprendizaje',
              'Sé que existen herramientas en línea para guardar y organizar información en diferentes formatos, pero no las he utilizado.',
              'Soy consciente de que es posible archivar mensajes en el correo, aunque no es una práctica habitual en la gestión de este.',
              'No suelo transferir ficheros entre dispositivos móviles, y si lo hago la única opción con la que cuento es enviarlos por correo electrónico.',
              'Soy consciente de que se puede crear copias de seguridad de mis archivos para no perderlos por error, pero no suelo usarlas.'
              ];
          var B1 =[
              'Antes de almacenar contenido de interés docente reflexiono sobre la conveniencia o no de hacerlo de manera pública o privada.',
              'Dispongo de un perfil con espacio disponible en un sistema de almacenamiento en la nube, y a veces guardo algunos archivos.',
              'Si esto fuera de casa y abro con el dispositivo móvil un mail de trabajo, que quiero revisar en casa con detenimiento, lo marco como “no leído”.',
              'Dispongo y usos dispositivos portátiles y unidades de almacenamiento externo que me permiten transferir ficheros de un dispositivo a otro en caso de que falle Internet.',
              'Alguna vez recibo archivos comprimidos y con cierta dificultad, he conseguido abrirlos.'
              ];
          var B2 =[
              'Creo una copia de los archivos que necesito antes de almacenar contenido de interés ya sea de forma pública o privada.',
              'Procuro almacenar en línea aquellos documentos o archivos que ya he finalizado para poder recurrir a ellos en un futuro en caso de necesitarlo',
              'Utilizo los filtros y etiquetas en el correo electrónico para organizar, y posteriormente recuperar con mayor eficacia, aquella información que necesite.',
              'Cuando trabajo en los dispositivos del centro, almaceno todo lo que elaboro o descargo en ni unidad externa.',
              'Soy consciente de la importancia de comprimir archivos para optimizar el espacio de almacenamiento, ya que cada curso se genera una gran cantidad de contenidos digitales en el trabajo de aula.'
              ];
          var C1 =[
              'Comprendo los beneficios y riesgos de almacenamiento local y en línea, procurando transmitirlo al resto de mi claustro y al alumnado.',
              'Utilizo aplicaciones y extensiones instaladas en mi navegador para etiquetar y almacenar recursos en servicios en la nube.',
              'Uso diversos servicios web para administrar mis listas de lecturas, favoreciendo así mi acceso a la información y mi actualización docente.',
              'Entre mis herramientas favoritas se encuentran las de almacenamiento en nube mediante las que comparto documentos de todo tipo con mi centro educativo y alumnado.',
              'Cuando se hace alguna actividad en el centro en la que se genera material multimedia, fotografías o vídeos, los almacenamos en la nube.'
              ];
          var C2 =[
              'Tanto el alumnado como los docentes disponemos de servicios para almacenar los contenidos digitales que creamos en el centro como producto del proceso de aprendizaje.',
              'Dispongo de una estrategia de almacenamiento tanto local como en línea que comparto con mi alumnado y con mi claustro virtual.',
              'Sé que, con mayor frecuencia, las aplicaciones web disponen de una versión de escritorio en caso de fallas el dispositivo.',
              'Selecciono la información que puede resultar de interés para la comunidad educativa y la almaceno generalmente usando servicios sociales.',
              'Uso diversas tecnologías de conectividad para la transferencia de ficheros e información	entre dispositivos.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p3').innerHTML = a1 ;
          document.getElementById('A2_p3').innerHTML = a2 ;
          document.getElementById('B1_p3').innerHTML = b1 ;
          document.getElementById('B2_p3').innerHTML = b2 ;
          document.getElementById('C1_p3').innerHTML = c1 ;
          document.getElementById('C2_p3').innerHTML = c2 ;
        }
        if(document.getElementsByName('p4'))
        {
          var A1 = [
              'Dispongo, al menos, de una cuenta de correo electrónico que consulto varias veces a la semana tanto para enviar como recibir mensajes.',
              'Consulto, al menos una vez por semana, mis cuentas para recibir mensajes de mi centro educativo y/o de mis compañeros.',
              'Utilizo al menos semanalmente mis cuentas en una o dos redes sociales.',
              'Tengo cuenta y utilizo los servicios de mensajería instantánea varias veces a la semana.',
              'Valoro positivamente el potencial de Internet como herramienta de comunicación.'
              ];
          var A2 =[
              'Consulto con bastante frecuencia mi correo electrónico para recibir mensajes de tipo profesional (Administración educativa, dirección del centro, otros docentes, etc.)',
              'Comparto información y recursos con mis compañeros del centro por correo electrónico con enlaces o adjuntando archivos en diferentes formatos.',
              'Entro frecuentemente en las redes sociales en las que tengo cuenta, pero no participo de forma activa en las mismas.',
              'Dispongo de cuenta en varios servicios de mensajería instantánea que utilizo a diario para fines privados y profesionales.',
              'Me gusta estar conectado e intercambiar mensajes, informaciones y archivos con otros usuarios.'
              ];
          var B1 =[
              'Consulto con frecuencia información profesional y realizo de vez en cuando y de forma pública comentarios en redes sociales educativas',
              'Envío	y	recibo frecuentemente información y archivos de mis compañeros docentes bien por correo electrónico o por alguna red social.',
              'Estoy inscrito en redes sociales	educativas especializadas,		pero participo poco en las mismas.',
              'Sé difundir o reenviar una información o mensaje recibido en un servicio de mensajería instantánea y en una red social tanto pública como privada.',
              'Soy consciente de que lo relevante	es	la comunicación	entre	las personas, no la herramienta o aplicación utilizada.'
              ];
          var B2 =[
              'Consulto frecuentemente información profesional y realizo a menudo y de forma pública comentarios en redes sociales educativas.',
              'Envío y descargo cualquier tipo de archivo elaborado por mí a diferentes públicos y en distintos soportes.',
              'Me comunico, con frecuencia con mis estudiantes y/o familias a través del correo electrónico o de alguna red social.',
              'Selecciono la herramienta o aplicación de comunicación más adecuada en función de sus destinatarios (sea el alumnado, el profesorado, las	familias,	la Administración, etc.)',
              'Me sorprende la cantidad y variedad de herramientas y aplicaciones que existen para la comunicación en línea y las uso en función de mis objetivos docentes.'
              ];
            var C1 =[
              'Me comunico siempre con mis estudiantes y/o familias a través del correo electrónico o de alguna red social.',
              'He creado un grupo específico para mi alumnado, dentro de una red social para que los estudiantes	puedan comunicarse conmigo y entre ellos de forma constante.',
              'He	creado	un grupo/comunidad específicos para mi alumnado, dentro de una red social y solicito a los alumnos actividades de aprendizaje que impliquen el uso de foros y de redes sociales.',
              'Uso una estrategia de comunicación adaptada a cada tipo de público tanto en tiempo real como diferido',
              'Busco y pruebo nuevas aplicaciones y herramientas de comunicación en línea siempre con el objetivo y la motivación de mejorar los procesos de enseñanza- aprendizaje.'
              ];
          var C2 =[
              'Permanentemente	estoy conectado e interacciono socialmente con mis estudiantes, las familias y mis compañeros a través de los distintos servicios de comunicación en línea.',
              'Creo y gestiono redes de comunicación entre grupos de docentes para el desarrollo profesional.',
              'Organizo proyectos, tareas y actividades de aula/centro que implican el uso de redes sociales para el trabajo colaborativo entre e Inter estudiantes, aulas, centros.',
              'Diseño una estrategia de comunicación personalizada combinando		varias aplicaciones y plataformas, en función de la naturaleza de la actividad	formativa desarrollada.',
              'Me actualizo constantemente y favorezco el desarrollo de valores interculturales en los estudiantes a través del uso de servicios y aplicaciones de comunicación digital.'
              ];

          
          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p4').innerHTML = a1 ;
          document.getElementById('A2_p4').innerHTML = a2 ;
          document.getElementById('B1_p4').innerHTML = b1 ;
          document.getElementById('B2_p4').innerHTML = b2 ;
          document.getElementById('C1_p4').innerHTML = c1 ;
          document.getElementById('C2_p4').innerHTML = c2 ;
        }
        if(document.getElementsByName('p5'))
        {
          var A1 = [
              'Escribo y envío información en entornos digitales de comunicación.',
              'Utilizo Internet para acceder a información y a recursos educativos que otros docentes comparten conmigo.',
              'Establezco	interacciones comunicativas en espacios virtuales.',
              'Sé compartir datos, archivos o informaciones en línea con una persona o grupo.',
              'Utilizo Internet, en alguna ocasión, para trabajar de forma colaborativa con otros docentes.',
              'Tengo cuenta abierta en aplicaciones que permiten trabajar conjuntamente sobre un mismo archivo o documento.'
              ];
          var A2 =[
              'Reenvío		información recibida en entornos digitales bien a una persona o un grupo	incorporando comentarios.',
              'Comparto enlaces a documentos o ficheros con la finalidad de difundirlos en espacios en línea.',
              'Comparto conocimiento en espacios en línea con un número reducido de compañeros de profesión.',
              'Comparto información y recursos con mis colegas a través de la red.',
              'Utilizo espacios en línea para el trabajo colaborativo con mis compañeros docentes.',
              'Utilizo aplicaciones para trabajar conjuntamente sobre un mismo archivo o documento.'
              ];
          var B1 =[
              'Uso y utilizo frecuentemente los mecanismos específicos de comunicación en las redes sociales en las que participo.',
              'Accedo sin dificultades a ficheros y documentos que hayan compartido conmigo en un espacio online restringido.',
              'Difundo y reenvío mensajes, fotos, videos, enlaces y otro tipo de información en las redes sociales en las que participo con cierta frecuencia.',
              'Tengo algunos contactos que, en ocasiones, redistribuyen mis mensajes y/o archivos en la red.',
              'Soy un usuario que a veces escribe opiniones y publica mensajes en redes sociales.',
              'Accedo a mis aplicaciones y las comparto con mis compañeros de profesión.'
              ];
          var B2 =[
              'Soy un usuario que de forma habitual	redistribuyo frecuentemente información que considera relevante en distintas redes sociales a modo de curador de contenidos.',
              'Soy seguidor de docentes y/o expertos que de forma frecuente	difunden información de interés educativo en la Red y la difundo.',
              'Soy consciente de la diversidad cultural existente en la comunicación en línea y soy respetuoso ante la misma a la hora de difundir y redistribuir información y contenidos digitales.',
              'Siempre evalúo el interés y relevancia de una información o enlace antes de distribuirla.',
              'Uso de forma habitual los espacios en línea para compartir recursos y publicar mensajes en redes sociales.',
              'Tengo un espacio personal de publicación online dedicado a la educación en el que escribo alguna vez.'
              ];
          var C1 =[
              'Creo archivos y documentos en línea y los comparto por medios digitales con personas	concretas otorgando distintos roles de usuario (editar, leer, realizar comentarios).',
              'Animo a mis compañeros de profesión docente y a mis alumnos a evaluar, distribuir y diseminar	información educativa valiosa en medios digitales.',
              'De forma regular reenvío y difundo mensajes, noticias o enlaces que considero de interés educativo en las redes sociales en las que participo.',
              'Coopero y comparto con otros compañeros de forma habitual información y recursos a través de la red.',
              'Colaboro y comparto contenido relevante para mi amplia comunidad educativa de seguidores.',
              'Establezco	lazos profesionales y de amistad con algunas personas con los que interacciono casi todos los días a través de tecnologías.'
              ];
          var C2 =[
              'Publico	regularmente información con contenido educativo relevante en las redes sociales.',
              'Analizo, evalúo y valoro de forma crítica la información a la que tengo acceso por medios digitales	para	luego redistribuirla y difundirla en la red entre mis seguidores y personas a las que sigo.',
              'Mantengo una actitud crítica con las fuentes y perfiles personales a los que sigo en espacios	sociales	o comunidades docentes.',
              'Colaboro a través de la red con un amplio número de colegas formando una red personal de aprendizaje (PLN).',
              'Selecciono, filtro y comparto contenido relevante para mi amplia comunidad educativa de seguidores.',
              'Dispongo de varios servicios y espacios en la red donde, a modo de curador de contenidos, frecuentemente publico noticias e informaciones sobre educación.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p5').innerHTML = a1 ;
          document.getElementById('A2_p5').innerHTML = a2 ;
          document.getElementById('B1_p5').innerHTML = b1 ;
          document.getElementById('B2_p5').innerHTML = b2 ;
          document.getElementById('C1_p5').innerHTML = c1 ;
          document.getElementById('C2_p5').innerHTML = c2 ;
        }
        if(document.getElementsByName('p6'))
        {
          var A1 = [
              'Estoy registrado para acceder en línea a mis datos como docente en mi centro y/o administración educativa, pero no accedo normalmente.',
              'Soy consciente de que Internet me permite realizar gestiones con la administración educativa.',
              'Conozco sitios web que informan	u	ofrecen recomendaciones	sobre aplicaciones y recursos educativos',
              'Accedo a alguna que otra aplicación para realizar trámites	administrativos educativos.',
              ];
              var A2 =[
              'Accedo en línea a mis datos como docente en mi centro y/o	administración educativa.',
              'Dispongo de firma digital.',
              'Uso sitios web que me informan u ofrecen recomendaciones sobre aplicaciones y recursos educativos',
              'Conozco las aplicaciones o complementos existentes para poder realizar trámites administrativos educativos en línea con mis dispositivos.'
              ];
              var B1 =[
              'Conozco y uso los diferentes accesos en línea para revisar mis datos como docente en mi centro y/o administración educativa',
              'Utilizo mi firma digital para la tramitación de servicios administrativos educativos.',
              'Busco y leo documentos, artículos, informes sobre tendencias y usos didácticos de las TIC para la mejora de mi práctica docente',
              'Usos dispositivos para realizar	trámites administrativos educativos en línea.'
              ];
              var B2 =[
              'Con frecuencia realizo gestiones online de distintos productos y servicio relacionados con mi profesión docente.',
              'Habitualmente	me relaciono, para aspectos de mi profesión docente, con los servicios públicos que necesito a través de los entornos digitales que éstos ponen a mi disposición como ciudadano.',
              'Participo en espacios web (periódicos, asociaciones, buscadores temáticos, etc.) donde, en alguna ocasión, publico opiniones sobre mi experiencia	como ciudadano y/o profesional docente.',
              'Uso mis dispositivos continuamente para realizar trámites administrativos educativos en línea.'
              ];
              var C1 =[
              'Participo de forma activa en espacios	virtuales relacionados con la ciudadanía digital que son de utilidad para mi profesión docente y para los procesos de enseñanza-aprendizaje.',
              'Realizo actividades en el aula para trabajar con mi alumnado el funcionamiento de la economía online y de la administración electrónica y de la ciudadanía digital.',
              'Desarrollo	actividades didácticas para que mi alumnado tome conciencia de sus derechos y obligaciones		como ciudadano de la sociedad digital',
              'Propongo actividades de aula y/o centro en las que los alumnos	son	los protagonistas de su propio aprendizaje, en relación con la ciudadanía digital.'
              ];
              var C2 =[
              'Coopero junto a otros profesionales en espacios virtuales, de forma muy activa, relacionados con la ciudadanía digital y estrechamente ligados a la profesión docente y a los procesos de enseñanza-aprendizaje.',
              'Organizo proyectos educativos y animo al alumnado a participar y expresarse adecuadamente	como ciudadanos en espacios digitales.',
              'Desarrollo y participo en proyectos educativos con otros profesionales de mi centro o de otros centros dirigidos a desarrollar en los estudiantes la conciencia y competencia ciudadana digital, así como valores interculturales.',
              'Soy miembro activo de alguna asociación o red de docentes en línea, en las que participó activamente y en las que disemino proyectos educativos relacionados con la ciudadanía digital.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p6').innerHTML = a1 ;
          document.getElementById('A2_p6').innerHTML = a2 ;
          document.getElementById('B1_p6').innerHTML = b1 ;
          document.getElementById('B2_p6').innerHTML = b2 ;
          document.getElementById('C1_p6').innerHTML = c1 ;
          document.getElementById('C2_p6').innerHTML = c2 ;
        }
        if(document.getElementsByName('p7'))
        {
          var A1 = [
              'Soy consciente de que a través de Internet se pueden desarrollar tareas grupales entre personas que están física o temporalmente distantes.',
              'He	participado	en	alguna ocasión    en    algún   espacio online al que me han enviado enlace	para	entrar	y/o descargar algún archivo.',
              'Puedo enviar y recibir archivos y carpetas adjuntos a través de aplicaciones y servicios para intercambiarlos con otros docentes.',
              'Conozco	que existen documentos	o espacios compartidos a los que me pueden invitar a colaborar.',
              'Todavía siento alguna inseguridad ante las aplicaciones y espacios de intercambio y colaboración en línea'
              ];
              var A2 =[
              'Tengo cuenta abierta en varias aplicaciones y espacios online de trabajo colaborativo pero las uso esporádicamente.',
              'He	accedido	en	varias ocasiones a documentos o espacios compartidos a los que me han invitado, pero sin editarlos.',
              'Tengo experiencia de haber participado, en alguna ocasión, en debates en línea a través de aplicaciones o herramientas como los foros, los chats o las videoconferencias.',
              'Soy capaz de descargar y/o subir archivos a espacios en línea (discos duros virtuales, sistemas de intercambio público de archivos y similares, etc.).',
              'Con la ayuda de mis compañeros	estoy empezando a sentirme más seguro con las aplicaciones y espacios de intercambio y colaboración en línea.'
              ];
              var B1 =[
              'Accedo sin dificultades a documentos colaborativos en espacios y aplicaciones en línea.',
              'En	alguna	ocasión	he creado    un    documento o archivo en un espacio online y lo he compartido con otros usuarios.',
              'Tengo experiencia de haber participado, al menos una vez, en procesos de creación o revisión de documentos y carpetas a través de espacios en línea para la elaboración de proyectos	educativos colaborativos.',
              'Entro en un documento compartido para añadir comentarios.',
              'Cada vez siento más confianza y seguridad al utilizar aplicaciones y espacios de trabajo colaborativo en línea'
              ];
              var B2 =[
              'Participo frecuentemente en espacios o documentos compartidos en línea a los que me invitan.',
              'Uso	frecuentemente espacios web compartidos tanto como creador y/o editor, para el trabajo con mis colegas docentes.',
              'Organizo actividades para estimular en el alumnado el uso de recursos en línea de trabajo colaborativo.',
              'Entro en un documento compartido para ver y rastrear el historial de las distintas versiones de este.',
              'Me siento seguro y con confianza cuando uso las aplicaciones y espacios de trabajo colaborativo en línea.'
              ];
              var C1 =[
              'Otorgo distintos roles (edición,	lectura, comentarios) a los usuarios que invito a espacios colaborativos en red.',
              'Planteo a los estudiantes proyectos   y actividades de aula que impliquen el trabajo colaborativo	mediante herramientas en línea.',
              'Considero	relevante fomentar el desarrollo de la conciencia y valores interculturales en el alumnado cuando trabajan en espacios digitales compartidos.',
              'Creo	y	comparto documentos, doy permisos de edición o lectura y ayudo a mis compañeros a realizar dichas acciones.',
              'Me gusta mucho la colaboración en línea y siempre estoy animando y formando a mis compañeros y alumnos en ello.'
              ];
              var C2 =[
              'Busco, pruebo y experimento constantemente	nuevas aplicaciones o recursos de trabajo colaborativo que tengan potencial para mi docencia o la colaboración con otros compañeros de profesión.',
              'Participo con mi alumnado en proyectos	educativos	que implican la colaboración online con otros centros.',
              'Planifico y pongo en práctica en el aula tareas y actividades para que el alumnado conozca y experimente variadas herramientas de trabajo colaborativo en red.',
              'Controlo, comparto y aplico diferentes documentos en línea para colaborar con mis otros compañeros de profesión.',
              'Me encanta todo lo relacionado con la colaboración entre iguales a través de la red y ayudo a mis compañeros y a mis alumnos a encontrar seguridad a la hora de hacerlo.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p7').innerHTML = a1 ;
          document.getElementById('A2_p7').innerHTML = a2 ;
          document.getElementById('B1_p7').innerHTML = b1 ;
          document.getElementById('B2_p7').innerHTML = b2 ;
          document.getElementById('C1_p7').innerHTML = c1 ;
          document.getElementById('C2_p7').innerHTML = c2 ;
        }
        if(document.getElementsByName('p8'))
        {
          var A1 = [
              'Conozco y utilizo alguna convención o regla de comunicación escrita e icónica entre usuarios de Internet.',
              'Soy consciente de que existen peligros por el uso de Internet.',
              'Sé que se existen casos de acosos y abusos entre jóvenes a través de Internet.',
              'Procuro escribir mis mensajes de forma respetuosa y sin ofensas hacia los demás.',
              'Soy consciente de que, en ciertas situaciones sociales, debo poner en silencio o desconectar mis aparatos tecnológicos.',
              'Me molesta cuando recibo o leo mensajes donde no se cuida la netiqueta.'
              ];
              var A2 =[
              'Soy consciente de que existen	reglas	o convenciones en la escritura y comunicación online.',
              'Conozco los términos de correo basura o spam, el ciberacoso y otros similares, aunque de forma muy general.',
              'Conozco la problemática sobre el ciberacoso y me estoy formando para atajar posibles problemas.',
              'Sé que existen variedad de emoticonos y gifs y en ocasiones los utilizo.',
              'Nunca utilizo palabras o imágenes que puedan ser ofensivas	o malinterpretadas por los destinatarios de mis mensajes.',
              'Siento malestar y rechazo hacia cualquier tipo de discriminación, acoso o uso inadecuado de la tecnología.'
              ];
              var B1 =[
              'Antes de enviar una comunicación digital la releo y reflexiono sobre la conveniencia de enviarla a su destinatario.',
              'Defino y caracterizo los distintos usos inadecuados de Internet y sus efectos negativos sobre niños y jóvenes.',
              'Comparto y comento en clase con el alumnado noticias sobre casos reales de ciberacoso y acosos en la red',
              'Conozco la existencia de los emoticonos y en alguna ocasión los he utilizado en mis mensajes.',
              'Conozco las reglas básicas de educación cuando me comunico con mis iguales.',
              'Cuando siento malestar o rechazo procuro cambiar las cosas.'
              ];
              var B2 =[
              'Utilizo de forma consciente y selectiva emoticonos y símbolos para reforzar icónicamente mis mensajes.',
              'Leo	información	digital sobre la problemática de los acosos y usos perversos de Internet para estar actualizado.',
              'Selecciono y comparto con mis colegas del centro guías y documentación sobre los peligros y usos perversos de Internet.',
              'Planteo debates en clases sobre la netiqueta y realizamos actividades en torno a ella.',
              'Evito utilizar palabras, frases, imágenes o videos que pudieran ser sexistas o racistas.',
              'Considero		relevante enseñar a mi alumnado a que	aprendan	a desconectarse conscientemente de la tecnología.'
              ];
              var C1 =[
              'Colaboro a mi alumnado y mis compañeros de profesión en reforzar icónicamente mis mensajes.',
              'Dispongo	de	información sobre cómo detectar y actuar en caso de que se presente en mi alumnado algún caso de ciberacoso.',
              'He planificado y desarrollado con mi alumnado sesiones formativas sobre la netiqueta, el ciberacoso y otros abusos en Internet.',
              'Aplico las diferentes formas que	existen	para relacionarnos de forma correcta.',
              'Estoy implicado en el desarrollo de programas educativos destinados al uso de la netiqueta en los niños y jóvenes.',
              'Entiendo que existen tipos de discriminación, acoso o uso perverso de la tecnología y trabajo actividades con el alumnado para solucionar los problemas.'
              ];
              var C2 =[
              'Manejo de manera consciente las diferentes reglas de escritura y comunicación existentes en línea.',
              'He organizado en mi centro un proyecto educativo destinado para formar y alertar al alumnado sobre los abusos y malos usos de Internet.',
              'Soy capaz de identificar y actuar ante algún caso que se presente de ciberacoso entre el alumnado de mi clase.',
              'Controlo y aplico los protocolos correctos sobre la netiqueta y colaboro con mis compañeros para mejorarla.',
              'Organizo actividades y proyectos educativos para desarrollar la conciencia y respeto intercultural en los estudiantes.',
              'Colaboro con mis compañeros activamente sin realizar tipo de discriminación, acoso o uso inadecuado de la tecnología.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p8').innerHTML = a1 ;
          document.getElementById('A2_p8').innerHTML = a2 ;
          document.getElementById('B1_p8').innerHTML = b1 ;
          document.getElementById('B2_p8').innerHTML = b2 ;
          document.getElementById('C1_p8').innerHTML = c1 ;
          document.getElementById('C2_p8').innerHTML = c2 ;
        }
        if(document.getElementsByName('p9'))
        {
          var A1 = [
              'He creado cuentas en distintos servicios, plataformas y aplicaciones de Internet de forma segura.',
              'Dispongo de estrategias seguras a la hora de preservar la seguridad en los distintos servicios online que utilizo (por ejemplo, evito que coincida el nombre de usuario y la clave o contraseña).',
              'Nunca doy información personal y/o comprometida sobre mi identidad digital o la de otros (por ejemplo, mis claves o contraseñas a desconocidos).',
              'Soy capaz de completar mis datos de perfil de cuenta de usuario (foto, estudios, edad, etc.)	en	espacios, herramientas y servicios digitales.',
              'He abierto perfiles en redes sociales sin configurar todas las opciones de privacidad.',
              'Comparto mucha información por la red con personas conocidas.'
              ];
              var A2 =[
              'Conozco y comprendo el concepto de identidad digital y me lo aplico a la hora de navegar por la red.',
              'Genero	claves	o contraseñas seguras que combinen números, signos y letras.',
              'Evito utilizar contraseñas fáciles de identificar (números o letras consecutivas,	año nacimiento, nombre o apellido propio, etc.)',
              'Soy consciente de los peligros que supone el que se apropien o manipulen mis claves de identidad digital o mis dispositivos.',
              'Soy respetuoso con la identidad	de	mis destinatarios cuidando, cuando es preciso, el anonimato de estos.',
              'Estoy empezando a preocuparme por mi privacidad y por la de mis iguales.'
              ];
              var B1 =[
              'Soy consciente de que la imagen que los demás tienen de mi está configurada por lo que escribo o público en las redes sociales.',
              'Cambio las claves de usuario de forma regular en los distintos servicios o plataformas.',
              'Evito repetir la misma contraseña en distintos servicios o aplicaciones online.',
              'Solo proporciono datos personales en sitios seguros y de confianza.',
              'Tengo activado en mis navegadores un nivel de protección seguro.',
              'Estoy preocupado y concienciado con la gestión adecuada de mi identidad digital.'
              ];
              var B2 =[
              'Utilizo un mismo nombre de usuario que me identifique como la misma persona en distintos servicios o redes sociales.',
              'Dispongo y aplico de una estrategia o protocolo personal seguro para generar (y poder recordar) las claves y contraseñas de mis distintas cuentas.',
              'Accedo y gestiono sin dificultad mis cuentas, datos y claves personales desde cualquier dispositivo en cualquier momento y desde cualquier lugar.',
              'Identifico con facilidad los mensajes	masivos engañosos, a modo de estafas, que solicitan datos personales y/o abrir archivos adjuntos.',
              'Cuido la mayoría de las veces la imagen que proyecto en la red e intento que mis compañeros de profesión y mis alumnos hagan lo mismo.',
              'Nunca proporciono por medios digitales datos sensibles ni propios ni ajenos.'
              ];
              var C1 =[
              'Conozco y puedo definir el concepto de reputación digital.',
              'Tengo instalado en mis distintos	dispositivos, software de protección o de firewall.',
              'Evito dar permiso a que unas aplicaciones o servicios online se apropien y gestionen mi identidad a través de las claves de usuario que poseen en otras cuentas. Enseño a mi alumnado a hacer lo propio.',
              'Cuando accedo a una cuenta o servicio personal desde un dispositivo ajeno nunca guardo en el mismo la contraseña, y siempre cierro dicha aplicación.',
              'Controlo mi imagen en la red, teniendo en todo momento mucha seguridad de mi imagen en la red, y de la de los demás.',
              'Busco información y me actualizo constantemente en el campo/ámbito de la gestión de datos en línea y de la identidad digital para ponerlo en práctica en el aula.'
              ];
              var C2 =[
              'Valoro de forma relevante y cuido la imagen o reputación digital que proyecto en las redes y espacios online en los que participo.',
              'Aplico protocolos de protección en todas las acciones que realizo a través de la red y las enseño a los demás, en el aula y en el centro.',
              'Soy consciente de lo que son las cookies y cómo gestionarlas.	Además, promuevo entre mis alumnos esa correcta gestión.',
              'Utilizo software específico para almacenar y recuperar de forma segura las claves de mis cuentas.',
              'Evito publicar fotos, videos o textos que puedan dañar mi reputación personal y de los demás en el presente y/o futuro. Promuevo esta actitud entre mi alumnado y en mi centro.',
              'Desarrollo en clase proyectos educativos	actividades formativas para que los estudiantes sepan crear y gestionar sus cuentas personales, así como su identidad digital.'
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p9').innerHTML = a1 ;
          document.getElementById('A2_p9').innerHTML = a2 ;
          document.getElementById('B1_p9').innerHTML = b1 ;
          document.getElementById('B2_p9').innerHTML = b2 ;
          document.getElementById('C1_p9').innerHTML = c1 ;
          document.getElementById('C2_p9').innerHTML = c2 ;
        }
        if(document.getElementsByName('p10'))
        {
          var A1 = [
              'Conozco y utilizo, de forma básica, programas de procesadores de texto y/o de elaboración de presentaciones, casi siempre en local.',
              'Guardo y almaceno en carpetas organizadas los documentos y presentaciones que elaboro, en mis dispositivos.',
              'A veces, busco en la red, tutoriales sobre cómo	utilizar aplicaciones para la creación de contenidos educativos digitales.',
              ];
              var A2 =[
              'Edito textos y presentaciones de forma avanzada, pero fundamentalmente en local.',
              'Guardo, almaceno y recupero documentos y presentaciones digitales elaborados por mí y por otros, tanto a nivel local, como en la nube.',
              'Conozco el concepto PLE (Personal	Learning Evironment) y me sirvo del mismo para el aprendizaje a la hora de editar contenido digital. Lo explicito/represento de forma detallada y ordenada.',
              ];
              var B1 =[
              'Creo, almaceno y edito con frecuencia todo tipo de ficheros de texto y presentaciones, tanto en línea como en local.',
              'Utilizo programas y servicios de edición de imágenes,	material icónico, audio y vídeo tanto en local como en la nube para adaptar material digital y reaprovecharlo.',
              'Fomento que el alumnado se implique en la creación de material educativo digital que implique el diseño y la edición de textos, presentaciones, vídeos y audios, ayudándoles a crear su propio PLE.',
              ];
              var B2 =[
              'Habitualmente uso distintos programas y servicios de edición y creación de textos, presentaciones, en cualquier dispositivo, tanto en local, como en la nube, y los publico.',
              'Diseño, creo y edito imágenes, material icónico, vídeos y audios propios, tanto en local como en la nube, y los publico.',
              'Tengo un canal o espacio personal en servicios o aplicaciones en línea donde público a lo largo del curso archivos de texto, de video, de presentaciones y/o grabación de programas de audio y vídeo en las que el alumnado ha estado implicado.',
              ];
              var C1 =[
              'Fomento entre mi alumnado y en mi centro la creación digital de presentaciones, textos, que evalúo y de las que realizo seguimiento.',
              'Diseño y utilizo en mis clases y comparto con mis compañeros de centro materiales digitales empleando formatos y lenguajes icónicos y/o audiovisuales, como por ejemplo infografías, mapas conceptuales, podcast, vídeos.',
              'Planifico, desarrollo y evalúo actividades didácticas en línea que demandan que mis alumnos tengan que utilizar distintas herramientas de producción de contenidos (textos, mapas, nubes de palabras, hipertextos, vídeos, grabaciones audio, etc.). Además, fomento que el alumnado genere sus propios e-portafolios.',
              ];
              var C2 =[
              'Participo con otros docentes en la creación compartida de documentos y presentaciones en línea, en diversas comunidades profesionales.',
              'Creo, desarrollo y mantengo		espacios digitales en la nube destinados al aprendizaje, como blogs, sites, etc., en los que publico y comparto proyectos educativos que incluyen	materiales digitales de tipología variada y fomento la participación de mi alumnado en los mismos.',
              'Colaboro con otros docentes y profesionales en la creación de portales o plataformas educativas abiertas en las que compartir	materiales digitales creados.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p10').innerHTML = a1 ;
          document.getElementById('A2_p10').innerHTML = a2 ;
          document.getElementById('B1_p10').innerHTML = b1 ;
          document.getElementById('B2_p10').innerHTML = b2 ;
          document.getElementById('C1_p10').innerHTML = c1 ;
          document.getElementById('C2_p10').innerHTML = c2 ;
        }
        if(document.getElementsByName('p11'))
        {
          var A1 = [
              'Realizo búsquedas esporádicas	en Internet de algún recurso de lectura o de video para mis clases ',
              'Archivo/ almaceno de forma organizada en mis	dispositivos recursos o archivos que he seleccionado para mis estudiantes',
              'Conozco y accedo, en alguna ocasión, a alguna plataforma o portal de contenidos educativos (comercial o libre) para buscar archivos o recursos para mi docencia.',
              'Soy capaz de incorporar enlaces activos a los textos o presentaciones que realizo para mis estudiantes ',
              'Considero que debo adaptar a mi alumnado los materiales o recursos didácticos digitales que encuentro en Internet.',
              ];
              var A2 =[
              'De vez en cuando busco recursos en la Red para mis estudiantes, pero selecciono solo aquellos que pudieran ser relevantes para las actividades de clase.',
              'Archivo/ almaceno de forma organizada en mis dispositivos y en la nube recursos o archivos que he seleccionado para mis estudiantes',
              'Conozco y accedo, frecuentemente	a plataformas o portales de contenidos educativos de los que descargo y almacenos recursos educativos digitales para uso docente.',
              'En alguna ocasión he modificado un poco algún archivo o recurso que he descargado de Internet para adaptarlo a las necesidades de mis alumnos.',
              'Incorporo a un documento o presentación	personal alguna imagen, video o archivo de sonido descargados legalmente de Internet, con fines educativos.',
              ];
              var B1 =[
              'Frecuentemente busco, localizo materiales y recursos educativos en portales y repositorios especializados, que luego utilizo en mis clases.',
              'Casi siempre que descargo contenidos digitales para mis clases realizo alguna modificación sobre los mismos para adaptarlos a mis	necesidades docentes y a los objetivos a alcanzar por parte de mi alumnado.',
              'Reviso y actualizo con frecuencia las versiones de los materiales educativos descargados y adaptados.',
              'Planifico actividades didácticas de aula para mi alumnado a partir de los recursos o contenidos que he seleccionado de Internet.',
              'En alguna ocasión he organizado actividades didácticas en línea para que el alumnado elaborase un producto o contenido digital a partir de otros objetos digitales existentes en la Red.',
              ];
              var B2 =[
              'Conozco y he utilizado en ocasiones, algún programa o aplicación que me ha permitido editar/modificar algún recurso o material educativo procedente de la Red',
              'Cuando busco, selecciono y descargo/archivo/almaceno recursos o contenidos digitales, lo hago en función de su necesidad o adecuación concreta a las tareas de aprendizaje que voy a desarrollar en el aula con el alumnado.',
              'El material educativo que selecciono para posterior adaptación y/o reutilización está siempre actualizado a la última versión encontrada en línea.',
              'Planifico, diseño y elaboro objetivos digitales educativos abiertos, a partir de otros, para su posterior utilización en el aula.',
              'Tengo mi propio espacio de almacenaje en la nube de recursos o materiales didácticos digitales en los que organizo lo que selecciono de la red, lo que adapto y lo que planifico.',
              ];
              var C1 =[
              'Utilizo	frecuentemente aplicaciones o software para crear ejercicios o actividades interactivas online propias, a partir del remezcla de otros objetos educativos digitales.',
              'Frecuentemente organizo en el aula actividades que demanden que el alumnado cree producciones basadas en el remezcla de objetos digitales (murales	o	posters, presentaciones multimedia, líneas de tiempo, blogs, etc.)',
              'He participado, en alguna ocasión, en la creación colaborativa de recursos educativos digitales con los compañeros de mi centro, para los alumnos.',
              'Fomento el diseño y la elaboración de objetivos digitales educativos abiertos por parte de mi alumnado.',
              'Dispongo de un espacio en Internet (blog, wiki, site, etc.) donde publico mis producciones de contenidos educativos digitales y donde el alumnado también publica las suyas.',
              ];
              var C2 =[
              'Fomento el remezcla de objetivos	educativos digitales por parte de mi alumnado, a partir de productos elaborados por mi para involucrar a las familias.',
              'Planifico didácticamente un espacio web o aula virtual para un curso o proyecto formativo en línea.',
              'Participo con docentes de otros centros en proyectos de creación colaborativa de recursos y materiales didácticos en línea.',
              'Fomento la creación colaborativa de objetivos digitales	educativos abiertos intercentros.',
              'He promovido y colaborado con otros compañeros docentes en la creación de bibliotecas o repositorios compartidos de recursos educativos en línea.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p11').innerHTML = a1 ;
          document.getElementById('A2_p11').innerHTML = a2 ;
          document.getElementById('B1_p11').innerHTML = b1 ;
          document.getElementById('B2_p11').innerHTML = b2 ;
          document.getElementById('C1_p11').innerHTML = c1 ;
          document.getElementById('C2_p11').innerHTML = c2 ;
        }
        if(document.getElementsByName('p12'))
        {
          var A1 = [
              'Soy consciente de que la información, las aplicaciones,	los audiovisuales	o cualquier otro producto digital tienen derechos de autor que debo respetar',
              'Apoyo que en las organizaciones educativas se fomente el uso legal de los contenidos digitales.',
              'Sé	que	existen contenidos educativos de dominio público que puedo utilizar en mi docencia.',
              'No distribuyo en la red contenidos	con derechos de autor que haya descargado de sitios de acceso de pago.',
              ];
              var A2 =[
              'En alguna ocasión he consultado algún sitio web que ofrece informaciones y recomendaciones sobre los derechos de autor y su legislación',
              'Considero	reprobable cualquier tipo de conducta de plagio o utilización ilegal de los contenidos digitales.',
              'Tengo en cuenta y trato de respetar las licencias de los contenidos	digitales	que manejo	en	mi	práctica profesional.',
              'Informo a mis compañeros del centro y a mis alumnos, de la necesidad de respetar los derechos de autor en las descargas de contenidos de Internet.',
              ];
              var B1 =[
              'Cuando busco alguna imagen, sonido, video, texto o cualquier otro tipo de recurso educativo me preocupo en comprobar qué tipo de licencia de utilización posee, porque distingo entre licencias abiertas y privativas.',
              'Habitualmente busco información y me actualizo sobre la normativa legal para la citación y reutilización de contenidos con derechos de autor.',
              'Solo	reutilizo	en	mi práctica	docente contenidos digitales que dispongan	de	licencia para ello.',
              'Apoyo que, desde las instituciones educativas, se estimule el compartir y facilitar el acceso libre al conocimiento.',
              ];
              var B2 =[
              'Siempre que utilizo algún contenido digital de otro autor para mi práctica profesional, respeto su licencia y cito su procedencia.',
              'Soy usuario habitual de recursos educativos abiertos elaborados por otros docentes y/o instituciones y respeto sus derechos de autor.',
              'Organizo y desarrollo en clase, actividades de aprendizaje destinadas al    conocimiento    de    las   normas legales, reflexión y análisis sobre el uso de los contenidos y producciones digitales, para concienciar y reflexionar sobre el plagio y la piratería digital.',
              'Informo a las familias de que deben concienciarse de que sus hijos/as solo deben descargar ni utilizar contenidos ilegales de Internet en el hogar.',
              ];
              var C1 =[
              'Conozco las diferencias entre licencias libres, privativas, así como los tipos de creative commons, copyright y copyleft.',
              'Valoro positivamente que el profesorado publique en Internet, con licencia libre, los materiales y recursos educativos que generamos.',
              'Desarrollo en el aula tareas y actividades destinadas a que el alumnado   conozca, respete   y utilice los distintos tipos de licencias de autor cuando crea y/o reutiliza contenidos digitales.',
              'Planifico, colaboro y desarrollo proyectos formativos sobre los derechos de autor en Internet con compañeros y alumnado del centro, dirigidos a toda la comunidad educativa.',
              ];
              var C2 =[
              'Publico los contenidos digitales educativos que elaboro con licencias creative commons para el acceso libre y su reutilización por parte de la comunidad educativa.',
              'Estimulo y animo a mi alumnado a que publique sus producciones digitales en Internet eligiendo la modalidad adecuada de licencias de creative commons.',
              'Planifico	y	desarrollo proyectos    formativos   de conocimiento	y	uso compartido sobre los derechos de autor en Internet, así como sobre licencias, con docentes y alumnado de mi centro y de otros centros.',
              'Participo como ponente en jornadas, seminarios o eventos de debate y reflexión sobre el uso de licencias y derechos de autor en Internet.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p12').innerHTML = a1 ;
          document.getElementById('A2_p12').innerHTML = a2 ;
          document.getElementById('B1_p12').innerHTML = b1 ;
          document.getElementById('B2_p12').innerHTML = b2 ;
          document.getElementById('C1_p12').innerHTML = c1 ;
          document.getElementById('C2_p12').innerHTML = c2 ;
        }
        if(document.getElementsByName('p13'))
        {
          var A1 = [
              'Conozco y comprendo los	fundamentos básicos		de		los dispositivos electrónicos		(pc, tabletas,	móviles) Internet',
              'Sé	que	existen distintos lenguajes de programación informática',
              'Cuando no comprendo o no sé actuar ante una tecnología digital pregunto a un compañero docente o a un usuario experto',
              'He buscado información sobre cómo	incorporar la programación informática y el pensamiento computacional al currículo.',
              ];
              var A2 =[
              'Comprendo conceptos como	programación, arquitectura		de ordenadores,	y telecomunicaciones',
              'Me intereso y preocupo en buscar información para actualizarme en mis conocimientos informáticos y de tecnología educativa.',
              'Sé	realizar	pequeñas modificaciones	de	una plantilla estándar para adaptarla a mis necesidades docentes.',
              'En alguna ocasión, he debatido en el aula con el alumnado sobre la necesidad de adquirir y/o desarrollar conocimientos y procedimientos	de programación.',
              ];
              var B1 =[
              'Comprendo	el funcionamiento	de Internet, sus estándares y componentes tecnológicos',
              'Conozco		algunas aplicaciones informáticas para el desarrollo de software,	portales, herramientas web, aplicaciones y videojuegos educativos.',
              'Creo	aplicaciones	y programo vídeo juegos educativos sencillos, usando herramientas en línea y/o software.',
              'Conozco		experiencias educativas	innovadoras en	programación	y pensamiento computacional y las he replicado en el aula en forma		de		actividad sencilla.',
              ];
              var B2 =[
              'Tengo experiencia media en utilizar algún software para programar alguna aplicación digital para la realidad aumentada, la robótica y/o videojuegos',
              'Soy consciente del potencial y posibilidades de la Inteligencia Artificial en la Educación',
              'Conozco y manejo procesos de pensamiento computacional de forma general y los pongo en práctica en mi actividad docente.',
              'Busco soluciones a procesos informáticos, de programación, o sobre tecnología educativa de forma autónoma en la red (en foros o redes de expertos y/o de usuarios informáticos).',
              ];
              var C1 =[
              'Conozco y comprendo los fundamentos avanzados de la informática,	de	las telecomunicaciones y de la ingeniería del software y sus aplicaciones educativas.',
              'Soy un usuario habitual de aplicaciones para el desarrollo de videojuegos, de robótica y/o realidad aumentada, y fomento su uso en el aula.',
              'Utilizo, en mi práctica docente, los procesos	de	pensamiento computacional que supongan modelar y descomponer un problema, procesar datos, crear algoritmos y generalizarlos, y lo fomento entre mi alumnado.',
              'Soy miembro de una comunidad de docentes expertos en programación y pensamiento computacional con los que interacciono para consultar o compartir	soluciones informáticas.',
              ];
              var C2 =[
              'He impartido alguna acción formativa sobre programación y/o robótica educativa a otros docentes',
              'Planifico, desarrollo y evalúo en línea algún proyecto	educativo destinado a que el alumnado cree algún robot, videojuego o aplicación empleando el lenguaje de programación.',
              'He programado y puesto en la	red	aplicaciones educativas para ser empleadas por otros docentes, y he fomentado el	pensamiento computacional en mi centro.',
              'Impulso	y		participo activamente		en	una comunidad en línea de docentes	expertos		en programación					y pensamiento computacional, y participo en proyectos educativos abiertos intercentros.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p13').innerHTML = a1 ;
          document.getElementById('A2_p13').innerHTML = a2 ;
          document.getElementById('B1_p13').innerHTML = b1 ;
          document.getElementById('B2_p13').innerHTML = b2 ;
          document.getElementById('C1_p13').innerHTML = c1 ;
          document.getElementById('C2_p13').innerHTML = c2 ;
        }
        if(document.getElementsByName('p14'))
        {
          var A1 = [
              'Tengo	instalado software de protección (como	antivirus, detectores		de programa maligno, antispam, correo no deseado, etc.) en mis dispositivos digitales.',
              'Conozco los posibles riesgos que pueden correr mis dispositivos digitales, pero no de forma actualizada.',
              'Entiendo los riesgos que corren mis dispositivos digitales asociados al uso de herramientas	y aplicaciones en la nube o en el acceso a determinados sitios web.',
              ];
              var A2 =[
              'Reviso y actualizo frecuentemente	el software específico de protección en mis dispositivos digitales.',
              'Estoy actualizado en lo que a nuevos riesgos que pueden correr mis dispositivos digitales se refiere y utilizo esa información a nivel básico para establecer medidas de protección en los mismos.',
              'Entiendo los riesgos, asociados al uso de herramientas en la nube y/o	acceso	a determinados sitios web, que corren mis equipos y trato de prevenirlos haciendo uso de diferentes estrategias.',
              ];
              var B1 =[
              'Conozco	y	busco frecuentemente información en la red sobre nuevos riesgos que pueden correr mis dispositivos digitales y llevo a cabo nuevas medidas de seguridad.',
              'Entiendo y busco información adicional en la red sobre los riesgos, asociados al uso de herramientas en la nube y/o acceso a determinados sitios web, que corren mis equipos y trato de prevenirlos haciendo uso de diferentes estrategias.',
              'Utilizo contraseñas o patrones de desbloqueo en mis dispositivos digitales y los de mi alumnado;	sigo recomendaciones de expertos y cambio dichas contraseñas o patrones periódicamente, en herramientas   en   la   nube y/o acceso a determinados sitios web.',
              ];
              var B2 =[
              'Utilizo e instalo software específico (como antivirus, detectores de programa maligno, etc.) y lo actualizo periódicamente para evitar nuevas amenazas existentes.',
              'Consulto	a	expertos	o usuarios avanzados sobre los nuevos riesgos que pueden correr mis dispositivos digitales, los de mis alumnos y los de mi centro, y soy autónomo aplicando nuevas medidas de seguridad en los mismos.',
              'Prevengo riesgos asociados al uso de herramientas en la nube y/o de acceso a determinados sitios web que corren los dispositivos de mi alumnado y los míos propios.',
              ];
              var C1 =[
              'Utilizo y administro de forma avanzada diferente software (como antivirus, detectores de programa maligno, etc.), tanto en mis dispositivos digitales como en los del centro y/o de mi alumnado y compañeros docentes.',
              'Manejo información actual amplia sobre las mejores estrategias para evitar riesgos en mis dispositivos digitales, en los de mi alumnado y en los del centro, y elaboro informaciones que pueden ser de utilidad a otros usuarios.',
              'Conozco los riegos en profundidad, los evito en los dispositivos digitales que utilizo, asociados al uso de herramientas online y acceso a determinados sitios web, y público en línea consejos sobre seguridad y protección, además de compartirlos con mis alumnos y/o compañeros docentes.',
              ];
              var C2 =[
              'Mejoro la seguridad de mis dispositivos digitales, los de mis alumnos, los de mi centro y los de mis compañeros docentes, dando pautas y consejos a sus usuarios para prevenir posibles riesgos.',
              'Manejo y elaboro información útil	sobre	medidas	de seguridad para dispositivos digitales, y las transmito a mis alumnos y/ compañeros docentes en forma de talleres y/o seminarios. Además, los difundo en comunidades profesionales de docentes en red.',
              'Diseño y llevo a cabo en mi centro y en otros centros, proyectos	educativos relacionados con los riesgos digitales, la protección de dispositivos digitales y en la nube, y los evalúo.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p14').innerHTML = a1 ;
          document.getElementById('A2_p14').innerHTML = a2 ;
          document.getElementById('B1_p14').innerHTML = b1 ;
          document.getElementById('B2_p14').innerHTML = b2 ;
          document.getElementById('C1_p14').innerHTML = c1 ;
          document.getElementById('C2_p14').innerHTML = c2 ;
        }
        if(document.getElementsByName('p15'))
        {
          var A1 = [
              'Soy consciente de que el uso de Internet conlleva peligros y amenazas hacia mi privacidad.',
              'Comprendo diferentes niveles	los de privacidad que se pueden configurar en los	dispositivos digitales propios y en los servicios en la nube.',
              'Almaceno en local los diferentes datos de acceso a mis cuentas. Sé que hay modos de hacerlo en línea, pero no los aplico.',
              ];
              var A2 =[
              'Soy consciente de que todos mis datos personales y los contenidos que publico en la nube son almacenados por la empresa o institución que oferta el servicio.',
              'Utilizo	la privacidad	nivel adecuado	de acuerdo a mis objetivos tanto en mis dispositivos digitales como en los servicios que uso en la nube.',
              'Almaceno y recupero de forma segura, los diferentes datos de acceso a mis cuentas, mediante herramientas y aplicaciones seguras.',
              ]
              var B1 =[
              'Aplico y renuevo estrategias de protección de datos personales en los servicios en línea en los que estoy registrado y en mis dispositivos (por ejemplo, no repito nunca las mismas contraseñas de acceso).',
              'Informo y alguna vez planteo a mi alumnado actividades de reflexión sobre la necesidad de contar con estrategias de protección segura de sus datos personales y de los contenidos que publican en la red.',
              'Busco actividades de aula, sencillas, que promuevan el respeto digital y la protección de datos personales.',
              ]
              var B2 =[
              'Fomento entre mi alumnado estrategias y hábitos de protección de datos personales en sus dispositivos y en los servicios en línea que usan en el ámbito educativo.',
              'Promuevo en mis clases actividades	 de	 aula	 que impliquen de manera práctica la protección de datos personales en dispositivos y en la nube.',
              'Diseño actividades de aula para desarrollar en los alumnos la conciencia cívica y los valores democráticos en la convivencia     e    interacción social con los demás en la red.',
              ]
              var C1 =[
              'Elaboro informaciones de utilidad para el alumnado y otros docentes de mi centro sobre seguridad en la red y protección digital de datos personales.',
              'Elaboro	la	política	de	uso responsable de la tecnología de mi centro y la consensuo con todos los miembros de mi comunidad educativa para su aplicación.',
              'Elaboro	y	comparto recomendaciones con el alumnado, mis compañeros de centro, y las familias de mi alumnado sobre cómo actuar ante situaciones de amenaza digital.',
              ]
              var C2 =[
              'Diseño y aplico proyectos educativos de centro y con otros centros sobre seguridad en la red.',
              'Comparto profesionales	con	otros docentes pautas para la protección de la privacidad personal, tanto en sus dispositivos como en la nube, los publico y los difundo.',
              'Público y comparto en comunidades profesionales de docentes proyectos educativos enfocados a identificar y actuar ante el fraude digital.',
              ]

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p15').innerHTML = a1 ;
          document.getElementById('A2_p15').innerHTML = a2 ;
          document.getElementById('B1_p15').innerHTML = b1 ;
          document.getElementById('B2_p15').innerHTML = b2 ;
          document.getElementById('C1_p15').innerHTML = c1 ;
          document.getElementById('C2_p15').innerHTML = c2 ;
        }
        if(document.getElementsByName('p16'))
        {
              var A1 = [
              'Conozco los riesgos que puede correr mi salud física y psicológica al utilizar de forma incorrecta la tecnología.',
              'Conozco los hábitos posturales correctos y sé que un uso excesivo        de       la tecnología   puede ser adictivo.',
              'Conozco la existencia de patrones de actuación	para salvaguardar la salud de un uso inadecuado de tecnología.',
              'Conozco los riesgos de adicción a la tecnología sobre todo para los usuarios más jóvenes.',
              ];
              var A2 =[
              'Conozco los riesgos que puede correr mi salud al utilizar de forma incorrecta la tecnología, y busco información en la red para mejorar el uso que hago.',
              'Uso de forma adecuada la tecnología sin dejar que afecte a mi vida personal.',
              'Me informo, para su posterior puesta en práctica en las aulas, de los patrones de actuación más adecuados para salvaguardar la salud propia y de los otros de un uso inadecuado de la tecnología.',
              'Informo a mis alumnos de los riesgos de adicción a la tecnología y estoy atento a los casos que puedan producirse.',
              ];
              var B1 =[
              'Sé cuáles son los riesgos, tanto físicos como psicológicos, que puede tener el uso incorrecto de la tecnología y aplico estrategias de prevención cuando trabajo con mis dispositivos digitales y/o en la nube.',
              'Cuido mis hábitos en cuanto a adopción de las posturas ergonómicas correctas ante los dispositivos digitales para evitar daños corporales.',
              'Desarrollo un patrón de actuación de aplicación rutinaria para acceder a la red evitando ciberacoso y cuidando mi identidad.',
              'Trabajo en el aula con mis alumnos medidas para evitar los riesgos de adicción a la tecnología.',
              ];
              var B2 =[
              'Aconsejo a otros miembros de la comunidad educativa sobre cómo prevenir los hábitos en el uso de la tecnología que son perjudiciales tanto física como psicológicamente.',
              'Elaboro actividades de aula para fomentar la prevención de malos hábitos posturales y adicciones entre mi alumnado.',
              'Explico a mi alumnado patrones de actuación en la red para evitar ciberacoso escolar y que cuiden su identidad.',
              'Utilizo un protocolo de detección de los riesgos que produce la adicción a la tecnología con mis alumnos e intento redirigirlos cuando encuentro casos.',
              ];
              var C1 =[
              'Manejo la tecnología con una actitud positiva y cercana, gestionando mis emociones cuando ocurren determinados problemas, y trato de transmitir esto a mi alumnado en el centro escolar cuando hacemos uso de los dispositivos digitales, elaborando con ellos materiales para saber cómo actuar en cada caso.',
              'En clase siempre estoy atento a los comportamientos y hábitos posturales de mi alumnado con la tecnología   con   la   intención   de corregirla, si fuera necesario, así como para intentar evitar adiciones potenciales.',
              'Promuevo entre la comunidad educativa de mi centro patrones de actuación para aplicar al acceder a la red y que eviten el ciberacoso escolar a la vez que protegen su identidad.',
              'Creo protocolos de detección y de actuación en casos de adicción a la tecnología que aplicamos en todas las aulas de mi centro.',
              ];
              var C2 =[
              'Comparto en comunidades profesionales de docentes hábitos de uso de la tecnología saludables, los fomento y los disemino en redes.',
              'Controlo el tiempo que paso trabajando en línea, con mis dispositivos y con los del centro    escolar, elaborando una rutina de uso que incluye descansos	en	pequeños intervalos y medidas para prevenir posibles problemas de salud.',
              'Pongo en práctica patrones y pautas de actuación destinadas a evitar el ciberacoso escolar y a reforzar la seguridad en la red en mi centro.',
              'Me coordino con equipos de otros centros para la creación y puesta en marcha de protocolos de detección y de actuación en casos de adicción a la tecnología.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p16').innerHTML = a1 ;
          document.getElementById('A2_p16').innerHTML = a2 ;
          document.getElementById('B1_p16').innerHTML = b1 ;
          document.getElementById('B2_p16').innerHTML = b2 ;
          document.getElementById('C1_p16').innerHTML = c1 ;
          document.getElementById('C2_p16').innerHTML = c2 ;
        }
        if(document.getElementsByName('p17'))
        {
          var A1 = [
              'Sé que existen buenos hábitos TIC que permiten	ahorrar energía cuando uso mis dispositivos.',
              'Alguna vez trato de ahorrar		recursos energéticos en el uso de	dispositivos digitales tanto en mi hogar como en mi centro escolar.',
              'Sé que aprovechando al máximo el material consumible (hardware, tinta, papel) se pueden reducir	costos, consumos		y emisiones.',
              ];
              var A2 =[
              'Conozco y aplico de vez en cuando medidas básicas de ahorro energético en el uso de mis dispositivos.',
              'Intento ahorrar recursos energéticos, adquiriendo, si es posible, dispositivos digitales más eficientes y rentables en comparación con     otros, así   como desechar     los   antiguos para reciclaje.',
              'Intento aprovechar al máximo el material consumible (hardware, tinta, papel) para limitar el impacto de las tecnologías sobre el medio ambiente',
              ];
              var B1 =[
              'Poseo información actualizada sobre los efectos negativos de las tecnologías en el medio ambiente, y elaboro algún breve material sobre ello que comparto con mi alumnado.',
              'Pongo en práctica las recomendaciones que permiten ahorrar energía optimizando el uso de los dispositivos digitales propios y de los de mis alumnos.',
              'Pongo	en	práctica recomendaciones para reducir el gasto en material consumible para limitar el impacto de las tecnologías sobre el medio ambiente.',
              ];
              var B2 =[
              'Ahorro recursos energéticos adquiriendo equipos eficientes y servicios que sean respetuosos con el medio ambiente.',
              'Transmito, comparto y promuevo entre todos los miembros de mi comunidad educativa la necesidad de realizar usos sostenibles de las tecnologías.',
              'Transmito, comparto y promuevo entre mi alumnado recomendaciones para reducir el gasto en material consumible.',
              ];
              var C1 =[
              'Elaboro informes con aspectos para tener en cuenta en lo referente a la protección del medio ambiente, cuando el centro escolar adquiere nuevos dispositivos digitales.',
              'Llevo a cabo propuestas didácticas, con mi alumnado destinadas a reciclar y reutilizar equipos en desuso del centro escolar para hacerles comprender la necesidad de ser respetuosos con el medio ambiente.',
              'Llevo a cabo propuestas didácticas para transmitir a mi alumnado la necesidad de reducir el gasto en material consumible y conciencio sobre	las	ventajas medioambientales de imprimir solo lo necesario.',
              ];
              var C2 =[
              'Llevo a cabo junto con mis compañeros medidas de ahorro energético en el centro y diseñamos y proponemos proyectos digitales de concienciación ambiental para desarrollar en las programaciones anuales del centro escolar.',
              'Difundo en otros centros escolares, en espacios digitales y en redes, buenos hábitos digitales que permiten ahorrar energía, alargar la vida    de    los    dispositivos, adquirir     equipos    digitales eficientes	y	desechar adecuadamente equipamiento obsoleto.',
              'Difundo en otros centros escolares, en espacios digitales y en redes, buenos hábitos digitales que permiten reducir el gasto en material consumible con el fin de reducir la huella de carbono del centro.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p17').innerHTML = a1 ;
          document.getElementById('A2_p17').innerHTML = a2 ;
          document.getElementById('B1_p17').innerHTML = b1 ;
          document.getElementById('B2_p17').innerHTML = b2 ;
          document.getElementById('C1_p17').innerHTML = c1 ;
          document.getElementById('C2_p17').innerHTML = c2 ;
        }
        if(document.getElementsByName('p18'))
        {
          var A1 = [
              'Conozco las características técnicas básicas de los dispositivos digitales y herramientas	o aplicaciones con las que trabajo en el aula.',
              'Sé identificar un problema técnico de los dispositivos digitales     y/o     espacios, aplicaciones y entornos con los que trabajo en el aula, pero necesito ayuda para resolverlo si es complejo.',
              'Sé que hay un responsable TIC en mi centro y me comunico con él para cuestiones relacionadas con la tecnología.',
              ];
              var A2 =[
              'Conozco y manejo las características técnicas de los dispositivos digitales, y aplicaciones o programas en línea con los que trabajo en el aula.',
              'Resuelvo problemas de poca complejidad que surgen en el aula para que no me impidan seguir con mi docencia.',
              'Informo a los responsables TIC del centro de aquellos problemas técnicos más complejos que no puedo resolver, explicando con claridad la incidencia.',
              ];
              var B1 =[
              'Antes de informar a los responsables TIC del centro de los problemas técnicos, los intento solucionar de forma individual, ayudándome de tutoriales.',
              'Resuelvo	problemas técnicos habituales en el aula   con    la    ayuda de compañeros docentes y/o algún tutorial o manual en línea o impreso.',
              'Alguna vez he comunicado y resuelto problemas técnicos a través de vías de comunicación en línea.',
              ];
              var B2 =[
              'Busco soluciones a problemas técnicos en entornos digitales que me ayuden a resolverlos y a intentar ayudar a mi alumnado en el aula.',
              'Resuelvo a nivel intermedio, y a veces de forma autónoma, los   problemas técnicos   menos habituales relacionados			con dispositivos	y	entornos digitales que manejo en mi aula.',
              'Comunico y resuelvo con frecuencia las incidencias sobre problemas técnicos a través de vías de comunicación en línea de tipología variada, desde cualquier lugar, y en cualquier momento.',
              ];
              var C1 =[
              'Resuelvo problemas técnicos complejos en el aula y en el centro, de forma autónoma y/o ayudándome	de	las herramientas que me ofrece la red.',
              'Ayudo y formo a mi alumnado y a otros miembros de mi comunidad educativa, tanto de forma presencial como virtual en la resolución de problemas técnicos.',
              'Colaboro con los responsables TIC del centro en la resolución colaborativa de los problemas técnicos, no sólo a nivel de mi aula, sino a nivel de centro.',
              ];
              var C2 =[
              'Dispongo de un espacio en línea donde publico regularmente información acerca de soluciones para resolver problemas técnicos de dispositivos digitales y software educativo.',
              'Participo de forma activa en comunidades	virtuales profesionales         con       otros compañeros docentes buscando soluciones	de	forma colaborativa.',
              'Formo a mi comunidad educativa y a otras en diferentes estrategias para resolver problemas técnicos, a través de las redes y buscando soluciones compartidas.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p18').innerHTML = a1 ;
          document.getElementById('A2_p18').innerHTML = a2 ;
          document.getElementById('B1_p18').innerHTML = b1 ;
          document.getElementById('B2_p18').innerHTML = b2 ;
          document.getElementById('C1_p18').innerHTML = c1 ;
          document.getElementById('C2_p18').innerHTML = c2 ;
        }
        if(document.getElementsByName('p19'))
        {
          var A1 = [
              'Selecciono aplicaciones digitales para resolver algunos problemas o necesidades profesionales habituales.',
              'Conozco algunas tareas que se pueden realizar mediante el uso de las tecnologías para la mejora de la docencia y el aprendizaje.',
              'Conozco que existe la posibilidad de formarme en línea, pero me cuesta mucho realizar un curso virtual',
              ];
              var A2 =[
              'Utilizo herramientas y aplicaciones digitales para resolver mis problemas y necesidades profesionales, de forma habitual.',
              'De vez en cuando, uso entornos virtuales para resolver problemas docentes e identificar necesidades de aprendizaje.',
              'Sigo cursos tutorizados en línea, cuyo diseño instruccional sea pautado y la atención	tutorial, personalizada y continua.',
              ];
              var B1 =[
              'Busco, identifico, filtro, evalúo, y selecciono herramientas y recursos digitales para después aplicarlos en el aula de cara a una gestión eficaz de mi actividad docente.',
              'Identifico las necesidades de mi alumnado en cuanto al desarrollo de su competencia digital realizo actividades de aula enfocadas a dicho desarrollo.',
              'Participo en espacios virtuales de formación en línea de tipología variada, con frecuencia.',
              ];
              var B2 =[
              'Busco, identifico, filtro, evalúo, selecciono y adapto herramientas y recursos digitales para atender a las necesidades de aprendizaje del alumnado.',
              'Diagnostico el grado de desarrollo de la competencia digital de mi alumnado y en función de ello diseño y desarrollo tareas y actividades en línea para mejorarlas.',
              'Me motiva el potencial educativo de las tecnologías de la información por lo que suelo formarme con regularidad en cursos de desarrollo	profesional docente, especialmente en línea.',
              ];
              var C1 =[
              'Evalúo de forma crítica las posibles soluciones a las necesidades tanto de mi alumnado como mías como docente, bien de forma individual, bien colaborativa a través de redes virtuales.',
              'Creo repositorios digitales para atender a las necesidades de mejora de mi competencia digital y la de mi alumnado.',
              'Me formo de manera habitual en cursos en línea que promueven el aprendizaje autónomo, la participación en comunidades profesionales de docentes y la colaboración entre pares.',
              ];
              var C2 =[
              'Diseño tareas mediante el uso de las tecnologías, las comparto con mis compañeros del centro, de forma virtual, y las actualizo de acuerdo con su retroalimentación.',
              'Participo en redes virtuales, diseño estrategias de mejora del proceso de aprendizaje y las evalúo con la intención de responder a las necesidades de la comunidad educativa con respecto a su competencia digital.',
              'Organizo y desarrollo formación a docentes para que sepan seleccionar los recursos que se adecúen a sus necesidades de aprendizaje, las de su alumnado y las del resto de su comunidad educativa.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p19').innerHTML = a1 ;
          document.getElementById('A2_p19').innerHTML = a2 ;
          document.getElementById('B1_p19').innerHTML = b1 ;
          document.getElementById('B2_p19').innerHTML = b2 ;
          document.getElementById('C1_p19').innerHTML = c1 ;
          document.getElementById('C2_p19').innerHTML = c2 ;
        }
        if(document.getElementsByName('p20'))
        {
          var A1 = [
              'Utilizo los medios digitales de forma habitual en mi profesión docente.',
              'Conozco algunas de las formas de expresión digital más usadas en el ámbito educativo. ',
              'Conozco	proyectos	de innovación		educativa digital desarrollados en centros.',
              'Sé que existen eventos docentes en línea de innovación educativa digital que me pueden ayudar, pero	no	asisto normalmente.',
              ];
              var A2 =[
              'Selecciono y uso en el aula producciones digitales y multimedia que considero valiosas para mi alumnado.',
              'Creo algún espacio en línea para mis alumnos como medio de expresión digital.',
              'He	utilizado	actividades digitales de aula en mi práctica	docente, procedentes de proyectos de innovación educativa digital que he encontrado por la red.',
              'Busco	soluciones innovadoras para mi práctica docente procedentes de experiencias expuestas en eventos docentes en línea de innovación educativa digital.',
              ];
              var B1 =[
              'Planifico y desarrollo actividades digitales para innovar mi metodología docente.',
              'Genero conocimiento con medios digitales en la puesta en práctica de algunas actividades de aula.',
              'He participado en algún proyecto	colaborativo digital junto a mis compañeros del centro escolar.',
              'He asistido, alguna vez, a eventos docentes en línea (webinars,	jornadas, seminarios, etc.) de intercambio		de experiencias educativas digitales innovadoras.',
              ];
              var B2 =[
              'Participo a través de entornos virtuales en la creación de material educativo digital para mi aula y/o centro.',
              'Uso diferentes medios de expresión digitales (blogs, poster, página web) para mostrar el trabajo de mi alumnado.',
              'Participo	en		proyectos colaborativos	digitales	e informo al resto de mi comunidad educativa del potencial innovador de los mismos.',
              'Pongo en práctica en mi aula, con mi alumnado, experiencias educativas digitales innovadoras que he aprendido en la asistencia a eventos docentes en línea.',
              ];
              var C1 =[
              'Conozco y uso diferentes medios de expresión digital (blogs, revistas digitales, páginas web, etc.), con el alumnado y el profesorado, tanto del centro escolar como de otros centros escolares, de forma creativa.',
              'Conozco los procesos para crear material digital de forma colaborativa junto a mis compañeros a través de entornos virtuales.',
              'Promuevo la participación de mi comunidad	educativa	en proyectos	colaborativos digitales y pongo en marcha uno o más en mi centro cada año académico, en los que el alumnado es el protagonista.',
              'Fomento la participación de mi centro en eventos docentes en línea de innovación educativa que se traducen en impacto de cambio metodológico en el centro.',
              ];
              var C2 =[
              'Participo de forma activa en la creación colaborativa en línea de materiales didácticos digitales innovadores y creativos.',
              'Frecuentemente creo objetos multimedia y digitales de expresión y los comparto en la red con la comunidad educativa para que sean reutilizados por otros.',
              'Participo en redes virtuales de aprendizaje	junto	a	otros compañeros de profesión, los animo a integrarse y generamos conocimiento de forma colaborativa a través de medios digitales.',
              'Participo regularmente en eventos docentes en línea, cursos, jornadas profesionales donde difundo y formo a otros docentes en el uso creativo e innovador de la tecnología y los medios digitales educativos.',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p20').innerHTML = a1 ;
          document.getElementById('A2_p20').innerHTML = a2 ;
          document.getElementById('B1_p20').innerHTML = b1 ;
          document.getElementById('B2_p20').innerHTML = b2 ;
          document.getElementById('C1_p20').innerHTML = c1 ;
          document.getElementById('C2_p20').innerHTML = c2 ;
        }
        if(document.getElementsByName('p21'))
        {
          var A1 = [
              'Me informo a través de los compañeros de los últimos avances con respecto a las competencias digitales para mi mejora profesional.',
              'Identifico las lagunas en competencia digital de mi alumnado.',
              'Aplico las tecnologías de la información y la comunicación, de forma básica, para   mejorar mi metodología docente y el aprendizaje digital de mi alumnado.',
              ];
              var A2 =[
              'Conozco los últimos avances con respecto a las competencias digitales, y de vez en cuando intento actualizarme.',
              'Identifico, analizo y busco soluciones en la red para la mejora de las lagunas en la competencia digital de mi alumnado.',
              'Realizo a nivel básico, algunas actividades sencillas por medio de las tecnologías de la información y la comunicación, que modifican en algunos aspectos mi metodología y la forma de aprender de mi alumnado.',
              ];
              var B1 =[
              'Uso espacios digitales para	mantenerme actualizado, de forma autónoma, de los últimos avances relacionados con las competencias digitales.',
              'Planifico actividades de aula procedentes de diferentes sitios web que mejoren la competencia digital de mi alumnado.',
              'Aplico usos educativos de las TIC en el aula, en los que los roles del alumnado son   activos, y   conozco algunas   estrategias para transmitir el conocimiento generado con mi alumnado.',
              ];
              var B2 =[
              'Conozco y participo en redes virtuales regularmente para estar informado de los últimos	avances relacionados con las competencias digitales y mantenerme actualizado.',
              'Elaboro y desarrollo actividades de aula y/o de centro que mejoren la competencia digital de los alumnos.',
              'Utilizo las TIC en el ámbito educativo para darle el protagonismo de su propio aprendizaje a mi alumnado y mantengo un espacio digital en el que transmito el conocimiento generado por mi alumnado.',
              ];
              var C1 =[
              'Promuevo, junto a otros compañeros de profesión, la participación en redes profesionales de actualización en línea, con la intención de mejorar de forma colaborativa nuestra competencia digital docente.',
              'Promuevo	proyectos educativos de centro en colaboración con mis compañeros de profesión para mejorar la competencia digital de mi comunidad educativa.',
              'Organizo y aplico metodologías activas basadas en el uso de las TIC, modificando los roles de los agentes educativos en   el aula y en el centro, gestionando un espacio digital educativo en colaboración con todos los miembros de mi comunidad educativa.',
              ];
              var C2 =[
              'Colaboro, ayudo y formo a otros docentes en la mejora de su competencia digital docente.',
              'Formo a otros miembros de la comunidad educativa en la actualización de su competencia digital y comparto soluciones para la mejora, en las redes.',
              'Promuevo	adaptaciones metodológicas para mejorar continuamente en el uso educativo     de     los    medios digitales en mi centro y en otros centros educativos. ',
              ];

          var a1 = Respuestas_aleatoria(A1);
          var a2 = Respuestas_aleatoria(A2);
          var b1 = Respuestas_aleatoria(B1);
          var b2 = Respuestas_aleatoria(B2);
          var c1 = Respuestas_aleatoria(C1);
          var c2 = Respuestas_aleatoria(C2);
          document.getElementById('A1_p21').innerHTML = a1 ;
          document.getElementById('A2_p21').innerHTML = a2 ;
          document.getElementById('B1_p21').innerHTML = b1 ;
          document.getElementById('B2_p21').innerHTML = b2 ;
          document.getElementById('C1_p21').innerHTML = c1 ;
          document.getElementById('C2_p21').innerHTML = c2 ;
        }

      // control del formulari
      $( document ).ready(function() {
        console.log($('.tabcontent:not(:first)'));
          //ocultem tots els steps menys el primer
          $('.tabcontent:not(:first)').hide();
          //posem el missatge "enviar" a l'últim boto i esborrem el prev
          $('.prevlinks:first').hide();
          $('.nextlinks:last').text("Envía");
          // event de clic dels botons
          $('.prevlinks, .nextlinks').click( function( event ) {
            var currentpage = $('.tabcontent:visible');
            var moveon = 1;
            if ($(this).hasClass('prevlinks')) moveon = -1;
            event.preventDefault();

              //revisem els regexp que toqui
              currentpage.find('input[data-regexp]').each(
                function () {
                  //console.log($(this).data('regexp'));
                  //console.log($(this).attr('name'));
                  var regexp = new RegExp($(this).data('regexp'));
                  if (!regexp.test( $(this).val() )) {
                    alert($(this).data('warning'));
                    $(this).focus();
                    moveon = 0;
                  }
                }
              );
              currentpage.find('input[data-require]').each(
                function () {
                  if($(this).attr('type') === 'checkbox') {
                    if (!$(this).is(':checked')) {
                      alert($(this).data('warning'));
                      $(this).focus();
                      moveon = 0;
                    }
                  }
                  else if($(this).val() == '') {
                    alert($(this).data('warning'));
                    $(this).focus();
                    moveon = 0;
                  }
                }
              );
              currentpage.find('textarea[data-require]').each(
                function () {
                  if($(this).val() == '') {
                    alert($(this).data('warning'));
                    $(this).focus();
                    moveon = 0;
                  }
                }
              );
              currentpage.find('.answer[data-require]').each(
                function () {
                  optionselected = false;
                  $(this).find('input').each(function(){
                    if (this.checked) {
                      optionselected = true;
                    }
                  });
                  if (!optionselected) {
                    alert($(this).data('warning'));
                    $(this).focus();
                    moveon = 0;
                  }
                }
              );
              // movem la pagina
              if (moveon != 0) currentpage.hide();
              if (moveon == 1) {
                if (currentpage.next('.tabcontent').length) {
                  currentpage.next('.tabcontent').show();
                }else{
                    //es un submit
                    var A1 = 0;
                    var A2 = 0;
                    var B1 = 0;
                    var B2 = 0;
                    var C1 = 0;
                    var C2 = 0;
                    var a1 = 0;
                    var a2 = 0;
                    var b1 = 0;
                    var b2 = 0;
                    var c1 = 0;
                    var total = 21;
                    var myForm = document.forms["questionari"];
                    var respuestas = ["A1","A2","B1","B2","C1","C2"];
                    for(var i=1; i <= total; i++){
                      if(myForm['p'+i].value == respuestas[0]){
                        A1=A1+1;
                      }else {
                        if(myForm["p"+i].value == respuestas[1]){
                          A2=A2+1;
                        }else {
                          if(myForm["p"+i].value == respuestas[2]){
                            B1=B1+1;
                          }else {
                            if(myForm["p"+i].value == respuestas[3]){
                              B2=B2+1;
                            }else {
                              if(myForm["p"+i].value == respuestas[4]){
                                C1=C1+1;
                              }else {
                                if(myForm["p"+i].value == respuestas[5]){
                                  C2=C2+1;
                                }
                              }
                            }
                          }
                        }
                      }
                      if(i > 0 && i <= 3){
                        var myForm = document.forms["questionari"];
                        var respuestas = ["A1","A2","B1","B2","C1","C2"];
                        if(myForm['p'+i].value == respuestas[0]){
                          a1=a1+1;
                        }else {
                          if(myForm["p"+i].value == respuestas[1]){
                            a1=a1+2;
                          }else {
                            if(myForm["p"+i].value == respuestas[2]){
                              a1=a1+3;
                            }else {
                              if(myForm["p"+i].value == respuestas[3]){
                                a1=a1+4;
                              }else {
                                if(myForm["p"+i].value == respuestas[4]){
                                  a1=a1+5;
                                }else {
                                  if(myForm["p"+i].value == respuestas[5]){
                                    a1=a1+6;
                                  }
                                }
                              }
                            }
                          }
                        }


                        let MyArray_Respuestas_B1 =[
                          a1
                        ];
                        let MyArray_Respuestas_B1_Json = JSON.stringify(MyArray_Respuestas_B1);
                        localStorage.setItem('MyArray_Respuestas_B1', MyArray_Respuestas_B1_Json);
                      }else{
                        if(i > 3 && i <= 9){
                          var myForm = document.forms["questionari"];
                        var respuestas = ["A1","A2","B1","B2","C1","C2"];
                        if(myForm['p'+i].value == respuestas[0]){
                          a2=a2+1;
                        }else {
                          if(myForm["p"+i].value == respuestas[1]){
                            a2=a2+2;
                          }else {
                            if(myForm["p"+i].value == respuestas[2]){
                              a2=a2+3;
                            }else {
                              if(myForm["p"+i].value == respuestas[3]){
                                a2=a2+4;
                              }else {
                                if(myForm["p"+i].value == respuestas[4]){
                                  a2=a2+5;
                                }else {
                                  if(myForm["p"+i].value == respuestas[5]){
                                    a2=a2+6;
                                  }
                                }
                              }
                            }
                          }
                        }



                        let MyArray_Respuestas_B2 =[
                          a2
                        ];
                        let MyArray_Respuestas_B2_Json = JSON.stringify(MyArray_Respuestas_B2);
                        localStorage.setItem('MyArray_Respuestas_B2', MyArray_Respuestas_B2_Json);
                      }else{
                        if(i > 9 && i <= 13){
                          var myForm = document.forms["questionari"];
                        var respuestas = ["A1","A2","B1","B2","C1","C2"];
                        if(myForm['p'+i].value == respuestas[0]){
                          b1=b1+1;
                        }else {
                          if(myForm["p"+i].value == respuestas[1]){
                            b1=b1+2;
                          }else {
                            if(myForm["p"+i].value == respuestas[2]){
                              b1=b1+3;
                            }else {
                              if(myForm["p"+i].value == respuestas[3]){
                                b1=b1+4;
                              }else {
                                if(myForm["p"+i].value == respuestas[4]){
                                  b1=b1+5;
                                }else {
                                  if(myForm["p"+i].value == respuestas[5]){
                                    b1=b1+6;
                                  }
                                }
                              }
                            }
                          }
                        }



                        let MyArray_Respuestas_B3 =[
                          b1
                        ];
                        let MyArray_Respuestas_B3_Json = JSON.stringify(MyArray_Respuestas_B3);
                        localStorage.setItem('MyArray_Respuestas_B3', MyArray_Respuestas_B3_Json);
                      }else{
                        if(i > 13 && i <= 17){
                          var myForm = document.forms["questionari"];
                        var respuestas = ["A1","A2","B1","B2","C1","C2"];
                        if(myForm['p'+i].value == respuestas[0]){
                          b2=b2+1;
                        }else {
                          if(myForm["p"+i].value == respuestas[1]){
                            b2=b2+2;
                          }else {
                            if(myForm["p"+i].value == respuestas[2]){
                              b2=b2+3;
                            }else {
                              if(myForm["p"+i].value == respuestas[3]){
                                b2=b2+4;
                              }else {
                                if(myForm["p"+i].value == respuestas[4]){
                                  b2=b2+5;
                                }else {
                                  if(myForm["p"+i].value == respuestas[5]){
                                    b2=b2+6;
                                  }
                                }
                              }
                            }
                          }
                        }



                        let MyArray_Respuestas_B4 =[
                          b2,
                        ];
                        let MyArray_Respuestas_B4_Json = JSON.stringify(MyArray_Respuestas_B4);
                        localStorage.setItem('MyArray_Respuestas_B4', MyArray_Respuestas_B4_Json);
                      }else{
                        if(i > 17 && i <= 21){
                          var myForm = document.forms["questionari"];
                        var respuestas = ["A1","A2","B1","B2","C1","C2"];
                        if(myForm['p'+i].value == respuestas[0]){
                          c1=c1+1;
                        }else {
                          if(myForm["p"+i].value == respuestas[1]){
                            c1=c1+2;
                          }else {
                            if(myForm["p"+i].value == respuestas[2]){
                              c1=c1+3;
                            }else {
                              if(myForm["p"+i].value == respuestas[3]){
                                c1=c1+4;
                              }else {
                                if(myForm["p"+i].value == respuestas[4]){
                                  c1=c1+5;
                                }else {
                                  if(myForm["p"+i].value == respuestas[5]){
                                    c1=c1+6;
                                  }
                                }
                              }
                            }
                          }
                        }



                        let MyArray_Respuestas_B5 =[
                          c1
                        ];
                        let MyArray_Respuestas_B5_Json = JSON.stringify(MyArray_Respuestas_B5);
                        localStorage.setItem('MyArray_Respuestas_B5', MyArray_Respuestas_B5_Json);
                      }
                      }
                      }
                      }
                      }
                    }
                    let MyArray_Respuestas =[
                      A1,
                      A2,
                      B1,
                      B2,
                      C1,
                      C2
                    ];
                    let MyArray_Respuestas_Json = JSON.stringify(MyArray_Respuestas);
                    localStorage.setItem('MyArray_Respuestas', MyArray_Respuestas_Json);




                    var A_1 = '<?=$NombreUsuario ?>';
                    var A_2 = '<?=$NombreColegio ?>';
                    let myarray_datos =[
                      A_1 ,
                      A_2 
                    ];
                    let myarray_datos_Json = JSON.stringify(myarray_datos);
                    localStorage.setItem('MyArray_datos', myarray_datos_Json);


                    $('form#questionari').submit();
                }
              }
                if (moveon == -1) currentpage.prev('.tabcontent').show();
        
                $('html,body').animate({scrollTop: $('.questionari')},'slow');
          }
        );
      });
    </script>
  </body>
</html>

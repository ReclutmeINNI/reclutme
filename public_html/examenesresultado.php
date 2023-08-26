<?php include ("conexion.php"); ?>  
<!DOCTYPE html>

<html lang="es">
        <head>
    <link rel="stylesheet" href="css/csstabla.css"/>
        </head>
<body>

<?php



/*Significados Audescriptivos*/

$Empuje="Empuje: Responde a los retos con prontitud, es flexible, tiende a ser iniciador, responde rápidamente a la competencia.";
$BuenaVoluntad="Buena voluntad: Es equilibrado y cordial, se muestra simpático y le gusta establecer relaciones armoniosas con la gente que cruza su camino desde el primer contacto.";
$Confianza="Confianza en si mismo: Lucha, por ganarse a la gente, pero suele ser terco en cuanto a su punto de vista; se cree capaz de actuar adecuadamente de forma exitosa en cualquier situación.";
$Reflexion="Reflexión o concentración: Tiende a Controlarse y a ser paciente, se mueve con moderación y premeditación, piensa bien antes de actuar en la mayoría de las situaciones, tiene mucho cuidado y gran concentración.";
$Adaptabilidad="Adaptabilidad: Actúa de forma cuidadosa y conservadora, está dispuesto a modificar su postura con tal de llegar al objetivo dispuesto, es un seguidor ejemplar de las políticas hasta el grado de parecer poco flexible o arbitrario; desea la armonía y prefiere las atmósferas favorables.";
$Sensibilidad="Sensibilidad: Evita conscientemente riesgos y problemas, busca significados ocultos. Puede mostrarse tenso cuando está bajo presión; si no tiene apoyo en sus decisiones se mostrará intranquilo hasta conseguir esa afirmación.";
$Perfeccionista="Perfeccionista: Seguidor apegado al orden y los métodos o sistemas, necesita conocer los hechos o procedimientos establecidos para tomar decisiones, se apega meticulosamente a los estándares establecidos.";
$Persistente="Persistente: Cuando decide algo no se desvía del objetivo hasta lograrlo, toma su propio ritmo de trabajo y se apega a él.";
$Paciente="Paciente: Prefiere una tarea o proyecto a la vez, constante y consistentemente; prefiere áreas que requieren profundizar y especializarse, busca estabilizar su ambiente es ecuánime bajo las presiones.";
$Habilidad ="Habilidad de contacto: Busca gente entusiasta y con chispa, es abierto y optimista, se gana a la gente a través de la persuasión y el acercamiento emotivo.";
$Individualista="Individualista: Actúa positivamente ante la oposición y de manera directa toma una posición y lucha por ella, está dispuesto a correr riesgos y puede ignorar las jerarquías.";
$Creativo="Creativo: Es crítico, incisivo y lógico; es crítico con la gente y gusta de los retos en cuanto análisis y originalidad.";
$Ambivalencia="Ambivalencia: Cuando él empuje o dominancia y el apego a reglas son igualmente fuertes tienden a anularse entre sí.";
$Banderaalta="Bandera roja alta: Cuando el apego y la dominancia son ambas altas, la, persona busca la igualdad entre el cumplimiento de los objetivos y la calidad de los mismos; por ello se le considera perfeccionista pues no solo busca muchas soluciones, sino la mejor solución al problema. No obstante, la compensación de fuerza le crea una confusión que le hace dudar, vacilar y presentar tensión.";
$Banderabaja="Bandera roja baja: Esta persona tiende a resistirse a peticiones de adaptabilidad solicitadas por los demás. Prefiere operarsolo pero no luchará por su independencia. Se mostrará, en repetidas ocasiones, reacio a seguirsugerencias de otros, aunque puede no tener ninguna otra idea que proponer.";

/*Significados motivaciones de trabajo M */
$MotivacionCD="
DESEA: <br>
1. Procedimientos estandarizados <br>
2. Seguridad (protección), ambiente protegido <br>
3. Referencias <br>
4. Reafirmación <br>
5. Poca responsabilidad <br>
6. Un líder a quien seguir <br>
7. Verse libre de conflictos <br>
8. Un futuro seguro <br>
NECESITA: <br>
1. Trabajo de precisión <br>
2. Planeación <br>
3. Más confianza <br>
4. Ayuda en las situaciones difíciles <br>
5. Descripción exacta del trabajo <br>
6. Tareas claras <br>
7. Ayuda en tareas nuevas o difíciles <br>
8. Un clima participativo <br>
9. Técnicas y herramientas para manejar conflictos <br>
";
$MotivacionCI="
DESEA: <br>
1. Procedimientos estandarizados <br>
2. Seguridad (protección), ambiente protegido <br>
3. Referencias <br>
4. Reafirmación <br>
5. Atención personal <br>
6. Personas a su servicio <br>
7. Un formato lógico <br>
8. Respeto <br>
9. Conversación directa <br>
10. Objetividad. <br>
NECESITA: <br>
1. Trabajo de precisión <br>
2. Planeación <br>
3. Más confianza <br>
4. Soporte o ayuda en situaciones difíciles <br>
5. Participación de equipo <br>
6. Habilidades sociales <br>
7. Respuestas lógicas <br>
8. Sinceridad <br>
9. Retroalimentación <br>
";
$MotivacionCS="
DESEA: <br>
1. Procedimientos estandarizados <br>
2. Seguridad (protección), ambiente protegido <br>
3. Referencias de su trabajo <br>
4. Reafirmación <br>
5. Atención personal <br>
6. Personas a su servicio <br>
7. Trabajo generalizado <br>
8. Verse libre de la rutina <br>
NECESITA: <br>
1. Trabajo de precisión <br>
2. Planeación <br>
3. Más confianza <br>
4. Soporte o ayuda en situaciones difíciles <br>
5. Participación de equipo <br>
6. Organización <br>
7. Plazos que cumplir <br>
8. Hacer las cosas una segunda vez <br>
9. Sistemas de trabajo <br>";
$MotivacionDC="
DESEA: <br>
1. Poder, autoridad <br>
2. Retos <br>
3. Oportunidad de avance <br>
4. Logros, resultados <br>
5. Actividades variadas <br>
6. Identificación con la compañía <br>
7. Cero restricciones <br>
8. Ser evaluada por resultados <br>
9. Cero supervisión <br>
NECESITA: <br>
1. Desarrollar valores intrínsecos <br>
2. Conocer los resultados de sus acciones <br>
3. Entender a las personas <br>
4. Empatía <br>
5. Técnicas basadas en experiencias prácticas <br>
6. Reconocer que existen límites <br>
7. Ser evaluada por resultados <br>
8. Ayuda con los detalles <br>
9. Autoridad <br>
";
$MotivacionDI="
DESEA: <br>
1. Poder, autoridad <br>
2. Retos <br>
3. Oportunidad de avance <br>
4. Logros, resultados <br>
5. Actividades variadas <br>
7. Libertad de supervisión <br>
8. Que se le deje sola <br>
9. Respeto <br>
10. Conversación directa <br>
11. Objetividad <br>
NECESITA: <br>
1. Desarrollar valores intrínsecos <br>
2. Conocer los resultados de sus acciones <br>
3. Entender a las personas <br>
4. Empatía <br>
5. Técnicas basadas en experiencias prácticas <br>
6. Habilidades sociales <br>
7. Contactos con la gente <br>
8. Sinceridad <br>
9. Tiempo para pensar <br>
10. Retroalimentación <br>
";
$MotivacionDS="
DESEA: <br>
1. Poder, autoridad <br>
2. Posición y prestigio <br>
3. Dinero y cosas materiales <br>
4. Retos <br>
5. Logros, resultados <br>
6. Actividades variadas <br>
7. Viajes <br>
8. Más tiempo durante el día <br>
NECESITA: <br>
1. Aprender a tomar su paso y relajarse <br>
2. Conocer los resultados de sus acciones <br>
3. Entender a las personas. Enfoque lógico <br>
4. Empatía <br>
5. Conciencia de que las sanciones existen <br>
6. Organización <br>
7. Vacaciones <br>
8. Exámenes médicos anuales <br>
9. Aceptar a las personas más lentas <br>                    
10. Presupuestos <br>
";
$MotivacionIC="
DESEA: <br>
1. Reconocimiento <br>
2. Recompensas monetarias <br>
3. Libertad de palabra y acción <br>
4. Condiciones favorables de trabajo <br>
5. Identificación con la compañía <br>
6. Cero restricciones <br>
7. Ser evaluada por resultados <br>
8. Cero supervisión <br>
NECESITA: <br>
1. Control de su tiempo <br>
2. Control emocional <br>
3. Control de su desempeño por proyectos <br>
4. Supervisión más estricta <br>
5. Un jefe tolerante <br>
6. Reconocer que existen límites <br>
7. Ser evaluada por resultados <br>
8. Ayuda con los detalles <br>
9. Autoridad <br>
";
$MotivacionID="
DESEA: <br>
1. Reconocimiento <br>
2. Recompensas monetarias <br>
3. Libertad de palabra y acción <br>
4. Condiciones favorables de trabajo <br>
5. Paz y protección <br>
6. Verse libre de conflictos <br>
7. Tiempo para pensar <br>
NECESITA: <br>
1. Control de su tiempo <br>
2. Control emocional <br>
3. Control de su desempeño por proyectos <br>
4. Supervisión más estricta <br>
5. Tareas claras <br>
6. Ayuda en tareas nuevas o difíciles <br>
7. Un clima participativo (grupos) <br>
8. Métodos para traducir ideas en acciones. <br>
";
$MotivacionIS="
DESEA: <br>
1. Reconocimiento <br>
2. Recompensas monetarias <br>
3. Libertad de palabra y acción <br>
4. Condiciones favorables de trabajo <br>
5. Atención personal <br>
6. Personas a su servicio <br>
7. Trabajo generalizado <br>
8. Verse libre de la rutina <br>
NECESITA: <br>
1. Control de su tiempo <br>
2. Control emocional <br>
3. Control de su desempeño por proyectos <br>
4. Supervisión más estricta <br>
5. Conciencia de que las sanciones existen <br>
6. Organización <br>
7. Vacaciones <br>
8. Exámenes médicos anuales <br>
9. Aceptar a las personas más lentas <br>
10. Presupuestos <br>
";
$MotivacionSC="
DESEA: <br>
1. Status <br>
2. Situación segura <br>
3. Procedimientos usuales <br>
4. Apreciación constante <br>
5. Reconocimientos <br>
6. Libertad, independencia, cero restricciones <br>
7. Ser evaluada por resultados <br>
8. Cero supervisión <br>
NECESITA: <br>
1. Recompensas materiales <br>
2. Métodos que ahorren tiempo <br>
3. Alguien que la apoye <br>
4. Reafirmación <br>
5. Sentimiento de importancia <br>
6. Un jefe tolerante <br>
7. Reconocer que existen límites <br>
8. Ser evaluada por resultados <br>
9. Ayuda en los detalles <br>
10. Autoridad <br>
";
$MotivacionSD="
DESEA: <br>
1. Status <br>
2. Situación segura <br>
3. Procedimientos usuales <br>
4. Apreciación constante <br>
5. Reconocimientos <br>
6. Un líder a quien seguir <br>
7. Verse libre de conflictos <br>
8. Tiempo para pensar <br>
NECESITA: <br>
1. Recompensas materiales <br>
2. Métodos que ahorren tiempo <br>
3. Reafirmación <br>
4. Sentimiento de importancia <br>
5. Resultados de calidad que la satisfagan <br>
6. Compañeros capaces <br>
7. Tareas claras <br>
8. Métodos alternativos <br>
9. Apoyo en situaciones difíciles <br>            
10. Técnicas y herramientas para manejar conflictos. <br>
";
$MotivacionSI="
DESEA: <br>
1. Status <br>
2. Situación segura <br>
3. Procedimientos usuales <br>
4. Reconocimiento y apreciación constante <br>
5. Sinceridad <br>
6. Un formato lógico <br>
7. Respeto <br>
8. Conversación directa <br>
9. Objetividad <br>
NECESITA: <br>
1. Recompensas <br>
2. Pareja que la apoye en sus actividades <br>
3. Reafirmación <br>
4. Colaboradores capaces <br>
5. Contacto con la gente <br>
6. Oportunidad para hacer preguntas <br>
7. Retroalimentación <br>
8. Sinceridad <br>
";

echo $MotivacionCI;

/*Significados bajo presion L */

$BajoCD="
1. Depender de la supervisión <br>
2. Dudar antes de actuar sin precedente <br>
3. Estar atada a procedimientos y métodos <br>
4. Resistirse a aceptar responsabilidades <br>
5. Ponerse a la defensiva al verse amenazada <br>
6. Renunciar a su posición para evitar controversias <br>
7. Ser dependiente <br>
8. Ser demasiada conservadora <br>
9. Ser evasiva <br>
";
$BajoCI="
1. Depender de la supervisión <br>
2. Dudar antes de actuar sin precedente <br>
3. Estar atada a procedimientos y métodos <br>
4. Resistirse a aceptar responsabilidades <br>
5. Desea explicaciones completas antes de hacer un cambio <br>
6. Ser distante y cortante <br>
7. Lastimar los sentimientos de los demás <br>
8. Ser ecuánime y fría <br>
";
$BajoCS="
1. Depender de la supervisión <br>
2. Dudar antes de actuar sin precedentes <br>
3. Atarse a procedimientos y métodos <br>
4. Dejarse abrumar por los detalles <br>
5. Resistirse a aceptar responsabilidades <br>
6. Renunciar a su posición para evitar problemas <br>
7. Ser inconsistente <br>
8. Dejar inconcluso lo que empieza <br>
9. Dedicarse a demasiadas actividades al mismo tiempo <br>
10. Tener problemas de salud. <br>
";
$BajoDI="
1. Excederse en sus facultades o prerrogativas. <br>
2. Inspirar temor en los demás <br>
3. Imponerse a la gente <br>
4. Ser cortante <br>
5. Ser critica y buscar errores <br>
6. Ser distante <br>
7. Carecer de empatía <br>
8. Lastimar los sentimientos de los demás <br>
9. Ser retraída, ecuánime y fría <br>
10. Preferir otras cosas que la gente <br>
";
$BajoDS="
1. Excederse en sus prerrogativas <br>
2. Actuar intrépidamente <br>
3. Ser cortante <br>
4. Ser crítica y buscar errores <br>
5. Descuidar los detalles <br>
6. Resistirse a participar como parte de un equipo <br>
7. Ser inconsistente <br>
8. Dejar inconcluso lo que empieza <br>
9. Dedicarse a demasiadas actividades al mismo tiempo <br>
10. Tener problemas de salud <br>
11. Invadir el espacio de los demás <br>
";
$BajoDC="
1. Preocuparse más por su popularidad que de los resultados <br>
2. Actuar siguiendo su corazón en lugar de su inteligencia <br>
3. Ser inconsistente en sus conclusiones <br>
4. Tomar decisiones basada en análisis superficiales <br>
5. Ser poco realista al evaluar a las personas <br>
6. Ser descuidada con los detalles <br>
7. Confiar en las personas indiscriminadamente <br>
8. Tener dificultad para planear y controlar su tiempo <br>
";
$BajoIC="
1. Actuar siguiendo su corazón en lugar de su inteligencia <br>
2. Ser inconsistente en sus conclusiones <br>
3. Tomar decisiones basada en análisis superficiales <br>
4. Ser descuidada con los detalles <br>
5. Tener dificultad para planear y controlar su tiempo <br>
6. Ignorar las instrucciones <br>
7. No documentarse <br>
8. Ser distraída <br>
";
$BajoID="
1. Actuar siguiendo su corazón en lugar de su inteligencia <br>
2. Ser inconsistente en sus conclusiones <br>
3. Tomar decisiones basada en análisis superficiales <br>
4. Ponerse a la defensiva al verse amenazada <br>
5. Renunciar a su posición para evitar controversias <br>
6. Ser dependiente <br>
7. Ser demasiada conservadora <br>
8. Ser evasiva <br>
";
$BajoIS="
1. Preocuparse más por su popularidad que de los resultados <br>
2. Actuar siguiendo su corazón en lugar de su inteligencia <br>
3. Ser inconsistente en sus conclusiones <br>
4. Tomar decisiones basada en análisis superficiales <br>
5. Ser descuidada con los detalles <br>
6. Dejar inconcluso lo que empieza <br>
7. Dedicarse a demasiadas actividades al mismo tiempo <br>
8. Tener problemas de salud <br>
";
$BajoSC="
1. Hacer esfuerzos para mantener el “status quo” <br>
2. Requerir mucho tiempo para ajustarse al cambio <br>
3. Tener dificultades para cumplir con compromisos <br>
4. Carecer de imaginación <br>
5. Esperar órdenes antes de actuar <br>
6. Tener dificultad para establecer prioridades <br>
7. Ser poco convencional <br>
8. Ser descuidada en los detalles <br>
9. Ignorar las instrucciones <br>
";
$BajoSD="
1. Hacer esfuerzos para mantener el “status quo” <br>
2. Requerir mucho tiempo para ajustarse al cambio <br>
3. Tener dificultades para cumplir con compromisos <br>
4. Carecer de imaginación <br>
5. Renunciar a su posición para evitar controversias <br>
6. Ser dependiente <br>
7. Ser demasiada conservadora <br>
8. Ser evasiva <br>
";
$BajoSI="
1. Requerir mucho tiempo para ajustarse al cambio <br>
2. Hacer esfuerzos para mantener el “status quo” <br>
3. Tener dificultades para cumplir con compromisos <br>
4. Carecer de imaginación <br>
5. Continua haciendo las cosas como siempre <br>
6. Esperar órdenes antes de actuar <br>
7. Ser distante y cortante <br>
8. Ser crítica <br>
9. Carecer de empatía <br>
10. Ser ecuánime, fría <br>
";


echo $Empuje;

#echo $nombre;
$listlestraspositivas=[$_REQUEST['Persuasivomas'],$_REQUEST['Agresivomas'],$_REQUEST['Agradablemas'],$_REQUEST['Cautelosomas'],$_REQUEST['Docilmas'],$_REQUEST['Dispuestomas'],
$_REQUEST['Fuerzamas'],$_REQUEST['Confiadomas'],$_REQUEST['Ecuanimemas'],$_REQUEST['Disciplinadomas'],$_REQUEST['Competitivomas'],$_REQUEST['Admirablemas'],
$_REQUEST['Obedientemas'],$_REQUEST['Respetuosomas'],$_REQUEST['Valientemas'],$_REQUEST['Adaptablemas'],$_REQUEST['Amigueromas'],$_REQUEST['Conformemas'],
$_REQUEST['Aventureromas'],$_REQUEST['Indulgentemas'],$_REQUEST['Parlanchinmas'],$_REQUEST['Cohibidomas'],$_REQUEST['Diplomaticomas'],$_REQUEST['Inquietomas']];

$listlestrasnegativas=[$_REQUEST['Persuasivomenos'],$_REQUEST['Agresivomenos'],$_REQUEST['Agradablemenos'],$_REQUEST['Cautelosomenos'],$_REQUEST['Docilmenos'],$_REQUEST['Dispuestomenos'],
$_REQUEST['Fuerzamenos'],$_REQUEST['Confiadomenos'],$_REQUEST['Ecuanimemenos'],$_REQUEST['Disciplinadomenos'],$_REQUEST['Competitivomenos'],$_REQUEST['Admirablemenos'],
$_REQUEST['Obedientemenos'],$_REQUEST['Respetuosomenos'],$_REQUEST['Valientemenos'],$_REQUEST['Adaptablemenos'],$_REQUEST['Amigueromenos'],$_REQUEST['Conformemenos'],
$_REQUEST['Aventureromenos'],$_REQUEST['Indulgentemenos'],$_REQUEST['Parlanchinmenos'],$_REQUEST['Cohibidomenos'],$_REQUEST['Diplomaticomenos'],$_REQUEST['Inquietomenos']];



# Variables contador de letras DISC
$letradmas=0;
$letraimas=0;
$letrasmas=0;
$letracmas=0;
$letradmenos=0;
$letraimenos=0;
$letrasmenos=0;
$letracmenos=0;

#Sumador de letras DISC en el area positivo
foreach($listlestraspositivas as $letramas){    
        echo $letramas;
        echo "<br>";
        if($letramas=="D"){
        $letradmas++;
        } 
        if($letramas=="I"){
        $letraimas++;
        } 
        if($letramas=="S"){
        $letrasmas++;
        } 
        if($letramas=="C"){
        $letracmas++;
        } 
} 
echo $letradmas;
echo $letraimas;
echo $letrasmas;
echo $letracmas;

echo "<br>";
#Sumador de letras DISC en el area negativo
foreach($listlestrasnegativas as $letramenos){    
        echo $letramenos;
        echo "<br>";
        if($letramenos=="D"){
        $letradmenos++;
        } 
        if($letramenos=="I"){
        $letraimenos++;
        } 
        if($letramenos=="S"){
        $letrasmenos++;
        } 
        if($letramenos=="C"){
        $letracmenos++;
        } 
} 
echo $letradmenos;
echo $letraimenos;
echo $letrasmenos;
echo $letracmenos;



echo "<br>";
echo "<br>";

$letrad=$letradmas-$letradmenos;
$letrai=$letraimas-$letraimenos;
$letras=$letrasmas-$letrasmenos;
$letrac=$letracmas-$letracmenos;


function burbuja(&$arreglo)
{

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4 - 1; $j++) {
            if ($arreglo[$j] < $arreglo[$j + 1]) {
                $temporal = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temporal;
            }
        }
    }
}
$miarreglo=[$letrad,$letrai,$letras,$letrac];

echo "Antes de ordenar: ";

print_r ($miarreglo);
# Lo ordenamos
burbuja($miarreglo);
echo "<br>";
echo "Después de ordenar: ";
print_r ($miarreglo);
echo "<br>";
echo $miarreglo[0];
echo $miarreglo[3];
echo "<br>";

/*If autodescripcion calculo*/

if($miarreglo[0]==$letrad){
        if($miarreglo[3]==$letrai){
                $totalletras="DI";
        }
        if($miarreglo[3]==$letras){
                $totalletras="DS";
        }
        if($miarreglo[3]==$letrac){
                $totalletras="DC";
        } 
}
if($miarreglo[0]==$letrai){
        if($miarreglo[3]==$letrad){
                $totalletras="ID";
        }
        if($miarreglo[3]==$letras){
                $totalletras="IS";
        }
        if($miarreglo[3]==$letrac){
                $totalletras="IC";
        } 
}
if($miarreglo[0]==$letras){
        if($miarreglo[3]==$letrai){
                $totalletras="SI";
        }
        if($miarreglo[3]==$letrad){
                $totalletras="SD";
        }
        if($miarreglo[3]==$letrac){
                $totalletras="SC";
        } 
}
if($miarreglo[0]==$letrac){
        if($miarreglo[3]==$letrai){
                $totalletras="CI";
        }
        if($miarreglo[3]==$letras){
                $totalletras="CS";
        }
} 
/*
if($miarreglo[0]==$letrad and $miarreglo[3]==$letrac){
        $totalletras="DC=";
}
if($miarreglo[0]>=0 and $miarreglo[3]>=0){
        if($miarreglo[0]==$letrac and $miarreglo[3]==$letrad){
                 $totalletras="CD+";
        }      
}
if($miarreglo[0]<0 and $miarreglo[3]<0){
        if($miarreglo[0]==$letrac and $miarreglo[3]==$letrad){
                 $totalletras="CD-";
        }         
}*/

echo "total letras = $totalletras";
echo "<br>";
$nombre=$_POST['id'];

/* If autodescripcion asignaciona base de datos*/
if($totalletras=="DS"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Empuje','$MotivacionDS','$BajoDS')"; 
    }
else if($totalletras=="ID"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$BuenaVoluntad','$MotivacionID','$BajoID')"; 
}
else if($totalletras=="IC"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Confianza','$MotivacionIC','$BajoIC')";    
}
else if($totalletras=="SI"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Reflexion','$MotivacionSI','$BajoSI')";     
}
else if($totalletras=="CD"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Adaptabilidad','$MotivacionCD','$BajoCD')";    
}
else if($totalletras=="CS"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Sensibilidad','$MotivacionCS','$BajoCS')";     
}
else if($totalletras=="CI"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Perfeccionista','$MotivacionCI','$BajoCD')";  
}
else if($totalletras=="SC"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Persistente','$MotivacionSC','$BajoSC')";    
}
else if($totalletras=="SD"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Paciente','$MotivacionSD','$BajoSD')";    
}
else if($totalletras=="IS"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Habilidad','$MotivacionIS','$BajoIS')"; 
}
else if($totalletras=="DC"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Individualista','$MotivacionDC','$BajoDC')";      
}
else if($totalletras=="DI"){
        $insertar = "INSERT INTO tablacleaver(Id, ValorDISC, Autodescriptivo, Motivaciones, Bajopresion) VALUE ('$nombre','$totalletras','$Creativo','$MotivacionDI','$BajoDI')";  
}
/*else if($totalletras=="DC="){
        $insertar = "INSERT INTO tablacleaver VALUE ('$nombre','$letradmas','$letraimas','$letrasmas','$letracmas',
        '$letradmenos','$letraimenos','$letrasmenos','$letracmenos',
        '$letrad','$letrai','$letras','$letrac','$totalletras','$Ambivalencia')";     
}
else if($totalletras=="CD+"){
        $insertar = "INSERT INTO tablacleaver VALUE ('$nombre','$letradmas','$letraimas','$letrasmas','$letracmas',
        '$letradmenos','$letraimenos','$letrasmenos','$letracmenos',
        '$letrad','$letrai','$letras','$letrac','$totalletras','$Banderaalta')";     
}
else if($totalletras=="CD-"){
        $insertar = "INSERT INTO tablacleaver VALUE ('$nombre','$letradmas','$letraimas','$letrasmas','$letracmas',
        '$letradmenos','$letraimenos','$letrasmenos','$letracmenos',
        '$letrad','$letrai','$letras','$letrac','$totalletras','$Banderabaja')";     
}*/


echo "Mas:-------------: $letradmas,$letraimas,$letrasmas,$letracmas";echo "<br>";
echo "Menos:-----------: $letradmenos,$letraimenos,$letrasmenos,$letracmenos";echo "<br>";
echo "Total:-------------:$letrad,$letrai,$letras,$letrac";echo "<br>";
echo "Auttodescripcion: $totalletras";




if(mysqli_query($link,$insertar)){
    echo '<script> alert("Guardado correctamente");
        location.href="examenes.php"
        </script>';
    }else{
        echo "Fallo";
    }
    mysqli_close();    


?>
</body>
</html>

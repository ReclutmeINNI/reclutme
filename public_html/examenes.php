<?php
include('menu1.php');

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reclut.me/Examenes</title>
    <link rel="stylesheet" href="css/estilos-menuempleo.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/csstabla.css"/>
    
</head>
<body>
<p>Instrucciones para responder el test, seleccione por grupo de 4 palabras una palabra que mas le describa y seleccionelo en el campo mas, y tambien seleccione una palabra del grupo de 4 que menos le describa en el campo menos. (No puede elegir la misma palabra en mas y en menos).</p>
          
<div class="container">
<div class="table-container">
        <form class="form" name="tabcleaver" method="post" action="examenesresultado.php">
              <p>Id: <input type="text" name="id"></p>
            <table  class="table-rwd" border="2">
                <caption>Test Cleaver</caption>
                
                <tr class="basetabla">
                    <td></td>
                    <td data-titulo="mas">Mas</td>
                    <td data-titulo="menos">Menos</td>
                    <td></td>
                    <td data-titulo="mas">Mas</td>
                    <td data-titulo="menos">Menos</td>
                    <td></td>
                    <td data-titulo="mas">Mas</td>
                    <td data-titulo="menos">Menos</td>
                    <td></td>
                    <td data-titulo="mas">Mas</td>
                    <td data-titulo="menos">Menos</td>
                </tr>
                
                <tr>
                <td>
                    <p> Persuasivo</p>
                    <p> Gentil</p>
                    <p> Humilde</p>
                    <p> Original</p>
                    </td>
                    <td><input type="radio" name="Persuasivomas" value="I"/></p>
                    <p><input type="radio" name="Persuasivomas" value="S"/></p>
                    <p><input type="radio" name="Persuasivomas" value="C"/></p>
                    <p><input type="radio" name="Persuasivomas" value="0"/></p>
                    </td>
                    <td><input type="radio" name="Persuasivomenos" value="0"/></p>
                    <p><input type="radio" name="Persuasivomenos" value="S"/></p>
                    <p><input type="radio" name="Persuasivomenos" value="C"/></p>
                    <p><input type="radio" name="Persuasivomenos" value="D"/></p>
                    </td>

                    <td>
                    <p> Fuerza de Voluntad</p>
                    <p> Mente Abierta</p>
                    <p> Complaciente</p>
                    <p> Animoso</p>
                    </td>
                    <td><input type="radio" name="Fuerzamas" value="0"/></p>
                    <p><input type="radio" name="Fuerzamas" value="C"/></p>
                    <p><input type="radio" name="Fuerzamas" value="S"/></p>
                    <p><input type="radio" name="Fuerzamas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Fuerzamenos" value="D"/></p>
                    <p><input type="radio" name="Fuerzamenos" value="0"/></p>
                    <p><input type="radio" name="Fuerzamenos" value="S"/></p>
                    <p><input type="radio" name="Fuerzamenos" value="I"/></p>
                    </td>

                    <td>
                    <p> Obediente</p>
                    <p> Quisquilloso</p>
                    <p> Inconquistable</p>
                    <p> Juguetón</p>
                    </td>
                    <td><input type="radio" name="Obedientemas" value="S"/></p>
                    <p><input type="radio" name="Obedientemas" value="0"/></p>
                    <p><input type="radio" name="Obedientemas" value="D"/></p>
                    <p><input type="radio" name="Obedientemas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Obedientemenos" value="0"/></p>
                    <p><input type="radio" name="Obedientemenos" value="C"/></p>
                    <p><input type="radio" name="Obedientemenos" value="D"/></p>
                    <p><input type="radio" name="Obedientemenos" value="I"/></p>
                    </td>

                    <td>
                    <p> Aventurero</p>
                    <p> Receptivo</p>
                    <p> Cordial</p>
                    <p> Moderado</p>
                    </td>
                    <td><input type="radio" name="Aventureromas" value="D"/></p>
                    <p><input type="radio" name="Aventureromas" value="C"/></p>
                    <p><input type="radio" name="Aventureromas" value="0"/></p>
                    <p><input type="radio" name="Aventureromas" value="S"/></p>
                    </td>
                    <td><input type="radio" name="Aventureromenos" value="D"/></p>
                    <p><input type="radio" name="Aventureromenos" value="0"/></p>
                    <p><input type="radio" name="Aventureromenos" value="I"/></p>
                    <p><input type="radio" name="Aventureromenos" value="S"/></p>
                    </td>

                    
                </tr> 
                
                <tr>
                <td>
                    <p> Agresivo</p>
                    <p> Alma de la Fiesta</p>
                    <p> Comodino</p>
                    <p> Temeroso</p>
                    </td>
                    <td><input type="radio" name="Agresivomas" value="D"/></p>
                    <p><input type="radio" name="Agresivomas" value="I"/></p>
                    <p><input type="radio" name="Agresivomas" value="S"/></p>
                    <p><input type="radio" name="Agresivomas" value="0"/></p>
                    </td>
                    <td><input type="radio" name="Agresivomenos" value="0"/></p>
                    <p><input type="radio" name="Agresivomenos" value="I"/></p>
                    <p><input type="radio" name="Agresivomenos" value="S"/></p>
                    <p><input type="radio" name="Agresivomenos" value="C"/></p>
                    </td>

                    <td>
                    <p> Confiado</p>
                    <p> Simpatizador</p>
                    <p> Tolerante</p>
                    <p> Afirmativo</p>
                    </td>
                    <td><input type="radio" name="Confiadomas" value="I"/></p>
                    <p><input type="radio" name="Confiadomas" value="0"/></p>
                    <p><input type="radio" name="Confiadomas" value="0"/></p>
                    <p><input type="radio" name="Confiadomas" value="D"/></p>
                    </td>
                    <td><input type="radio" name="Confiadomenos" value="0"/></p>
                    <p><input type="radio" name="Confiadomenos" value="S"/></p>
                    <p><input type="radio" name="Confiadomenos" value="C"/></p>
                    <p><input type="radio" name="Confiadomenos" value="D"/></p>
                    </td>

                    <td>
                    <p> Respetuoso</p>
                    <p> Emprendedor</p>
                    <p> Optimista</p>
                    <p> Servicial</p>
                    </td>
                    <td><input type="radio" name="Respetuosomas" value="C"/></p>
                    <p><input type="radio" name="Respetuosomas" value="D"/></p>
                    <p><input type="radio" name="Respetuosomas" value="I"/></p>
                    <p><input type="radio" name="Respetuosomas" value="S"/></p>
                    </td>
                    <td><input type="radio" name="Respetuosomenos" value="0"/></p>
                    <p><input type="radio" name="Respetuosomenos" value="D"/></p>
                    <p><input type="radio" name="Respetuosomenos" value="I"/></p>
                    <p><input type="radio" name="Respetuosomenos" value="S"/></p>
                    </td>

                    <td>
                    <p> Indulgente</p>
                    <p> Estetico</p>
                    <p> Vigoroso</p>
                    <p> Sociable</p>
                    </td>
                    <td><input type="radio" name="Indulgentemas" value="S"/></p>
                    <p><input type="radio" name="Indulgentemas" value="0"/></p>
                    <p><input type="radio" name="Indulgentemas" value="D"/></p>
                    <p><input type="radio" name="Indulgentemas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Indulgentemenos" value="S"/></p>
                    <p><input type="radio" name="Indulgentemenos" value="C"/></p>
                    <p><input type="radio" name="Indulgentemenos" value="D"/></p>
                    <p><input type="radio" name="Indulgentemenos" value="I"/></p>
                    </td>

                </tr> 
                
                <tr>
                <td>
                    <p> Agradable</p>
                    <p> Temeroso de Dios</p>
                    <p> Tenaz</p>
                    <p> Atractivo</p>
                    </td>
                    <td><input type="radio" name="Agradablemas" value="0"/></p>
                    <p><input type="radio" name="Agradablemas" value="C"/></p>
                    <p><input type="radio" name="Agradablemas" value="D"/></p>
                    <p><input type="radio" name="Agradablemas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Agradablemenos" value="S"/></p>
                    <p><input type="radio" name="Agradablemenos" value="C"/></p>
                    <p><input type="radio" name="Agradablemenos" value="D"/></p>
                    <p><input type="radio" name="Agradablemenos" value="I"/></p>
                    </td>

                    <td>
                    <p> Ecuánime</p>
                    <p> Preciso</p>
                    <p> Nervioso</p>
                    <p> Jovial</p>
                    </td>
                    <td><input type="radio" name="Ecuanimemas" value="S"/></p>
                    <p><input type="radio" name="Ecuanimemas" value="C"/></p>
                    <p><input type="radio" name="Ecuanimemas" value="0"/></p>
                    <p><input type="radio" name="Ecuanimemas" value="0"/></p>
                    </td>
                    <td><input type="radio" name="Ecuanimemenos" value="S"/></p>
                    <p><input type="radio" name="Ecuanimemenos" value="C"/></p>
                    <p><input type="radio" name="Ecuanimemenos" value="D"/></p>
                    <p><input type="radio" name="Ecuanimemenos" value="I"/></p>
                    </td>

                    <td>
                    <p> Valiente</p>
                    <p> Inspirador</p>
                    <p> Sumiso</p>
                    <p> Tímido</p>
                    </td>
                    <td><input type="radio" name="Valientemas" value="D"/></p>
                    <p><input type="radio" name="Valientemas" value="I"/></p>
                    <p><input type="radio" name="Valientemas" value="0"/></p>
                    <p><input type="radio" name="Valientemas" value="0"/></p>
                    </td>
                    <td><input type="radio" name="Valientemenos" value="0"/></p>
                    <p><input type="radio" name="Valientemenos" value="0"/></p>
                    <p><input type="radio" name="Valientemenos" value="S"/></p>
                    <p><input type="radio" name="Valientemenos" value="C"/></p>
                    </td>

                    <td>
                    <p> Parlanchín</p>
                    <p> Controlado</p>
                    <p> Convencional</p>
                    <p> Decisivo</p>
                    </td>
                    <td><input type="radio" name="Parlanchinmas" value="I"/></p>
                    <p><input type="radio" name="Parlanchinmas" value="S"/></p>
                    <p><input type="radio" name="Parlanchinmas" value="0"/></p>
                    <p><input type="radio" name="Parlanchinmas" value="D"/></p>
                    </td>
                    <td><input type="radio" name="Parlanchinmenos" value="I"/></p>
                    <p><input type="radio" name="Parlanchinmenos" value="S"/></p>
                    <p><input type="radio" name="Parlanchinmenos" value="C"/></p>
                    <p><input type="radio" name="Parlanchinmenos" value="D"/></p>
                    </td>

                    
                </tr> 
                
                <tr>
                <td>
                    <p> Cauteloso</p>
                    <p> Determinado</p>
                    <p> Convincente</p>
                    <p> Bonachón</p>
                    </td>
                    <td><input type="radio" name="Cautelosomas" value="C"/></p>
                    <p><input type="radio" name="Cautelosomas" value="D"/></p>
                    <p><input type="radio" name="Cautelosomas" value="I"/></p>
                    <p><input type="radio" name="Cautelosomas" value="S"/></p>
                    </td>
                    <td><input type="radio" name="Cautelosomenos" value="C"/></p>
                    <p><input type="radio" name="Cautelosomenos" value="0"/></p>
                    <p><input type="radio" name="Cautelosomenos" value="I"/></p>
                    <p><input type="radio" name="Cautelosomenos" value="0"/></p>
                    </td>

                    <td>
                    <p> Disciplinado</p>
                    <p> Generoso</p>
                    <p> Animoso</p>
                    <p> Persistente</p>
                    </td>
                    <td><input type="radio" name="Disciplinadomas" value="C"/></p>
                    <p><input type="radio" name="Disciplinadomas" value="S"/></p>
                    <p><input type="radio" name="Disciplinadomas" value="0"/></p>
                    <p><input type="radio" name="Disciplinadomas" value="D"/></p>
                    </td>
                    <td><input type="radio" name="Disciplinadomenos" value="0"/></p>
                    <p><input type="radio" name="Disciplinadomenos" value="S"/></p>
                    <p><input type="radio" name="Disciplinadomenos" value="I"/></p>
                    <p><input type="radio" name="Disciplinadomenos" value="D"/></p>
                    </td>

                    <td>
                    <p> Adaptable</p>
                    <p> Disputador</p>
                    <p> Indiferente</p>
                    <p> Sangre Liviana</p>
                    </td>
                    <td><input type="radio" name="Adaptablemas" value="C"/></p>
                    <p><input type="radio" name="Adaptablemas" value="D"/></p>
                    <p><input type="radio" name="Adaptablemas" value="0"/></p>
                    <p><input type="radio" name="Adaptablemas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Adaptablemenos" value="0"/></p>
                    <p><input type="radio" name="Adaptablemenos" value="D"/></p>
                    <p><input type="radio" name="Adaptablemenos" value="S"/></p>
                    <p><input type="radio" name="Adaptablemenos" value="I"/></p>
                    </td>

                    <td>
                    <p> Cohibido</p>
                    <p> Exacto</p>
                    <p> Franco</p>
                    <p> Buen Compañero</p>
                    </td>
                    <td><input type="radio" name="Cohibidomas" value="0"/></p>
                    <p><input type="radio" name="Cohibidomas" value="C"/></p>
                    <p><input type="radio" name="Cohibidomas" value="D"/></p>
                    <p><input type="radio" name="Cohibidomas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Cohibidomenos" value="S"/></p>
                    <p><input type="radio" name="Cohibidomenos" value="0"/></p>
                    <p><input type="radio" name="Cohibidomenos" value="D"/></p>
                    <p><input type="radio" name="Cohibidomenos" value="I"/></p>
                    </td>

                    
                </tr> 

                <tr>
                <td>
                    <p> Dócil</p>
                    <p> Atrevido</p>
                    <p> Leal</p>
                    <p> Encantador</p>
                    </td>
                    <td><input type="radio" name="Docilmas" value="0"/></p>
                    <p><input type="radio" name="Docilmas" value="D"/></p>
                    <p><input type="radio" name="Docilmas" value="S"/></p>
                    <p><input type="radio" name="Docilmas" value="I"/></p>
                    </td>
                    <td><input type="radio" name="Docilmenos" value="C"/></p>
                    <p><input type="radio" name="Docilmenos" value="D"/></p>
                    <p><input type="radio" name="Docilmenos" value="0"/></p>
                    <p><input type="radio" name="Docilmenos" value="I"/></p>
                    </td>

                    <td>
                    <p> Competitivo</p>
                    <p> Alegre</p>
                    <p> Considerado</p>
                    <p> Armonioso</p>
                    </td>
                    <td><input type="radio" name="Competitivomas" value="D"/></p>
                    <p><input type="radio" name="Competitivomas" value="0"/></p>
                    <p><input type="radio" name="Competitivomas" value="S"/></p>
                    <p><input type="radio" name="Competitivomas" value="0"/></p>
                    </td>
                    <td><input type="radio" name="Competitivomenos" value="D"/></p>
                    <p><input type="radio" name="Competitivomenos" value="I"/></p>
                    <p><input type="radio" name="Competitivomenos" value="S"/></p>
                    <p><input type="radio" name="Competitivomenos" value="C"/></p>
                    </td>

                    <td>
                    <p> Amiguero</p>
                    <p> Paciente</p>
                    <p> Confianza en si Mismo</p>
                    <p> Mesurado para Hablar</p>
                    </td>
                    <td><input type="radio" name="Amigueromas" value="I"/></p>
                    <p><input type="radio" name="Amigueromas" value="S"/></p>
                    <p><input type="radio" name="Amigueromas" value="D"/></p>
                    <p><input type="radio" name="Amigueromas" value="C"/></p>
                    </td>
                    <td><input type="radio" name="Amigueromenos" value="I"/></p>
                    <p><input type="radio" name="Amigueromenos" value="S"/></p>
                    <p><input type="radio" name="Amigueromenos" value="D"/></p>
                    <p><input type="radio" name="Amigueromenos" value="0"/></p>
                    </td>

                    <td>
                    <p> Diplomático</p>
                    <p> Audaz</p>
                    <p> Refinado</p>
                    <p> Satisfecho</p>
                    </td>
                    <td><input type="radio" name="Diplomaticomas" value="C"/></p>
                    <p><input type="radio" name="Diplomaticomas" value="D"/></p>
                    <p><input type="radio" name="Diplomaticomas" value="0"/></p>
                    <p><input type="radio" name="Diplomaticomas" value="S"/></p>
                    </td>
                    <td><input type="radio" name="Diplomaticomenos" value="0"/></p>
                    <p><input type="radio" name="Diplomaticomenos" value="D"/></p>
                    <p><input type="radio" name="Diplomaticomenos" value="I"/></p>
                    <p><input type="radio" name="Diplomaticomenos" value="S"/></p>
                    </td>



                    
                </tr>
                
                <tr>
                <td>
                    <p> Dispuesto</p>
                    <p> Deseoso</p>
                    <p> Consecuente</p>
                    <p> Entusiasta</p>
                    </td>
                    <td><input type="radio" name="Dispuestomas" value="S"/></p>
                    <p><input type="radio" name="Dispuestomas" value="0"/></p>
                    <p><input type="radio" name="Dispuestomas" value="C"/></p>
                    <p><input type="radio" name="Dispuestomas" value="0"/></p>
                    </td>
                    <td><input type="radio" name="Dispuestomenos" value="0"/></p>
                    <p><input type="radio" name="Dispuestomenos" value="0"/></p>
                    <p><input type="radio" name="Dispuestomenos" value="C"/></p>
                    <p><input type="radio" name="Dispuestomenos" value="D"/></p>
                    </td>

                    <td>
                    <p> Admirable</p>
                    <p> Bondadoso</p>
                    <p> Resignado</p>
                    <p> Carácter Firme</p>
                    </td>
                    <td><input type="radio" name="Admirablemas" value="I"/></p>
                    <p><input type="radio" name="Admirablemas" value="S"/></p>
                    <p><input type="radio" name="Admirablemas" value="0"/></p>
                    <p><input type="radio" name="Admirablemas" value="D"/></p>
                    </td>
                    <td><input type="radio" name="Admirablemenos" value="0"/></p>
                    <p><input type="radio" name="Admirablemenos" value="0"/></p>
                    <p><input type="radio" name="Admirablemenos" value="C"/></p>
                    <p><input type="radio" name="Admirablemenos" value="D"/></p>
                    </td>

                    <td>
                    <p> Conforme</p>
                    <p> Confiable</p>
                    <p> Pacifico</p>
                    <p> Positivo</p>
                    </td>
                    <td><input type="radio" name="Conformemas" value="0"/></p>
                    <p><input type="radio" name="Conformemas" value="S"/></p>
                    <p><input type="radio" name="Conformemas" value="C"/></p>
                    <p><input type="radio" name="Conformemas" value="D"/></p>
                    </td>
                    <td><input type="radio" name="Conformemenos" value="S"/></p>
                    <p><input type="radio" name="Conformemenos" value="I"/></p>
                    <p><input type="radio" name="Conformemenos" value="C"/></p>
                    <p><input type="radio" name="Conformemenos" value="D"/></p>
                    </td>

                    <td>

                    <p> Inquieto</p>
                    <p> Popular</p>
                    <p> Buen Vecino</p>
                    <p> Devoto</p>
                    </td>
                    <td><input type="radio" name="Inquietomas" value="D"/></p>
                    <p><input type="radio" name="Inquietomas" value="I" /></p>
                    <p><input type="radio" name="Inquietomas" value="S"/></p>
                    <p><input type="radio" name="Inquietomas" value="C"/></p>
                    </td>
                    <td><input type="radio" name="Inquietomenos" value="D"/></p>
                    <p><input type="radio" name="Inquietomenos" value="I"/></p>
                    <p><input type="radio" name="Inquietomenos" value="S"/></p>
                    <p><input type="radio" name="Inquietomenos" value="C"/></p>
                    </td>

                </tr>
            </table>
        <input id="botones" class="button button1" type="submit" value="Enviar">
        </form>

</div>
</div>



</body>
</html>  
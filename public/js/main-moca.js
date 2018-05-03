
google.charts.load('current', {'packages':['corechart']});
function getRandom() {
    return Math.random() * (100 - 0) + 0;
  }

function dibujo(pais){
    // Load the Visualization API and the corechart package.

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

        // Create the data table.
        console.log(pais);
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'rramas');
        data.addColumn('number', 'Porcentajes');
        data.addRows([
            ['Social', getRandom()],
            ['politico', getRandom()],
            ['Economico', getRandom()],
            ['Natural', Math.random() * (60 - 0) + 0],
            ['Otros', getRandom()]
        ]);

        // Set chart options
        var options = {'title':pais,
                        'width':'100%',
                        'legend': {position: 'top', maxLines: 3},
                        'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }

}
var paisesdelmundo=['Afganistán','Albania','Alemania','Andorra','Angola'
    ,'Antigua_y_Barbuda','Arabia_Saudita','Argelia','Argentina','Armenia'
    ,'Australia','Austria','Azerbaiyán','Bahamas','Bangladés','Barbados','Baréin'
    ,'Bélgica','Belice','Benín','Bielorrusia','Birmania','Bolivia','Bosnia_y_Herzegovina','Botsuana'
    ,'Brasil','Brunéi','Bulgaria','Burkina_Faso','Burundi','Bután','Cabo_Verde','Camboya','Camerún'
    ,'Canadá','Catar','Chad','Chile','China','Chipre','Ciudad_del_Vaticano','Colombia','Comoras','Corea_del_Norte','Corea_del_Sur','Costa_de_Marfil','Costa_Rica','Croacia','Cuba','Dinamarca'
    ,'Dominica','Ecuador','Egipto','El_Salvador','Emiratos_Árabes_Unidos','Eritrea','Eslovaquia','Eslovenia','España'
    ,'Estados Unidos','Estonia','Etiopía','Filipinas','Finlandia','Fiyi','Francia','Gabón'
    ,'Gambia','Georgia','Ghana','Granada','Grecia','Guatemala','Guyana','Guinea','Guinea_ecuatorial','Guinea_Bisáu'
    ,'Haití','Honduras','Hungría','India','Indonesia','Irak'
    ,'Irán','Irlanda','Islandia','Islas_Marshall','Islas_Salomón','Israel','Italia','Jamaica'
    ,'Japón','Jordania','Kazajistán','Kenia','Kirguistán','Kiribati','Kuwait','Laos','Lesoto'
    ,'Letonia','Líbano','Liberia','Libia','Liechtenstein','Lituania','Luxemburgo','Madagascar','Malasia'
    ,'Malaui','Maldivas','Malí','Malta','Marruecos','Mauricio','Mauritania','México','Micronesia','Moldavia','Mónaco','Mongolia','Montenegro','Mozambique','Namibia','Nauru'
    ,'Nepal','Nicaragua','Níger'
    ,'Nigeria','Noruega','Nueva_Zelanda','Omán','Países_Bajos','Pakistán','Palaos','Panamá','Papúa_Nueva_Guinea'
    ,'Paraguay','Perú','Polonia','Portugal','Reino_Unido','República_Centroafricana','República_Checa'
    ,'República de Macedonia','República_del_Congo','República_Democrática_del_Congo','República_Dominicana','República_Sudafricana','Ruanda','Rumanía','Rusia','Samoa','San_Cristóbal_y_Nieves'
    ,'San_Marino','San_Vicente_y_las_Granadinas','Santa_Lucía','Santo_Tomé_y_Príncipe','Senegal','Serbia','Seychelles','Sierra Leona','Singapur','Siria','Somalia','Sri_Lanka','Suazilandia'
    ,'Sudán','Sudán_del_Sur','Suecia','Suiza','Surinam','Tailandia','Tanzania','Tayikistán','Timor_Oriental','Togo','Tonga','Trinidad_y_Tobago','Túnez','Turkmenistán','Turquía','Tuvalu','Ucrania'
    ,'Uganda','Uruguay','Uzbekistán','Vanuatu','Venezuela','Vietnam','Yemen','Yibuti','Zambia','Zimbabue'];

    var capa = document.getElementById("paises");
for(i=0;i<paisesdelmundo.length;i++){
    comillas='"';
    comillas=comillas+paisesdelmundo[i]+comillas;
    capa.insertAdjacentHTML("beforeend","<div class='col-4'><a href='#mapa' onClick='dibujo("+comillas+")' class='card mt-2 bg-light'><div class='card-body'><div class='text-center'><p><span class='font-weight-bold'>"+paisesdelmundo[i]+"</span></p></div></div></a></div>");
    if(i+1==paisesdelmundo.length){
        dibujo(paisesdelmundo[i-70]);
    }
}
/*function consumir() {
    $(document).ready(function() {
        $.ajax({
            url: "http://rest-service.guides.spring.io/greeting"
        }).then(function(data) {
           console.log(data.id);
           console.log(data.content);
        });
    });
    /*console.log("entrada uno");
    $.ajax({
        url: "https://openlinkgoogle.herokuapp.com/mocainfconpany?empresa=google";
    }).then(function(data) {
        console.log(" enetrado dos");
       console.log(data.url);       //$('.greeting-content').append(data.content);
    });
    console.log("e salido tres");
    //location.href="http://www.fento.com.mx";
}*/   


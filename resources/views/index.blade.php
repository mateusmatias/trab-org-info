<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Predição Amazônia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            p {
                text-align: justify;
                text-indent: 50px;
            }
            h2{
                text-align: center;
            }
            figure.logo{
                text-align: center;
                display: block;
                margin-top: 10px;
                margin-bottom: -20px;
            }
            figure.logo img{
                width: 20%;
            }
            figure.main{
                position: relative;
            }

            figure.main img{
                width: 100%;
                height: 100%;
                opacity: 50%;
            }
            figcaption.cima{
                padding: 30px 80px 30px 80px;
                text-align: center;
                position: absolute;
                top: 0px;
                background-color: rgba(43, 255, 0, 0.300);
                color: rgb(0, 0, 0);
                width: 100%;
                box-sizing: border-box;
            }
            figcaption.baixo{
                text-align: center;
                position: absolute;
                bottom: 40px;
                right: 15px;
                color: rgb(0, 0, 0);
                width: 100%;
                box-sizing: border-box;
            }
            #previsao{
                background-color: rgba(43, 120, 0, 0.6);;
                padding: 20px;
                color: black;
            }
            div.margem1{
                margin: 40px;
            }
            #foto1{
                width: 100%;
                box-sizing: border-box;
            }
            nav#menu{
                display: block;
                padding-top: 30px;
            }
            input[type=date]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                display: none;
            }
            p.grande{
                font-size: 24px;
                text-align: center;
                text-indent: 58px;
            }
            div.row{
                padding:20px;
            }
            #map {
                height: 650px;
                width: 100%;
            }

        </style>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <div id="interface">
            <header id="cabecalho">

                <nav id="menu">
                    <figure class="logo">
                        <img src="{{ asset('/img/Amazon.png')  }}">
                    </figure>
                </nav>

            </header>

        </div>

        <div id="introducao" class="margem1">
            <figure class="main">
                <img id="foto1" src="{{ asset('/img/amazonia.jpg')  }}">
                <figcaption class="cima">
                    <p class ="grande">O descaso com a proteção e a preservação do meio ambiente é um dos 
                    problemas mais alarmantes destacado nos últimos tempos, com riscos reais de danos permanentes ao planeta.</p>
                    <p class="grande" style="margin-top: -10px;">Nessa linha, o desconhecimento da população sobre a gravidade da situação infelizmente contribui para a perda desse valioso 
                    aliado na luta pela aprovação de medidas pró-ambientais.</p>
                    <h3>É isso que estamos tentando reverter.</h3>
                </figcaption>
                <figcaption class="baixo">
                    <ul type="none">
                    <a href="#" class="btn btn-success btn-lg">Mapa</a>
                    <a href="#predicao" class="btn btn-success btn-lg">Predição</a>
                    </ul>
                </figcaption>
            </figure>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Desmatamento na Amazônia Legal</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-2">
                        Um dos problemas enfretados na região da Amazônia é o desmatamento, organizações como o INPE
                        (Instituto Nacional de Pesquisas Espaciais) coletam constantemente diversos dados sobre a região
                        da Amazõnia Legal, tais dados foram usados para criar um modelo estatístico capaz de prever o desmatamento em uma data qualquer.
                    </div>

                    <div class="mb-2">
                        O projeto PRODES do INPE faz uso de satélites da classe LANDSAT (20 a 30 metros de resolução espacial)
                        para monitoramento da Amazônia Legal, o monitoramento gera um acervo de dados que possuem várias classificações
                        (desmatamento, floresta, não floresta, hidrografia e nuvem). As estimativas do PRODES são consideradas
                        confiáveis pelos cientistas nacionais e internacionais. Resultados recentes, a partir de análises
                        realizadas com especialistas independentes, indicam nível de precisão próximo a 95%.
                    </div>

                    <div class="mb-2">
                        Com os dados de origem confiável verificamos e filtramos então o conjunto em busca de possíveis dados faltantes, inconsistentes,
                        i.e, poluição. Em nosso modelo simples focamos apenas nos atributos Município, Área do Município e Área de desflorestamento.
                        A área de desflorestamento é o acúmulo de área sem floresta no município até o ano observado. Uma leve visualização do desmatamento ao longo
                        dos anos no município de Altamira no Pará nos sugeriu um modelo simples e bem conhecido, o linear.
                    </div>

                    <div class="text-center mb-2">
                        <img src="{{ asset('/img/altamira.png') }}"><br>
                        Área desflorestada em Altamira ao longo dos anos.
                    </div>

                    <div class="mb-2">
                        Como são muitos municípios para se analisar fizemos uma suposição, todo município tem um padrão
                        de comportamento de desflorestamento similar à Altamira, ou seja, linear. Desta forma modelamos cada município
                        e salvamos os coeficientes "a" e "b" das retas ajustadas em um banco de dados, com isso podemos fazer extrapolações para
                        prever o índice de desflorestamento em uma data futura. A ferramenta abaixo oferece esta funcionalidade.
                    </div>

                    <div class="mb-2">
                        Fonte dos dados: <a href="http://www.dpi.inpe.br/prodesdigital/prodesmunicipal.php">http://www.dpi.inpe.br/prodesdigital/prodesmunicipal.php</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="previsao" class="margem1">

            <div class="row mb-1">
                <div class="col">
                    <h2>Modelo preditivo de desmatamento da Amazônia Legal</h2>
                </div>
            </div>

            <div class="div-map">
                <div id="map"></div>
                <!--<iframe id="map" src="https://www.google.com/maps/d/embed?mid=1Thd9ixT1UCnlkmioZ9tlkxm3G_av1l9M&key={{ env('GOOGLE_API_KEY', '') }}" width="100%" height="650"></iframe>-->
            </div>

            <div class="row mb-4">
                <div class="col text-center" style="color: #404040">
                    <div>Escolha uma data e um município. A predição apresentada representa a porcentagem de área de desflorestamento na data fornecida</div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div style="width: 500px; margin: auto">
                        <small class="form-text mb-2" style="color: #404040">Município e data a serem utilizados no modelo</small>
                        <form class="form-inline">
                            <select id="input-municipio" class="form-control mr-2" name="input_municipio">
                                @foreach($municipios as $municipio)
                                    <option value="{{$municipio->id}}">{{$municipio->nome}}</option>
                                @endforeach
                            </select>
                            <input id="input-data" type="date" class="form-control" name="input_data">
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <h3 style="text-align: center;">MUNICÍPIO</h3>
                </div>
                <div class="col-sm">
                    <h3 style="text-align: center;">PREVISÃO DE <br> ÁREA DESFLORESTADA</h3>
                </div>
                <div class="col-sm">
                    <h3 style="text-align: center;">DATA</h3>
                </div>
            </div>

            <div class="row" style="color: #606060">
                <div class="col-sm">
                    <h3 id="municipio" style="text-align: center;">-</h3>
                </div>
                <div class="col-sm">
                    <h1 id="predicao" class="text-danger" style="text-align: center;">-</h1>
                </div>
                <div class="col-sm">
                    <h3 id="data" style="text-align: center;">-</h3>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY', '') }}&callback=initMap"></script>

        <script>
            function initMap() {
                var uluru = {lat: -25.344, lng: 131.036};

                var map = new google.maps.Map(document.getElementById('map'), 
                                              {zoom: 4, center: uluru});

                var src = 'https://www.dropbox.com/s/urxmyw297196s5j/Divis%C3%B5es%20Municipais%20Amaz%C3%B4nia%20Legal.kml?dl=1';

                var kmlLayer = new google.maps.KmlLayer(src, {
                  suppressInfoWindows: true,
                  preserveViewport: false,
                  map: map
                });

                kmlLayer.addListener('click', function(event) {
                  var content = event.featureData.infoWindowHtml;
                  var testimonial = document.getElementById('capture');
                  testimonial.innerHTML = content;
                });

                console.log(map);
                console.log(kmlLayer);
            }

            $(document).ready(function(){

                // Coleta municipios provindos do backend no início
                var municipios = {!! json_encode($municipios) !!} ;


                // Observa mudanças no select de municípios e aplica predição
                $("#input-municipio").change(function() {
                    make_prediction($('#input-municipio option:selected').val(), get_date($('#input-data').val()));
                });


                // Observa mudanças no input de data e aplica predição
                $('#input-data').change(function() {
                    make_prediction($('#input-municipio option:selected').val(), get_date($('#input-data').val()));
                });

                // responsável por mostrar os resultados na tela
                function make_prediction(municipio_id, data){
                    var municipio = municipios.find(x => x.id == municipio_id);
                    if(!municipio)
                        return;

                    $('#municipio').text(municipio.nome);

                    if(data)
                        $('#data').text(data.split('-')[2] + '/' + data.split('-')[1] + '/' + data.split('-')[0]);
                    else
                        $('#data').text('-');

                    // calcula predição
                    if (municipio && data){
                        var a = municipio.modelo.a;
                        var b = municipio.modelo.b;
                        var x = 1.0*data.split('-')[0] + ((data.split('-')[1] - 1)*30 + 1.0*data.split('-')[2])/365.0;
                        var predicao = parseFloat(100*(a* x + b)).toFixed(2) + '%';
                        $('#predicao').text(predicao);
                    }
                    else
                        $('#predicao').text('-');
                }


                // Parse data
                function get_date(date){
                    if(!date)
                        return null;

                    var date = new Date(date);
                    day = date.getDate() + 1;
                    month = date.getMonth() + 1;
                    year = date.getFullYear();
                    return [year, month, day].join('-');
                }

            });
        </script>

    </body>
</html>

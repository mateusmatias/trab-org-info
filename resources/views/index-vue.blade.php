<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Predição Amazônia</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>

    <div id="app">
        <v-app>

            <nav>
                <v-app-bar color="green darken-1" dark app fixed>
                    <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

                    <v-toolbar-title class="d-none d-sm-block">
                        <img src="{{ asset('/img/Amazon-white.png') }}" height="40" position="center">
                    </v-toolbar-title>

                    <v-spacer></v-spacer>

                    <v-btn text>
                        Minha conta
                    </v-btn>

                    <v-menu left bottom>
                        <template v-slot:activator="{ on }">
                            <v-btn icon v-on="on">
                                <v-icon>mdi-settings</v-icon>
                            </v-btn>
                        </template>

                        <v-list>
                            <v-list-item @click="() => {}">
                                <v-list-item-icon class="mr-2">
                                    <v-icon>mdi-settings</v-icon>
                                </v-list-item-icon>
                                <v-list-item-title>Configurações</v-list-item-title>
                            </v-list-item>

                            <v-list-item @click="() => {}">
                                <v-list-item-icon class="mr-2">
                                    <v-icon>mdi-bug</v-icon>
                                </v-list-item-icon>
                                <v-list-item-title>Reportar problema</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>

                    <v-tooltip bottom>
                        <template v-slot:activator="{ on }">
                            <v-btn icon v-on="on">
                                <v-icon>mdi-logout</v-icon>
                            </v-btn>
                        </template>
                        <span>Sair</span>
                    </v-tooltip>

                </v-app-bar>


                <v-navigation-drawer v-model="drawer" app temporary class="green darken-3" dark style="border: 0px">
                    <v-list-item class="mb-2">
                        <v-list-item-avatar>
                            <v-img src="https://middle.pngfans.com/20190810/x/profile-icons-png-computer-icons-user-profile-clip-273d4b984777b62e.jpg"></v-img>
                        </v-list-item-avatar>

                        <v-list-item-content>
                            <v-list-item-title>Username</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>

                    <v-divider></v-divider>

                    <v-list dense>
                        <v-list-item>
                            <v-list-item-icon>
                                <v-icon>mdi-view-dashboard</v-icon>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title>Página inicial</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                        <v-subheader>Geral</v-subheader>

                        <v-list-item>
                            <v-list-item-icon>
                                <v-icon>mdi-google-maps</v-icon>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title>Mapa Interativo</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                        <v-list-item>
                            <v-list-item-icon>
                                <v-icon>mdi-chart-areaspline</v-icon>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title>Predição</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>

                </v-navigation-drawer>

            </nav>



            <v-content>
                <v-container fluid class="px-4 pb-5">

                    <v-row>
                        <v-col>
                            <v-parallax src="https://i.pinimg.com/originals/8c/14/ce/8c14ce496a567b215a8cc135eec7c9c6.jpg">
                                <v-row align="center" justify="center"
                                >
                                    <v-col class="text-center" cols="12">
                                        <img src="{{ asset('/img/Amazon-white.png') }}" height="150">
                                    </v-col>
                                </v-row>
                            </v-parallax>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col align="center" justify="center">
                            <div class="mb-5">
                                <p class ="grande">O descaso com a proteção e a preservação do meio ambiente é um dos
                                    problemas mais alarmantes destacado nos últimos tempos, com riscos reais de danos permanentes ao planeta.</p>
                                <p class="grande" style="margin-top: -10px;">Nessa linha, o desconhecimento da população sobre a gravidade da situação infelizmente contribui para a perda desse valioso
                                    aliado na luta pela aprovação de medidas pró-ambientais.</p>
                                <h3 class="title mt-5">É isso que estamos tentando reverter.</h3>
                            </div>

                            <v-btn color="green" class="mr-3 mt-3" dark>Mapa</v-btn>
                            <v-btn color="green" class="mt-3" dark>Predição</v-btn>

                        </v-col>
                    </v-row>

                    <v-divider class="my-5"></v-divider>

                    <v-row class="mt-5">
                        <v-col align="center" justify="center">
                            <h2 class="display-1">Desmatamento na Amazônia Legal</h2>
                        </v-col>
                    </v-row>

                    <v-row class="mb-5">
                        <v-col align="center">
                            <div class="mb-3">
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
                        </v-col>

                        <v-col class="pa-5" align="center" justify="center">
                            <img src="{{ asset('/img/altamira.png') }}" width="75%"><br>
                            Área desflorestada em Altamira ao longo dos anos.
                        </v-col>
                    </v-row>

                    <v-row class="mt-5 pb-5">
                        <v-col class="pa-5" align="center" justify="center">
                            <img src="{{ asset('/img/altamira_ajuste1.png') }}" width="75%"><br>
                            Ajuste linear do desflorestamento de Altamira.
                        </v-col>

                        <v-col>
                            <div class="mb-3">
                                Com os dados de origem confiável verificamos e filtramos então o conjunto em busca de possíveis dados faltantes, inconsistentes,
                                i.e, poluição. Em nosso modelo simples focamos apenas nos atributos Município, Área do Município e Área de desflorestamento.
                                A área de desflorestamento é o acúmulo de área sem floresta no município até o ano observado. Uma leve visualização do desmatamento ao longo
                                dos anos no município de Altamira no Pará nos sugeriu um modelo simples e bem conhecido, o linear.
                            </div>

                            <div class="mb-3">
                                Como são muitos municípios para se analisar fizemos uma suposição, todo município tem um padrão
                                de comportamento de desflorestamento similar à Altamira, ou seja, linear. Desta forma modelamos cada município
                                e salvamos os coeficientes "a" e "b" das retas ajustadas em um banco de dados, com isso podemos fazer extrapolações para
                                prever o índice de desflorestamento em uma data futura. A ferramenta abaixo oferece esta funcionalidade.
                            </div>

                            <div class="mb-2">
                                Fonte dos dados: <a href="http://www.dpi.inpe.br/prodesdigital/prodesmunicipal.php">http://www.dpi.inpe.br/prodesdigital/prodesmunicipal.php</a>
                            </div>
                        </v-col>
                    </v-row>

                </v-container>
            </v-content>



            <v-footer dark padless>
                <v-card flat tile class="green darken-1 white--text text-center" width="100%">
                    <v-card-text class="mb-1 pb-0">
                        <v-btn v-for="icon in footerIcons" :key="icon" class="mx-4 white--text" icon>
                            <v-icon size="24px">
                                @{{ icon }}
                            </v-icon>
                        </v-btn>
                    </v-card-text>

                    <v-card-text class="white--text py-0 my-0 mb-2">
                        Modelo preditivo de desflorestamento nos municípios da Amazônia Legal
                    </v-card-text>

                    <v-divider></v-divider>

                    <v-card-text class="white--text">
                        @{{ new Date().getFullYear() }} — <strong>Amazon predict</strong>
                    </v-card-text>
                </v-card>
            </v-footer>

        </v-app>
    </div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY', '') }}&callback=initMap"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                drawer: false,
                footerIcons: [
                    'mdi-facebook',
                    'mdi-twitter',
                    'mdi-google-plus',
                    'mdi-linkedin',
                ]
            }
        })
    </script>

</body>
</html>

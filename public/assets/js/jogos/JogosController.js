app.controller("JogosController", ['$scope', '$http', function ($scope, $http) {

    $scope.pesquisaNome = true;
    $scope.pesquisaDesenvolvedora = true;
    $scope.pesquisaPlataforma = true;

    $scope.nome = false;
    $scope.desenvolvedora = false;
    $scope.categoria = false;

    $scope.getJogos = function () {
        loadingCenter("pageContent", true);

        $http.get("/jogos/get").then(function (response) {

            $scope.jogos = response.data;
            console.log($scope.jogos);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.searchNome = function () {
        loadingCenter("pageContent", true);

        $http.post("/jogos/searchNome", $scope.jogo).then(function (response) {

            $scope.jogos = response.data;
            console.log($scope.jogos);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.searchDesenvolvedora = function () {
        loadingCenter("pageContent", true);

        $http.post("/jogos/searchDesenvolvedora", $scope.jogo).then(function (response) {

            $scope.jogos = response.data;
            console.log($scope.jogos);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.searchPlataforma = function () {
        loadingCenter("pageContent", true);

        $http.post("/jogos/searchPlataforma", $scope.jogo).then(function (response) {

            $scope.jogos = response.data;
            console.log($scope.jogos);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.excluirJogo = function (jogo) {

        if (!confirm("Confirma a exclusão desse jogo?"))
            return;

        loadingTop('pageContent', true);


                $http.get('/jogos/remove-jogo/' + jogo[0]).then(function (response) {
                    if(response == 1){
                        appInfo('Jogo excluido com sucesso!');
                    }
                    location.reload(true);

                }, function (response) {
                }).finally(function () {

                    loadingTop('pageContent', false);

                });
            }


    $scope.store = function () {
        loadingCenter("pageContent", true);

        $http.post("/jogos/store", $scope.jogo).then(function (response) {

            $scope.jogo = response.data;

            alert("Registro salvo com sucesso!");
            window.location = 'http://127.0.0.1:8000/jogos/create'

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };




}]);
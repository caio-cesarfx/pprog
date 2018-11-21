app.controller("JogosFormController", ['$scope', '$http', function ($scope, $http) {

    $scope.reset = function () {
        $scope.jogo = {
            'id': null
        };
    };

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

    $scope.update = function () {
        loadingCenter("pageContent", true);

        $http.post("/jogos/update", $scope.jogo).then(function (response) {

            $scope.jogo = response.data;

            alert("Registro salvo com sucesso!");
            window.location = 'http://127.0.0.1:8000/jogos/edit'

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };


    $scope.reset();


}]);
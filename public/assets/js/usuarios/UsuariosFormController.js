app.controller("UsuariosFormController", ['$scope', '$http', function ($scope, $http) {

    $scope.reset = function () {
        $scope.usuario = {
            'id': null,
        };
    };

    $scope.storeFirst = function () {
        loadingCenter("pageContent", true);

        $http.post("/usuarios/store", $scope.usuario).then(function (response) {

                $scope.usuario = response.data;

            alert("Registro salvo com sucesso!");
            window.location = 'http://127.0.0.1:8000/'

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.store = function () {
        loadingCenter("pageContent", true);

        $http.post("/usuarios/store", $scope.usuario).then(function (response) {

            $scope.usuario = response.data;

            alert("Registro salvo com sucesso!");
            window.location = 'http://127.0.0.1:8000/cadastroUsuarios'

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.reset();


}]);
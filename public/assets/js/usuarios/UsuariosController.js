app.controller("UsuariosController", ['$scope', '$http', function ($scope, $http) {

    $scope.pesquisaNome = true;
    $scope.pesquisaCpf = true;

    $scope.nome = false;
    $scope.cpf = false;


    $scope.logar = function () {
        loadingCenter("pageContent", true);

        console.log($scope.login);

        $http.post("/login", $scope.login).then(function (response) {

            if(response.data == 1){
                window.location = 'http://127.0.0.1:8000/index'
            } else{
                alert('LOGIN INVÁLIDO');
            }


        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.getUsuarios = function () {
        loadingCenter("pageContent", true);

        $http.get("/usuarios/get").then(function (response) {

            $scope.usuarios = response.data;
            console.log($scope.usuarios);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.searchNome = function () {
        loadingCenter("pageContent", true);

        $http.post("/usuarios/searchNome", $scope.usuario).then(function (response) {

            $scope.usuarios = response.data;
            console.log($scope.usuarios);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.searchCpf = function () {
        loadingCenter("pageContent", true);

        $http.post("/usuarios/searchCpf", $scope.usuario).then(function (response) {

            $scope.usuarios = response.data;
            console.log($scope.usuarios);

        }, function (response) {
        }).finally(function () {
            loadingCenter("pageContent", false);
        });
    };

    $scope.excluirUsuario = function (usuario) {

        if (!confirm("Confirma a exclusão desse usuario?"))
            return;

        loadingTop('pageContent', true);


        $http.get('/usuarios/remove-usuario/' + usuario[0]).then(function (response) {
            if(response == 1){
                appInfo('Usuario excluido com sucesso!');
            }
            location.reload(true);

        }, function (response) {
        }).finally(function () {

            loadingTop('pageContent', false);

        });
    }


}]);
var app = angular.module("my-app",[]);
app.controller('BerandaController',function($scope,$http){
    $scope.slider = [];
    
    $scope.tblslider = {
        id_slider:'',
        foto:'',
        nama:''
    };
    
    $scope.tampil = function ()
    {
        $http({
            method: "GET",
            url: "service/slider/list.php"
        }).then(function success(response) {
            $scope.slider = response.data;
        }, function error(response) {
            console.log(response);
        });
    };
    
    $scope.tampil();
});
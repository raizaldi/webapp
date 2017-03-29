var app = angular.module("my-app",[]);
app.controller('myKambingController',function($scope,$http){
   $scope.bulan = [];
   $scope.isi = [];
   
   $scope.lihatChart = function(){
        $http({
            method: "GET",
            url: "service/myKambing/chartHarga.php"
        }).then(function success(response) {
                 $scope.bulan = response.bulan;
                 $scope.isi = response.isi;  
        }, function error(response) {
            console.log(response);
        });
    };
   
   
     
    $scope.lihatChart();

    
});
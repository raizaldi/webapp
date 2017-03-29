var app = angular.module("my-app",[]);
app.controller('ProdukController',function($scope,$http){
   
    $scope.produklist = [];
    
    $scope.produk = {
        id_produk:'',
        nama_produk:'',
        keterangan:'',
        foto_produk:''
    };
    
    $scope.CopyDelivery = function (item) {
        $scope.keterangan = angular.copy(item);
    };
    
    $scope.tampil = function ()
    {
        $http({
            method: "GET",
            url: "service/produk/list.php"
        }).then(function success(response) {
            $scope.produklist = response.data;
        }, function error(response) {
            console.log(response);
        });
    };
    
    $scope.tampil();
});
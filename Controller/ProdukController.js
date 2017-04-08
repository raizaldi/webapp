var app = angular.module("my-app",[]);

app.directive('fileModel', ['$parse', function ($parse) {
    return {
    restrict: 'A',
    link: function(scope, element, attrs) {
        var model = $parse(attrs.fileModel);
        var modelSetter = model.assign;

        element.bind('change', function(){
            scope.$apply(function(){
                modelSetter(scope, element[0].files[0]);
            });
        });
    }
   };
}]);

app.service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function(file, uploadUrl, name,keterangan,harga,status){
         var fd = new FormData();
         fd.append('file', file);
         fd.append('name', name);
         fd.append('keterangan', keterangan);
         fd.append('harga', harga);
         fd.append('status', status);
         $http.post(uploadUrl, fd, {
             transformRequest: angular.identity,
             headers: {'Content-Type': undefined,'Process-Data': false}
         })
         .success(function(){
            console.log("Success");
         })
         .error(function(){
            console.log("Success");
         });
     }
 }]);


app.controller('ProdukController',['$scope','$http','fileUpload', function($scope,$http, fileUpload){
   
    $scope.produklist = [];
    $scope.list = [];    
    $scope.produk = {
        id_produk:'',
        nama_produk:'',
        keterangan:'',
        foto_produk:''
    };    
    $scope.CopyDelivery = function (item) {
        $scope.keterangan = angular.copy(item);
    };    
    $scope.tampil = function (){
        $http({
            method: "GET",
            url: "service/produk/list.php"
        }).then(function success(response) {
            $scope.produklist = response.data;
        }, function error(response) {
           // console.log(response);
        });
    };    
    $scope.table = function (){
        $http({
            method: "GET",
            url: "../service/produk/listAkun.php"
        }).then(function success(response) {
            $scope.list = response.data;
        }, function error(response) {
            //console.log(response);
        });
    };
    
    $scope.simpanProduk = function(){
        var file = $scope.myFile;
        console.log('file is ' );
        console.dir(file);

        var uploadUrl = "../service/produk/simpan.php";
        var text = $scope.nama;
        var keterangan = $scope.keterangan;
        var harga = $scope.harga;
        var status = $scope.status;
        fileUpload.uploadFileToUrl(file, uploadUrl, text,keterangan,harga,status);
   };

    
    
    
    $scope.tampil();
}]);
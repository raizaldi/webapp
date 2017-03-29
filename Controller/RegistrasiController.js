var app = angular.module("my-app",[]);
app.filter('rupiah', function(){
       return function toRP(angka){
           var rev = parseInt(angka,10).toString().split('').reverse().join('');
           var rev2 = '';
           for(var i=0; i < rev.length; i++ ){
               rev2 += rev[i];
               if((i+1)% 3 === 0 && i !== (rev.length - 1)){
                   rev2 += '.';
               }
           }
           return 'Rp. ' + rev2.split('').reverse().join('');
       } 
    });
app.controller('RegistrasiController',function($scope,$http){
    $scope.model = {
       id:'',
       bulan :'',
       tahun:'',
       isi:'',
       type:''       
   };
    $scope.investor = {
        nama:'',
        ktp:'',
        alamat:'',
        kodepos:'',
        kontak:'',
        email:'',
        password:''
    };  
    $scope.list= [];
    var url = window.location.search;
        url = url.replace("?module=registrasi&",'');
    
    $scope.tampilbyid = function () {        
        $http({
            method: "GET",
            url: "service/investor/registrasiinfo.php?id="+url
        }).then(function success(response) {
            $scope.investor = response.data;
        }, function error(response) {
            console.log(response);
        });
    };
    
    $scope.tampillAll = function () {        
        $http({
            method: "GET",        
            url: "../service/investor/semuainvestor.php"
        }).then(function success(response) {
            $scope.list = response.data;
        }, function error(response) {
            console.log(response);
        });
    };
        
    
    
    $scope.bulan = [
    {name: 'Januari',  value: 'Januari'},
    {name: 'Februari', value: 'Februari'},
    {name: 'Maret',    value: 'Maret'},
    {name: 'April',    value: 'April'},
    {name: 'Mei',      value: 'Mei'},
    {name: 'Juni',     value: 'Juni'},
    {name: 'Juli',     value: 'Juli'},
    {name: 'Agustus',  value: 'Agustus'},
    {name: 'September',value: 'September'},
    {name: 'Oktober',  value: 'Oktober'},
    {name: 'November', value: 'November'},
    {name: 'Desember', value: 'Desember'},
   ];
   
   $scope.type = [
       {name: 'Berat', value:'Berat'},
       {name: 'Harga', value:'Harga'}
   ]
   
   $scope.pilih = function (item) {
        $scope.model.id = angular.copy(item);
    };
   
   $scope.model.bulan = $scope.bulan[0].value;
   $scope.model.type  = $scope.type[0].value; 
    
   $scope.simpan = function (){
         var form = "nama=" + $scope.investor.nama + "&ktp=" + $scope.investor.ktp + "&alamat=" + $scope.investor.alamat + "&kodepos=" + $scope.investor.kodepos + "&kontak=" + $scope.investor.kontak +"&email=" + $scope.investor.email +"&id_produk=" + url + "&password=" + $scope.investor.password;
        $http({
            method: "POST",
            url: "service/investor/simpanregistrasi.php?"+form
        }).then(function success(response) {
            $scope.investor = [];
            $scope.tampilbyid();
            alert('registrasi berhasil dan silahkan tunggu konfirmasi dari kami')
            window.window.location.href="index.php?module=Login";
        }, function error(response) {
            console.log(response);
        });
    }; 
    
   $scope.simpanKambing = function(){
       var listform = "id="+ $scope.model.id +"&bulan="+$scope.model.bulan + "&tahun="+$scope.model.tahun + "&isi="+$scope.model.isi + "&type="+$scope.model.type;
          $http({
            method: "POST",
            url: "../service/investor/simpanKambing.php?"+listform
        }).then(function success(response) {           
            alert('berhasil');
        }, function error(response) {
           console.log(response);
        });   
   };
 
   $scope.tampilkambing = function (item) {      
       var id = angular.copy(item);
        $http({
            method: "GET",        
            url: "../service/investor/datakambingnya.php?id="+id
        }).then(function success(response) {
            $scope.listdata = response.data;
        }, function error(response) {
            console.log(response);
        });
    };
});
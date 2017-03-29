<div class="container">
    <center><h1><b>INVESTASI</b></h1></center>
    <div class="row" class="Registrasi" ng-controller="RegistrasiController">
          
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <input placeholder="Nama" class="form-control" ng-model="investor.nama"  type="text" required focus>
                </div>
                <div class="form-group">
                    <input placeholder="Nomer KTP" class="form-control" ng-model="investor.ktp"  type="text" required>
                </div>
                <div class="form-group">
                    <input placeholder="Alamat" class="form-control" ng-model="investor.alamat"  type="text" required>
                </div>
                <div class="form-group">
                    <input placeholder="Kode Pos" class="form-control" ng-model="investor.kodepos"  type="text" >
                </div>
                <div class="form-group">
                    <input placeholder="Kontak" class="form-control" ng-model="investor.kontak"  type="text" required>
                </div>
                <div class="form-group">
                    <input placeholder="Email" class="form-control" ng-model="investor.email"  type="email" required>
                </div>
                <div class="form-group">
                    <input placeholder="Password" class="form-control" ng-model="investor.password"  type="password" required>
                </div>                              
                <div class="form-group">
                    <button class="btn btn-primary"  ng-click="simpan()">Registrasi</button>
                    <a  class="btn btn-success" href="index.php?module=investasi" role="button">Kembali</a>
                    <a  class="btn btn-danger"style="float: right" href="index.php?module=investasi" role="button">Sistem Kami</a>
                </div>
            </form>
        </div>       
        <div class="col-md-6" ng-init="tampilbyid();">
                <div class="col-sm-12 col-md-12" ng-repeat="item in investor">
                    <div class="thumbnail">
                        <img style="width: 100%;" src="assets/images/{{item.foto_produk}}" />
                        <div class="caption">                           
                            <p>{{item.keterangan}}</p>
                             <b>Harga {{item.harga}}</b>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>


<script src="Controller/RegistrasiController.js"></script>
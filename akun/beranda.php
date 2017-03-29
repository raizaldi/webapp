<div class="table-responsive" ng-controller="RegistrasiController">
<table class="table table-bordered">
    <thead ng-init="tampillAll()">
        <tr style="background-color: #5cb85c;">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
            <th>Kontak</th>
            <th>Email</th>
            <th>Nama Kategori Produk</th>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="item in list">
            <td>{{$index+1}}</td>
            <td><a href="?module=tambahkambing&id={{item.id_investor}}">{{item.nama}}</a></td>
            <td>{{item.alamat}}</td>
            <td>{{item.kodepos}}</td>
            <td>{{item.kontak}}</td>
            <td>{{item.email}}</td>
            <td><a class="btn btn-danger" role="button" ng-click="tampilkambing(item.id_investor)" data-toggle="modal" data-target="#listkambing" >{{item.nama_produk}}</a>  
                <button class="btn btn-primary" ng-click="pilih(item.id_investor)" type="submit" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil">Tambah</span></button></td>
        </tr>
    </tbody>
</table>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input Data Kambing</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">       
                        <input type="hidden" ng-model="model.id" />
                        <select ng-model="model.bulan" class="form-control">
                            <option ng-repeat="item in bulan"  value="{{item.value}}">{{item.name}}</option>
                        </select><br/><br/>
                        <input type="text" class="form-control" ng-model="model.tahun" placeholder="Tahun"/><br/><br/>
                        <input type="text" class="form-control" ng-model="model.isi" placeholder="Isi"/><br/><br/>
                        <select ng-model="model.type" class="form-control" >
                            <option ng-repeat="item in type"  value="{{item.value}}">{{item.name}}</option>

                        </select><br/><br/>
                        <input type="submit" ng-click="simpanKambing()" value="Simpan" class="btn btn-primary"/>
                        <a data-dismiss="modal" class="btn btn-danger">Cancel</a>
                    </form>
                </div>      
            </div>
        </div>
    </div>
    
      <div class="modal fade" id="listkambing" tabindex="-1" role="dialog" aria-labelledby="listkambing">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Data Kambing</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Value</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in listdata">
                                <td>{{item.bulan}}</td>
                                <td>{{item.tahun}}</td>
                                <td>{{item.isi}}</td>
                                <td>{{item.type}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>      
            </div>
        </div>
    </div>
    
</div>


<script src="../Controller/RegistrasiController.js"></script>

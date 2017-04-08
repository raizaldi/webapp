<div class="table-responsive" ng-controller="ProdukController">

<p><a class="btn btn-info" role="button" data-toggle="modal" data-target="#formkambing" >Tambah</a> </p>

 <table class="table table-bordered">
    <thead ng-init="table()">
        <tr style="background-color: #5cb85c;">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Harga</th>
            <th>Foto</th>
           
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="item in list">
            <td>{{$index+1}}</td>
            <td>{{item.nama_produk}}</td>
            <td>{{item.keterangan}}</td>
            <td>{{item.status}}</td>
            <td>{{item.harga}}</td>
            <td><img style="width:50px;height:50px;" src="../assets/images/{{item.foto_produk}}"/></td>
            
        </tr>
    </tbody>
</table>

<div class="modal fade" id="formkambing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input Data Produk</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">    
                        <input type="text" ng-model="nama" class="form-control" placeholder="Nama Produk"/><br/>
                        <textarea class="form-control" ng-model="keterangan" placeholder="Keterangan"></textarea><br/>
                         <input type="file" class="form-control" file-model="myFile"/><br/>
                        <input type="text" ng-model="harga" class="form-control" placeholder="Harga Kisaran"/><br/>
                        <select ng-model="status" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select><br/>
                        <input type="submit" ng-click="simpanProduk()" value="Simpan" class="btn btn-primary"/>
                        <a data-dismiss="modal" class="btn btn-danger">Cancel</a>
                    </form>
                </div>      
            </div>
        </div>
    </div>
</div> 


<script src="../Controller/ProdukController.js"></script>


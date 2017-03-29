<div class="container">
    <center><h1><b>PRODUK</b></h1></center>
    <div class="row" ng-controller="ProdukController">      
        <div class="col-sm-8 col-md-6" ng-repeat="item in produklist">
            <div> 
                <div id="tooltip">
                  <span id="tooltiptext">{{item.keterangan}}</span>
               
                <a href="index.php?module=registrasi&{{item.id_produk}}"  style=" text-decoration: none;color: black;">
                    <img style="width:95%;"  src="assets/images/{{item.foto_produk}}" />
                </a>                
                <div class="caption" style="text-align: center;">
                    <p style="font-size: 24px;font-weight: bold;">{{item.nama_produk}}</p>
                </div>     
               </div>
            </div>  
            
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-header">
                        Sekilas Info
                    </div>
                    <div class="modal-content">                
                             {{ keterangan }}     
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<script src="Controller/ProdukController.js"></script>
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
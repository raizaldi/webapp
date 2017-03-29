<div class='row' ng-controller="BerandaController">
    <div class='col-sm-6' ng-controller="BerandaController">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="float: left;">
                <div class="item active">
                    <img  src="assets/images/slide 1.png" />
                </div>
                <div class="item" ng-repeat="item in slider">
                    <img  src="assets/images/{{item.foto}}" />
                </div>       
            </div>        
        </div>
    </div>
    <div class='col-sm-6'>
        <div>
            <span id="title-akuanusa">AKUANUSA</span>
            <span id="title-judul">Organic Compact Empowering</span>
            <span id="isicontent">
                Penggunaan teknologi dan sumber<br/>
                daya manusianya yang terlatih,<br/>
                menjadi Akuanusa sebagai <br/>
                pilihan terbaik mitra investasi<br/>
                ternak anda<br/>
            </span>
        </div>
       
            <h3 id="tentangku"> <a href='' data-toggle="modal" data-target="#myModal">Tentang Akuanusa</a></h3>
            <p id="fototentangku"><img src='assets/images/photo.png'></p> 
        
    </div>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">                
                <img src="assets/images/tentangkami.png">              
            </div>
        </div>
    </div>
</div>

<script src="Controller/BerandaController.js"></script>
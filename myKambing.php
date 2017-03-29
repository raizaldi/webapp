<?php
if (!isset($_SESSION['email'])) {
 header("Location: index.php?module=beranda");
}

$koneksi     = mysqli_connect("localhost", "root", "", "akua");
$id = $_SESSION['id'];

$bulanchart       = mysqli_query($koneksi, "SELECT bulan from chart WHERE id_investor ='$id' and  type='harga'");
$bulanisi         = mysqli_query($koneksi, "SELECT isi from chart WHERE id_investor ='$id' and  type='harga'");

$bulanberat       = mysqli_query($koneksi, "SELECT bulan from chart WHERE id_investor ='$id' and  type='berat'");
$beratisi         = mysqli_query($koneksi, "SELECT isi from chart WHERE id_investor ='$id' and  type='berat'");
?>
<br/>
<div class="container">
    <div class="row">
        <div><center><h1><b>MY KAMBING</b></h1></center></div>
        <div class="col-sm-5">
            <img src="assets/images/Produk2.png "/>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6">               
                    <canvas id="myChart" width="100" height="100"></canvas>
                </div>
                <div class="col-sm-6">               
                    <canvas id="myChartberat" width="100" height="100"></canvas>
                </div>
            </div>
        </div>   

    </div>
</div>

<script>
       var ctx = document.getElementById("myChart");
       var myChart = new Chart(ctx, {
           type: 'bar',
           data: {
               labels: [<?php while ($b = mysqli_fetch_array($bulanchart)) {
    echo '"' . $b['bulan'] . '",';
} ?>],
               datasets: [{
                       label: 'Harga Kambing per Rp',
                       data: [<?php while ($p = mysqli_fetch_array($bulanisi)) {
    echo '"' . $p['isi'] . '",';
} ?>],
                       backgroundColor: [
                           'rgba(255, 99, 132, 0.2)',
                           'rgba(54, 162, 235, 0.2)',
                           'rgba(255, 206, 86, 0.2)',
                           'rgba(75, 192, 192, 0.2)',
                           'rgba(153, 102, 255, 0.2)',
                           'rgba(255, 159, 64, 0.2)'
                       ],
                       borderColor: [
                           'rgba(255,99,132,1)',
                           'rgba(54, 162, 235, 1)',
                           'rgba(255, 206, 86, 1)',
                           'rgba(75, 192, 192, 1)',
                           'rgba(153, 102, 255, 1)',
                           'rgba(255, 159, 64, 1)'
                       ],
                       borderWidth: 1
                   }]
           },
           options: {
               scales: {
                   yAxes: [{
                           ticks: {
                               beginAtZero: true
                                           }
                                       }]
                                   }
                               }
                           });
</script>

<script>
    var ctx = document.getElementById("myChartberat");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($b = mysqli_fetch_array($bulanberat)) {
    echo '"' . $b['bulan'] . '",';
} ?>],
            datasets: [{
                    label: 'Berat Kambing per Kg',
                    data: [<?php while ($p = mysqli_fetch_array($beratisi)) {
    echo '"' . $p['isi'] . '",';
} ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>

 <script src="Controller/MyKambingController.js"></script>
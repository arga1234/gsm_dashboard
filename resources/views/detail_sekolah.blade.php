@extends('layout.form')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}}">GSM Dashboard</a>
                        </li>
                        <li>
                            List
                        </li>
                        <li>
                           Sekolah
                        </li>
                        <li>
                            Detail
                        </li>
                    </ol>
                </div>
            </div>
            
            
              <br>

                <div class="col-lg-12">
                    <div class="panel panel-color panel-custom">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Utama</h3>
                        </div>
                        <div class="panel-body">
                            <h3><b>Nama Sekolah</b></h3>
                            <br>
                            <div>
                            <table class="table">
                                     
                                    <tbody> 
                                            <tr>
                                                    <th scope="row" class="col-lg-2">Bentuk</th>
                                                    <td>:</td>
                                                    <td>Negeri</td>
                                                    <td> </td>
                                            </tr>
                                            <tr>
                                                    <th scope="row" class="col-lg-2">NPSS</th>
                                                    <td>:</td>
                                                    <td>947538538</td>
                                                    <td> </td>
                                            </tr>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                        <div class="panel panel-color panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Rincian Data</h3> 
                            </div> 
                            <div class="panel-body"> 
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <h5><b>Alamat :</b></h5>
                                                    <p class="text-muted m-b-15 font-13">
                                                        Jalan Kaliurang KM 7
                                                   
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kecamatan :</b></h5>
                                                        <p class="text-muted m-b-15 font-13">
                                                            Ngaglik
                                                        </p>
                                                    </div>

                                                    <div class="m-t-20">
                                                            <h5><b>Kode Kabupaten :</b></h5>
                                                            <p class="text-muted m-b-15 font-13">
                                                                117
                                                            </p>
                                                        </div>
                                                    
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kabupaten :</b></h5>
                                                        <p class="text-muted m-b-15 font-13">Sleman
                                                            &nbsp;
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                    <div class="p-20">
                                                            <h5><b>Kode Propinsi :</b></h5>
                                                            <p class="text-muted m-b-15 font-13">
                                                                551
                                                            </p>
                                                           
                                                            <div class="m-t-20">
                                                                <h5><b>Nama Propinsi :</b></h5>
                                                                <p class="text-muted m-b-15 font-13">
                                                                    DI Yogyakarta
                                                                </p>
                                                            </div>

                                                            <div class="m-t-20">
                                                                    <h5><b>Lintang Utara :</b></h5>
                                                                    <p class="text-muted m-b-15 font-13">
                                                                        116 LU
                                                                    </p>
                                                                </div>
                                                            
                                                            <div class="m-t-20">
                                                                <h5><b>Lintang Selatan :</b></h5>
                                                                <p class="text-muted m-b-15 font-13">116 LS
                                                                    &nbsp;
                                                                </p>

                                                            </div>
                                                    </div>
                                            </div>
                                        </div> <!--end row-->
                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card-box">
                                                        <h4 class="m-t-0 m-b-20 header-title"><b>Peta Sekolah</b></h4>
                                                        <div id="map"></div>
                                                    </div>
                                                </div>

                                </div>
                        </div>
                </div>

    </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        © 2019. Tim skripsi GSM.
    </footer>

</div>

<script>
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -7.759093, lng: 110.374303};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 10, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
    </script>
    
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS6ZdI6zn_QX7ceEWJtdFzdCMuHQijNmc
        &callback=initMap">
        </script>

@endsection


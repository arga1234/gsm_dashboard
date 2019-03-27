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
                           User
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
                            <h3><b>Nama User</b></h3>
                            <br>
                            <div>
                            <table class="table">
                                     
                                    <tbody> 
                                            <tr sty>
                                                    <th scope="row" class="col-lg-4">Nama</th>
                                                    <td>:</td>
                                                    <td>Guru A</td>
                                                    <td> </td>
                                            </tr>
                                            <tr>
                                                    <th scope="row" class="col-lg-4">Tempat, Tanggal Lahir</th>
                                                    <td>:</td>
                                                    <td>Solo, 20 April 1994</td>
                                                    <td> </td>
                                            </tr>     
                                            <tr>
                                                <th scope="row" class="col-lg-4">Jenis Kelamin</th>
                                                <td>:</td>
                                                <td>Pria</td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Asal Sekolah</th>
                                                <td>:</td>
                                                <td>SD N Karangmloko</td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Status/Jabatan di Sekolah</th>
                                                <td>:</td>
                                                <td>Guru</td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Pendidikan Terakhir</th>
                                                <td>:</td>
                                                <td>Sarjana</td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Kontak / No. HP :</th>
                                                <td>:</td>
                                                <td>0812313432</td>
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
                                <h3 class="panel-title">Progress User</h3> 
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
                        </div>
                </div>

    </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        © 2019. Tim skripsi GSM.
    </footer>

</div>


@endsection


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
                                                    <td id="name"></td>
                                                    <td> </td>
                                            </tr>
                                            <tr>
                                                    <th scope="row" class="col-lg-4">Tempat, Tanggal Lahir</th>
                                                    <td>:</td>
                                                    <td id="ttl"></td>
                                                    <td> </td>
                                            </tr>     
                                            <tr>
                                                <th scope="row" class="col-lg-4">Jenis Kelamin</th>
                                                <td>:</td>
                                                <td id="kelamin"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Asal Sekolah</th>
                                                <td>:</td>
                                                <td id="asal_sekolah"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Status/Jabatan di Sekolah</th>
                                                <td>:</td>
                                                <td id="status"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Pendidikan Terakhir</th>
                                                <td>:</td>
                                                <td id="pendidikan_terakhir"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Kontak / No. HP :</th>
                                                <td>:</td>
                                                <td id="kontak"></td>
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
                                                    <p id="alamat" class="text-muted m-b-15 font-13">                                                   
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kecamatan :</b></h5>
                                                        <p class="text-muted m-b-15 font-13">
                                                            {{-- Ngaglik --}}
                                                        </p>
                                                    </div>

                                                    <div class="m-t-20">
                                                            <h5><b>Kode Kabupaten :</b></h5>
                                                            <p id="kota" class="text-muted m-b-15 font-13">
                                                                {{-- 117 --}}
                                                            </p>
                                                        </div>
                                                    
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kabupaten :</b></h5>
                                                        <p id="kabupaten" class="text-muted m-b-15 font-13">
                                                            {{-- Sleman --}}
                                                            &nbsp;
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                    <div class="p-20">
                                                            <h5><b>Kode Propinsi :</b></h5>
                                                            <p id="kode_prov" class="text-muted m-b-15 font-13">
                                                                {{-- 551 --}}
                                                            </p>
                                                           
                                                            <div class="m-t-20">
                                                                <h5><b>Nama Propinsi :</b></h5>
                                                                <p id="nama_prov" class="text-muted m-b-15 font-13">
                                                                {{-- tes --}}
                                                                </p>
                                                            </div>

                                                            <div class="m-t-20">
                                                                    <h5><b>Lintang Utara :</b></h5>
                                                                    <p class="text-muted m-b-15 font-13">
                                                                        {{-- 116 LU --}}
                                                                    </p>
                                                                </div>
                                                            
                                                            <div class="m-t-20">
                                                                <h5><b>Lintang Selatan :</b></h5>
                                                                <p class="text-muted m-b-15 font-13">
                                                                    {{-- 116 LS --}}
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

<script>


$(document).ready(function(){
    // Ambil id dari url
    var id = new URLSearchParams(document.location.search.substring(1));
    var ini_id_user = id.get("id");

    $.ajax({
    type: 'GET',
    url: "http://localhost/elearning/public/api/v1/users/"+ini_id_user,
    })
    .done(function(data){
    console.log(data)

    // Memasukan data yang didapat dari respon get ke field2 yg ada berdasarkan idnya

    // membuat tag html dengan id name akan menampilkan data name , apabila data.name nilainya null atau undefined maka tidak akan ditampilkan apa2
    document.getElementById('name').innerHTML = data.name

    // Ini salah satu contoh yang bakal menghasilkan nilai null atau undefined untuk data.ttl, dikarenakan ttl tidak terdapat pada data yang didapatkan
    // (perhatikan struktur data hasil respon GET di console)
    document.getElementById('ttl').innerHTML = data.ttl

    // Untuk field yang lain silahkan buat sendiri



    })
})
</script>

@endsection


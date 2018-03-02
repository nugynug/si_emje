


@extends('master')
@section('alamat')
SI_EMJE-Data Member
@endsection
@section('alamat')
Data Member
@endsection

@section('judul')
Data Member
@endsection
@section('isi')

<div class="row">

    <div class="col-md-12">
        <div class="card">

            <div class="content">
                <form role="form" class="form-horizontal style-form"  data-toggle="validator" action="{{ url('C_Pendaftaran') }}" method="post">
                    {{csrf_field()}}
                    <!-- <div> -->

                        <h4 ><i class="fa fa-angle-right"></i> Lengkapi Form di bawah ini !</h4>
                        <!-- </div> -->
                        <hr style="color: red">  
                        <div class="form-group">
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">No Member</label>
                                <input type="text" class="form-control border-input" id="no_member"  autocomplete="off" value="123457" name="no_member" maxlength="50" disabled>

                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control border-input" id="nama_lkp"  autocomplete="off" onkeypress="return hanyaHuruf(event)" name="nama_lkp" maxlength="50" placeholder="tulis nama lengkap" required>
                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Domisili KTP</label>
                                <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="dom_ktp" name="dom_ktp" maxlength="25" placeholder="tulis domisili ktp" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">No HPnya</label>
                                <input class="form-control border-input" id="tlp" name="hp"  required>
                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Perusahaan</label>
                                <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="perusahaan" name="perusahaan" maxlength="25" placeholder="tulis Perusahaan" required>                       
                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Jenis Perusahaan</label>
                                <!-- <div > -->
                                    <select type="select" class="form-control border-input" id="jenis_perusahaan" name="jenis_perusahaan" required="">
                                        <option value=""></option>

                                        <option value="Pelajar">Pelajar</option>
                                        <option value="Pegawai">Pegawai</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                              <!--   <i class="icon fa fa-chevron-down fa-fw"></i>
                              </div> -->


                          </div>

                      </div>
                      <!-- <div class="form-group"> -->
                        <div class="form-group">
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Domisili Perusahaan</label>
                                <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="dom_perusahaan" name="dom_perusahaan" maxlength="25" placeholder="tulis Perusahaan" required>                       

                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">No Rekening</label>
                                

                                <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="rekening" name="rekening" maxlength="25" placeholder="Indonesia" required>


                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Posisi Kerja</label>
                                <!-- <div class="select_icon"> -->
                                    <select type="select" class="form-control border-input" id="posisi" name="posisi" required="">
                                        <option value=""></option>
                                        <option value="Jember">Jember</option>
                                        <option value="Luar Jember">Luar Jember</option>
                                        <option value="Luar Jember">Lain-Lain</option>

                                    </select>
                                    <!-- <i class="icon fa fa-chevron-down fa-fw"></i>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <center>

                                <button type="submit" class="btn btn-theme05 btn-md" >Simpan</button>
                            </center>
                        </div>



                    </form>
                                <button class="btn btn-primary btn-md" id="cetak" >Cetak</button>
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <!-- <div class="collapse" id="demo"> -->
        <div id="cetak2">
           <h3> Nama : <span id="nama2"></span> </h3>
            <h3>HP : <span id="tlp2"></span></h3> 
            <h3>no : <span id="no_member2"></span> </h3>

        </div>
    <!-- </div> -->
    @endsection

    @push('script')
    <script>
        jQuery(function($){
            $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#npwp").mask("99-999-999-9-999-999");
            $("#tlp").mask("999 999 999 999");
            $("#hp").mask("999 999 999 999");
        });
    </script>
    <script>
        document.getElementById("cetak").
        addEventListener("click", tampilkan_nilai_form);
        // document.getElementById("cetak").onclick = function() {printContent()};
        function tampilkan_nilai_form(){
            var nama=document.getElementById("nama_lkp").value;
            var dom_ktp=document.getElementById("dom_ktp").value;
            var tlp=document.getElementById("tlp").value;
            var perusahaan=document.getElementById("perusahaan").value;
            var jenis_perusahaan=document.getElementById("jenis_perusahaan").value;
            var dom_perusahaan=document.getElementById("dom_perusahaan").value;
            var rekening=document.getElementById("rekening").value;
            var posisi=document.getElementById("posisi").value;
            var no_member=document.getElementById("no_member").value;
            document.getElementById("nama2").innerHTML=nama;
            document.getElementById("dom_ktp2").innerHTML=dom_ktp;
            document.getElementById("tlp2").innerHTML=tlp;
            document.getElementById("perusahaan2").innerHTML=perusahaan;
            document.getElementById("jenis_perusahaan2").innerHTML=jenis_perusahaan;
            document.getElementById("dom_perusahaan2").innerHTML=dom_perusahaan;
            document.getElementById("rekening2").innerHTML=rekening;
            document.getElementById("posisi2").innerHTML=posisi;
            document.getElementById("no_member2").innerHTML=no_member;

        }
        function printContent(){
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById("cetak2").innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    @endpush()

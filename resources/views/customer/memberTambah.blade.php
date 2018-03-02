


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
                <form role="form" class="form-horizontal style-form"  data-toggle="validator" action="{{ url('pendaftaran') }}" method="post">
                    {{csrf_field()}}
                    <!-- <div> -->

                        <h4 class="title">Tambah Data Member</h4>
                        <p class="category">Lengkapi Form di bawah !</p>

                    <!-- </div> -->
                    <hr style="color: red">  
                    <div class="form-group">
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">No Member</label>
                            <input type="text" class="form-control border-input" id="inputName"  autocomplete="off" value="{{$data['no_member']}}" name="no_member" maxlength="50" readonly>

                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control border-input" id="inputName"  autocomplete="off" onkeypress="return hanyaHuruf(event)" name="nama_lkp" maxlength="50" placeholder="tulis nama lengkap" required>
                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Domisili KTP</label>
                            <input type="text" class="form-control border-input"  id="inputName" name="dom_ktp" maxlength="25" placeholder="tulis domisili ktp" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">No HPnya</label>
                            <input class="form-control border-input" id="hp" name="hp"  required>
                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Perusahaan</label>
                            <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="inputName" name="perusahaan" maxlength="25" placeholder="tulis Perusahaan" required>                       
                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Jenis Perusahaan</label>
                            <!-- <div > -->
                                <select type="select" class="form-control border-input" name="jenis" id="jenis" onchange="posisii()" required="">
                                    <option value=""></option>

                                    <option value="Tour Agen">Tour Agen</option>
                                    <option value="Tour Guide">Tour Guide</option>
                                    <option value="Transport Bus">Transport Bus</option>
                                    <option value="Transport Elf">Transport Elf</option>
                                    <option value="Transport Rent Car">Transport Rent Car</option>
                                    <option value="Lainnya">Lain-lain</option>
                                </select>
                                <div id="jeper"></div>

                              <!--   <i class="icon fa fa-chevron-down fa-fw"></i>
                            </div> -->


                        </div>

                    </div>
                    <!-- <div class="form-group"> -->
                        <div class="form-group">
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Domisili Perusahaan</label>
                            <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="inputName" name="dom_perusahaan" maxlength="25" placeholder="tulis Perusahaan" required>                       

                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">No Rekening</label>
                                    <input type="number" class="form-control border-input"  id="inputName" name="rekening" maxlength="25" placeholder="tulis nomor rekening" required>
                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Posisi Kerja</label>
                                    <div id="posisi"></div>
                                    
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
                            <br>
                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>


            @endsection

            @push('script')
            <script>
                jQuery(function($){
                    $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
                    $("#npwp").mask("99-999-999-9-999-999");
                    $("#tlp").mask("999 999 999 999");
                    $("#hp").mask("999 999 999 999");
                });
                function posisii(){
                var x = document.getElementById("jenis").value;
                if (x == "Tour Agen") {
                    document.getElementById("jeper").innerHTML = "";
                    document.getElementById("posisi").innerHTML = "<select type='select' class='form-control border-input' id='posisi' name='posisi' required><option value='Owner'>Owner</option><option value='Tour Leader'>Tour Leader</option></select>";
                }else if (x == "Tour Guide") {
                    document.getElementById("jeper").innerHTML = "";
                    document.getElementById("posisi").innerHTML = "<input type='text' class='form-control border-input'  id='inputName' name='posisi' maxlength='25' placeholder='tulis lainnya' value='Freelance' readonly>";
                }else if (x == "Transport Bus") {
                    document.getElementById("jeper").innerHTML = "";
                    document.getElementById("posisi").innerHTML = "<select type='select' class='form-control border-input' id='posisi' name='posisi' required><option value='Driver'>Driver</option><option value='Co Driver'>Co Driver</option></select>";
                }else if (x == "Transport Elf" || x == "Transport Rent Car") {
                    document.getElementById("jeper").innerHTML = "";
                    document.getElementById("posisi").innerHTML = "<select type='select' class='form-control border-input' id='posisi' name='posisi' required><option value='Owner'>Owner</option><option value='Co Driver'>Co Driver</option></select>";
                }else if (x == "Lainnya") {
                    document.getElementById("jeper").innerHTML = "<input type='text' class='form-control border-input'  id='inputName' name='jenisperusahaan' maxlength='25' placeholder='tulis Jenis Perusahaan' required>";
                    document.getElementById("posisi").innerHTML = "<input type='text' class='form-control border-input'  id='inputName' name='posisi' maxlength='25' placeholder='tulis posisi' required>";
                }
                 else{
                    document.getElementById("jeper").innerHTML = "";

                    document.getElementById("posisi").innerHTML = "";
                }
            }

            </script>
            @endpush()

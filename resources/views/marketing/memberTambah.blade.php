


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
                            <input type="text" class="form-control border-input" id="inputName"  autocomplete="off" value="" name="no_member" maxlength="50" disabled>

                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control border-input" id="inputName"  autocomplete="off" onkeypress="return hanyaHuruf(event)" name="nama_lkp" maxlength="50" placeholder="tulis nama lengkap" required>
                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Domisili KTP</label>
                            <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="inputName" name="dom_ktp" maxlength="25" placeholder="tulis domisili ktp" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">No HPnya</label>
                            <input class="form-control border-input" id="tlp" name="hp"  required>
                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Perusahaan</label>
                            <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="inputName" name="perusahaan" maxlength="25" placeholder="tulis Perusahaan" required>                       
                        </div>
                        <div class="col col-sm-4">
                            <label for="inputName" class="control-label">Jenis Perusahaan</label>
                            <!-- <div > -->
                                <select type="select" class="form-control border-input" name="jenis_perusahaan" required="">
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
                            <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="inputName" name="perusahaan" maxlength="25" placeholder="tulis Perusahaan" required>                       

                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">No Rekening</label>
                                

                                    <input type="text" class="form-control border-input" onkeypress="return hanyaHuruf(event)" id="inputName" name="rekening" maxlength="25" placeholder="Indonesia" required>
                                    

                            </div>
                            <div class="col col-sm-4">
                                <label for="inputName" class="control-label">Posisi Kerja</label>
                                <!-- <div class="select_icon"> -->
                                    <select type="select" class="form-control border-input" name="posisi" required="">
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

                                <button type="submit" class="btn btn-theme05 btn-md btn-block" >Submit</button>



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
            </script>
            @endpush()

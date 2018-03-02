


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
            <div class="header" style="padding-bottom: 40px">
                <!-- <div style="padding-bottom: 40px"> -->
                    <div class="col col-sm-6" style="padding-left: 0px;margin-left: 0px;">

                        <h4 class="title">Data Member Customer</h4>
                        <p class="category">Data yang membawa group belanja.</p>
                        
                        
                    </div>
                    <div class="col col-sm-6" style="padding-right: 0px;margin-right: 0px;"">
                        <a class="btn btn-default pull-right" href="/tambah-member"><i class="fa fa-plus"></i></a>
                    </div>
                    <!-- </div> -->
                </div>
                <hr style="width: 95%">
                <div class="content">
                    <table class="table table-striped table-bordered table-advance table-hover data" style="width: 100%" >

                        <thead>
                            <tr>
                                <th style="text-align: center">No</th>
                                <th style="text-align: center">Nama</th>
                                <th style="text-align: center">Id</th>
                                <th style="text-align: center">No HP</th>
                                <th style="text-align: center">Perusahaan</th>
                                <th style="text-align: center">Jenis</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center">1</td>
                                <td style="text-align: center">Angga</td>
                                <td style="text-align: center">aaaaaaaaaaaaaaaaa</td>
                                <td style="text-align: center">089788766787</td>
                                <td style="text-align: center">PT Jaya Kusuma</td>
                                <td style="text-align: center">Tour Guide</td>
                                <td style="text-align: center">
                                    <button class="btn btn-sm btn-success btn-icon btn-ubah" data_id="" data-toggle="modal" data-target="#editModal" title="Lihat Detail"><i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning btn-icon btn-ubah" data_id="" data-toggle="modal" data-target="#editModal" title="Edit"><i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger btn-icon btn-ubah" data_id="" data-toggle="modal" data-target="#editModal" title="Transaksi"><i class="fa fa-check"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <br>
                    <div class="footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle text-success"></i> Lihat Detail
                            <i class="fa fa-circle text-warning"></i> Edit
                            <i class="fa fa-circle text-danger"></i> Transaksi
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="ti-user"></i> Berisi Data Member Customer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection

   





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
                        <?php
                        $i=0;
                        ?>
                        <tbody>
                            @foreach($data as $a)

                            <tr>
                                <td style="text-align: center">{{$i+=1}}</td>
                                <td style="text-align: center">{{$a->nama}}</td>
                                <td style="text-align: center">{{$a->no_member}}</td>
                                <td style="text-align: center">{{$a->tlp}}</td>
                                <td style="text-align: center">{{$a->nama_perusahaan}}</td>
                                <td style="text-align: center">{{$a->jenis}}</td>
                                <td style="text-align: center">

                                    <a href="#" value="{{ action('c_member@detail',['id'=>$a->id]) }}" type="button" class="btn btn-sm btn-success btn-icon modalMd" title="Detail Member" data-toggle="modal" data-target="#modalMd" ><i class="fa fa-search"></i>
                                    </a><!-- 
                                    <a href="#" href="{{ action('c_member@edit',['id'=>$a->id]) }}" type="button" class="btn btn-sm btn-warning btn-icon modalMd" title="Edit Member" data-toggle="modal" data-target="#modalMd" ><i class="fa fa-edit"></i> -->
                                    <a href="{{ action('c_member@edit',['id'=>$a->id]) }}" type="button" class="btn btn-sm btn-warning btn-icon " title="Edit Member"  ><i class="fa fa-edit"></i>

                                    </a>
                                    <button class="btn btn-sm btn-danger btn-icon btn-ubah" data_id="" data-toggle="modal" data-target="#editModal" title="Transaksi"><i class="fa fa-check"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
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

 


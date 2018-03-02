
 <section id="container" >

    <div class="form-panel scroll"> 
                          
        <table class="table" rules=”none” style="width: 100%">

        <tbody>
            <tr>               
                <td> Nama Lengkap</td>
                <td>:</td>
                <td>{{$data->nama}}</td>

            </tr>
            
            <tr>
                <td> Nomor Member</td>
                <td>:</td>
                <td>{{$data->no_member}}</td>
            </tr>
            <tr>
                <td> Domisili KTP</td>
                <td>:</td>
                <td>{{$data->dom_ktp}}</td>
            </tr>
            <tr>
                <td> Nomor Telpon</td>
                <td>:</td>
                <td>{{$data->tlp}}</td>
            </tr>
            <tr>
                <td> Perusahaan</td>
                <td>:</td>
                <td>{{$data->nama_perusahaan}}</td>
            </tr>
            <tr>
                <td> Domisili Perusahaan</td>
                <td>:</td>
                <td>{{$data->domisili_perusahaan}}</td>
            </tr>
            <tr>
                <td> Rekening</td>
                <td>:</td>
                <td>{{$data->rekening}}</td>
            </tr>

            <tr>
                <td> Jenis Perusahaan</td>
                <td>:</td>
                <td>{{$data->jenis}}</td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>:</td>
                <td>{{$data->posisi}}</td>
            </tr>

        </tbody>

    </table>
    </div>
</section>
@extends('user.layout.main')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> {{ $title }}</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
        <h5 class="card-header">{{ $title }}</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Perangkat</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Status</th>
                    <th>Tindak Lanjut</th>
                    <th>PIC</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @php $no = 1; @endphp
                  @foreach ($data_fisik as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama_fisik}}</td>
                    <td><center>{{$item->jumlah_fisik}} Unit<center></td>
                    <td><center>{{$item->tglperiksa_fisik}}</center></td>
                    <td>{{$item->status_fisik}}</td>
                    <td>{{$item->tindak_lanjut}}</td>
                    <td>{{$item->pic_fisik}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td><a href="{{ url('user/edit-fisik', $item->id_fisik) }}"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a></td>

                  </tr> 
                  @endforeach
                </tbody>
              </table>            
        </div>
    
        </div>
    </div>
@endsection
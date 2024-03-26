@extends('admin.layout.main')

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
                  <th>Tanggal Efektif</th>
                  <th>Nomor Dokumen</th>
                  <th>Kategori Dokumen</th>
                  <th>Versi</th>
                  <th>Detail Monitoring</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @php $no = 1; @endphp
                  @foreach ($data_akuisisi as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->tgl_efektif}}</td>
                    <td>{{$item->nomor_dokumen}}</td>
                    <td>{{$item->kategori_dokumen}}</td>
                    <td>{{$item->versi}}</td>
                    <td><a href="{{ url('admin/detail-akuisisi', $item->id_akuisisi) }}"><span class="btn btn-info rounded-2 fw-semibold">Detail</span></a></td>
                    <td><a href="{{ url('admin/edit-akuisisi', $item->id_akuisisi) }}"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                    <form action="{{ url('admin/delete-akuisisi', $item->id_akuisisi) }}" class="mt-3" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                    </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    
        </div>
    </div>
@endsection
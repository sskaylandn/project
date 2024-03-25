@extends('admin.layout.main')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> {{ $title }}</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
        <h5 class="card-header">{{ $title }}  
            <br>
            <br>
            <a href="{{ url('admin/tambahaset-akuisisi') }}" class="menu-link">
            <button type="button" class="btn btn-sm btn-outline-primary">Tambah Data</button></a></h5>
     
        <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pemegang Aset</th>
                  <th>Nama Perangkat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
              @php $no = 1; @endphp
                  @foreach ($data_aset as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$item->nama_pemegang}}</td>
                  <td>{{$item->nama_perangkat}}</td>
                  <td><a href="{{ url('admin/edit-aset', $item->id_pemegang) }}"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                  <form action="{{ url('admin/deleteaset-akuisisi', $item->id_pemegang) }}" class="mt-3" method="POST">
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
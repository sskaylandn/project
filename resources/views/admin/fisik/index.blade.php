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
                    <th>Nama Perangkat</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Status</th>
                    <th>Tindak Lanjut</th>
                    <th>PIC</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>            
        </div>
    
        </div>
    </div>
@endsection
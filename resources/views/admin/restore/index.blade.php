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
                <th>Periode Backup</th>
                <th>Tanggal Restore Test</th>
                <th>Object Backup Restore</th>
                <th>Status Restore</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                <td>1</td>
                <td>Periode 2023</td>
                <td>39 Februari 2023</td>
                <td>Database</td>
                <td><span class="badge bg-label-success me-1">Selesai Dibackup</span></td>
                <td>Budi Cahyadi</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>
                    <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                    </div>
                    </div>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
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
                @forelse ($data_restore as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->periode }}</td>
                    <td>{{ $item->tanggal}}</td>
                    <td>{{ $item->objek }}</td>
                    <td>{{ $item->status}}</td>
                    <td>{{ $item->pj }}</td>
                    <td>{{ $item->keterangan}}</td>
                    <td>
                        <a href="{{ url('user/edit-restore', $item->id_restore) }}"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                        <form action="{{ url('user/delete-restore', $item->id_restore) }}" class="mt-3" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center" >Tidak ada Formulir Masuk</td>
                </tr>
                @endforelse
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
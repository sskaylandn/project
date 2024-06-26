@extends('user.layout.main')

@section('main_content')


  <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> {{ $title }}</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
        <h5 class="card-header">{{ $title }}</h5>
       
        <div class="table-responsive text-nowrap">

        <div class="row mb-3">
          <label class="col-sm-8 " for="basic-default-name"></label>
            <div class="col-sm-3" >
            <!--<input type="text" name="search" id="search" class="form-control" placeholder="Search Whitelist Data">-->
            </div>
        </div>      

          <table class="table">
            <thead>
              <tr> 
                <th>No</th>
                <th>Jenis Software</th>
                <th>Nama Software</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @php $no = 1; @endphp
            @foreach ($data_whitelist as $item)
              <tr>
               <td>{{$no++}}</td>
               <td>{{$item->jenis_software}}</td>
               <td>{{$item->nama_software}}</td>
               <td><a href="{{ url('user/edit-whitelist', $item->id_whitelist) }}"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a></td>
              </tr>
            @endforeach
            </tbody>
          </table>     
        </div>
    
        </div>
    </div>

@endsection
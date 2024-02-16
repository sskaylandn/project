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
                <th>Operating System</th>
                <th>Antvirus</th>
                <th>Design</th>
                <th>Browser</th>
                <th>Text Editor</th>
                <th>Remote</th>
                <th>API Tester</th>
                <th>SQL Client</th>
                <th>Communication</th>
                <th>Office</th>
                <th>Development</th>
                <th>Server</th>
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
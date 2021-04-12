@extends('adminlte.master')
@section('content')
<a href="#" class="btn btn-primary mb-2">tambah</a>

                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Bio</th>
                      <th style="width: 40px">action</th>
                    </tr>
                  </thead>
                  <tbody>
                 @forelse($casts as  $key=>$cast)
                 <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{$cast->nama}}</td>
                      <td>{{$cast->umur}}</td>
                      <td>{{$cast->bio}}</td>
                      <td><span class="badge bg-danger">55%</span></td>
                  </tr>
                  @empty
                  <tr>
                  <td colspan="4" align="center">nopost</td>
                  </tr>
                 @endforelse

                
                   
                
                  </tbody>
                </table>
               
@endsection
@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Pembeli</h5><br>
                <center>
                        <a href="{{ route('pembeli.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>no ktp</th>
                                <th>nama</th>
                                <th>alamat</th>
                                <th>telpon</th>
                                <th>no hp</th>
                                
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembeli as $data)
                            <tr>
                                <td>{{$data->pembeli_no_ktp}}</td>
                                <td>{{$data->pembeli_nama}}</td>
                                <td>{{$data->pembeli_alamat}}</td>
                                <td>{{$data->pembeli_telpon}}</td>
                                <td>{{$data->pembeli_hp}}</td>
                        
                               
								<td style="text-align: center;">
                                    <form action="{{route('pembeli.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('pembeli.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                    <a href="{{route('pembeli.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
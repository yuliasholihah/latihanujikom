@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Motor</h5><br>
                <center>
                        <a href="{{ route('motor.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>motor kode</th>
                                <th>merk</th>
                                <th>type</th>
                                <th>warna</th>
                                <th>harga</th>
                                <th>gambar</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($motor as $data)
                            <tr>
                                <td>{{$data->motor_kode}}</td>
                                <td>{{$data->motor_merk}}</td>
                                <td>{{$data->motor_type}}</td>
                                <td>{{$data->motor_warna_pilihan}}</td>
                                <td>{{$data->motor_harga}}</td>
                                <td><img src="{{asset('assets/img/motor/' .$data->foto. '')}}"
                                    style="width:250px; height:250px;" alt="Foto"></td>
                               
								<td style="text-align: center;">
                                    <form action="{{route('motor.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('motor.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                    <a href="{{route('motor.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
                                        
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
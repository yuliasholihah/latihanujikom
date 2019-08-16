@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Kridit Paket</h5><br>
                <center>
                        <a href="{{ route('kridit paket.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>kode</th>
                                <th>harga cash</th>
                                <th>uang muka</th>
                                <th>jumlah cicilan</th>
                                <th>bunga</th>
                                <th>nilai cicilan</th>

                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($kriditpaket as $data)
                            <tr>
                                <td>{{$data->paket_kode}}</td>
                                <td>{{$data->paket_harga_cash}}</td>
                                <td>{{$data->paket_uang_muka}}</td>
                                <td>{{$data->paket_jumlah_cicilan}}</td>
                                <td>{{$data->paket_bunga}}</td>
                                <td>{{$data->paket_nilai_cicilan }}</td>
                                <td>
									<a href="{{route('kridit paket.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                </td>
                                <td>
                                    <a href="{{route('kridit paket.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
                                </td>
                                <td>
									<form action="{{route('kridit paket.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
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
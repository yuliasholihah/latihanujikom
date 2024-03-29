@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Edit Data Motor</div>
                            </center>
            
                            <div class="card-body">
                                <form action="{{route('motor.update', $motor->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label for="">motor kode</label>
                                        <input class="form-control 
                                        @error('motor_kode') is-invalid @enderror" type="text" 
                                        name="motor_kode" id=""value="{{$motor->motor_kode}}" required>
                                        @error('motor_kode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="">merk</label>
                                        <input class="form-control 
                                        @error('motor_merk') is-invalid @enderror" type="text" 
                                        name="motor_merk" id=""value="{{$motor->motor_merk}}"  required>
                                        @error('motor_merk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">type</label>
                                        <input class="form-control 
                                        @error('motor_type') is-invalid @enderror" type="text" 
                                        name="motor_type" id=""value="{{$motor->motor_type}}" required>
                                        @error('motor_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">warna</label>
                                        <input class="form-control 
                                        @error('motor_warna_pilihan') is-invalid @enderror" type="text" 
                                        name="motor_warna_pilihan" id="" value="{{$motor->motor_warna_pilihan}}"required>
                                        @error('motor_warna_pilihan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">harga</label>
                                        <input class="form-control 
                                        @error('motor_harga') is-invalid @enderror" type="text" 
                                        name="motor_harga" id="" value="{{$motor->motor_harga}}"required>
                                        @error('motor_harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        @if (isset($motor) && $motor->foto)
                                            <p>
                                                <img src="{{ asset('assets/img/motor/' 
                                                .$motor->foto.'') }}"
                                                style="margin-top:15px;margin-bottom:15px;
                                                max-height:100px;border:1px;border-color:black;" alt="">
                                            </p>
                                        @endif
                                        <input class="form-control 
                                        @error('foto') is-invalid @enderror" type="file" 
                                        name="foto" id="" value="{{$motor->foto}}">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    
                                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Edit Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
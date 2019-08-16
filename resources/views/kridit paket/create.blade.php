@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Kridit Paket</div>
                            </center>
            
                            <div class="card-body">
                                <form action="{{route('kridit paket.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for=""> kode</label>
                                        <input class="form-control 
                                        @error('paket_kode') is-invalid @enderror" type="text" 
                                        name="paket_kode" id="" required>
                                        @error('paket_kode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="">harga cash</label>
                                        <input class="form-control 
                                        @error('paket_harga_cash') is-invalid @enderror" type="text" 
                                        name="paket_harga_cash" id="" required>
                                        @error('paket_harga_cash')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    
                                     <div class="form-group">
                                        <label for="">uang muka</label>
                                        <input class="form-control 
                                        @error('paket_uang_muka') is-invalid @enderror" type="text" 
                                        name="paket_uang_muka" id="" required>
                                        @error('paket_uang_muka')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">jumlah cicilan</label>
                                        <input class="form-control 
                                        @error('paket_jumlah_cicilan') is-invalid @enderror" type="text" 
                                        name="paket_jumlah_cicilan" id="" required>
                                        @error('paket_jumlah_cicilan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">bunga</label>
                                        <input class="form-control 
                                        @error('paket_bunga') is-invalid @enderror" type="text" 
                                        name="paket_bunga" id="" required>
                                        @error('paket_bunga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">nilai cicilan</label>
                                        <input class="form-control 
                                        @error('paket_nilai_cicilan') is-invalid @enderror" type="text" 
                                        name="paket_nilai_cicilan" id="" required>
                                        @error('paket_nilai_cicilan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    
                    
            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
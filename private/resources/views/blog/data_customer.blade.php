@extends('layouts.template')
@extends('model._data_customer')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading bg-teal">
                <h6 class="panel-title">
                    <span class="text-bold">
                        <i class="icon-users position-left"></i>DATA CUSTOMER
                    </span>
                </h6>
            </div>
            <div class="panel-body">
                <div class="pull-right">
                    <a href="#" data-toggle="modal" data-target="#ipt_customer" class="btn btn-primary btn-lg"><i class="icon-user-plus position-left"></i>Tambah Customer</a>
                </div>
                <table class="table table-xxs text-nowrap table-hover t_customer">
                    <thead class="bg-teal">
                        <tr>
                            <th>#</th>
                            <th>Kampus</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Notlp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tgl Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                            <td>{{ $dt->id_customer }}</td>
                            <td>{{ $dt->kampus }}</td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->jk }}</td>
                            <td>{{ $dt->notlp }}</td>
                            <td>{{ $dt->email }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>{{ date('d F Y', strtotime($dt->tgl_daftar)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
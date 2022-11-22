@extends('layouts.app')
@section('title', 'Replacement')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Replacement {{ $replacement->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replacement') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/replacement/' . $replacement->id . '/edit') }}" title="Edit replacement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/replacement' . '/' . $replacement->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replacement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $replacement->id }}</td>
                                    </tr>
                                    <tr><th> Nama Lengkap </th><td> {{ $replacement->nama_lengkap }} </td></tr><tr><th> Mata Kuliah </th><td> {{ $replacement->mata_kuliah }} </td></tr><tr><th> Kelas </th><td> {{ $replacement->kelas }} </td></tr><tr><th> Prodi </th><td> {{ $replacement->prodi }} </td></tr><tr><th> Semester </th><td> {{ $replacement->semester }} </td></tr><tr><th> Tahun Akademik </th><td> {{ $replacement->tahun_akademik }} </td></tr><tr><th> Tanggal </th><td> {{ $replacement->tanggal }} </td></tr><tr><th> Jadwal Kuliah </th><td> {{ $replacement->jadwal_kuliah }} </td></tr><tr><th> Tanggal Replacement </th><td> {{ $replacement->tanggal_replacement }} </td></tr><tr><th> Jam Replacement </th><td> {{ $replacement->jam_replacement }} </td></tr><tr><th> Alasan Replacement </th><td> {{ $replacement->alasan_replacement }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

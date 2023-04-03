@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Project Monitoring</h4>
                <a href="/create" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Projact Name</th>
                                <th>Client</th>
                                <th>Project Leader</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Progress</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $num++ }}</td>
                                    <td>{{ $item->project_name }}</td>
                                    <td>{{ $item->client }}</td>
                                    <td>
                                        <img alt="avatar1" src="{{ asset('photo/'.$item->photo) }}" style="width:40px;"/>
                                        <b>{{ $item->project_leader }}</b>
                                    </td>
                                    <td>{{ date('d M Y', strtotime($item->start_date)) }}</td>
                                    <td>{{ date('d M Y', strtotime($item->end_date)) }}</td>
                                    <td>{{ $item->progress }}%</td>
                                    <td>
                                        <a href="/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
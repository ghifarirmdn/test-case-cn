@extends('layouts.main')
@section('container')
    <h1 class="text-center">Tambah Data</h1>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambahkan Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="/insert" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Project Name</label>
                                <input type="text" name="project_name" class="form-control" placeholder="Enter Project Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Client</label>
                                <input type="text" name="client" class="form-control" placeholder="Enter Client Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Project Leader</label>
                                <input type="text" name="project_leader" class="form-control" placeholder="Enter Project Leader Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Project Leader Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="exampleInputEmail1" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleInputEmail1" class="form-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Progress</label>
                                <input type="number" name="progress" class="form-control" placeholder="Enter Progress">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('backend.master')

@push('title')
    Skill
@endpush

@section('content')
    <div class="pagetitle">
        <h1>Add Skill</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.view')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Add Skill</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Skill Details</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('admin.skill.store')}}">
                            @csrf
                            @method('POST')
                            <labe>Skill Name:</labe>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                             <span class="text-danger">{{$message}}</span>
                            @enderror
                            <br>
                            <labe>Skill Percentage:</labe>
                            <input type="number" name="percentage" class="form-control">
                            @error('percentage')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <br>
                            <button type="submit" class="btn btn-secondary">Save</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

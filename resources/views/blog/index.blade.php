@extends('layouts.blog')

@section('title')
    Month
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            @if(Session::has('error'))
                <div class="alert alert-warning">
                    {{ Session::get('error') }}
                </div>
            @endif
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px">NO</th>
                        <th>NAME</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($month as $key => $value)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td>{{ $value }}</td>
                            <td>
                                <a href="{{ route('frontend_blog_show', $key) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-search"></i> Show
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

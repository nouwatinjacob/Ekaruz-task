@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb container mt-50 mb-10 col-md-9 mx-auto bg-white shadow-lite">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
            
                    @if (session('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif

                    You are logged in!           
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
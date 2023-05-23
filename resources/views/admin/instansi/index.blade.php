@extends('layouts.app')

@section('content')
<div id="wrapper" class="">

    @include('components/dashboard/sidebar')

    <!-- Page Content -->
    <div class="container">
        <div id="page-content-wrapper">
            @include('components/dashboard/header')

            <!-- /#page-content-wrapper -->
            <div class="section-heading">
                <h3>Instansi</h3>
                <div class="rectangle"></div>
                <p>Instansi</p>
            </div>
            <div class="dashboard-container">
                <div class="table-function d-block d-lg-flex mb-4">
                    <input style="max-width: 420px" type="text" class="input-custom mb-2 mb-lg-0" id="cari" placeholder="Cari" />
                    <a href="{{route('instansi.create')}}" style="width: fit-content;" class="btn-primary-2 mx-0 mx-sm-1">Tambah</a>

                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered rounded rounded-3 overflow-hidden">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instansis as $instansi)
                            <tr>
                                <th style="width: 48px;" scope="row">{{$loop->iteration}}</th>
                                <td class="w-75">{{$instansi->name}}</td>
                                <td style="width: 128px;" class="text-end">
                                    <form action="{{route('instansi.destroy',$instansi->id)}}" method="post">
                                        <a href="{{route('instansi.edit',$instansi->id)}}" style="color:transparent;">
                                            <img style="cursor: pointer" class="mx-3" src="{{asset('images/edit.svg')}}" alt="" />
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete">
                                            <img src="{{asset('images/delete.svg')}}" style="cursor: pointer" alt="" />
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div aria-label="Page navigation example" class="mt-4">
                    {!! $instansis->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /#wrapper -->

@endsection
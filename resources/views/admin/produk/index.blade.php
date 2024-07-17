@extends('layouts.admin')
@section('styles')
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Produk</h4>
<div class="card ">
    <div class="card-header">
        <div class="float-start">
            <h5>Produk</h5>
        </div>
        <div class="float-end">
            <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary">
                Add
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i=1; @endphp
                    @foreach ($produk as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nama_produk}}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->stok }}</td>
                        <td>{{ $data->kategori->nama_kategori }}</td>
                        <td>
                            <img src="{{ asset('/storage/produks/' . $data->image) }}" class="rounded"
                                style="width: 150px">
                        </td>
                        <td>
                        <td>
                            <form action="{{route('produk.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('produk.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-dark">Show</a> 
                                <a href="{{route('produk.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <button type="submit" class="btn btn-sm btn-danger"  onclick="return confirm('Are You Sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush

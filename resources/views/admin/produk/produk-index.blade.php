@extends('layouts.app')
@section('konten')
    @foreach ($produk as $item)
        {{ $item->code }}
    @endforeach
@endsection

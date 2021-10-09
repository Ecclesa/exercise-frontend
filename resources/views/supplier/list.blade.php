@extends('layout.master')

@section('title', 'Supplier')

@section('content1')
    <div style="border:1px solid gray; padding:7px">
        Supplier List (<?php echo count($dtSupplier); ?>)
    </div>
@endsection

@section('content')
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtSupplier as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['address'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

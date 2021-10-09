@extends('layout.master')

@section('title', 'Product')

@section('content1')
    <div style="border:1px solid gray; padding:7px">
        Product List (<?php echo count($dtProduct); ?>)
    </div>
@endsection

@section('content')
    <div class="row">

        @foreach ($dtProduct as $item)
            <div class="col-3 col-sm-3"
                style="padding-top: 25px; padding-right: 25px; padding-bottom: 25px; padding-left: 25px">
                <div
                    style="border:1px solid gray; padding-top: 25px; padding-right: 25px; padding-bottom: 25px; padding-left: 25px">
                    <center>
                        <div> <img src={{ $item['photo'] }} style="width:150px;height:150px"> </div>
                        <div> {{ $item['id'] }} - {{ $item['name'] }} </div>
                    </center>
                    <table>
                        <tr style="border:1px solid gray">
                            <td style="width:20%; padding:7px">
                                Price:
                            </td>
                            <td style="text-align: right; width:80%; padding:7px">
                                @currency($item['price'])
                            </td>
                        </tr>
                        <tr style="border:1px solid gray">
                            <td style="padding:7px">
                                Stock:
                            </td>
                            <td style="text-align: right; padding:7px">
                                @if ($item['stock'] < 10) <span
                                        class="badge badge-danger">{{ $item['stock'] }}</span>
                                @else <span class="badge badge-primary">{{ $item['stock'] }}</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        @endforeach

    </div>
@endsection

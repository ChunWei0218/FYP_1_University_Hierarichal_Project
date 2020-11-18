@extends('layouts.graph_lay2')

@section('content')

<div class="container ggraph">
    <div id="chart"></div>
</div>
<div class="container gtable">
    <div class="modal-content">
        <div class="modal-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
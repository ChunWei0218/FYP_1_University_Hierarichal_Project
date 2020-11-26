@extends('layouts.graph_layout')

@section('content')

<div class="container ggraph">
    <div class="row force-view">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-default">Add Data</button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#helpModal">Help</button>
            </div>
        </div>

        <div id="chart"></div>
        <center>
            <div class="alert alert-info" role="alert">
                <p>If you're not sure how to use the editable graph,you can always click the help button.</p>
            </div>
        </center>
    </div>

    <!-- Add Data Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="modal-default">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post">

                    <div class="modal-header">
                        <h5 class="modal-title">Add Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! csrf_field() !!}
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="" disabled selected hidden> Select a category</option>
                            <option>University</option>
                            <option>Department</option>
                            <option>Project</option>
                            <option>Employee</option>
                        </select>
                        <label for="textNode">label</label>
                        <input type="text" placeholder="Name" class="form-control" id="label" name="label" required>
                        <!-- <input type="text" placeholder="Category" class="form-control" id="category" name="category"> -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Node Modal -->
    <div class="modal fade" id="editNodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">You're editing this node</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="textCategoryNode">Category</label>
                        <select class="form-control" id="textCategoryNode" required>
                            <option value="" disabled selected hidden > Select a category</option>
                            <option>University</option>
                            <option>Department</option>
                            <option>Project</option>
                            <option>Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="textNode">label</label>
                        <input type="text" class="form-control" id="textNode" placeholder="Type a text for your node" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    <p id="tbutton"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="removeNodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to remove this node?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Help Modal -->
    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Help</h4>
                </div>
                <div class="modal-body">

                    <li><strong>CLICK</strong> to select/deselect nodes/links.</li>
                    <li><strong>DOUBLE CLICK</strong> the node to edit the content of the node.</li>
                    <li><strong>DRAG</strong> from an existing node to add a new node or link.</li>
                    <li>Hit the <strong>DELETE KEY</strong> to remove the selected node or link.</li>
                    <li> <strong>DRAG</strong> the to pan. <strong>SCROLL</strong> to zoom.</li>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container gtable">
    <div class="modal-content">
        <div class="modal-body table-responsive">
            <input class="form-control" id="SearchData" type="text" placeholder="Search..">
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
@extends('layouts.graph_layout')

@section('content')

<div class="container ggraph">
    <div class="row force-view">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-success btn-lg add-node">Add Node</button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-danger btn-lg remove-all-nodes">Remove All Nodes</button>
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
    <!-- Add Node Modal -->
    <div class="modal fade" id="addNodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">You're adding a node</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="textCategoryNode">Category</label>
                        <select class="form-control" id="textCategoryNode">
                            <option value="" disabled selected hidden> Select a category</option>
                            <option>University</option>
                            <option>Department</option>
                            <option>Project</option>
                            <option>Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="textNode">label</label>
                        <input type="text" class="form-control" id="textNode" placeholder="Type a text for your node">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Node Modal -->
    <div class="modal fade" id="editNodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">You're adding a node</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="textCategoryNode">Category</label>
                        <select class="form-control" id="textCategoryNode">
                            <option value="" disabled selected hidden> Select a category</option>
                            <option>University</option>
                            <option>Department</option>
                            <option>Project</option>
                            <option>Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="textNode">label</label>
                        <input type="text" class="form-control" id="textNode" placeholder="Type a text for your node">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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

                    Drag from an existing node to add a new node or link. Click to select/deselect nodes/links. Hit the
                    DELETE key to remove the selected node or link. Drag to pan. Scroll to zoom.
                    <br> Double click to edit the node content.

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
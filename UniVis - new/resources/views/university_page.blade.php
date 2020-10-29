@extends('layouts.graph_layout')

@section('content')
<!--content-->
<div class="alchemy" id="alchemy"></div>

<script src="http://cdn.graphalchemist.com/alchemy.min.js"></script>
<script type="text/javascript">

  var config = {
    dataSource: 'data/univis.json',
    forceLocked: false,
    linkDistance: function(){ return 40; },

    nodeTypes: {"name": ["UNIVERSITY", "DEPARTMENT","PROJECT","EMPLOYEE"]},
    caption: function(node){ 
        return node.name; 
    }
  };

  alchemy = new Alchemy(config)
</script>
<script>
  alchemy.begin({"dataSource": some_data})
</script>

@endsection
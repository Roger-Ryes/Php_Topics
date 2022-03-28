@section('content')
<div>
    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{@include('common.errors')}}
        
    <form action="/task" method="POST" class="form-horizontal">
           {{ csrf_field() }}
            <label for="task" class="col-sm-3 control-label">Task</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
            
             <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Task
             </button>
    </form>
</div>
@endsection

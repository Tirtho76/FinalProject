@extends('Layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Details</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>
                        <td class="th-sm">Laravel</td>
                        <td class="th-sm">Laravel is a fronend framework</td>
                        <td class="th-sm"><a href="" class="btn btn-success">Details</a></td>
                        <td class="th-sm"><a href="" class="btn btn-warning">Edit</a></td>
                        <td class="th-sm"><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>                                                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



@section('script')
<script type="text/javascript">
    
</script>
@endsection
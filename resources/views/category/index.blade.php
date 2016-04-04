@extends('layouts.app')

@section('content')
        {{ Html::style('assets/global/plugins/datatables/datatables.min.css') }}
        {{ Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}

                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE TITLE-->
                  
                    <!-- END PAGE TITLE-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                       <ul class="page-breadcrumb">
                            <li>
                                <a href="{{ url('/home') }}">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Category</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                         
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- END PAGE HEADER-->  

                    <div class="portlet box green">
                        @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                        @endif
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Category </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="{{ route('category.create') }}" id="" class="btn green">
                                                    Add New <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                 {!! Form::open([
                                                        'method' => 'GET',
                                                        'route' => ['category.index']
                                                    ]) !!}
                                                        {{ Form::text('search', '', array('class'=>'form-control','id'=>'search','placeholder'=>'Search')) }} 
                                                    {!! Form::close() !!}
                                            </div>
                                        </div>

                                    </div>
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th> Name </th>
                                                <th class="numeric"> Status </th>
                                                <th class=""> Created Date </th>
                                                <th class=""> Updated Date </th>
                                                <th class="10%"> Edit </th>
                                                <th class="10%"> Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Category as $category)
                                              <tr>
                                                <td>{{ $category->name }}</td>
                                                @if($category->active == 1)
                                                    <td class="numeric"> {{ 'active' }} </td>
                                                @else
                                                    <td class="numeric"> {{ 'inactive' }} </td>
                                                @endif
                                                <td>{{ $category->created_at }}</td>
                                                <td>{{ $category->updated_at }}</td>
                                                <td>
                                                    <a class="btn default blue-stripe" href="{{ route('category.edit', $category->id) }}">
                                                    Edit </a>
                                                </td>
                                                <td>
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['category.destroy', $category->id]
                                                    ]) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn default red-stripe']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                              </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {!! $Category->links() !!}
                                </div>
                                
                            </div> 
                             <script type="text/javascript">
                                $(document).ready(function() {
                                    $('.commentarea').keydown(function(event) {
                                        if (event.keyCode == 13) {
                                            this.form.submit();
                                            return false;
                                         }
                                    });
                                });
                            </script>

                     {{ Html::script('assets/global/plugins/jquery.min.js') }}
                     {{ Html::script('assets/global/plugins/datatables/datatables.min.js') }}
                     {{ Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}
                    {{ Html::script('assets/pages/scripts/table-datatables-scroller.min.js') }}
@endsection('content')
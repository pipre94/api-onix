@extends('layouts.app')

@section('template_title')
    Property
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Property') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('properties.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Textproperties</th>
										<th>Price</th>
										<th>Details</th>
										<th>Urlimage</th>
										<th>Viewproperties</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $property)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $property->textProperties }}</td>
											<td>{{ $property->price }}</td>
											<td>{{ $property->details }}</td>
											<td>{{ $property->urlimage }}</td>
											<td>{{ $property->viewProperties }}</td>

                                            <td>
                                                <form action="{{ route('properties.destroy',$property->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('properties.show',$property->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('properties.edit',$property->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $properties->links() !!}
            </div>
        </div>
    </div>
@endsection

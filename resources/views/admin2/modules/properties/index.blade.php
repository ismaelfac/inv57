@extends('admin2.admin')

@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Inmuebles
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            @can('properties.create')
            <a href="{{ route('properties.create') }}" class="btn btn-outline-success">Registrar Inmuebles</a>
            @endcan
        </div>
    </div>
    <div class="card-body text-secondary">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10px">Codigo</th>
                    <th>Zona </th>
                    <th>Ciudad</th>
                    <th>Barrio</th>
                    <th>Tipo</th>
                    <th>Cannon</th>
                    <th>Admon</th>
                    <th>Venta</th>
                    <th>Direccion</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                <tr>
                    <td>1212</td>
                    <td>SUR</td>
                    <td>BAQ</td>
                    <td>Kennedy</td>
                    <td>lote comercial</td>
                    <td>$723.000</td>
                    <td>$250.000</td>
                    <td>$980.000.000</td>
                    <td>Calle 47D #1a4 - 82</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                        </div>    
                    </td>                
                </tr>
                <tr>
                    <td>1212</td>
                    <td>SUR</td>
                    <td>BAQ</td>
                    <td>Kennedy</td>
                    <td>lote comercial</td>
                    <td>$723.000</td>
                    <td>$250.000</td>
                    <td>$980.000.000</td>
                    <td>Calle 47D #1a4 - 82</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                        </div>    
                    </td>                
                </tr>
                <tr>
                    <td>1212</td>
                    <td>SUR</td>
                    <td>BAQ</td>
                    <td>Kennedy</td>
                    <td>lote comercial</td>
                    <td>$723.000</td>
                    <td>$250.000</td>
                    <td>$980.000.000</td>
                    <td>Calle 47D #1a4 - 82</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                        </div>    
                    </td>                
                </tr>
                <tr>
                    <td>1212</td>
                    <td>SUR</td>
                    <td>BAQ</td>
                    <td>Kennedy</td>
                    <td>lote comercial</td>
                    <td>$723.000</td>
                    <td>$250.000</td>
                    <td>$980.000.000</td>
                    <td>Calle 47D #1a4 - 82</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                        </div>    
                    </td>                
                </tr>
                <tr>
                    <td>1212</td>
                    <td>SUR</td>
                    <td>BAQ</td>
                    <td>Kennedy</td>
                    <td>lote comercial</td>
                    <td>$723.000</td>
                    <td>$250.000</td>
                    <td>$980.000.000</td>
                    <td>Calle 47D #1a4 - 82</td>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                            <a href="#" class="btn btn-outline-success btn-xs">ver</a>
                        </div>    
                    </td>                
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection

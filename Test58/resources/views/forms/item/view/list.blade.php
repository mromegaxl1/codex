<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Unidad</th>
            <th>Usuario</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{$item->name}}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->units }}</td>
            <td>{{ $item->userv->name }}</td>

            <td>

                <a href="{{url('/item/seach')}}/{{ $item->id }}"  title="Editar">
                    <span class="glyphicon glyphicon-pencil">Editar</span>
                </a>

            </td>
        </tr>

        @empty

        <div class="alert alert-dismissible alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4>itmes no existentes!</h4>

    </div>




        @endforelse
    </tbody>
</table>


{!! $items->render()!!}




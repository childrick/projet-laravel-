@extends("admin.layouts.template")
@section('contenu')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des categories</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>


<!--afficher le message de succès -->
      @if(Session::has("message"))
     <div class="alert alert-succes"> {{Session::get('message')}}</div>
      @endif
@forelse($categories as $category)
<tr>
    <td>{{ $category->name}}</td>
    <td>

       <a href="{{ route('categories.edit',$category->id)}}"> <button class="btn btn-success">Modifier</button>

        <form class="d-inline" action="{{ route('categories.destroy',$category->id)}}"method="post">
            @csrf
            @method("DELETE")
        <button type="submit"onlick="return confirm('etes vous sure de supprimer')" class="btn btn-danger">Delete</button>
    </form>

    </td>
</tr>
@empty
<tr><td colspan="2">No data found</td></tr>

@endforelse
    </tbody>
        <tfoot>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

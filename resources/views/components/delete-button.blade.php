<form class="d-inline" action={{$action}} method="post" >
    @csrf
    @method('delete')
    <button  onclick="return confirm('Are you want to delete this record ?')"
    class="btn btn-danger" type="submit">  <i class="fe fe-trash-2 fa-2x"></i> </button>
</form>
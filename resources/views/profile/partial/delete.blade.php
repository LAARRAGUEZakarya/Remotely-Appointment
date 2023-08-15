
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Delete Confermation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('profile.distroy')}}" method="POST" >
          @method('delete')
          @csrf
        <div class="modal-body">

            <h3>Are you really want to delete your account ?</h3>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

        </div>
      </form>
      </div>
    </div>
  </div>

 {{-- the modal of edit info  --}}

 <div class="modal fade" id="EditPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('profile.updatePassword')}}" method="POST" >
          @method('patch')
          @csrf
        <div class="modal-body">
          
     
     
  
          <div class="form-group">
            <div class="input-group ">
              <span class="input-group-text" id="email">@</span>
              <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" name="email" value="{{ $user->email  }}" required placeholder="Email">
            </div>
          </div>
  
          <div class="form-group">
            <input type="password" class="form-control" id="current_password" name="current_password" required placeholder="Currant password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password"  required placeholder="New password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirmation New password">
          </div>

  
        </div>
        <div class="modal-footer">
         
          <button type="submit" class="btn btn-primary">Save changes</button>
          <span  class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#EditModal">Back</span>
        </div>
      </form>
      </div>
    </div>
  </div>
  
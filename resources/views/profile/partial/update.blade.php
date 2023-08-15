 {{-- the modal of edit info  --}}

 <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('profile.update')}}" method="POST" >
        @method('put')
        @csrf
      <div class="modal-body">
        
   
       
        <div class="form-group">
          <input type="text" class="form-control" name="first_name" id="Fname" value="{{ old('first_name') }}" required placeholder="First Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" required placeholder="Last Name">
         
        </div>

        <div class="form-group">
          <div class="input-group ">
            <span class="input-group-text" id="email">@</span>
            <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" name="email" value="{{ old('email') }}" required placeholder="Email">
          </div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="adress" name="adress" value="{{ old('adress') }}" required placeholder="Address">
        </div>
         <div class="form-group">
          <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Phone number">
        </div>
      




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

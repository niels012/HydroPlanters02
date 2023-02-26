<div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div> 
      @endif
  
      @if($errors->any())
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
  </div>
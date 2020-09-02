@if ($errors->any())
      
            @foreach ($errors->all() as $error)

            <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong class="d-block d-sm-inline-block-force">{{ $error }}</strong>
            </div><!-- alert -->

            @endforeach

@endif
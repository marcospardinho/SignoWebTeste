@props(['status'])

@if ($status)
    <div>
        <div class="card-body">
            <div class="alert alert-info alert-dismissible" style="text-align: center;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
              {{ $status }}
            </div>


          </div>

    </div>
@endif

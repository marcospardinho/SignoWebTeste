@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600" style="padding: 0;">
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible" style="text-align: center;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                  @foreach ($errors->all() as $error)
                 <li style="list-style: none;">{{ $error }}</li>
                 @endforeach
                </div>


              </div>

        </ul>
    </div>
@endif

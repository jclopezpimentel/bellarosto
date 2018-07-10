<div class="tab-pane" id="edit-Images" role="tabpanel">
  <div class="col-md-12 ml-auto mr-auto">
    <div class="row collections">
      <div class="col-md-12">
        @foreach ($images as $image)
          <div class="col-sm" style="display: inline-grid;">
            <div class="card" style="width: 20rem;">
              <img src="/img/{{$image->pathImage}}" alt="" class="card-img-top" width="290px" height="250px">
              <div class="card-body">
                <h5 class="card-title">{{$image->imageName}}</h5>
                <p class="card-text">Categoría: {{ \App\Category::where(['id' => $image->id_categories])->pluck('name')->first() }}</p>
                <p>Status: {{$image->imageVisibility == 'False' ? 'Visible': 'No visible'}}</p>
                <buton class="deleteImage btn btn-danger btn-sm"  id="{{$image->id}}">
                  <i class="now-ui-icons ui-1_simple-remove"></i> Remove 
                </buton>
                <buton class="updateVisibilityImage btn btn-info btn-sm"  id="{{$image->id}}">
                  <i class="now-ui-icons ui-1_zoom-bold"></i> {{$image->imageVisibility == 'False' ? 'Hacer Invisible': 'Hacer Visible' }} 
                </buton>
              </div> 
            </div>
          </div>

        @endforeach

      </div>
    </div>
  </div>
</div>

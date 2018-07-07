<div class="tab-pane" id="categories" role="tabpanel">
    <div class="col-md-10 ml-auto mr-auto">
        <div class="row collections">
            <div class="col-md-12">
              <h2 align="center">Categorías</h2>

              <div class="row col-md-12">
                <button class="btn btn-success btn-md" style="margin:0 auto;display:block;" data-toggle="modal" data-target="#categoryModal">
                  <i class="now-ui-icons ui-1_simple-add"> </i> Agregar 
                </button>
              </div><br>

              <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="text-align: center;" scope="col">Nombre</th>
                    <th style="text-align: center;" scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td align="center">{{$category->name}}</td>
                      <td align="center">
                        <buton class="deleteCategory btn btn-danger btn-sm"  id="{{$category->id}}">
                          <i class="now-ui-icons ui-1_simple-remove"></i> Remove 
                        </buton>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
        </div>
    </div>
</div>

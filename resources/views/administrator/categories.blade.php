<div class="tab-pane" id="categories" role="tabpanel">
    <div class="col-md-10 ml-auto mr-auto">
        <div class="row collections">
            <div class="col-md-12">
              <h2 align="center">Categorías</h2>

              <div class="row col-md-12">
                <div class="col-md-9"></div>
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#categoryModal">
                  <i class="now-ui-icons ui-1_simple-add"> </i> Agregar 
                </button>
              </div><br>

              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th style="text-align: center;" scope="col">#</th>
                    <th style="text-align: center;" scope="col">Nombre</th>
                    <th style="text-align: center;" scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <th align="center" scope="row">{{$category->id}}</th>
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

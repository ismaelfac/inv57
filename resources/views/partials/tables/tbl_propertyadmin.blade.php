 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">     
          <div class="box">
            <div class="box-header">
              <div class="box-body">
              <a class="btn btn-app"><i class="fa fa-edit"></i> Editar</a>
              <a class="btn btn-app"><i class="fa fa-play"></i> Play
              </a>
              <a class="btn btn-app">
                <i class="fa fa-repeat"></i> Repeat
              </a>
              <a class="btn btn-app">
                <i class="fa fa-pause"></i> Pause
              </a>
              <a class="btn btn-app">
                <i class="fa fa-save"></i> Save
              </a>
              <a class="btn btn-app">
                <span class="badge bg-yellow">3</span>
                <i class="fa fa-bullhorn"></i> Notifications
              </a>
              <a class="btn btn-app">
                <span class="badge bg-green">300</span>
                <i class="fa fa-barcode"></i> Products
              </a>
              <a class="btn btn-app">
                <span class="badge bg-purple">891</span>
                <i class="fa fa-users"></i> Users
              </a>
              <a class="btn btn-app">
                <span class="badge bg-teal">67</span>
                <i class="fa fa-inbox"></i> Orders
              </a>
              <a class="btn btn-app">
                <span class="badge bg-aqua">12</span>
                <i class="fa fa-envelope"></i> Inbox
              </a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>.</th>
                  <th>Id propiedad</th>
                  <th>Foto</th>
                  <th>Datos Wasi</th>
                  <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                    <@foreach($properties as $types)
                        <tr>
                          <td>
                            <div class="checkbox">
                              <label class="mr-10"> 
                                  <small>
                                      <input type="checkbox" name="registro"></small>
                              </label>
                            </div>
                        </td>
                          <td>{{ $types['id_property'] }}</td>
                          <td><a href=""> <img class="image_wasi" src="{{ (empty($types['galleries'][0][0]['url']))? 'website/images/flat/1.jpg' : $types['galleries'][0][0]['url'] }}"
                          alt="" /></td>
                          <td><h3>{{ $types['title'] }}</h3><h6>{{ $types['address'] }}</h6> </td>
                          <td>{{ ($types['for_sale'] ? 'En venta': 'Arriendo') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
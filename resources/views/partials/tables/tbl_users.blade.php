 <@foreach($users as $user)
                        <tr>
                          <td>
                            <div class="checkbox">
                              <label class="mr-10"> 
                                  <small>
                                      <input type="checkbox" name="registro"></small>
                              </label>
                            </div>
                        </td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->is_admin }}</td>
                          <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                
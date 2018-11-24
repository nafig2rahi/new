@extends('backend.layouts.layout')
@section('abc')


        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Forms</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Form Example</div>
            <div class="card-body">
              <form action="{{ url('postInsert') }}" method="post">
                {{ csrf_field() }}
                <table>
                  <tr>
                        <div class="form-group">
                  <td><label for="Name">Name</label></td>
                <td>  <input type="text" name="name" class="form-control" id="Name">
                </div></td>
        </tr>
        <tr>
                <div class="form-row">
                  <div class="form-group col-md-6">
                   <td> <label for="inputEmail4">Email</label></td>                 <td>   <input type="email" name="email" class="form-control" id="email" placeholder="Email"></td>
                  </div>

                </tr>
                <tr>
                  <div class="form-group col-md-6">
                    <td><label for="inputPassword4">Password</label>
                    </td>
                   <td> <input type="password" name="password" class="form-control" id="password" placeholder="Password"></td>
                  </div>
                </tr>
                </div>
                  <br>
                  <tr>
              <td>  <button type="submit" value="submit" class="btn btn-primary">Sign in</button>
             </td>
              </tr>
              <tr>
                <td>Role</td>
                <td>
                  <select name="role_id" id="role_id">
                    @foreach($role)
                    <option value="{{ $role->id }}">
                      {{ $role->name }}

                    </option>
                    @endforeach
                  </select>
                </td>
              </tr>
              </table>

              </form>
            </div>
            
          </div>

          

        </div>

 @stop
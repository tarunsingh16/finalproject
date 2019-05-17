
 <form role="form" method="POST" action="/user/login"  >
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName1">User Name</label>
                  <input type="text" name="username" class="form-control" id="exampleInputName1" placeholder="Enter Email">
                </div><br>
                <div class="form-group">
                  <label for="exampleInputLocation1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputLocation1" placeholder="Enter Password">
                </div>
 

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="submit">
              </div>
            </form>
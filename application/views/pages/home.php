  
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              
              <?php echo validation_errors(); ?>

              <?php echo form_open('pages/view'); ?>

              <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" name="name">
              </div>

              <div class="form-group">
                  <label for="birth">Date of birthday:</label>
                  <input type="date" class="form-control" id="birth" name="birth">
              </div>

              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email">
              </div>

              <div class="form-group">
                  <label for="color">Favorite color:</label>
                  <input type="color" class="form-control" id="color" name="color">
              </div>

              <input type="submit" class="btn btn-primary" name="submit" value="Create" />

              </form>
          </div>
      </div>
  </div>
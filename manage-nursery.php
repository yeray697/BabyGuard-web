<?php require_once "config.php";?>
<?php printHeader(false); ?>
<main class="<?php echo LOGIN_COLOR;?>">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <form action="<?php echo ADD_NURSERY_PHP;?>" method="POST">
              <div class="card-content">
                  <span class="card-title">Personal details</span>
                  <div class="row">
                    <div class="input-field col s12 m6">
                      <i class="material-icons prefix">person_pin</i>
                      <input id="first_name" name="first_name" type="text" class="validate" required aria-required="true">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12 m6">
                      <input id="last_name" name="last_name" type="text" class="validate" required>
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m6">
                      <i class="material-icons prefix">lock</i>
                      <input id="password" name="password" type="password" class="validate" required>
                      <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12 m6">
                      <input id="password2" name="password2" type="password" class="validate" required>
                      <label for="password2">Repeat password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">email</i>
                      <input id="email" name="email" type="email" class="validate" required>
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="divider"></div><br>
                  <span class="card-title">Nursery details</span>

                  <div class="row">
                    <div class="input-field col s12 m6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="nursery_name" name="nursery_name" type="text" class="validate" required>
                      <label for="nursery_name">Nursery</label>
                    </div>
                    <div class="input-field col s12 m6">
                      <i class="material-icons prefix">email</i>
                      <input id="nursery_email" name="nursery_email" type="email" class="validate" required>
                      <label for="nursery_email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">web</i>
                      <input id="nursery_web" name="nursery_web" type="text" class="validate" required>
                      <label for="nursery_web">Web</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">picture_in_picture</i>
                      <input id="nursery_address" name="nursery_address" type="text" class="validate" required>
                      <label for="nursery_address">Address</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s10">
                      <h6>Telephones</h6>
                    </div>
                    <div class="input-field input-group col s10">
                      <i class="material-icons prefix">phone</i>
                      <input id="nursery_phone" name="nursery_phone" type="text" class="validate" required>
                      <label for="nursery_phone">Telephone #1</label>
                    </div>
                    <div class="input-field col s2" id="manage-nursery-telephone-add">
                      <a class="btn-floating btn waves-effect waves-light red" onclick="addTelephoneField()"><i class="material-icons">add</i></a>
                    </div>
                  </div>
                  <input type="submit" value="Send">
              </div>
              <div class="card-action">
                <a href="<?php echo MANAGE_PHP; ?>" class="<?php echo LOGIN_ACCENT_COLOR;?>">Cancel</a>
                <input type="submit" class="right <?php echo LOGIN_ACCENT_COLOR;?>" value="Add">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</main>
<?php printFooter(false); ?>
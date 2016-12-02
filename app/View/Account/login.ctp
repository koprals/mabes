<div class="login-container login-v2">
    <div class="login-box animated fadeInDown">
        <div class="login-body">
            <div class="login-logo"></div>
            <div class="login-title"><strong>Welcome</strong>, Please login.</div>
            <?php echo $this->Form->create("Admin",array("url"=>array("controller"=>"Account","action"=>"Login","?"=>"debug=0"),"class"=>"form-horizontal"));?>
                  <div class="form-group">
                      <div class="col-md-12">
                        <?php echo $this->Form->input("username",
                            array(
                              "label"         =>  false,
                              "before"        =>  "<div class='input-group'><div class='input-group-addon'><span class='fa fa-lock'></span></div>",
                              "after"         =>  "</div>",
                              "class"         =>  "form-control",
                              "placeholder"   =>  "Username",
                              "autocomplete"	=>	"off",
                              "type"          =>	"text"
                            )
                          )?>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class='col-md-12'>
                      <?php echo $this->Form->input("password",
                          array(
                            "label"         =>  false,
                            "before"        =>  "<div class='input-group'><div class='input-group-addon'><span class='fa fa-lock'></span></div>",
                            "after"         =>  "</div>",
                            "class"         =>  "form-control",
                            "placeholder"   =>  "Password",
                            "autocomplete"	=>	"off",
                            "type"          =>	"password"
                          )
                        )?>
                    </div>
                  </div>
<<<<<<< HEAD
=======

                  <div class="form-group">
                      <div class="col-md-12 center">
                          <!-- <a href="#">Forgot your password?</a> -->
                      </div>
                  </div>
>>>>>>> c513d16343cfeef319149da032a3a1da05104f5f
                <div class="form-group">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    </div>
                </div>
        		<?php echo $this->Form->end()?>
        </div>
        <div class="login-footer">
            <div class="center">
                <!-- <a href="#">About</a> |
                <a href="#">Privacy</a> |
                <a href="#">Contact Us</a> -->
            </div>
        </div>
    </div>
</div>

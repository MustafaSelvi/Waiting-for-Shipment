<div class="ui segment">
    
        <p>Account Settings Form</p></div>
           <div class="ui pointing secondary account-settings-modal menu">
              <a class="active red item" data-tab="first">General</a>
              <a class="blue item" data-tab="second">Partnership</a>
              <a class="green item" data-tab="third">Balance</a>
            </div>

          <div class="ui active tab segment" data-tab="first">
          <div class="ui form">
              <h4 class="ui dividing header">Personal Information</h4>
                <div class="field">
                  <label>Name</label>
                  <div class="two fields">
                    <div class="field">
                      <input type="text" name="shipping[first-name]" placeholder="First Name">
                    </div>
                    <div class="field">
                      <input type="text" name="shipping[last-name]" placeholder="Last Name">
                    </div>
                  </div>
                </div>
                <div class="field">
                  <div class="two fields">
                    <div class="field">
                    <label>Email</label>  <input type="text" name="shipping[email]" placeholder="Email">
                    </div>
                    <div class="field">
                    <label>Phone</label>  <input type="text" name="shipping[phone]" placeholder="Phone">
                    </div>
                  </div>
                </div>
            </div>
            <div class="ui toggle checkbox" style="margin-bottom:10px;">
                <input type="checkbox" name="public" id="password-reset-controller"> 
                <label>Reset Password</label>
            </div>

            <div class="ui form gosterme" id="password-reset-form">
              <h4 class="ui dividing header">Password</h4>
              <div class="field">
                  <label>Old Password</label>
                    <div class="field">
                      <input type="text" name="shipping[old-password]" placeholder="Old Password">
                    </div>
                    <label>New Password</label>
                    <div class="field">
                      <input type="text" name="shipping[new-password]" placeholder="New Password">
                    </div>
                    <label>New Password Again</label>
                    <div class="field">
                      <input type="text" name="shipping[new-password-again]" placeholder="New Password Again">
                    </div>
                    <div class="ui teal submit button">Reset Password</div>
                </div>
            </div>
        
        </div>
          <div class="ui tab segment" data-tab="second">
          <div class="ui form">
              <h4 class="ui dividing header">Partnership Information</h4>
                <div class="field">
                  <label>Company Name</label>
                
                    <div class="field">
                      <input type="text" name="shipping[company-name]" placeholder="Company Name">
                    </div>
                    
                </div>
                <div class="field">
                  <label>Website</label>
                
                    <div class="field">
                      <input type="text" name="shipping[Website]" placeholder="Website">
                    </div>
                    
                </div>
                <div class="field">
                  <label>Gov ID / Tax No</label>
                
                    <div class="field">
                      <input type="text" name="shipping[tax-no]" placeholder="Gov ID / Tax No">
                    </div>
                    
                </div>
            </div>
          </div>
          <div class="ui tab segment" data-tab="third">Balance</div>
       </div>

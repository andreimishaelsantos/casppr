<?php
	$page_title = "Registration";
	include_once('../includes/header.php');
?>
    <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
            <div class="card">
                <div class="card-image">
                    <img src="../content/images/spot/logo.jpg" height="300em">
                </div>
                <div class="row">
                <div class="card-content">
                    <form class="col s12 m12 l10">
                        <div class="row">
                            <div class="input-field col s12 m6 l6 push-l1">
                                <select class="icons">
                                  <option value="" disabled selected>Choose your Artist Group</option>
                                  <option value="" data-icon="../content/images/coro/logo.jpg" class="left circle">Coro San Benildo</option>
                                  <option value="" data-icon="../content/images/cpt/logo.png" class="left circle">Cultural Promotions Team</option>
                                  <option value="" data-icon="../content/images/df/logo.jpg" class="left circle">Dulaang Filipino</option>
                                  <option value="" data-icon="../content/images/karilyo/logo.jpg" class="left circle">Karilyo</option>
                                  <option value="" data-icon="../content/images/sbrdc/logo.jpg" class="left circle">Saint Benilde Romançon Dance Company</option>
                                  <option value="" data-icon="../content/images/spot/logo.jpg" class="left circle">Stage Production Operations Team</option>
                                </select>
                                <label>Artist Group</label>
                            </div>
                            <div class="input-field col s12 m6 l6 push-l1">
                                <select class="icons">
                                  <option value="" disabled selected>Choose your option</option>
                                  <?php echo $_subgroups ?>
                                    
                                </select>
                                <label>Sub Group</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="FN" type="number" class="validate">
                                <label for="FN">First Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="LN" type="text" class="validate">
                                <label for="LN">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="username" disabled type="text" class="validate">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="email" type="email" class="validate">
                                <label for="email">E-Mail</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="SID" type="number" class="validate">
                                <label for="SID">School ID</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="mobile" type="number" class="validate">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="landline" type="number" class="validate">
                                <label for="landline">Landline</label>
                            </div>
                        </div>
                     <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input id="address" type="text" class="validate">
                                <label for="address">Address</label>
                            </div>
                                                  
                        </div>
                     <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="zip" type="text" class="validate">
                                <label for="zip">Zip</label>
                            </div>
                         <div class="input-field col s12 m6 l6 push-l1">
                                <select class="icons">
                                    <option value="" disabled selected>Select City</option>
                                    <?php echo $_cities; ?> 
                             </select>
                         </div>
                            
                        </div>
                      <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                             <input type="text" class="datepicker" id="birthdate">
                            <label for="birthdate">Birthday</label>
                            </div>
                         <div class="input-field col s12 m6 l6 push-l1">
                                <select class="icons">
                                    <option value="" disabled selected>Scholarship</option>
                                    <?php echo $_cities; ?> 
                             </select>
                         </div>
                            
                        </div>
                     
                    
                    </form>
                </div>
                </div>
                
            </div>
        </div>

    </div>
                
<?php

	include_once('../includes/footer.php');
?>
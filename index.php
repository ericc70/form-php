<?php
require './inc/head.php';
?>
                    <form action='send-mail.php' method='POST'>
                     <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Votre Nom" name="inputName">
                        </div>
                    </div>   
                     <div class="form-group row">
                        <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Votre prénom" name='inputPrenom'>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Votre email" name='inputEmail'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-sm-2 col-form-label">Votre message</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="message" rows="3" name='message'></textarea>
                    </div>  
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 offet-md-3 offset-lg-3">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                    </form>
                
<?php


require './inc/foot.php';
?>
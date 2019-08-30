            <?php include './header.php'?>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-4 mx-auto border border-light">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            
            <div class="control-group">
              <div class="form-group text-dark floating-label-form-group controls mb-0 pb-2">
                <label class="text-dark">E-mail</label>
                <input class="form-control" id="email" type="email" name="senha" placeholder="E-mail" required="required" data-validation-required-message="Por favor insira seu e-mail.">
                <p class="help-block text-dark"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label class="text-dark">Senha</label>
                <input class="form-control" id="phone" name="senha" type="password" placeholder="Senha" required="required" data-validation-required-message="Insira a Senha">
                <p class="help-block text-dark"></p>
              </div>
            </div>
        
            <br>
            <div id="success"></div>
            <div class="form-group float-right">
              <button type="submit" class="btn btn-danger btn-xl" id="sendMessageButton">Cadastre-se</button>
            </div> 
              <div class="form-group float-left">
              <button type="submit" class="btn btn-danger btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  
      </div>
       <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
              <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
          </div>

  
  </header>
  
          <?php include './contato.php'?>
          <?php include './footer.php'?>
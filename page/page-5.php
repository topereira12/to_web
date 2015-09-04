<?php 

	$path=$_SERVER['SCRIPT_FILENAME'];

	if(strcmp(basename($path),'index.php')==0) require_once(dirname($path).'/plugin/contact-form/config.php');
	else require_once(dirname($path).'/../plugin/contact-form/config.php');

       
?>

<div class="layout-50 page-4">

    <div class="layout-50-left">

        <h3>No Mapa</h3>
        <div id="map"></div>

        <h3 class="margin-top-30">António Pereira</h3>
        <p>
            Oliveira do Douro<br/>
            Vila Nova de Gaia
        </p>

        <ul class="no-list contact-list">
            <li class="contact-list-phone"><span>Telemóvel:</span> 912759920</li>
            <!--li class="contact-list-fax"><span>Fax:</span> 1.800.353.253</li-->
            <li class="contact-list-mail"><span>Email:</span> to.pereira12@gmail.com</li>
        </ul>

    </div>

    <div class="layout-50-right">

        <h3>Entre em contacto comigo</h3>

        <form name="contact-form" id="contact-form" action="" method="post">

            <div>

                <div class="form-line block">
					<label for="contact-form-name" class="infield"><?php echo CONTACT_FORM_LABEL_DATA_NAME; ?></label>
                    <input type="text" name="contact-form-name" id="contact-form-name" value=""/>	
                </div>
                <div class="form-line block">
					<label for="contact-form-mail" class="infield"><?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?></label>
                    <input type="text" name="contact-form-mail" id="contact-form-mail" value=""/>	
                </div>					
                <div class="form-line block">
					<label for="contact-form-message" class="infield"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></label>
                    <textarea rows="0" cols="0" name="contact-form-message" id="contact-form-message" ></textarea>	
                </div>

                <div class="form-line">
					<div class="block float-right">
						<input type="submit" class="button" id="contact-form-send" value="Enviar"/>
					</div>
					<div class="float-right margin-right-10">
						<input type="reset" class="button" id="contact-form-reset" value="Limpar"/>
					</div>
                </div>

            </div>	

        </form>

    </div>

</div>

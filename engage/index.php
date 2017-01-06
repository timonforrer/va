---
title: Buchen
layout: default
background_image: "/uploads/drums.jpg"
background_image_caption: ''
---

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <div class="form-group">
            <label>Vorname</label>
            <input type="text" class="form-control" placeholder="Vorname" name="firstName">
            <span class="help-block"><?php echo $firstNameErr;?></span>
        </div>
        
        <div class="form-group">
            <label>Nachname</label>
            <input type="text" class="form-control" placeholder="Nachname" name="lastName">
            <span class="help-block"><?php echo $lastNameErr;?></span>
        </div>
        
        <div class="form-group">
            <label>E-Mail Adresse</label>
            <input type="text" class="form-control" placeholder="E-Mail" name="email">
            <span class="help-block"><?php echo $emailErr;?></span>
        </div>
        
        <div class="form-group">
            <label>Hier hast du Platz, den Anlass zu beschreiben und das gewünschten Datum anzugeben.</label>
            <textarea rows="5" class="form-control" cols="30" placeholder="Bemerkung" name="description"></textarea>
            <span class="help-block"><?php echo $descriptionErr;?></span>
        </div>
        
        <input type="submit" value="Submit" value="Absenden" class="btn btn-default pull-right" name="submit">
        
    </form>
    
    <p class="label label-default"><span class="glyphicon glyphicon-exclamation-sign"></span> Alle Felder müssen ausgefüllt sein.</p>

</div>

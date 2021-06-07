<?php
include ("./_form.php");



echo "<p> Merci {$_POST['user_name']} de nous avoir contacté à propos de {$_POST['user_subject']}. </p>
<p> Un de nos conseiller vous contactera </p> soit à l’adresse {$_POST['user_email']}
<p> ou par téléphone au: {$_POST['user_num']} dans les plus brefs délais pour traiter votre demande :

<p> {$_POST['user_message']} </p>";

?>

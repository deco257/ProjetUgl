<?php
if(isset($_POST['client'])){
    $client_code=$_POST['client'];
}
include('../../models/bon.php');
//requete en fx de l'id
$client=Bon::afficherByClient($client_code);
?>


              
                        

                                           
<option value=""> Selectionner le bon</option>
                                     <?php     foreach($client as $data){ ?>
   
                                      <option value="<?php echo $data->num_bon; ?>" <?php //if($data->code_cli==$cli) echo 'selected' ?>>
                                     <?php echo $data->num_bon; ?>
                                     </option>
                                   <?php } ?>    
                                           
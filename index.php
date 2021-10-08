<?php

include_once("templates/header.php");

?>

 <div class="container">
 <?php if(isset($printMsg) && $printMsg != ''): ?>
  <p id="msg"><?= $printMsg ?> </p>  
    
 <?php endif; ?>  
 <h1 id="main-title">Minha Agenda</h1> 
 <?php if(count($contacts) > 0): ?>
 <table class="table" id="contacts-table">
    <thead>
        <tr>
          <th scope="col">#</th>  
          <th scope="col">Name</th>  
          <th scope="col">Phone</th>  
          <th scope="col">Ações</th>  
        </tr>
    </thead>
    <tbody>
        <?php foreach($contacts as $contact): ?>
          <tr>
            <td scope="rol"><?= $contact["id"] ?> </td>
            <td scope="rol"><?= $contact["name"] ?> </td>
            <td scope="rol"><?= $contact["phone"] ?> </td>
            <td class="actions">
            <a href="#"><i class="fas fa-eye check-icon"></i></a>   
            <a href="#"><i class="far fa-edit edit-icon"></i></a>
            <buton type="submit"><i class="fas fa-times delete-icon"></i></button>   
            </td>

          </tr>  

        <?php endforeach; ?>    
    </tbody>


 </table>
    
<?php else: ?>
 <p id="empty-list-text" >Não tem contatos ainda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>   

<?php endif; ?>
 







</div>
<?php

include_once("templates/footer.php");

?>

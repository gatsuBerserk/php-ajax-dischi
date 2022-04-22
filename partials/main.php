<?php 
    include_once __DIR__ ."/../server/data.php"; 
?>
<main>
    <section> 
        <?php foreach($discs as $disc) {?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?= $disc['poster']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $disc['title']; ?></h5>
                            <p class="card-text"><?= $disc['author']; ?></p>
                            <p class="card-text"><?= $disc['year']; ?></p>
                            <p class="card-text"><?= $disc['genre']; ?></p> 

                            
                        </div>
                    </div>
                </div>
            </div>
       
        <?php }?>
    
    </section>
</main> 



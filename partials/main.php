<?php 
    include_once __DIR__ ."/../server/data.php"; 
?>
<main>
    <section>  
        
    <div class="card mb-3" v-for="element in discs" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img :src="element.poster" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{element.title}}</h5>
                            <p class="card-text">{{element.author}}</p>
                            <p class="card-text">{{element.year}}</p>
                            <p class="card-text">{{element.genre}}</p> 

                            
                        </div>
                    </div>
                </div>
            </div>
    
    </section>
</main> 



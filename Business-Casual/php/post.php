 <!-- <h1 class="subhead"><?php echo $Language->get('Post') ?></h1>-->

  <div class="container">
  <div class="box">
  <div class="col-lg-12 text-center">

    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>

    <!-- Post header -->
    <header class="post-header">

        <!-- Post title -->
        <h2 class="post-title">
            <a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a>
       
        <!-- Post date and author -->
               </h2><hr>
        </div>

    </header>

    <!-- Post content -->
    <div class="col-lg-12 ">
        <?php echo $Post->content() ?></div>
		<br>
		<h5><small>
            <div class="col-lg-12 text-right">
            <span class="date"><?php echo $Post->date() ?></span>
            <span class="author">
                <?php
                    echo $Language->get('Posted By').' ';

                    if( Text::isNotEmpty($Post->authorFirstName()) && Text::isNotEmpty($Post->authorLastName()) ) {
                        echo $Post->authorFirstName().' '.$Post->authorLastName();
                    }
                    else {
                        echo $Post->username();
                    }
                ?>
				
             </small></h5>
    </div>

    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>
</div></div>
</section>
<style>
    .light-bg {
        transition: 0.6s ease-in;
        background: url(<?php echo $bannerTblResult['light_mode_bg']; ?>) no-repeat center;
    }

    .dark-bg {
        transition: 0.6s ease-in;
        background: url(<?php echo $bannerTblResult['dark_mode_bg']; ?>) no-repeat center;
    }

    .typing,
    .typing-2 {
        text-transform: capitalize;
    }

    /* Skills level */

    .line {
        height: 8px;
        width: 100%;
        background: lightgrey;
        position: relative;
    }

    .line::before {
        content: "";
        position: absolute;
        height: 100%;
        left: 0;
        top: 0;
        background: var(--DBlue);
    }
    
    <?php 
    $i = 1;
    foreach ($skillsTblResult as $skill) { ?>
        .skills-content .right <?php echo ".skill_".$i."_level"; ?>::before {
            width: <?php echo $skill[2] ?>%; }
            <?php $i++; ?>
    <?php } ?>
    
</style>
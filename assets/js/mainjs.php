<script>

        <?php
        $designations = explode(',', $bannerTblResult['designation']);
        ?>

        // typing text animation script
        var typed = new Typed(".typing", {
            strings: [<?php
                        foreach ($designations as $desi) {
                            echo json_encode($desi);
                            echo ",";
                        }
                        ?>],
            typeSpeed: 100,
            backSpeed: 40,
            loop: true
        });

        // typing text animation script
        var typed2 = new Typed(".typing-2", {
            strings: [<?php
                        foreach ($designations as $desi) {
                            echo json_encode($desi);
                            echo ",";
                        }
                        ?>],
            typeSpeed: 100,
            backSpeed: 40,
            loop: true
        });
        
    </script>
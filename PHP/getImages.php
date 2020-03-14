<?php
    $cwd = getcwd();
    $images_data = scandir("../Images");
    foreach ($images_data as $i){
        if(!(is_dir($i))){
            if(explode("_",$i)[0] === "get-started-ani"){
                echo "Images/".$i."?";
            }
        }
    }
?>
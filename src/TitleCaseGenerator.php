<?php

    class TitleCaseGenerator
    {
        function MakeTitleCase($abc)
        {
            $titlearray = explode(" ", $abc);
            $output = array();
            foreach ($titlearray as $word){
                array_push ($output, ucfirst($word));
            }
            return implode(" ", $output);

        }
    }


?>

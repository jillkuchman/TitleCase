<?php
 // require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/TitleCaseGenerator.php";

  class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase

  {
      function test_MakeTitleCase_OneWord()
      {
        //arrange
        $test_TestCaseGenerator = new TitleCaseGenerator;
        $input = "beowulf";


        //act
        $result = $test_TestCaseGenerator->MakeTitleCase($input);

        //assert
        $this->assertEquals("Beowulf", $result);
    }

        function test_MakeTitleCase_MultipleWords()
        {

            //arrange
            $test_TestCaseGenerator = new TitleCaseGenerator;
             $input = "the little mermaid";


            //act
              $result = $test_TestCaseGenerator->MakeTitleCase($input);


            //assert
                $this->assertEquals("The Little Mermaid", $result);

        }

  }



?>

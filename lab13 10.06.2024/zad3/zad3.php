<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}
trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

Class TestTraits {
    use A,B{
        A::smallTalk insteadof B;
        B::bigTalk insteadof A;
    }

}

?>

<?php

$test = new TestTraits();
$test->bigTalk();
echo "\n";
$test->smallTalk();

?>

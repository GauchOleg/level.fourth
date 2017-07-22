<?php
foreach(get_class_methods(new DirectoryIterator('.')) as $key=>$method){
	echo $key.' -> '.$method.'<br />';
}
?>
<?php
/*
	class DirectoryReader extends DirectoryIterator{
        // Конструктор!
        function __construct($path){
            parent::__construct($path);
        }

        //Возвращаем текущее имя файла
        function current(){
            return parent::getFileName();
        }

        //Нужна только директория
        function valid(){
            if(parent::valid()){
                if (!parent::isDir()){
                    parent::next();
                    return $this->valid();
                }
            return true;
            }
            return false;
        }

    }

    try{
        $it = new DirectoryReader('./');
        while($it->valid()){

            echo $it->current().'<br />';

            $it->next();
        }
    }
    catch(Exception $e)
    {
        echo 'Файлов в директории нет!<br />';
    }
*/
?>
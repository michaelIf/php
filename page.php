<?php
class Page{
    public $content;
    public $title = "TLA Consulting Pty Ltd";
    public $keywords = "TLA Consulting, Three Letter Abbreviation,
                        some of my best friends are search engines";
    public $buttons = array("Home"=>"Home.php",
                            "Contact"=>"contact.php",
                            "Services"=>"services.php",
                            "Site Map"=>"map.php");
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function Display(){
        echo "<html>\n<head>\n";
        $this->DisplayTitle();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "</head>\n<body>\n";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);
        echo $this->content;
        $this->DisplayFooter();
        echo "</body>\n</html>\n";
    }
    public function DisplayTitle(){
        echo "<title>".$this->title."</title>";
    }
    public function DisplayKeywords(){
        echo "<meta name=\"keywords\" content=\"".$this->keywords."\"/>";
    }



}



?>
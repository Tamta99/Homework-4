<?php
class Template {
    
    private $vars = array();
    public function assign($key, $value) {
        $this->vars[$key] = $value;  }
    
    public function render($templateFile) {
        $this->template = $this->getFile($templateFile);
        if(!$this->template) {
            return "Error!"; 
        }
        $this->replaceTags();
        echo $this->template; 
    }
    
    public function set($tag, $value){
        $this->tags[$tag] = $value; }
    
    public function getFile($file) {
        if(file_exists($file)) {
            $file = file_get_contents($file);
            return $file;
        }
        else {
            return false;  }
    }
    private function replaceTags() {
        foreach ($this->tags as $tag => $value) {
            $this->template = str_replace('{'.$tag.'}', $value, $this->template);
        }
        return true;   }
}







?>

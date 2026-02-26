<?php
declare(strict_types=1);

enum Topic: string {
    case PHP = "PHP";
    case CSS = "CSS";
    case HTML = "HTML";
    case SQL = "SQL";
    case Laravel = "Laravel";
}
enum Type : string {
    case File = "file";
    case WebArticle = "web article";
    case Video = "video";
}

class DidacticResources{

private Topic $topic;
private Type $type;
private string $name; 
private string $url;

function __construct(Topic $topic, Type $type, string $name, string $url){
    $this->name = $name;
    $this->url = $url;
    $this->topic = $topic;
    $this->type = $type;
}


public function __toString(){
    return "The following resource is named: " . $this->name . ". It is a " . $this->type->value . " about " . $this->topic->value . " and can be found here: " . $this->url;

}
}
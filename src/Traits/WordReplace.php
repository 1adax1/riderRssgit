<?php
namespace App\Traits;

trait WordReplace
{
  protected $text_var;
  protected $text_table;
  protected $simpleXml;
  public function operator($request)
  {
    $url = 'https://www.theregister.com/software/headlines.atom'; // ссылка на rss ЛЕНТУ
    $fileContents = file_get_contents($url); //получаем тело
    $fileContents = trim(str_replace('"', "'", $fileContents));
    $this->simpleXml = simpleXml_load_string($fileContents);

    foreach ($this->simpleXml as $key => $value) {
      $this->text_var.=$value->title||$value->summary?strip_tags($value->title).' '.strip_tags($value->summary):'';
      $this->text_table['title'][]=strip_tags($value->title);
      $this->text_table['summary'][]=strip_tags($value->summary);
    }
    $exampleArray2 = $this->explode_text($this->text_var);
    $exampleArray2 = array_column($exampleArray2, 'sum', 'word');
    arsort($exampleArray2, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
    $exampleArray2 = array_slice($exampleArray2, 0, 10, true);
    return ['array_text' => $this->explode_text($this->text_var),'array_text_table'=>$this->text_table,'ten_array_text_table'=>$exampleArray2];
  }
  public function explode_text($text)
  {
    $text = preg_replace('/[^a-zа-я\s]/iu','', $text);
    $text = explode(" ", $text);
    $text = array_count_values($text);
    foreach ($text as $word => $sum) {
      if($sum>1&&$word&&!$this->wordbook($word)){
        $array_text[]=['word'=>$word,'sum'=>$sum];
      }
    }
    return  $array_text;
  }
  public function wordbook($text)
  {
    $wordbook=["The","a","m","bn","A","is","the","be","to","of","and","a","in","that","have","I","it","for","not","on","with","he","as","you",
              "do","at","this","but","his","by","from","they","we","say","her","she","or","an","will","my","one","all","would","there","their",
              "what","so","up","out","if","about","who","get","which","go","me","when","make","can","like",
              "time","no","just","him","know","take","people","into","year","your","good","some","could","them",
              "see","other","than","then","now","look","only","come","its","over","think","also","back","after",
              "use","two","how","our","work","first","well","way","even","new","want","because","any","these",
              "give","day","most","us"];
    return  in_array($text, $wordbook);
  }
}

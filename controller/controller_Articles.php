<?php
class controller_Articles extends Controller {
    public function Show($action = 'index', array $request = array()) {
        //В зависимости от $action, выполняем нужные действия
        $data = array();
        switch($action) {
            case 'index':
                $template = 'articles_index';
                $data['articles'] = $this->Index();
                $data['page_title'] = 'Все статьи';
                break;
            case 'read':
                if(isset($request['id'])) {
                    $params = array();
                    $params['id'] = $request['id']; 
                    $template = 'article';
                    $data = $this->Read($params);
                    $data['page_title'] = 'Читать статью';
                    break;
                } else return new controller_Errors();
                
            case 'All':
                $data = $this->All();
                break;
        }
        return $this->Output($template, $data);
    }
    
    protected function Index() {
        //Запросить список всех статей
        $result = $this->All();
        $return = array();
        foreach($result as $key=>$article) {
            $result[$key] = array('title'=>$article->title, 'author'=>$article->author->name, 'id'=>$article->id);
        }
        return $result;
    }
    
    protected function Read(array $data = array()) {
        $result = array();
        foreach($data as $d) {
            $article = Article::Get($d)[0];
            $result['article'] = $article->content;
            $result['title'] = $article->title;
            $result['author'] = $article->author->name;
        }
        return $result;
    }
    protected function All() {
        return Articles::All();
    }
    
    //Метод, выполняющий какую-то задачу. Доступен только в этом контроллере
    private function DoAnything() {
        return true;
    }
}
?>
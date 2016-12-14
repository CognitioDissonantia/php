<?php

class controller_Authors extends Controller {
    public function Show($action = 'index', array $request = array()) {
        $data = array();
        switch($action) {
            case 'index':
                $template = 'authors_index';
                $data['authors'] = $this->Index();
                $data['page_title'] = 'Авторы';
                break;
            case 'read':
                $template = 'author';
                $params = array();
                if(isset($request['id'])) $params['id'] = $request['id'];
                if(isset($request['name'])) $params['name'] = $request['name'];
                if(!isset($request['name']) && !isset($request['id'])) return new controller_Errors();
                $data = $this->Read($params);
                $data['page_title'] = $data['name'];
                break;
            case 'All':
                $data = $this->All();
                break;
        }
        return $this->Output($template, $data);
    }
// Выводим список всех авторов и их статей:
    protected function Index() {
        $result = $this->All();
        $return = array();
        foreach($result as $res) {
            $return[] = array('name'=>$res->name, 'id'=>$res->id);
        }
        return $return;
    }
// Достаём объект автора по параметру:
    protected function Read(array $data = array()) {
        foreach($data as $key=>$value) {
            $result = Author::Get($key, $value);
        }
        $return = array();
        switch(count($result)) {
            case 0:
                return new controller_Errors();
            case 1:
                $return['name'] = $result[0]->name;
                $return['articles'] = $result[0]->GetArticles();
                foreach($return['articles'] as $key => $article) {
                    $return['articles'][$key] = array('title'=>$article->title, 'id'=>$article->id);
                }
        }
        return $return;
    }
// Достаём объекты всех авторов:
    protected function All() {
        $result = Authors::All();
        return $result;
    }
}

?>
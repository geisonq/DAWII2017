<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsModel
 *
 * @author Professor
 */
class NewsModel extends Model {

    //put your code here

    public function getNews() {

        $list_news = [];
        $sql = "SELECT * FROM news";
        
        $resultados = $this->ExecuteQuery($sql, array());
        foreach ($resultados as $linha) {
            $list_news[] = new Noticia(
                    $linha['title'], $linha['text'], null,$linha['id_news']);
        }
        return $list_news;
    }

    public function getNewsById($id_news) {

        $sql = "SELECT count(ni.id_news) as num_imgs FROM news_imagens as ni WHERE ni.id_news = :id_news;";
        $resultados = $this->ExecuteQuery($sql, [':id_news' => $id_news])[0];
        if ($resultados['num_imgs']) {
            return $this->getNewsImagensById($id_news);
        } else {
            $sql = "SELECT ne.* FROM news as ne WHERE ne.id_news = :id_news;";
            $news = $this->ExecuteQuery($sql, [':id_news' => $id_news])[0];
            return new Noticia( $news['title'], $news['text'],[],$news['id_news']);
        }
    }

    private function getNewsImagensById($id_news) {

        $sql = "SELECT i.*,ne.* FROM news_imagens as ni
                INNER JOIN  imagens as i ON i.id_imagem = ni.id_imagem
                INNER JOIN news as ne ON ne.id_news = ni.id_news 
                WHERE ne.id_news = :id_news";
        $resultados = $this->ExecuteQuery($sql, [':id_news' => $id_news]);

        foreach ($resultados as $linha) {

            $listImagens[] = new Imagem(
                    $linha['id_imagem'], $linha['src'], $linha['title'], $linha['alt'], $linha['descricao']
            );
        }
        return new Noticia( $linha['title'], $linha['text'], $listImagens,$linha['id_news']);
    }

    public function insertNews($news) {
        $sql = "INSERT INTO news(title,text) VALUES(:title,:text)";
        if ($this->ExecuteCommand($sql, [':title'=>$news->getTitle(),':text'=>$news->getText()])) {
            return true;
        } else {
            return false;
        }
    }
    
    public function removeNews($id) {
        $sql = "DELETE FROM news WHERE id_news = :idnews";
        if ($this->ExecuteCommand($sql, [':idnews'=>$id])) {
            return true;
        } else {
            return false;
        }
    }
   /**
    * 
    * @param Noticia $news
    * @return boolean
    */
    public function updateNews($news) {
        $sql = "UPDATE news SET title = :title, text = :text  WHERE id_news = :idnews";
        $param = [':idnews'=>$news->getId_news(),':title'=>$news->getTitle(),':text'=>$news->getText()];        
        if ($this->ExecuteCommand($sql,$param)) {
            return true;
        } else {
            return false;
        }
    }

}
